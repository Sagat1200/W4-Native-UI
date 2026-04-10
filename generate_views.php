<?php

$basePath = 'c:/W4/Packages/W4-Native/resources/views/ui';
$buttonPath = $basePath . '/w4-native-button.blade.php';

if (!file_exists($buttonPath)) {
    die("Error: No se encontró w4-native-button.blade.php");
}

$baseContent = file_get_contents($buttonPath);

// Extraer cabecera y pie de página del template
$topDelimiter = '<!-- Variantes -->';
$bottomDelimiter = '@W4NativeScripts';

$topParts = explode($topDelimiter, $baseContent);
$topTemplate = $topParts[0];

$bottomParts = explode($bottomDelimiter, $baseContent);
$bottomTemplate = $bottomDelimiter . $bottomParts[1];

function buildFile($title, $codeClass, $sectionsHtml)
{
    global $topTemplate, $bottomTemplate;

    // Reemplazar título
    $content = str_replace('Button Lab', $title . ' Lab', $topTemplate);
    // Reemplazar mención de código en p
    $content = str_replace('>w4-button</code>', '>' . $codeClass . '</code>', $content);

    $content .= $sectionsHtml . "\n    </div>\n\n    " . $bottomTemplate;
    return $content;
}

$files = [];

// 1. HEADING
$headingHtml = <<<HTML
        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <h2 class="w4-heading">Heading Default</h2>
                <h2 class="w4-heading w4-heading-primary">Heading Primary</h2>
                <h2 class="w4-heading w4-heading-secondary">Heading Secondary</h2>
                <h2 class="w4-heading w4-heading-accent">Heading Accent</h2>
                <h2 class="w4-heading w4-heading-muted">Heading Muted</h2>
            </div>
        </section>

        <!-- Tamaños -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños (Sizes)</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <h2 class="w4-heading w4-heading-xs">Heading xs</h2>
                <h2 class="w4-heading w4-heading-sm">Heading sm</h2>
                <h2 class="w4-heading w4-heading-md">Heading md</h2>
                <h2 class="w4-heading w4-heading-lg">Heading lg</h2>
                <h2 class="w4-heading w4-heading-xl">Heading xl</h2>
                <hr class="my-4 border-base-300">
                <h2 class="w4-heading w4-heading-h1">Heading h1</h2>
                <h2 class="w4-heading w4-heading-h2">Heading h2</h2>
                <h2 class="w4-heading w4-heading-h3">Heading h3</h2>
                <h2 class="w4-heading w4-heading-h4">Heading h4</h2>
                <h2 class="w4-heading w4-heading-h5">Heading h5</h2>
                <h2 class="w4-heading w4-heading-h6">Heading h6</h2>
            </div>
        </section>

        <!-- Estados -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-neutral pl-3">Estados (States)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <h2 class="w4-heading w4-heading-active">Heading Active</h2>
                <h2 class="w4-heading w4-heading-disabled">Heading Disabled</h2>
            </div>
        </section>
HTML;
$files['w4-native-heading.blade.php'] = buildFile('Heading', 'w4-heading', $headingHtml);

// 2. ICON
$svg = '<svg width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>';
$svgSpin = '<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="4.93" x2="19.07" y2="7.76"></line></svg>';

$iconHtml = <<<HTML
        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg text-4xl">
                <div class="w4-icon">$svg</div>
                <div class="w4-icon w4-icon-primary">$svg</div>
                <div class="w4-icon w4-icon-secondary">$svg</div>
                <div class="w4-icon w4-icon-accent">$svg</div>
                <div class="w4-icon w4-icon-muted">$svg</div>
            </div>
        </section>

        <!-- Tamaños -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños (Sizes)</h2>
            <div class="flex flex-wrap items-end gap-4 p-6 bg-base-200 rounded-lg">
                <div class="w4-icon w4-icon-xs">$svg</div>
                <div class="w4-icon w4-icon-sm">$svg</div>
                <div class="w4-icon w4-icon-md">$svg</div>
                <div class="w4-icon w4-icon-lg">$svg</div>
                <div class="w4-icon w4-icon-xl">$svg</div>
            </div>
        </section>

        <!-- Estados y Modificadores -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-neutral pl-3">Estados y Modificadores</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg text-4xl">
                <div class="w4-icon w4-icon-active">$svg</div>
                <div class="w4-icon w4-icon-disabled">$svg</div>
                <div class="w4-icon w4-icon-spin">$svgSpin</div>
            </div>
        </section>
HTML;
$files['w4-native-icon.blade.php'] = buildFile('Icon', 'w4-icon', $iconHtml);

