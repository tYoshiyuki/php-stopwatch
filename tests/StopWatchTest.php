<?php

use PHPUnit\Framework\TestCase;

require('../src/StopWatch.php');

class StopWatchTest extends TestCase
{

    public function testElapsed(): void
    {
        // Arrange
        StopWatch::start();

        // Act
        sleep(3);
        $result = StopWatch::elapsed();

        // Assert
        $this->assertTrue($result > 0);
    }

    public function testElapsedWithKey(): void
    {
        // Arrange
        StopWatch::start('first');
        sleep(1);

        StopWatch::start('second');
        sleep(2);

        // Act
        $result1 = StopWatch::elapsed('first');
        $result2 = StopWatch::elapsed('second');

        // Assert
        $this->assertTrue($result1 > 0);
        $this->assertTrue($result2 > 0);
        $this->assertNotEquals($result1, $result2);
    }

}