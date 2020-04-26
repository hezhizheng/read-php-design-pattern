<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/19
 * Time: 2:09
 * Created by PhpStorm.
 */

// run: php Command/test.php

require_once(dirname(__DIR__) . '/autoload.php');


use Command\Console;
use Command\NotesCreate;
use Command\NotesWrite;
use Command\NotesSave;

$Console = new Console();

$Console->add(new NotesCreate());
$Console->add(new NotesWrite());
$Console->add(new NotesSave());

$Console->run();