// 3. ICON BUTTON
$iconButtonHtml = <<<HTML
        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-icon-button">$svg</button>
                <button class="w4-icon-button w4-icon-button-neutral">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary">$svg</button>
                <button class="w4-icon-button w4-icon-button-secondary">$svg</button>
                <button class="w4-icon-button w4-icon-button-accent">$svg</button>
                <button class="w4-icon-button w4-icon-button-info">$svg</button>
                <button class="w4-icon-button w4-icon-button-success">$svg</button>
                <button class="w4-icon-button w4-icon-button-warning">$svg</button>
                <button class="w4-icon-button w4-icon-button-error">$svg</button>
                <button class="w4-icon-button w4-icon-button-ghost">$svg</button>
                <button class="w4-icon-button w4-icon-button-outline">$svg</button>
            </div>
        </section>

        <!-- Tamaños -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños (Sizes)</h2>
            <div class="flex flex-wrap items-center gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-xs">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-sm">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-md">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-lg">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-xl">$svg</button>
            </div>
        </section>

        <!-- Estados -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-neutral pl-3">Estados (States)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-active">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-loading">$svg</button>
                <button class="w4-icon-button w4-icon-button-primary w4-icon-button-disabled" disabled>$svg</button>
            </div>
        </section>
HTML;
$files['w4-native-iconbutton.blade.php'] = buildFile('IconButton', 'w4-icon-button', $iconButtonHtml);

// 4. LABEL
$labelHtml = <<<HTML
        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <label class="w4-label">Label Default</label>
                <label class="w4-label w4-label-primary">Label Primary</label>
                <label class="w4-label w4-label-secondary">Label Secondary</label>
                <label class="w4-label w4-label-accent">Label Accent</label>
                <label class="w4-label w4-label-muted">Label Muted</label>
            </div>
        </section>

        <!-- Tamaños y Modificadores -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños y Modificadores</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <label class="w4-label w4-label-xs">Label xs</label>
                <label class="w4-label w4-label-sm">Label sm</label>
                <label class="w4-label w4-label-md">Label md</label>
                <label class="w4-label w4-label-lg">Label lg</label>
                <label class="w4-label w4-label-xl">Label xl</label>
                <hr class="my-2 border-base-300">
                <label class="w4-label w4-label-required">Label Required</label>
                <label class="w4-label w4-label-disabled">Label Disabled</label>
                <label class="w4-label w4-label-active">Label Active</label>
            </div>
        </section>
HTML;
$files['w4-native-label.blade.php'] = buildFile('Label', 'w4-label', $labelHtml);

// 5. LINK
$linkHtml = <<<HTML
        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <a href="#" class="w4-link">Link Default</a>
                <a href="#" class="w4-link w4-link-neutral">Link Neutral</a>
                <a href="#" class="w4-link w4-link-primary">Link Primary</a>
                <a href="#" class="w4-link w4-link-secondary">Link Secondary</a>
                <a href="#" class="w4-link w4-link-accent">Link Accent</a>
                <a href="#" class="w4-link w4-link-muted">Link Muted</a>
            </div>
        </section>

        <!-- Tamaños -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños (Sizes)</h2>
            <div class="flex flex-wrap items-end gap-4 p-6 bg-base-200 rounded-lg">
                <a href="#" class="w4-link w4-link-xs">Link xs</a>
                <a href="#" class="w4-link w4-link-sm">Link sm</a>
                <a href="#" class="w4-link w4-link-md">Link md</a>
                <a href="#" class="w4-link w4-link-lg">Link lg</a>
                <a href="#" class="w4-link w4-link-xl">Link xl</a>
            </div>
        </section>

        <!-- Estados -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-neutral pl-3">Estados (States)</h2>
            <div class="flex flex-wrap gap-4 p-6 bg-base-200 rounded-lg">
                <a href="#" class="w4-link w4-link-active">Link Active</a>
                <a href="#" class="w4-link w4-link-disabled">Link Disabled</a>
            </div>
        </section>
HTML;
$files['w4-native-link.blade.php'] = buildFile('Link', 'w4-link', $linkHtml);

// 6. TEXT
$textHtml = <<<HTML
        <!-- Variantes -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-primary pl-3">Variantes (Variants)</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <p class="w4-text">Text Default: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-primary">Text Primary: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-secondary">Text Secondary: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-accent">Text Accent: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-muted">Text Muted: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-lead">Text Lead: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </section>

        <!-- Tamaños -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-accent pl-3">Tamaños (Sizes)</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <p class="w4-text w4-text-xs">Text xs: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-sm">Text sm: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-md">Text md: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-lg">Text lg: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-xl">Text xl: Lorem ipsum dolor sit amet.</p>
            </div>
        </section>

        <!-- Estados -->
        <section class="space-y-4">
            <h2 class="text-2xl font-semibold border-l-4 border-neutral pl-3">Estados (States)</h2>
            <div class="flex flex-col gap-4 p-6 bg-base-200 rounded-lg">
                <p class="w4-text w4-text-active">Text Active: Lorem ipsum dolor sit amet.</p>
                <p class="w4-text w4-text-disabled">Text Disabled: Lorem ipsum dolor sit amet.</p>
            </div>
        </section>
HTML;
$files['w4-native-text.blade.php'] = buildFile('Text', 'w4-text', $textHtml);

// Escribir archivos
foreach ($files as $filename => $content) {
    file_put_contents($basePath . '/' . $filename, $content);
    echo "Creado: " . $filename . "\n";
}

echo "Completado.";