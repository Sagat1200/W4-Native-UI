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
            $root . '/resources/css/daisyui/components/ui/divider.css',
            $root . '/resources/css/daisyui/components/ui/heading.css',
            $root . '/resources/css/daisyui/components/ui/icon.css',
            $root . '/resources/css/daisyui/components/ui/iconButton.css',
            $root . '/resources/css/daisyui/components/ui/label.css',
            $root . '/resources/css/daisyui/components/ui/link.css',
            $root . '/resources/css/daisyui/components/ui/text.css',
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

        $jsSource = $root . '/resources/js/daisyui/properties/w4-native.js';
        if (is_file($jsSource)) {
            $distJs = $distDir . '/w4-native.js';
            $jsContent = trim((string) file_get_contents($jsSource));
            file_put_contents($distJs, $jsContent . PHP_EOL);
            $this->components->info('Assets CSS y JS compilados en dist/w4-native.css y dist/w4-native.js');
        } else {
            $this->components->info('Assets CSS compilados en dist/w4-native.css');
        }

        return self::SUCCESS;
    }
}