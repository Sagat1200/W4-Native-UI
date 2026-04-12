<?php

namespace W4\Native\Console\Commands;

use Illuminate\Console\Command;

class InstallNativeCommand extends Command
{
    protected $signature = 'w4-native:install {--force : Sobrescribe archivos publicados existentes} {--build : Compila assets antes de publicar}';

    protected $description = 'Instala y publica los assets de W4-Native';

    public function handle(): int
    {
        if ((bool) $this->option('build')) {
            $this->components->info('Compilando assets de W4-Native...');
            $this->call('w4-native:build-assets');
        }

        $this->components->info('Publicando configuración de W4-Native...');
        $this->call('vendor:publish', [
            '--tag' => 'w4-native-config',
            '--force' => (bool) $this->option('force'),
        ]);

        $this->components->info('Publicando assets de W4-Native...');
        $this->call('vendor:publish', [
            '--tag' => 'w4-native-dist',
            '--force' => (bool) $this->option('force'),
        ]);

        $this->newLine();
        $this->components->info('W4-Native instalado correctamente.');

        return self::SUCCESS;
    }
}
