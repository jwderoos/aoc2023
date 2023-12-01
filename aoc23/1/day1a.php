<?php

class day1a
{
    public function run() {

        $f = fopen('input1.txt', 'r');
        $total = 0;
        while ($line = fgets($f)) {
            preg_match_all('/(\d)/', $line, $matches);
            $matches = array_pop($matches);
            $val = (int) current($matches) * 10;
            $val += (int) array_pop($matches);

            $total += $val;
        }

        var_dump($total);
    }
}