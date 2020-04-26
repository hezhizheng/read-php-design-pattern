<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 22:18
 * Created by PhpStorm.
 */

// run: php Iterator/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use Iterator\BookList;
use Iterator\Book;
use Iterator\BookListIterator;


// 添加几本书
$bookList = new BookList();
$bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
$bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
$bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));

$iterator = new BookListIterator($bookList);

$expected =
    [
        'Learning PHP Design Patterns by William Sanders',
        'Professional Php Design Patterns by Aaron Saray',
        'Clean Code by Robert C. Martin'

    ];

var_dump($iterator->current()->getAuthorAndTitle());

//die();

while ($iterator->valid()) {
    $expectedBook = array_shift($expected);
    $check = $expectedBook == $iterator->current()->getAuthorAndTitle();
    var_dump($check, $expectedBook, $iterator->current()->getAuthorAndTitle());
    $iterator->next();
}
