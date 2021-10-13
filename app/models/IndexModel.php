<?php


namespace models;

use core\Route;

include_once 'config.php';


class IndexModel
{
    public $db;

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_USER, DB_NAME);
    }

    public function allTeams()
    {
        $sql = 'select * from Team order by id';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOneCommand($name)
    {
        $sql = "select * from Team where name like '$name'";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insertTeam($command, $game, $win, $draw, $loss, $kicking_goals, $loss_goals, $city, $stadium, $coach, $players){
        $sql = "INSERT INTO `Team` (`id`,`name`, `gerb_path`, `city`, `stadium`, `coach`, `game_amount`, `win_amount`, `loss_amount`, `draw_amount`, `goals_kicking`, `goals_missing`, `players_in_team`)
VALUES (NULL ,'$command', NULL , '$city', '$stadium', '$coach', '$game', '$win', '$loss', '$draw', '$kicking_goals', '$loss_goals' , '$players' );";
        return $this->db->query($sql);
    }

    public function getPlayers(){
        $sql = "SELECT * FROM `Player` order by id";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}