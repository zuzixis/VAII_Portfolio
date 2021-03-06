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

        if (isset($_POST['create-blog'])){
            $this->saveBlog();
        }

        if (isset($_POST['update-blog'])){
            $this->updateBlog();
        }

        if (isset($_POST['delete-blog'])){
            $this->deteleBlog();
        }

        if (isset($_POST['login'])){
            if (empty($_POST["username"]) || empty($_POST["password"])){
                $message = '<label>Vsetky polia su povinne</label>';
            }else{
                $this->login();
            }
        }


    }

    private function saveBlog()
    {
        $newBlog = new Blog(title: $_POST['title'],text: $_POST['text'] ,user_id: 1 );
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

    private function updateBlog()
    {
        $updateBlog = new Blog(id: $_POST['id'], title: $_POST['title'], text: $_POST['text'], user_id: $_POST['user_id']);
        $this->storage->updateBlog($updateBlog);
    }

    private function deteleBlog()
    {
        $this->storage->deleteBlog($_POST['id']);
    }

    private function login()
    {
        $this->storage->login($_POST['username'], $_POST['password']);
        header("location:home.php");
    }


}