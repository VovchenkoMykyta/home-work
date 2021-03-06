<?php


namespace controllers;

use core\Model;
use core\Route;
use core\View;
use models\Sw6Model;

class Sw6Controller
{
    public function article()
    {
        $uri = Route::getURIComponents();
        $id = $uri[count($uri) - 1];
        $model = new Sw6Model();
        $art = $model->getOneArticle($id);
        $pageFile = 'article_view.php';
        $templateFile = 'default_view.php';
        $view = new View();
        $view->tasks = $art;
        $view->render($pageFile, $templateFile);
    }
    
    public function saveart(){
        $data =  filter_input_array(0);
        $model = new Sw6Model();
        $author = $model->getAuthor($data['author']);
        $authorId = $author[0]['id'];
        var_dump($data);
        exit();
    }
}