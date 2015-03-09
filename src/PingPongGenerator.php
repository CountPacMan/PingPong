<?php

class PingPongGenerator {


    function generatePingPongArray($input) {
        $output = [];
        for ($i = 1; $i < $input; $i++) {
            if ($i % 3 == 0) {
                $output[$i] = "ping";
            } else {
                $output[$i] = $i;
            }
        }
        return $output;
    }

}
