<?php

class Blog
{

    private string $authorFullName = "";
    private string $authorProfilPhoto = "";

    public function __construct(private int $id = 0, private string $title = "", private string $text = "" ,private int $user_id = 0)
    {

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }


    /**
     * @return string
     */
    public function getAuthorFullName(): string
    {
        return $this->authorFullName;
    }

    /**
     * @param string $authorFullName
     */
    public function setAuthorFullName(string $authorFullName): void
    {
        $this->authorFullName = $authorFullName;
    }

    /**
     * @return string
     */
    public function getAuthorProfilPhoto(): string
    {
        return $this->authorProfilPhoto;
    }

    /**
     * @param string $authorProfilPhoto
     */
    public function setAuthorProfilPhoto(string $authorProfilPhoto): void
    {
        $this->authorProfilPhoto = $authorProfilPhoto;
    }

}