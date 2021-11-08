<?php
class Calculator{

    public function calculate(float $firstValue, float $secondValue, float $thirdValue, string $mathSing): float{
        if($mathSing == '*'){
            return $this->multiply($firstValue,$secondValue,$thirdValue);
        }
        elseif ($mathSing == '+'){
            return $this->sum($firstValue, $secondValue, $thirdValue);
        }
        elseif ($mathSing == '-'){
            return $this->minus($firstValue,$secondValue,$thirdValue);
        }
        elseif ($mathSing == '/'){
            return $this->divide($firstValue,$secondValue,$thirdValue);
        }
        else{
            return 0;
        }
    }
    private function sum(float $firstValue, float $secondValue, float $thirdValue): float{
        return $firstValue + $secondValue + $thirdValue;
    }
    private function minus(float $firstValue, float $secondValue, float $thirdValue): float{
        return $firstValue - $secondValue - $thirdValue;
    }
    private function multiply(float $firstValue, float $secondValue, float $thirdValue): float{
        return $firstValue * $secondValue * $thirdValue;
    }
    private function divide(float $firstValue, float $secondValue, float $thirdValue): float{
        return $firstValue / $secondValue / $thirdValue;
    }
}

$calculator = new Calculator();
echo $calculator->calculate(4,31,42,'+');
echo '<hr>';
echo $calculator->calculate(4,31,42,'*');
echo '<hr>';
echo $calculator->calculate(4,31,42,'-');
echo '<hr>';
echo $calculator->calculate(4,31,42,'/');
die;