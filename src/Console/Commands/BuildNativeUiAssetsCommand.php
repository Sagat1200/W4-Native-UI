<?php

namespace W4\NativeUi\Console\Commands;

use Illuminate\Console\Command;

class BuildNativeUiAssetsCommand extends Command
{
    protected $signature = 'w4-native:build-assets';

    protected $description = 'Compila resources/css en dist/w4-native.css';

    public function handle(): int
    {
        $root = dirname(__DIR__, 3);
        $files = [
            $root . '/resources/css/w4-theme.css',
            $root . '/resources/css/presets/default.css',
            $root . '/resources/css/presets/dark.css',
            $root . '/resources/css/presets/corporate.css',
            $root . '/resources/css/presets/soft.css',
            $root . '/resources/css/presets/night.css',
            $root . '/resources/css/w4-components.css',
        ];

        $content = [];
        foreach ($files as $file) {
            if (is_file($file)) {
                $content[] = trim((string) file_get_contents($file));
            }
        }

        if ($content === []) {
            $this->components->error('No se encontraron archivos CSS fuente.');

            return self::FAILURE;
        }

        $distDir = $root . '/dist';
        if (!is_dir($distDir)) {
            mkdir($distDir, 0777, true);
        }

        $distCss = $distDir . '/w4-native.css';
        file_put_contents($distCss, implode(PHP_EOL . PHP_EOL, $content) . PHP_EOL);

        $this->components->info('Assets CSS compilados en dist/w4-native.css');

        return self::SUCCESS;
    }
}
