<?php

require "DBStorage.php";
require "Blog.php";
require "Project.php";
require "Skill.php";
require "User.php";
require "UserSkill.php";

class App
{
    private DBStorage $storage;


    public function __construct()
    {
        $this->storage = new DBStorage();

        if (isset($_POST['title']) && isset($_POST['text'])){
            $this->saveBlog();
        }

    }

    private function saveBlog()
    {
        $newBlog = new Blog(title: $_POST['title'],text: $_POST['text'] ,user_id: 2 );
        $this->storage->storeNewBlog($newBlog);
    }

    public function getAllBlogs()
    {
        return $this->storage->getAllBlogs();
    }

    public function getAllBloggers()
    {
        return $this->storage->getAllBloggers();
    }

    public function getAllPortfolios()
    {
        return $this->storage->getAllPortfolios();
    }

    public function readBlog()
    {
        return $this->storage->readBlog($_GET['id']);
    }

    public function loadProfil()
    {
        return $this->storage->loadProfil($_GET['id']);
    }

    public function getUsersSkills()
    {
        return $this->storage->getUsersSkills($_GET['id']);
    }

    public function getUsersBlogs()
    {
        return $this->storage->getUsersBlogs($_GET['id']);
    }

    public function getUsersProjects()
    {
        return $this->storage->getUsersProjects($_GET['id']);
    }



}