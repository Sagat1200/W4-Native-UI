<?php

namespace W4\Native\Daisy\Support;

class TokenCompiler
{
    public function compileRoot(array $tokens): string
    {
        return $this->compile(':root', $tokens);
    }

    public function compileTheme(string $theme, array $tokens): string
    {
        return $this->compile("[data-theme=\"{$theme}\"]", $tokens);
    }

    public function compile(string $selector, array $tokens): string
    {
        $lines = [];

        foreach ($tokens as $token => $value) {
            $lines[] = "  --w4-{$token}: {$value};";
        }

        $body = implode(PHP_EOL, $lines);

        return "{$selector} {" . PHP_EOL . $body . PHP_EOL . "}" . PHP_EOL;
    }
}
