<?php

namespace PierreMiniggio\ConfigProvider;

class ConfigProvider
{

    public function __construct(private string $projectFolder)
    {
    }

    public function get(string $configFileName = 'config.php'): array
    {
        return require $this->projectFolder . $configFileName;
    }
}
