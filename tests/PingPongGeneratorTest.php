<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        // test that the third number returns "ping"
        function test_make3toPing()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 30;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals("ping", $result[3]);

        }

    }
 ?>
