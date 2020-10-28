<?php
namespace App\controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ConfigTwig
{
    public FilesystemLoader $loader;
    public Environment $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('App/Views/Templates');
        $this->twig = new Environment($this->loader, []);
        return $this->twig;
    }
}