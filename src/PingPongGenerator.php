<?php

class PingPongGenerator {


    function generatePingPongArray($input) {
        $output = [];
        for ($i = 1; $i < $input; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $output[$i] = "ping-pong";
            } elseif ($i % 3 == 0) {
                $output[$i] = "ping";
            } elseif ($i % 5 == 0) {
                $output[$i] = "pong";
            }
            else {
                $output[$i] = $i;
            }
        }
        return $output;
    }

}
