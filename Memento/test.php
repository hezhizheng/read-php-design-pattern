<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 17:10
 * Created by PhpStorm.
 */

// run: php Memento/test.php

require_once(dirname(__DIR__) . '/autoload.php');

use memento\Editor;

try {
    // 初始化一个编辑器并新建一个空文件
    $editor = new Editor('');

    // 写入一段文本
    $editor->write('hello php !');
    // 保存
    $editor->save();
    // 修改刚才的文本
    $editor->write(' no code no life !');
    // 撤销
    $editor->undo();
    $editor->read();
    // 再次修改并保存文本
    $editor->write(' life is a struggle !');
    $editor->save();
    // 重置
    $editor->redo();
    $editor->read();

} catch (\Exception $e) {
    echo 'error:' . $e->getMessage();
}
