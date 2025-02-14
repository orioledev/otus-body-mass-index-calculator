# Body Mass Index Calculator

Calculation of body mass index based on a person's given weight and height.

## Installation

The preferred way to install this extension is through composer.

Either run

```
php composer.phar require orioledev/otus-body-mass-index-calculator "^1.0.0"
```

or add

```
"orioledev/otus-body-mass-index-calculator": "^1.0.0"
```

to the require section of your composer.json.

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
