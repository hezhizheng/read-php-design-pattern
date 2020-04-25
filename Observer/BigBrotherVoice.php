<?php
/**
 * Description:
 * Author: DexterHo <dexter.ho.cn@gmail.com>
 * Date: 2020/4/26
 * Time: 0:19
 * Created by PhpStorm.
 */

namespace Observer;

// 具体实现老大哥存在价值，传达老大哥重要思想

class BigBrotherVoice implements BigBrother
{
    protected $peoples;
    protected $content;

    public function __construct()
    {
        $this->peoples = [];
    }

    public function register(People $people)
    {
        array_push($this->peoples, $people);
    }

    public function remove(People $people)
    {
        if (in_array($people, $this->peoples, true)) {
            $index = array_search($people, $this->peoples, true);
            unset($this->peoples[$index]);
        }
    }

    // 开会
    public function meeting($content = '')
    {
        $this->content = $content;
        echo "开会内容：$this->content" . PHP_EOL;
        // 每开一次会，通知所有人们去 学习强国上贯彻会议精神
        $this->notify();
    }

    public function getPeoples()
    {
        return $this->peoples;
    }

    public function notify()
    {
        /** @var People $people */
        foreach ($this->peoples as $people) {
            $people->studyPowerCountry();
        }
    }
}