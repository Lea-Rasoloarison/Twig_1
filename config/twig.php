<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Permet d'instancier TWIG par la suite

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

