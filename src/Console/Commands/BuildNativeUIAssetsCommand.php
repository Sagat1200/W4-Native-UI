<?php

namespace W4\NativeUI\Console\Commands;

use Illuminate\Console\Command;

class BuildNativeUIAssetsCommand extends Command
{
    protected $signature = 'w4-native-ui:build-assets';

    protected $description = 'Compila assets CSS y JS en archivo dist para usar en Laravel.';

    public function handle(): int
    {
        $root = dirname(__DIR__, 3);
        $cssFiles = [
            $root . '/resources/css/properties/w4-theme.css',
            $root . '/resources/css/tokens/core.tokens.css',
            $root . '/resources/css/tokens/color.tokens.css',
            $root . '/resources/css/tokens/interaction.tokens.css',
            $root . '/resources/css/tokens/morphology.tokens.css',
            $root . '/resources/css/tokens/surface.tokens.css',
            $root . '/resources/css/presets/dark.css',
            $root . '/resources/css/presets/corporate.css',
            $root . '/resources/css/presets/night.css',
            $root . '/resources/css/presets/synthwave.css',
            $root . '/resources/css/presets/light.css',
            $root . '/resources/css/presets/cupcake.css',
            $root . '/resources/css/presets/bumblebee.css',
            $root . '/resources/css/presets/emerald.css',
            $root . '/resources/css/presets/retro.css',
            $root . '/resources/css/presets/cyberpunk.css',
            $root . '/resources/css/presets/valentine.css',
            $root . '/resources/css/presets/halloween.css',
            $root . '/resources/css/presets/garden.css',
            $root . '/resources/css/presets/forest.css',
            $root . '/resources/css/presets/aqua.css',
            $root . '/resources/css/presets/lofi.css',
            $root . '/resources/css/presets/pastel.css',
            $root . '/resources/css/presets/fantasy.css',
            $root . '/resources/css/presets/wireframe.css',
            $root . '/resources/css/presets/black.css',
            $root . '/resources/css/presets/luxury.css',
            $root . '/resources/css/presets/dracula.css',
            $root . '/resources/css/presets/cmyk.css',
            $root . '/resources/css/presets/autumn.css',
            $root . '/resources/css/presets/business.css',
            $root . '/resources/css/presets/acid.css',
            $root . '/resources/css/presets/lemonade.css',
            $root . '/resources/css/presets/coffee.css',
            $root . '/resources/css/presets/winter.css',
            $root . '/resources/css/presets/dim.css',
            $root . '/resources/css/presets/nord.css',
            $root . '/resources/css/presets/sunset.css',
            $root . '/resources/css/presets/cyberpunk.css',
            $root . '/resources/css/properties/w4-components.css',
            // UI
            $root . '/resources/css/components/ui/button.css',
            $root . '/resources/css/components/ui/heading.css',
            $root . '/resources/css/components/ui/icon.css',
            $root . '/resources/css/components/ui/iconButton.css',
            $root . '/resources/css/components/ui/label.css',
            $root . '/resources/css/components/ui/link.css',
            $root . '/resources/css/components/ui/text.css',
            // Layout
            $root . '/resources/css/components/layout/card.css',
            $root . '/resources/css/components/layout/container.css',
            $root . '/resources/css/components/layout/divider.css',
            $root . '/resources/css/components/layout/grid.css',
            $root . '/resources/css/components/layout/panel.css',
            $root . '/resources/css/components/layout/section.css',
            $root . '/resources/css/components/layout/stack.css',
            // Navigation
            $root . '/resources/css/components/navigation/breadcrumb.css',
            $root . '/resources/css/components/navigation/dropdown.css',
            $root . '/resources/css/components/navigation/menu.css',
            $root . '/resources/css/components/navigation/navbar.css',
            $root . '/resources/css/components/navigation/tab.css',
            $root . '/resources/css/components/navigation/sidebar.css',
            // Feedback
            $root . '/resources/css/components/feedback/alert.css',
            $root . '/resources/css/components/feedback/badge.css',
            $root . '/resources/css/components/feedback/loading.css',
            $root . '/resources/css/components/feedback/progress.css',
            $root . '/resources/css/components/feedback/skeleton.css',
            $root . '/resources/css/components/feedback/toast.css',
            // Forms
            $root . '/resources/css/components/forms/checkbox.css',
            $root . '/resources/css/components/forms/fieldError.css',
            $root . '/resources/css/components/forms/helperText.css',
            $root . '/resources/css/components/forms/input.css',
            $root . '/resources/css/components/forms/radio.css',
            $root . '/resources/css/components/forms/select.css',
            $root . '/resources/css/components/forms/textArea.css',
            $root . '/resources/css/components/forms/toggle.css',
            // Interactive
            $root . '/resources/css/components/interactive/modal.css',
            $root . '/resources/css/components/interactive/tooltip.css',
        ];

        $cssContent = [];
        foreach ($cssFiles as $file) {
            if (is_file($file)) {
                $cssContent[] = trim((string) file_get_contents($file));
            }
        }

        if ($cssContent === []) {
            $this->components->error('No se encontraron archivos CSS fuente.');

            return self::FAILURE;
        }

        $distDir = $root . '/dist';
        if (!is_dir($distDir)) {
            mkdir($distDir, 0777, true);
        }

        $distCss = $distDir . '/w4-native-ui.css';
        file_put_contents($distCss, implode(PHP_EOL . PHP_EOL, $cssContent) . PHP_EOL);

        $jsFiles = [
            $root . '/resources/js/properties/w4-native.js',
            $root . '/resources/js/core.js',
            // Feedback
            $root . '/resources/js/components/feedback/alert.js',
            $root . '/resources/js/components/feedback/badge.js',
            $root . '/resources/js/components/feedback/progress.js',
            $root . '/resources/js/components/feedback/skeleton.js',
            $root . '/resources/js/components/feedback/toast.js',
            $root . '/resources/js/components/feedback/tooltip.js',
            // Forms
            $root . '/resources/js/components/forms/checkbox.js',
            $root . '/resources/js/components/forms/fieldError.js',
            $root . '/resources/js/components/forms/helperText.js',
            $root . '/resources/js/components/forms/input.js',
            $root . '/resources/js/components/forms/radio.js',
            $root . '/resources/js/components/forms/select.js',
            $root . '/resources/js/components/forms/textArea.js',
            $root . '/resources/js/components/forms/toggle.js',
            // Interactive
            $root . '/resources/js/components/interactive/modal.js',
            $root . '/resources/js/components/interactive/tooltip.js',
            // Layout
            $root . '/resources/js/components/layout/card.js',
            $root . '/resources/js/components/layout/container.js',
            $root . '/resources/js/components/layout/divider.js',
            $root . '/resources/js/components/layout/grid.js',
            $root . '/resources/js/components/layout/panel.js',
            $root . '/resources/js/components/layout/section.js',
            $root . '/resources/js/components/layout/stack.js',
            // Navigation
            $root . '/resources/js/components/navigation/breadcrumb.js',
            $root . '/resources/js/components/navigation/dropdown.js',
            $root . '/resources/js/components/navigation/menu.js',
            $root . '/resources/js/components/navigation/navbar.js',
            $root . '/resources/js/components/navigation/sidebar.js',
            $root . '/resources/js/components/navigation/tab.js',
            // UI
            $root . '/resources/js/components/ui/button.js',
            $root . '/resources/js/components/ui/heading.js',
            $root . '/resources/js/components/ui/icon.js',
            $root . '/resources/js/components/ui/iconButton.js',
            $root . '/resources/js/components/ui/label.js',
            $root . '/resources/js/components/ui/link.js',
            $root . '/resources/js/components/ui/text.js',
        ];

        $jsContent = [];
        foreach ($jsFiles as $file) {
            if (is_file($file)) {
                $content = file_get_contents($file);
                // Strip imports
                $content = preg_replace('/^import\s+.*?;/m', '', $content);
                // Replace "export default class" with "class"
                $content = preg_replace('/^export\s+default\s+class\s+([A-Za-z0-9_]+)/m', 'class $1', $content);
                // Replace "export default W4NativeUI;"
                $content = preg_replace('/^export\s+default\s+[A-Za-z0-9_]+;/m', '', $content);
                $jsContent[] = trim($content);
            }
        }

        if ($jsContent !== []) {
            $distJs = $distDir . '/w4-native-ui.js';
            file_put_contents($distJs, implode(PHP_EOL . PHP_EOL, $jsContent) . PHP_EOL);
            $this->components->info('Assets CSS y JS compilados en dist/w4-native-ui.css y dist/w4-native-ui.js');
        } else {
            $this->components->info('Assets CSS compilados en dist/w4-native.css');
        }

        return self::SUCCESS;
    }
}
