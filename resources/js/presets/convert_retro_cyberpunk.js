const Color = require('colorjs.io').default;

const retroObj = { "color-scheme": "light", "--color-base-100": "oklch(91.637% 0.034 90.515)", "--color-base-200": "oklch(88.272% 0.049 91.774)", "--color-base-300": "oklch(84.133% 0.065 90.856)", "--color-base-content": "oklch(41% 0.112 45.904)", "--color-primary": "oklch(80% 0.114 19.571)", "--color-primary-content": "oklch(39% 0.141 25.723)", "--color-secondary": "oklch(92% 0.084 155.995)", "--color-secondary-content": "oklch(44% 0.119 151.328)", "--color-accent": "oklch(68% 0.162 75.834)", "--color-accent-content": "oklch(41% 0.112 45.904)", "--color-neutral": "oklch(44% 0.011 73.639)", "--color-neutral-content": "oklch(86% 0.005 56.366)", "--color-info": "oklch(58% 0.158 241.966)", "--color-info-content": "oklch(96% 0.059 95.617)", "--color-success": "oklch(51% 0.096 186.391)", "--color-success-content": "oklch(96% 0.059 95.617)", "--color-warning": "oklch(64% 0.222 41.116)", "--color-warning-content": "oklch(96% 0.059 95.617)", "--color-error": "oklch(70% 0.191 22.216)", "--color-error-content": "oklch(40% 0.123 38.172)" };

const cyberpunkObj = { "color-scheme": "light", "--color-base-100": "oklch(94.51% 0.179 104.32)", "--color-base-200": "oklch(91.51% 0.179 104.32)", "--color-base-300": "oklch(85.51% 0.179 104.32)", "--color-base-content": "oklch(0% 0 0)", "--color-primary": "oklch(74.22% 0.209 6.35)", "--color-primary-content": "oklch(14.844% 0.041 6.35)", "--color-secondary": "oklch(83.33% 0.184 204.72)", "--color-secondary-content": "oklch(16.666% 0.036 204.72)", "--color-accent": "oklch(71.86% 0.217 310.43)", "--color-accent-content": "oklch(14.372% 0.043 310.43)", "--color-neutral": "oklch(23.04% 0.065 269.31)", "--color-neutral-content": "oklch(94.51% 0.179 104.32)", "--color-info": "oklch(72.06% 0.191 231.6)", "--color-info-content": "oklch(0% 0 0)", "--color-success": "oklch(64.8% 0.15 160)", "--color-success-content": "oklch(0% 0 0)", "--color-warning": "oklch(84.71% 0.199 83.87)", "--color-warning-content": "oklch(0% 0 0)", "--color-error": "oklch(71.76% 0.221 22.18)", "--color-error-content": "oklch(0% 0 0)" };

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

printTheme('RETRO', retroObj);
printTheme('CYBERPUNK', cyberpunkObj);
