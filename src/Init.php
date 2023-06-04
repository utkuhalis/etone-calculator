<?php

namespace Plugins\Calculator;
use CodeIgniter\Events\Events;

class Init
{
    public function __construct()
    {
        Events::on('action_pre', static function () {
            echo "Calculator pre event fired!1<br>";
        }, 100);

        Events::on('action_pre', static function () {
            echo "Calculator pre event fired!2<br>";
        }, 200);

        Events::on('action_pre', static function () {
            echo "Calculator pre event fired!3<br>";
        }, 300);
    }
}


$init = new Init();