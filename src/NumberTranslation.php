<?php

class NumberTranslation
{
    public static $lookup = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
    ];

    public static $ten = [
        2 => 'twenty',
        3 => 'thirty',
        4 => 'forty',
        5 => 'fifty',
        6 => 'sixty',
        7 => 'seventy',
        8 => 'eighty',
        9 => 'ninety',
    ];

    public function number2Words($number)
    {
        if ($number === 0) {
            return 'zero';
        }
        
        $word = '';

        if ($number > 999) {
            $thousand = (int)($number / 1000);

            if ($thousand > 99) {
                $word .= self::$lookup[$thousand / 100].' hundred';
                $thousand = $thousand % 100;
                if ($thousand) {
                    $word .= ' ';
                }
            }

            if ($thousand > 19) {
                $word .= self::$ten[$thousand / 10];
                $thousand = $thousand % 10;
                if ($thousand) {
                    $word .= '-'.self::$lookup[$thousand];
                }
            } else {
                if ($thousand) {
                    $word .= self::$lookup[$thousand];
                }
            }

            $word .= ' thousand';

            if (!$number = $number % 1000) {
                return $word;
            }

            $word .= ' ';
        }

        if ($number > 99) {
            $word .= self::$lookup[$number / 100].' hundred';
            $number = $number % 100;
            if (!$number) {
                return $word;
            }
            $word .= ' ';
        }

        if ($number > 19) {
            $word .= self::$ten[$number / 10];
            $number = $number % 10;
            if (!$number) {
                return $word;
            }
            $word .= '-';
        }

        $word .= self::$lookup[$number];

        return $word;
    }
}
