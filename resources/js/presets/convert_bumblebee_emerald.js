const Color = require('colorjs.io').default;

const bumblebeeObj = { "color-scheme": "light", "--color-base-100": "oklch(100% 0 0)", "--color-base-200": "oklch(97% 0 0)", "--color-base-300": "oklch(92% 0 0)", "--color-base-content": "oklch(20% 0 0)", "--color-primary": "oklch(85% 0.199 91.936)", "--color-primary-content": "oklch(42% 0.095 57.708)", "--color-secondary": "oklch(75% 0.183 55.934)", "--color-secondary-content": "oklch(40% 0.123 38.172)", "--color-accent": "oklch(0% 0 0)", "--color-accent-content": "oklch(100% 0 0)", "--color-neutral": "oklch(37% 0.01 67.558)", "--color-neutral-content": "oklch(92% 0.003 48.717)", "--color-info": "oklch(74% 0.16 232.661)", "--color-info-content": "oklch(39% 0.09 240.876)", "--color-success": "oklch(76% 0.177 163.223)", "--color-success-content": "oklch(37% 0.077 168.94)", "--color-warning": "oklch(82% 0.189 84.429)", "--color-warning-content": "oklch(41% 0.112 45.904)", "--color-error": "oklch(70% 0.191 22.216)", "--color-error-content": "oklch(39% 0.141 25.723)" };

const emeraldObj = { "color-scheme": "light", "--color-base-100": "oklch(100% 0 0)", "--color-base-200": "oklch(93% 0 0)", "--color-base-300": "oklch(86% 0 0)", "--color-base-content": "oklch(35.519% 0.032 262.988)", "--color-primary": "oklch(76.662% 0.135 153.45)", "--color-primary-content": "oklch(33.387% 0.04 162.24)", "--color-secondary": "oklch(61.302% 0.202 261.294)", "--color-secondary-content": "oklch(100% 0 0)", "--color-accent": "oklch(72.772% 0.149 33.2)", "--color-accent-content": "oklch(0% 0 0)", "--color-neutral": "oklch(35.519% 0.032 262.988)", "--color-neutral-content": "oklch(98.462% 0.001 247.838)", "--color-info": "oklch(72.06% 0.191 231.6)", "--color-info-content": "oklch(0% 0 0)", "--color-success": "oklch(64.8% 0.15 160)", "--color-success-content": "oklch(0% 0 0)", "--color-warning": "oklch(84.71% 0.199 83.87)", "--color-warning-content": "oklch(0% 0 0)", "--color-error": "oklch(71.76% 0.221 22.18)", "--color-error-content": "oklch(0% 0 0)" };

function printTheme(name, obj) {
    console.log(`\n// --- ${name} ---`);
    for (const [k, v] of Object.entries(obj)) {
        if(!v.includes('oklch')) continue;
        const c = new Color(v);
        const hsl = c.to('hsl');
        const h = Math.round(hsl.coords[0] || 0);
        const s = Math.round(hsl.coords[1] || 0);
        const l = Math.round(hsl.coords[2] || 0);
        console.log(`'${k.replace('--color-', '')}' => '${h} ${s}% ${l}%',`);
    }
}

printTheme('BUMBLEBEE', bumblebeeObj);
printTheme('EMERALD', emeraldObj);
