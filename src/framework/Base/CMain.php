<?php

namespace Framework;

class CMain
{
    public function includeComponent(string $component, string $template = '.default', array $params = []): void
    {
        include $this->getComponentPath($component) . "/component.php";
        include $this->getTemplatePath($component, $template) . "/template.php";
    }

    protected function getComponentPath(string $component): string
    {
        return $this->getDocumentRoot() . "/components/{$component}/";
    }

    protected function getTemplatePath(string $component, string $template): string
    {
        return $this->getComponentPath($component) . "templates/{$template}";
    }

    public function getDocumentRoot(): string
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }
}
