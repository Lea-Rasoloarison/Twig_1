<?php

// src/Controller/HomeController.php
public function index()
{
    return $this->twig->render('index.html.twig'); // pour afficher un fichier de vue,
    ...