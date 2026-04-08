const Color = require('colorjs.io').default;

const valentineObj = {"color-scheme":"light","primary":"#e96d7b","secondary":"#a991f7","accent":"#66b1b3","neutral":"#af4670","neutral-content":"#f0d6e8","base-100":"#fae7f4","base-content":"#632c3b","info":"#2563eb","success":"#16a34a","warning":"#d97706","error":"oklch(73.07% 0.207 27.33)"};

const halloweenObj = {"color-scheme":"dark","primary":"oklch(77.48% 0.204 60.62)","primary-content":"#131616","secondary":"oklch(45.98% 0.248 305.03)","accent":"oklch(64.8% 0.223 136.07347934356451)","accent-content":"#000000","neutral":"#2F1B05","base-100":"#212121","info":"#2563eb","success":"#16a34a","warning":"#d97706","error":"oklch(65.72% 0.199 27.33)"};

function printTheme(name, obj) {
    console.log(`\n// --- ${name} ---`);
    for (const [k, v] of Object.entries(obj)) {
        if(k === 'color-scheme' || k.startsWith('--')) continue;
        try {
            const c = new Color(v);
            const hsl = c.to('hsl');
            const h = Math.round(hsl.coords[0] || 0);
            const s = Math.round(hsl.coords[1] || 0);
            const l = Math.round(hsl.coords[2] || 0);
            console.log(`'${k.replace('--color-', '')}' => '${h} ${s}% ${l}%',`);
        } catch(e) {
            console.log(`Error with ${k}: ${v}`);
        }
    }
}

printTheme('VALENTINE', valentineObj);
printTheme('HALLOWEEN', halloweenObj);
