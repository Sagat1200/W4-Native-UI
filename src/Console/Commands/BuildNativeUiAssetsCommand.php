<?php

namespace W4\NativeUi\Console\Commands;

use Illuminate\Console\Command;

class BuildNativeUiAssetsCommand extends Command
{
    protected $signature = 'w4-native:build-assets';

    protected $description = 'Compila assets CSS y JS en dist/';

    public function handle(): int
    {
        $root = dirname(__DIR__, 3);
        $cssFiles = [
            $root . '/resources/css/w4-theme.css',
            $root . '/resources/css/presets/default.css',
            $root . '/resources/css/presets/dark.css',
            $root . '/resources/css/presets/corporate.css',
            $root . '/resources/css/presets/soft.css',
            $root . '/resources/css/presets/night.css',
            $root . '/resources/css/presets/synthwave.css',
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
