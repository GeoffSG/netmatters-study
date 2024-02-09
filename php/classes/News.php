<?php

class News
{
    private $title;
    private $author;
    private $postDate;
    private $content;
    private $cover;
    private $service;
    private $category;
    private $excerpt;
    private $readTime;

    public function __construst($title, $author, $postDate, $readTime) {
        $this->title = $title;
        $this->author = $author;
        $this->postDate = $postDate;
        $this->readTime = $readTime;
    }
}