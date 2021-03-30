<?php

namespace ozhigin;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public function _write() {
        foreach($this->log as $e) {
            echo $e . "\n\r";
        }
    }

    public static function log($str) {
        MyLog::Instance()->log[] = $str;
    }

    public static function write() {
        MyLog::Instance()->_write();
    }
}