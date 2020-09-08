<?php

namespace app\classes;

class Layout
{
    private string $view;

    public function add(string $view): void
    {
        $this->view = str_replace('.', '/', $view);
    }

    public function load(): string
    {
        return __DIR__. "/../views/{$this->view}.php";
    }

    public function master(string $name): string
    {
        return __DIR__. "/../views/{$name}.php";
    }

}