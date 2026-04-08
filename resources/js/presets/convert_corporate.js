const Color = require("colorjs.io").default;
const obj = {
  "color-scheme": "light",
  "--color-base-100": "oklch(100% 0 0)",
  "--color-base-200": "oklch(93% 0 0)",
  "--color-base-300": "oklch(86% 0 0)",
  "--color-base-content": "oklch(22.389% 0.031 278.072)",
  "--color-primary": "oklch(58% 0.158 241.966)",
  "--color-primary-content": "oklch(100% 0 0)",
  "--color-secondary": "oklch(55% 0.046 257.417)",
  "--color-secondary-content": "oklch(100% 0 0)",
  "--color-accent": "oklch(60% 0.118 184.704)",
  "--color-accent-content": "oklch(100% 0 0)",
  "--color-neutral": "oklch(0% 0 0)",
  "--color-neutral-content": "oklch(100% 0 0)",
  "--color-info": "oklch(60% 0.126 221.723)",
  "--color-info-content": "oklch(100% 0 0)",
  "--color-success": "oklch(62% 0.194 149.214)",
  "--color-success-content": "oklch(100% 0 0)",
  "--color-warning": "oklch(85% 0.199 91.936)",
  "--color-warning-content": "oklch(0% 0 0)",
  "--color-error": "oklch(70% 0.191 22.216)",
  "--color-error-content": "oklch(0% 0 0)",
};
for (const [k, v] of Object.entries(obj)) {
  if (!v.includes("oklch")) continue;
  const c = new Color(v);
  const hsl = c.to("hsl");
  const h = Math.round(hsl.coords[0] || 0);
  const s = Math.round(hsl.coords[1] || 0);
  const l = Math.round(hsl.coords[2] || 0);
  console.log(`'${k.replace("--color-", "")}' => '${h} ${s}% ${l}%',`);
}
