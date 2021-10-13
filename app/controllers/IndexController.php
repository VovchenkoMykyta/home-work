<?php

namespace controllers;

use core\Route;
use core\View;
use models\IndexModel;

class IndexController
{
    public function index()
    {
        $model = new IndexModel();
        $all = $model->allTeams();
        $view = new View();
        $view->tasks = $all;
        $view->render('index_index_view.php', 'default_view.php');
    }

    public function showadmin()
    {
        $view = new View();
        $view->render('admin_index_view.php', 'default_view.php');
    }

    public function commandview(){
        $path = Route::getURIComponents();
        $name = explode('=',$path[count($path) - 1]);
        $name = ucfirst($name[count($name) - 1]);
        $model = new IndexModel();
        $team = $model->getOneCommand($name);
        $players = $model->getPlayers();
        $page = [
            'table_leader' => 'index_leader.php',
            'table_stat' => 'index_stat.php',
        ];
        $allTeams = $model->allTeams();
        $team[1] = $page;
        $team[2] = $allTeams;
        $team[3] = $players;
        $view = new View();
        $view->tasks = $team;
        $view->render('article_view.php', 'default_view.php');
    }

    public function addnote(){
        $data = filter_input_array(0);
        $players = explode(',', $data['players']);
        $players = json_encode($players);
        $model = new IndexModel();
        $ans = $model->insertTeam($data['command'], +$data['game'], +$data['win'], +$data['draw'], +$data['loss'], +$data['kicking_goals'], +$data['loss_goals'], $data['city'], $data['stadium'], $data['coach'], $players);
        if ($ans){
            Route::redirect('index', 'index');
        }
    }
}