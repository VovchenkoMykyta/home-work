<?php

namespace controllers;

use core\Route;
use core\View;
use models\Sw6Model;

class IndexController
{
    public function index()
    {
        $model = new Sw6Model();
        $all = $model->allArticles();
        $view = new View();
        $view->tasks = $all;
        $view->render('index_index_view.php', 'default_view.php');
    }

    public function showadmin()
    {
        $view = new View();
        $view->render('admin_index_view.php', 'default_view.php');
    }

    public function check(){
        $view = new View();
        $view->render('validate_view.php', 'default_view.php');
    }

    public function validate(){
        $data = filter_input_array(0);
        $model = new Sw6Model();
        $author = $model->getAuthor($data['login']);
        if ($author[0]['role'] === 'root' && $author[0]['password'] === $data['password']){
            Route::redirect('index', 'showadmin');
        }else{
            Route::redirect();
        }
    }
}