# php-stopwatch
ストップウォッチ

## Feature
- PHP

## Note
- startで計測し、elapsedで時間(秒)を取得します。

``` php
// 計測開始
StopWatch::start();

// 時間の取得
$result = StopWatch::elapsed();
```

``` php
// 計測開始, 引数で計測点を複数設定する
StopWatch::start('first');
StopWatch::start('second');

// 時間の取得
$result1 = StopWatch::elapsed('first');
$result2 = StopWatch::elapsed('second');
```