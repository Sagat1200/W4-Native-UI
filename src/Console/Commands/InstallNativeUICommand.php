<?php

namespace W4\NativeUI\Console\Commands;

use Illuminate\Console\Command;

class InstallNativeUICommand extends Command
{
    protected $signature = 'w4-native-ui:install {--force : Sobrescribe archivos publicados existentes} {--build : Compila assets antes de publicar}';

    protected $description = 'Instala y publica los assets de W4-Native UI';

    public function handle(): int
    {
        if ((bool) $this->option('build')) {
            $this->components->info('Compilando assets de W4-Native UI...');
            $this->call('w4-native-ui:build-assets');
        }

        $this->components->info('Publicando configuración de W4-Native UI...');
        $this->call('vendor:publish', [
            '--tag' => 'w4-native-ui-config',
            '--force' => (bool) $this->option('force'),
        ]);

        $this->components->info('Publicando assets de W4-Native UI...');
        $this->call('vendor:publish', [
            '--tag' => 'w4-native-ui-dist',
            '--force' => (bool) $this->option('force'),
        ]);

        $this->newLine();
        $this->components->info('W4-Native-UI instalado correctamente.');

        return self::SUCCESS;
    }
}