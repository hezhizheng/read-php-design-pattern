<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 22:05
 * Created by PhpStorm.
 */

namespace Iterator;

class Book
{

    private $author;

    private $title;

    public function __construct($title, $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
