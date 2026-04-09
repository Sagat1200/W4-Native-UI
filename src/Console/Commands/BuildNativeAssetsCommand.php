<?php

namespace W4\Native\Console\Commands;

use Illuminate\Console\Command;

class BuildNativeAssetsCommand extends Command
{
    protected $signature = 'w4-native:build-assets';

    protected $description = 'Compila assets CSS y JS en dist/';

    public function handle(): int
    {
        $root = dirname(__DIR__, 3);
        $cssFiles = [
            $root . '/resources/css/daisyui/properties/w4-theme.css',
            $root . '/resources/css/daisyui/presets/dark.css',
            $root . '/resources/css/daisyui/presets/corporate.css',
            $root . '/resources/css/daisyui/presets/night.css',
            $root . '/resources/css/daisyui/presets/synthwave.css',
            $root . '/resources/css/daisyui/presets/light.css',
            $root . '/resources/css/daisyui/presets/cupcake.css',
            $root . '/resources/css/daisyui/presets/bumblebee.css',
            $root . '/resources/css/daisyui/presets/emerald.css',
            $root . '/resources/css/daisyui/presets/retro.css',
            $root . '/resources/css/daisyui/presets/cyberpunk.css',
            $root . '/resources/css/daisyui/presets/valentine.css',
            $root . '/resources/css/daisyui/presets/halloween.css',
            $root . '/resources/css/daisyui/presets/garden.css',
            $root . '/resources/css/daisyui/presets/forest.css',
            $root . '/resources/css/daisyui/presets/aqua.css',
            $root . '/resources/css/daisyui/presets/lofi.css',
            $root . '/resources/css/daisyui/presets/pastel.css',
            $root . '/resources/css/daisyui/presets/fantasy.css',
            $root . '/resources/css/daisyui/presets/wireframe.css',
            $root . '/resources/css/daisyui/presets/black.css',
            $root . '/resources/css/daisyui/presets/luxury.css',
            $root . '/resources/css/daisyui/presets/dracula.css',
            $root . '/resources/css/daisyui/presets/cmyk.css',
            $root . '/resources/css/daisyui/presets/autumn.css',
            $root . '/resources/css/daisyui/presets/business.css',
            $root . '/resources/css/daisyui/presets/acid.css',
            $root . '/resources/css/daisyui/presets/lemonade.css',
            $root . '/resources/css/daisyui/presets/coffee.css',
            $root . '/resources/css/daisyui/presets/winter.css',
            $root . '/resources/css/daisyui/presets/dim.css',
            $root . '/resources/css/daisyui/presets/nord.css',
            $root . '/resources/css/daisyui/presets/sunset.css',
            $root . '/resources/css/daisyui/properties/w4-components.css',
            $root . '/resources/css/daisyui/components/ui/button.css',
            $root . '/resources/css/daisyui/components/ui/heading.css',
            $root . '/resources/css/daisyui/components/ui/icon.css',
            $root . '/resources/css/daisyui/components/ui/iconButton.css',
            $root . '/resources/css/daisyui/components/ui/label.css',
            $root . '/resources/css/daisyui/components/ui/link.css',
            $root . '/resources/css/daisyui/components/ui/text.css',
            $root . '/resources/css/daisyui/components/layout/card.css',
            $root . '/resources/css/daisyui/components/layout/container.css',
            $root . '/resources/css/daisyui/components/layout/divider.css',
            $root . '/resources/css/daisyui/components/layout/grid.css',
            $root . '/resources/css/daisyui/components/layout/panel.css',
            $root . '/resources/css/daisyui/components/layout/section.css',
            $root . '/resources/css/daisyui/components/layout/stack.css',
            $root . '/resources/css/daisyui/components/feedbkack/alert.css',
            $root . '/resources/css/daisyui/components/feedbkack/badge.css',
            $root . '/resources/css/daisyui/components/feedbkack/progess.css',
            $root . '/resources/css/daisyui/components/feedbkack/skeleton.css',
            $root . '/resources/css/daisyui/components/feedbkack/toast.css',
            $root . '/resources/css/daisyui/components/feedbkack/tooltip.css',
            $root . '/resources/css/daisyui/components/forms/checkbox.css',
            $root . '/resources/css/daisyui/components/forms/fieldError.css',
            $root . '/resources/css/daisyui/components/forms/helperText.css',
            $root . '/resources/css/daisyui/components/forms/input.css',
            $root . '/resources/css/daisyui/components/forms/radio.css',
            $root . '/resources/css/daisyui/components/forms/select.css',
            $root . '/resources/css/daisyui/components/forms/textArea.css',
            $root . '/resources/css/daisyui/components/forms/toggle.css',
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

        $distCss = $distDir . '/w4-native.css';
        file_put_contents($distCss, implode(PHP_EOL . PHP_EOL, $cssContent) . PHP_EOL);

        $jsFiles = [
            $root . '/resources/js/daisyui/properties/w4-native.js',
            $root . '/resources/js/daisyui/components/feedback/alert.js',
            $root . '/resources/js/daisyui/components/feedback/badge.js',
            $root . '/resources/js/daisyui/components/feedback/progress.js',
            $root . '/resources/js/daisyui/components/feedback/skeleton.js',
            $root . '/resources/js/daisyui/components/feedback/toast.js',
            $root . '/resources/js/daisyui/components/feedback/tooltip.js',
            $root . '/resources/js/daisyui/components/forms/checkbox.js',
            $root . '/resources/js/daisyui/components/forms/fieldError.js',
            $root . '/resources/js/daisyui/components/forms/helperText.js',
            $root . '/resources/js/daisyui/components/forms/input.js',
            $root . '/resources/js/daisyui/components/forms/radio.js',
            $root . '/resources/js/daisyui/components/forms/select.js',
            $root . '/resources/js/daisyui/components/forms/textArea.js',
            $root . '/resources/js/daisyui/components/forms/toggle.js',
            $root . '/resources/js/daisyui/components/layout/card.js',
            $root . '/resources/js/daisyui/components/layout/container.js',
            $root . '/resources/js/daisyui/components/layout/divider.js',
            $root . '/resources/js/daisyui/components/layout/grid.js',
            $root . '/resources/js/daisyui/components/layout/panel.js',
            $root . '/resources/js/daisyui/components/layout/section.js',
            $root . '/resources/js/daisyui/components/layout/stack.js',
            $root . '/resources/js/daisyui/components/ui/button.js',
            $root . '/resources/js/daisyui/components/ui/heading.js',
            $root . '/resources/js/daisyui/components/ui/icon.js',
            $root . '/resources/js/daisyui/components/ui/iconButton.js',
            $root . '/resources/js/daisyui/components/ui/label.js',
            $root . '/resources/js/daisyui/components/ui/link.js',
            $root . '/resources/js/daisyui/components/ui/text.js',
        ];

        $jsContent = [];
        foreach ($jsFiles as $file) {
            if (is_file($file)) {
                $jsContent[] = trim((string) file_get_contents($file));
            }
        }

        if ($jsContent !== []) {
            $distJs = $distDir . '/w4-native.js';
            file_put_contents($distJs, implode(PHP_EOL . PHP_EOL, $jsContent) . PHP_EOL);
            $this->components->info('Assets CSS y JS compilados en dist/w4-native.css y dist/w4-native.js');
        } else {
            $this->components->info('Assets CSS compilados en dist/w4-native.css');
        }

        return self::SUCCESS;
    }
}
