const Color = require('colorjs.io').default;

const lightObj = { "color-scheme": "light", "--color-base-100": "oklch(100% 0 0)", "--color-base-200": "oklch(98% 0 0)", "--color-base-300": "oklch(95% 0 0)", "--color-base-content": "oklch(21% 0.006 285.885)", "--color-primary": "oklch(45% 0.24 277.023)", "--color-primary-content": "oklch(93% 0.034 272.788)", "--color-secondary": "oklch(65% 0.241 354.308)", "--color-secondary-content": "oklch(94% 0.028 342.258)", "--color-accent": "oklch(77% 0.152 181.912)", "--color-accent-content": "oklch(38% 0.063 188.416)", "--color-neutral": "oklch(14% 0.005 285.823)", "--color-neutral-content": "oklch(92% 0.004 286.32)", "--color-info": "oklch(74% 0.16 232.661)", "--color-info-content": "oklch(29% 0.066 243.157)", "--color-success": "oklch(76% 0.177 163.223)", "--color-success-content": "oklch(37% 0.077 168.94)", "--color-warning": "oklch(82% 0.189 84.429)", "--color-warning-content": "oklch(41% 0.112 45.904)", "--color-error": "oklch(71% 0.194 13.428)", "--color-error-content": "oklch(27% 0.105 12.094)" };

const cupcakeObj = { "color-scheme": "light", "--color-base-100": "oklch(97.788% 0.004 56.375)", "--color-base-200": "oklch(93.982% 0.007 61.449)", "--color-base-300": "oklch(91.586% 0.006 53.44)", "--color-base-content": "oklch(23.574% 0.066 313.189)", "--color-primary": "oklch(85% 0.138 181.071)", "--color-primary-content": "oklch(43% 0.078 188.216)", "--color-secondary": "oklch(89% 0.061 343.231)", "--color-secondary-content": "oklch(45% 0.187 3.815)", "--color-accent": "oklch(90% 0.076 70.697)", "--color-accent-content": "oklch(47% 0.157 37.304)", "--color-neutral": "oklch(27% 0.006 286.033)", "--color-neutral-content": "oklch(92% 0.004 286.32)", "--color-info": "oklch(68% 0.169 237.323)", "--color-info-content": "oklch(29% 0.066 243.157)", "--color-success": "oklch(69% 0.17 162.48)", "--color-success-content": "oklch(26% 0.051 172.552)", "--color-warning": "oklch(79% 0.184 86.047)", "--color-warning-content": "oklch(28% 0.066 53.813)", "--color-error": "oklch(64% 0.246 16.439)", "--color-error-content": "oklch(27% 0.105 12.094)" };

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

printTheme('LIGHT', lightObj);
printTheme('CUPCAKE', cupcakeObj);
