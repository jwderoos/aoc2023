<?php

class day1b
{
    private array $replace = [
        'one' => '1',
        'two' => '2',
        'three' => '3',
        'four' => '4',
        'five' => '5',
        'six' => '6',
        'seven' => '7',
        'eight' => '8',
        'nine' => '9',
    ];

    public function run() {
        $f = fopen('input1.txt', 'r');
        $total = 0;
        $numbers = implode('|', array_keys($this->replace));
        $regex = sprintf('/(?=(\d|%s))/', $numbers);
        while ($line = fgets($f)) {
            $line = trim($line);
            preg_match_all($regex, $line, $matches);
            $matches = array_pop($matches);
            $val = current($matches);

            $val = $this->convertValue($val) * 10;
            $val += $this->convertValue(array_pop($matches));
            $total += $val;
        }

        var_dump($total);
    }

    private function convertValue(string $value): int
    {
        $value = array_key_exists($value, $this->replace) ? $this->replace[$value] : $value;

        return (int) $value;
    }
}