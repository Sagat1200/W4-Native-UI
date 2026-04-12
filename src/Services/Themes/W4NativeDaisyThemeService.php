<?php

namespace W4\Native\Daisy\Services\Themes;

use W4\Native\Daisy\Support\ThemeRegistry;
use W4\Native\Daisy\Themes\Presets\CorporatePreset;
use W4\Native\Daisy\Themes\Presets\DarkPreset;
use W4\Native\Daisy\Themes\Presets\NightPreset;
use W4\Native\Daisy\Themes\Presets\SynthwavePreset;
use W4\Native\Daisy\Themes\Presets\LightPreset;
use W4\Native\Daisy\Themes\Presets\CupcakePreset;
use W4\Native\Daisy\Themes\Presets\BumblebeePreset;
use W4\Native\Daisy\Themes\Presets\EmeraldPreset;
use W4\Native\Daisy\Themes\Presets\RetroPreset;
use W4\Native\Daisy\Themes\Presets\CyberpunkPreset;
use W4\Native\Daisy\Themes\Presets\ValentinePreset;
use W4\Native\Daisy\Themes\Presets\HalloweenPreset;
use W4\Native\Daisy\Themes\Presets\GardenPreset;
use W4\Native\Daisy\Themes\Presets\ForestPreset;
use W4\Native\Daisy\Themes\Presets\AquaPreset;
use W4\Native\Daisy\Themes\Presets\LofiPreset;
use W4\Native\Daisy\Themes\Presets\PastelPreset;
use W4\Native\Daisy\Themes\Presets\FantasyPreset;
use W4\Native\Daisy\Themes\Presets\WireframePreset;
use W4\Native\Daisy\Themes\Presets\BlackPreset;
use W4\Native\Daisy\Themes\Presets\LuxuryPreset;
use W4\Native\Daisy\Themes\Presets\DraculaPreset;
use W4\Native\Daisy\Themes\Presets\CmykPreset;
use W4\Native\Daisy\Themes\Presets\AutumnPreset;
use W4\Native\Daisy\Themes\Presets\BusinessPreset;
use W4\Native\Daisy\Themes\Presets\AcidPreset;
use W4\Native\Daisy\Themes\Presets\LemonadePreset;
use W4\Native\Daisy\Themes\Presets\CoffeePreset;
use W4\Native\Daisy\Themes\Presets\WinterPreset;
use W4\Native\Daisy\Themes\Presets\DimPreset;
use W4\Native\Daisy\Themes\Presets\NordPreset;
use W4\Native\Daisy\Themes\Presets\SunsetPreset;

class W4NativeDaisyThemeService
{
    public static function registerPresets(ThemeRegistry $registry): void
    {
        $registry->registerPreset(new DarkPreset());
        $registry->registerPreset(new CorporatePreset());
        $registry->registerPreset(new NightPreset());
        $registry->registerPreset(new SynthwavePreset());
        $registry->registerPreset(new LightPreset());
        $registry->registerPreset(new CupcakePreset());
        $registry->registerPreset(new BumblebeePreset());
        $registry->registerPreset(new EmeraldPreset());
        $registry->registerPreset(new RetroPreset());
        $registry->registerPreset(new CyberpunkPreset());
        $registry->registerPreset(new ValentinePreset());
        $registry->registerPreset(new HalloweenPreset());
        $registry->registerPreset(new GardenPreset());
        $registry->registerPreset(new ForestPreset());
        $registry->registerPreset(new AquaPreset());
        $registry->registerPreset(new LofiPreset());
        $registry->registerPreset(new PastelPreset());
        $registry->registerPreset(new FantasyPreset());
        $registry->registerPreset(new WireframePreset());
        $registry->registerPreset(new BlackPreset());
        $registry->registerPreset(new LuxuryPreset());
        $registry->registerPreset(new DraculaPreset());
        $registry->registerPreset(new CmykPreset());
        $registry->registerPreset(new AutumnPreset());
        $registry->registerPreset(new BusinessPreset());
        $registry->registerPreset(new AcidPreset());
        $registry->registerPreset(new LemonadePreset());
        $registry->registerPreset(new CoffeePreset());
        $registry->registerPreset(new WinterPreset());
        $registry->registerPreset(new DimPreset());
        $registry->registerPreset(new NordPreset());
        $registry->registerPreset(new SunsetPreset());
    }
}