<?php


namespace models;

use core\Route;

include_once 'config.php';


class Sw6Model
{
    public $db;

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_USER, DB_NAME);
    }

    public function allArticles()
    {
        $sql = 'select * from Article order by id';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOneArticle($id)
    {
        $sql = "select Article.main_text from Article where id='$id'";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAuthor($name)
    {
        $sql = "select id, password, role from Author where name like '$name'";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addArticle($authorId, $categoryId, $title, $description, $mainText, $date){
        $sql = "INSERT INTO `Article` (`author_id`, `category_id`, `title`, `description`, `main_text`, `creation_date`)
VALUES ('$authorId', '$categoryId', '$title', '$description', '$mainText', '$date');";
        $this->db->query($sql);
    }
}