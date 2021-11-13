<?php


class DBStorage
{
    private $conection; //pripojenie k databaze

    public function __construct()
    {
        try {
            $this->conection = new PDO("mysql:host=localhost;dbname=dtb_portfolio", "root","dtb456");
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $exception){
            die("Chyba: ".$exception->getMessage());
        }
    }

    public function storeNewBlog(Blog $blog){
        $stmt = $this->conection->prepare ("INSERT INTO blogs ( title, text, user_id ) VALUES ( ?, ?, ? )" );
        $stmt->bindValue( 1, $blog->getTitle(), PDO::PARAM_STR );
        $stmt->bindValue( 2, $blog->getText(), PDO::PARAM_STR );
        $stmt->bindValue( 3, $blog->getUserId(), PDO::PARAM_INT );
        $stmt->execute();
    }

    public function getAllBlogs()
    {
        $stmt = $this->conection->prepare ("SELECT * FROM blogs");
        $stmt->execute();
        $blogs = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Blog::class);

        $stmt = $this->conection->prepare("SELECT name,surname, profil_photo FROM users WHERE id= ?");
        foreach ($blogs as $blog){
            $stmt->execute([intval($blog->getUserId())]);
            $user = $stmt->fetch();
            $blog->setAuthorFullName($user[0]." ".$user[1]);
            $blog->setAuthorProfilPhoto($user[2]);
        }

        return $blogs;
    }

    public function getAllBloggers()
    {
        $stmt = $this->conection->prepare ("SELECT * FROM users WHERE id IN (SELECT user_id FROM blogs)");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
        return $users;
    }

    public function getAllPortfolios()
    {
        $stmt = $this->conection->prepare ("SELECT * FROM users ");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
        return $users;
    }

    public function readBlog(int $id)
    {
        $stmt = $this->conection->prepare ("SELECT * FROM blogs WHERE id = $id ");
        $stmt->execute();
        $blogs = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Blog::class);

        $stmt = $this->conection->prepare("SELECT name,surname, profil_photo FROM users WHERE id= ?");
        foreach ($blogs as $blog){
            $stmt->execute([intval($blog->getUserId())]);
            $user = $stmt->fetch();
            $blog->setAuthorFullName($user[0]." ".$user[1]);
            $blog->setAuthorProfilPhoto($user[2]);
        }
        return $blogs;
    }

    public function loadProfil(int $id)
    {
        $stmt = $this->conection->prepare ("SELECT * FROM users WHERE id = ? ");
        $stmt->execute([intval($id)]);
        $users = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);

        return $users;
    }

    public function getUsersSkills(int $id)
    {
        $stmt = $this->conection->prepare ("SELECT * FROM skills WHERE id in(
            SELECT skill_id FROM user_skills WHERE user_id = ?) ");
        $stmt->execute([intval($id)]);
        $skills = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Skill::class);
        return $skills;
    }

    public function getUsersBlogs(int $id)
    {
        $stmt = $this->conection->prepare ("SELECT * FROM blogs WHERE user_id = ?");
        $stmt->execute([intval($id)]);
        $blogs = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Blog::class);
        return $blogs;
    }

    public function getUsersProjects(int $id)
    {
        $stmt = $this->conection->prepare ("SELECT * FROM user_projects WHERE user_id = ?");
        $stmt->execute([intval($id)]);
        $projects = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Project::class);
        return $projects;
    }
}