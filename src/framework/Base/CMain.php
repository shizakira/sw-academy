<?php

namespace Framework;

class CMain extends Config
{
    public array $componentStyles = [];
    public string $title = '';
    protected string $templatePath = '';
    public function setTemplatePath($template): void
    {
        $this->templatePath = $this->filterPath(Config::getInstanse()->getEnv($template));
    }

    protected function filterPath($path, $replace = ''): string
    {
        if (!file_exists($path)) {
            return str_replace($this->templatePath, $replace, $path);
        }
        return $path;
    }

    public function includeComponent(string $component, string $template = '.default', array $arParams = []): void
    {
        $componentPath = $this->filterPath($this->getComponentPath($component) . "/component.php");
        $templatePath = $this->filterPath($this->getTemplatePath($component, $template) . "/template.php");

        $this->render([$componentPath, $templatePath], $arParams);
    }

    public function includeHeader()
    {
        $header = $this->getDocumentRoot() . $this->templatePath . '/header.php';
        $defaultHeader = $this->getDocumentRoot() . '/components/header/header.php';

        $this->render([file_exists($header) ? $header : $defaultHeader]);
    }

    public function includeFooter()
    {
        $footer = $this->getDocumentRoot() . $this->templatePath . '/footer.php';
        $defaultFooter = $this->getDocumentRoot() . '/components/footer/footer.php';

        $this->render([file_exists($footer) ? $footer : $defaultFooter]);
    }

    protected function render(array $templates, array $arParams = [])
    {
        ob_start();

        foreach ($templates as $template) {
            include $template;
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
        $commonCssPath = $this->getDocumentRoot() . $this->templatePath . '/css/styles.css';

        if (file_exists($commonCssPath)) {
            return $this->templatePath . '/css/styles.css';
        }
    }
    public function setCSS(array $components)
    {
        foreach ($components as $component => $template) {
            $stylePath = $this->filterPath($this->getTemplatePath($component, $template) . '/style.css');
            $this->componentStyles[] = str_replace('/var/www/src/', '', $stylePath);
        }
    }

    public function showCSS()
    {
        foreach ([$this->getCommonStyles(), ...$this->componentStyles] as $stylePath) {

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
