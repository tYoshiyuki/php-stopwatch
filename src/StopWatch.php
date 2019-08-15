<?php
/**
* デバッグ用ストップウォッチクラスです。
*/
class StopWatch {
    private static $startTimes = array();
    
    /**
    * 計測を開始します。
    *
    * @param $timerName タイマー用のラベル文字列
    * @return void
    */
    public static function start($timerName = 'default') {
        self::$startTimes[$timerName] = microtime(true);
    }

    /**
    * 計測を終了し時間 (秒) を取得します。
    *
    * @param $timerName  タイマー用のラベル文字列
    * @return float
    */
    public static function elapsed($timerName = 'default') {
        return microtime(true) - self::$startTimes[$timerName];
    }
}