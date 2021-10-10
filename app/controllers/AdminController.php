<?php

namespace controllers;

use core\View;

class AdminController
{
    public function addarticle(){
        $view = new View();
        $view->render('admin_add_article.php', 'default_view.php');
    }
}