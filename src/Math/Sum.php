<?php

namespace Project\Math;

class Sum {
    private $num1;
    private $num2;

    public function exec() {
        return $this->num1 + $this->num2;
    }

    public function setNum1($number) : void {
        $this->num1 = $number;
    }

    public function getNum1() : mixed {
        return $this->num1;
    }

    public function setNum2($number) : void {
        $this->num2 = $number;
    }

    public function getNum2() : mixed {
        return $this->num2;
    }
}
