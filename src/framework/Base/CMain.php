<?php

namespace Framework;

class CMain extends Config
{
    public array $componentStyles = [];
    public string $title = '';
    protected string $templatePath = '';
    public function setTemplatePath($template): void
    {
        $mainTemplate = Config::getInstanse()->getEnv($template);

        if ($mainTemplate) {
            $this->templatePath = $mainTemplate;
        }
    }
    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        ob_start();
        include $this->getComponentPath($component) . "/component.php";
        include $this->getTemplatePath($component, $template) . "/template.php";
        $content = ob_get_clean();

        echo $content;
    }

    public function includeHeader()
    {
        ob_start();

        $header = $this->getDocumentRoot() . $this->templatePath . '/header.php';

        if (file_exists($header)) {
            include $header;
        } else {
            include $this->getDocumentRoot() . '/components/header/header.php';
        }


        $content = ob_get_clean();
        echo $content;
    }

    public function includeFooter()
    {
        ob_start();

        $header = $this->getDocumentRoot() . $this->templatePath . '/footer.php';

        if (file_exists($header)) {
            include $header;
        } else {
            include $this->getDocumentRoot() . '/components/footer/footer.php';
        }


        $content = ob_get_clean();
        echo $content;
    }

    protected function getComponentPath(string $component): string
    {
        return $this->getDocumentRoot() . "{$this->templatePath}/components/{$component}";
    }

    protected function getTemplatePath(string $component, string $template): string
    {
        return $this->getComponentPath($component) . "/templates/{$template}";
    }

    public function getDocumentRoot(): string
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }

    public function getCommonStyles()
    {
        return "{$this->templatePath}/css/styles.css";
    }
    public function setCSS(array $components)
    {
        foreach ($components as $component => $template) {
            $stylePath = $this->getTemplatePath($component, $template) . '/style.css';
            $stylePath = str_replace('/var/www/src/', '', $stylePath);
            $this->componentStyles[] = $stylePath;
        }
    }

    public function showCSS()
    {
        array_unshift($this->componentStyles, $this->getCommonStyles());

        foreach ($this->componentStyles as $stylePath) {
            echo "<link rel=\"stylesheet\" href=\"$stylePath\">";
        }
    }

    public function setTitle($name)
    {
        $this->title = $name;
    }

    public function showTitle()
    {
        echo $this->title;
    }
}
