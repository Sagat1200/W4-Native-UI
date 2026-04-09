const fs = require('fs');
const Color = require('colorjs.io').default;

const mapping = {
    '--p': 'primary', '--pc': 'primary-content',
    '--s': 'secondary', '--sc': 'secondary-content',
    '--a': 'accent', '--ac': 'accent-content',
    '--n': 'neutral', '--nc': 'neutral-content',
    '--b1': 'base-100', '--b2': 'base-200', '--b3': 'base-300', '--bc': 'base-content',
    '--in': 'info', '--inc': 'info-content',
    '--su': 'success', '--suc': 'success-content',
    '--wa': 'warning', '--wac': 'warning-content',
    '--er': 'error', '--erc': 'error-content'
};

// Lista maestra de todos los temas soportados
const themesToFetch = [
    'light', 'dark', 'corporate', 'night', 'synthwave', 
    'cupcake', 'bumblebee', 'emerald', 'retro', 'cyberpunk', 
    'valentine', 'halloween', 'garden', 'forest',
    'aqua', 'lofi', 'pastel', 'fantasy',
    'wireframe', 'black', 'luxury', 'dracula', 'cmyk', 
    'autumn', 'business', 'acid', 'lemonade', 'coffee', 
    'winter', 'dim', 'nord', 'sunset'
];

console.log('Descargando y analizando temas de daisyUI...\n');

fetch('https://unpkg.com/daisyui@4.10.1/dist/full.css')
    .then(r => r.text())
    .then(css => {
        themesToFetch.forEach(name => {
            const regex = new RegExp(`\\[data-theme="?${name}"?\\]\\s*\\{([^}]+)\\}`);
            const match = css.match(regex);
            
            if (match) {
                console.log(`// --- ${name.toUpperCase()} ---`);
                match[1].split(';').forEach(r => {
                    if (!r.includes(':')) return;
                    let [key, val] = r.split(':');
                    key = key.trim();
                    val = val.trim();

                    if (mapping[key]) {
                        try {
                            let colorStr = val;
                            // Revisa si es un string que parece OKLCH pero no tiene la envoltura de la función oklch()
                            if (/^[\d.%]+\s+[\d.]+\s+[\d.]+/.test(val)) {
                                colorStr = `oklch(${val})`;
                            }
                            const c = new Color(colorStr);
                            const hsl = c.to('hsl');
                            let h = Math.round(hsl.coords[0] || 0);
                            let s = Math.round(hsl.coords[1] || 0);
                            let l = Math.round(hsl.coords[2] || 0);
                            
                            // Validar límites de saturación y luminosidad
                            s = Math.max(0, Math.min(100, s));
                            l = Math.max(0, Math.min(100, l));

                            console.log(`'${mapping[key]}' => '${h} ${s}% ${l}%',`);
                        } catch (e) {
                            console.log(`// Error parsing ${val} for ${key}`);
                        }
                    }
                });
                console.log(''); // Nueva línea entre temas
            } else {
                console.log(`\n// --- Theme ${name.toUpperCase()} not found ---\n`);
            }
        });
    })
    .catch(err => {
        console.error("Error obteniendo el archivo CSS:", err);
    });
