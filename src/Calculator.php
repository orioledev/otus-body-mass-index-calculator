<?php declare(strict_types=1);

namespace OrioleDev\OtusBodyMassIndexCalculator;

use RuntimeException;

/**
 * Class Calculator
 * @package OrioleDev\OtusBodyMassIndexCalculator
 */
class Calculator
{
    /**
     * @param float $weight Weight in kilograms
     * @param float $height Height in centimeters
     * @return float Body mass index rounded to 1 decimal place
     * @throws RuntimeException
     */
    public function calculate(float $weight, float $height): float
    {
        if ($weight <= 0) {
            throw new RuntimeException('Вес должен быть больше 0.');
        }

        if ($height <= 0) {
            throw new RuntimeException('Рост должен быть больше 0.');
        }

        return round($weight / pow($height / 100, 2), 1);
    }

    /**
     * @param float $weight
     * @param float $height
     * @return string
     */
    public function getInfo(float $weight, float $height): string
    {
        $index = $this->calculate($weight, $height);

        if ($index < 18.5) {
            $info = 'Дефицит массы тела';
        } elseif ($index < 25) {
            $info = 'Здоровый вес';
        } elseif ($index < 30) {
            $info = 'Избыточная масса тела';
        } elseif ($index < 35) {
            $info = 'Ожирение 1 степени';
        } elseif ($index < 40) {
            $info = 'Ожирение 2 степени';
        } else {
            $info = 'Ожирение 3 степени';
        }

        return $info;
    }
}
