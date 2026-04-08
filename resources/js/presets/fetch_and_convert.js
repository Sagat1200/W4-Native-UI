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

fetch('https://unpkg.com/daisyui@4.10.1/dist/full.css').then(r => r.text()).then(css => {
    function extractTheme(name) {
        const regex = new RegExp(`\\[data-theme="?${name}"?\\]\\s*\\{([^}]+)\\}`);
        const match = css.match(regex);
        if (match) {
            console.log(`\n// --- ${name.toUpperCase()} ---`);
            const rules = match[1].split(';');
            rules.forEach(r => {
                if(!r.includes(':')) return;
                let [key, val] = r.split(':');
                key = key.trim();
                val = val.trim();
                
                if (mapping[key] && val.includes('%')) {
                    const oklch = `oklch(${val})`;
                    try {
                        const c = new Color(oklch);
                        const hsl = c.to('hsl');
                        const h = Math.round(hsl.coords[0] || 0);
                        const s = Math.round(hsl.coords[1] || 0);
                        const l = Math.round(hsl.coords[2] || 0);
                        console.log(`'${mapping[key]}' => '${h} ${s}% ${l}%',`);
                    } catch(e) {
                        console.log(`Error parsing ${oklch}`);
                    }
                }
            });
        }
    }
    extractTheme('valentine');
    extractTheme('halloween');
});
