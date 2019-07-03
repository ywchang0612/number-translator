<?php

namespace spec;

use NumberTranslation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberTranslationSpec extends ObjectBehavior
{
    public function it_translate_number_zero()
    {
        $this->number2Words(0)->shouldBe('zero');
    }

    public function it_translate_number_one()
    {
        $this->number2Words(1)->shouldBe('one');
    }
    public function it_translate_number_two()
    {
        $this->number2Words(2)->shouldBe('two');
    }

    public function it_translate_number_ten()
    {
        $this->number2Words(10)->shouldBe('ten');
    }

    public function it_translate_number_eleven()
    {
        $this->number2Words(11)->shouldBe('eleven');
    }

    public function it_translate_number_twenty()
    {
        $this->number2Words(20)->shouldBe('twenty');
    }

    public function it_translate_number_twenty_one()
    {
        $this->number2Words(21)->shouldBe('twenty-one');
    }

    public function it_translate_number_thirty()
    {
        $this->number2Words(30)->shouldBe('thirty');
    }

    public function it_translate_number_forty_five()
    {
        $this->number2Words(45)->shouldBe('forty-five');
    }

    public function it_translate_number_eighty()
    {
        $this->number2Words(80)->shouldBe('eighty');
    }

    public function it_translate_number_ninety_nine()
    {
        $this->number2Words(99)->shouldBe('ninety-nine');
    }

    public function it_translate_one_hundred()
    {
        $this->number2Words(100)->shouldBe('one hundred');
    }

    public function it_translate_number_thirteen()
    {
        $this->number2Words(113)->shouldBe('one hundred thirteen');
    }

    public function it_translate_number_three_hundred_one()
    {
        $this->number2Words(301)->shouldBe('three hundred one');
    }

    public function it_translate_number_seven_hundred_ninety_nine()
    {
        $this->number2Words(799)->shouldBe('seven hundred ninety-nine');
    }

    public function it_translate_number_one_thousand()
    {
        $this->number2Words(1000)->shouldBe('one thousand');
    }

    public function it_translate_number_one_thousand_one()
    {
        $this->number2Words(1001)->shouldBe('one thousand one');
    }

    public function it_translate_number_three_thousand_fifty_one()
    {
        $this->number2Words(3051)->shouldBe('three thousand fifty-one');
    }

    public function it_translate_number_seven_thousand_two_hundred()
    {
        $this->number2Words(7200)->shouldBe('seven thousand two hundred');
    }

    public function it_translate_number_seven_thousand_two_hundred_nineteen()
    {
        $this->number2Words(7219)->shouldBe('seven thousand two hundred nineteen');
    }

    public function it_translate_number_ninety_nine_thousand_nine_hundred_ninty_nine()
    {
        $this->number2Words(99999)->shouldBe('ninety-nine thousand nine hundred ninety-nine');
    }

    public function it_translate_number_eight_hundred_eighty_eight_thousand_eight_hundred_eighty_eight()
    {
        $this->number2Words(888888)->shouldBe('eight hundred eighty-eight thousand eight hundred eighty-eight');
    }

    public function it_translate_160742($variable)
    {
        $this->number2Words(160742)->shouldBe('one hundred sixty thousand seven hundred forty-two');
    }
}
