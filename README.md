# Body Mass Index Calculator

Calculation of body mass index based on a person's given weight and height.

## Installation

The package could be installed with [Composer](https://getcomposer.org/):

```
composer require orioledev/otus-body-mass-index-calculator
```

## Usage

```
<?php

use OrioleDev\OtusBodyMassIndexCalculator\Calculator;

$weight = 60.5; // Weight in kilograms
$height = 170;  // Height in centimeters

$calc = new Calculator();

try {
    echo 'Ваш индекс массы тела: ' . $calc->calculate($weight, $height) . PHP_EOL;   // 20.9
    echo 'Комментарий: ' . $calc->getInfo($weight, $height) . PHP_EOL;               // Здоровый вес
} catch (RuntimeException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
```
