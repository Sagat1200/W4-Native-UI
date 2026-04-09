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
            $root . '/resources/css/w4-theme.css',
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
            $root . '/resources/css/w4-components.css',
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

        $jsSource = $root . '/resources/js/w4-native.js';
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
