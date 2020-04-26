<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 22:10
 * Created by PhpStorm.
 */

namespace Iterator;


class BookList implements \Countable
{

    private $books;

    public function getBook($bookNumberToGet)
    {
        if (isset($this->books[$bookNumberToGet])) {
            return $this->books[$bookNumberToGet];
        }

        return null;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            /** @var Book $book */
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
    }

    public function count()
    {
        return count($this->books);
    }
}