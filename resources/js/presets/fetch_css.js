const fs = require('fs');
fetch('https://unpkg.com/daisyui@4.10.1/dist/full.css').then(r => r.text()).then(css => {
    function extractTheme(name) {
        const regex = new RegExp(`\\[data-theme=${name}\\]\\s*\\{([^}]+)\\}`);
        const match = css.match(regex);
        if (match) {
            console.log(`\n// --- ${name.toUpperCase()} ---`);
            const rules = match[1].split(';');
            rules.forEach(r => {
                if(r.includes('--c')) return; // ignore --chkbg etc
                if(!r.includes(':')) return;
                let [key, val] = r.split(':');
                key = key.trim();
                val = val.trim();
                if(key.startsWith('--') && !key.startsWith('--fallback')) {
                    if (val.includes('%')) {
                        // oklch(73.07% 0.207 27.33) -> oklch
                        // Wait, CSS has percentages like 73.07% 0.207 27.33, it's just the values.
                        // Wait, daisyui CSS uses `--p: 73.07% 0.207 27.33;`
                        console.log(`"${key}": "oklch(${val})",`);
                    } else if(key.startsWith('--tab') || key.startsWith('--btn') || key.startsWith('--rounded')) {
                        // ignore or print
                    }
                }
            });
        }
    }
    extractTheme('valentine');
    extractTheme('halloween');
});
