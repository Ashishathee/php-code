<?php

// 1. Simple Class Car
class Car {
    private $brand;
    private $model;

    // Setters
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    // Getters
    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }
}

echo "1. Simple Class Car:\n";
$car = new Car();
$car->setBrand('Toyota');
$car->setModel('Camry');
echo "Brand: " . $car->getBrand() . "\n";
echo "Model: " . $car->getModel() . "\n\n";

// 2. Reverse a String Without Using strrev()
function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

echo "2. Reverse String:\n";
echo reverseString("Hello World") . "\n\n"; // Output: dlroW olleH

// 3. Find the First Non-Repeating Character in a String
function firstNonRepeatingChar($str) {
    $count = array_count_values(str_split($str));
    foreach (str_split($str) as $char) {
        if ($count[$char] == 1) {
            return $char;
        }
    }
    return null;
}

echo "3. First Non-Repeating Character:\n";
echo firstNonRepeatingChar("swiss") . "\n\n"; // Output: w

// 4. Find the Longest Word in a Sentence
function longestWord($sentence) {
    $words = explode(' ', $sentence);
    $longest = '';
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    return $longest;
}

echo "4. Longest Word in Sentence:\n";
echo longestWord("PHP is a powerful programming language") . "\n\n"; // Output: programming

// 5. Find All Pairs in an Array That Sum Up to a Given Number
function findPairs($arr, $target) {
    $pairs = [];
    $seen = [];
    foreach ($arr as $num) {
        $diff = $target - $num;
        if (in_array($diff, $seen)) {
            $pairs[] = [$diff, $num];
        }
        $seen[] = $num;
    }
    return $pairs;
}

echo "5. All Pairs That Sum Up to a Target:\n";
$arr = [1, 2, 3, 4, 5];
$target = 6;
$pairs = findPairs($arr, $target);

foreach ($pairs as $pair) {
    echo "[" . implode(", ", $pair) . "]\n"; 
}
// Output: [2, 4] [1, 5]
echo "\n";

// 6. Find the Longest Consecutive Sequence in an Unsorted Array
function longestConsecutiveSequence($arr) {
    $set = array_flip($arr);
    $maxLength = 0;

    foreach ($arr as $num) {
        if (!isset($set[$num - 1])) {
            $length = 0;
            while (isset($set[$num + $length])) {
                $length++;
            }
            $maxLength = max($maxLength, $length);
        }
    }

    return $maxLength;
}

echo "6. Longest Consecutive Sequence:\n";
$arr = [100, 4, 200, 1, 3, 2, 500, 900, 6, 5];
echo longestConsecutiveSequence($arr) . "\n"; // Output: 6

