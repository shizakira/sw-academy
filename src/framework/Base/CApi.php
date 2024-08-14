<?php

namespace App\framework\Base;

class CApi
{
    protected static $API_NAME = "Ajax";
    protected array $request = [];

    public function __get(string $name): string
    {
        return $this->request[$name] ?? '';
    }

    public function __construct()
    {
        $this->request = $this->getRequest();
    }

    public function getApiClass($template = null): string
    {
        $path = 'App';
        $class = self::$API_NAME;
        $component = $this->request['component'];

        if ($template) {
            $template = str_replace('/', '\\', $template);
        }

        $templateClass = "{$path}{$template}\\components\\{$component}\\{$class}";
        $defaultClass = "{$path}\\components\\{$component}\\{$class}";

        return match (true) {
            class_exists($templateClass) => $templateClass,
            class_exists($defaultClass) => $defaultClass,
            default => throw new \Exception("$templateClass")
        };
    }

    protected function getRequest(): array
    {
        $postData = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : [];
        $jsonData = json_decode(file_get_contents('php://input'), true);
        $jsonData = is_array($jsonData) ? $jsonData : [];

        return array_merge($postData, $jsonData, $_REQUEST);
    }
}
