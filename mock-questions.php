<?php
$page1 = [
    "What is the result of 2+2?" => ["a" => "3", "b" => "4", "c" => "5", "d" => "6", "answer" => "b"],
    "What is the square root of 64?" => ["a" => "6", "b" => "7", "c" => "8", "d" => "9", "answer" => "c"],
    "What is the value of pi (approximation)?" => ["a" => "3.14", "b" => "2.71", "c" => "1.62", "d" => "1.41", "answer" => "a"],
    "What is the sum of the angles in a triangle?" => ["a" => "90°", "b" => "180°", "c" => "270°", "d" => "360°", "answer" => "b"],
    "What is the formula for the area of a circle?" => ["a" => "πr", "b" => "πr^2", "c" => "2πr", "d" => "2πr^2", "answer" => "b"],
    "What is the formula for the Pythagorean theorem?" => ["a" => "a^2 + b^2 = c^2", "b" => "a + b = c", "c" => "a/b = c/d", "d" => "a/b = e/f", "answer" => "a"],
    "What is the formula for the slope of a line?" => ["a" => "y = mx + b", "b" => "y = x + b", "c" => "y = mx", "d" => "y = x", "answer" => "c"],
    "What is the formula for the volume of a cube?" => ["a" => "l * w * h", "b" => "2 * (l + w)", "c" => "πr^2", "d" => "s^3", "answer" => "d"],
    "What is the formula for the perimeter of a rectangle?" => ["a" => "2l + 2w", "b" => "l * w", "c" => "πr", "d" => "s^2", "answer" => "a"],
    "What is the formula for the area of a triangle?" => ["a" => "(1/2)bh", "b" => "l * w", "c" => "πr", "d" => "s^2", "answer" => "a"],
];
$page2 = [
    "What is the largest ocean in the world?" => ["a" => "Pacific Ocean", "b" => "Atlantic Ocean", "c" => "Indian Ocean", "d" => "Arctic Ocean", "answer" => "a"],
    "What is the longest river in South America?" => ["a" => "Amazon River", "b" => "Parana River", "c" => "Orinoco River", "d" => "Magdalena River", "answer" => "a"],
    "What is the capital of Australia?" => ["a" => "Sydney", "b" => "Melbourne", "c" => "Canberra", "d" => "Brisbane", "answer" => "c"],
    "What is the highest mountain in Africa?" => ["a" => "Kilimanjaro", "b" => "Mount Kenya", "c" => "Elgon", "d" => "Mount Stanley", "answer" => "a"],
    "What is the capital of Thailand?" => ["a" => "Bangkok", "b" => "Chiang Mai", "c" => "Phuket", "d" => "Krabi", "answer" => "a"],
    "What is the largest country in the world by area?" => ["a" => "China", "b" => "Russia", "c" => "Canada", "d" => "USA", "answer" => "b"],
    "What is the smallest continent in the world?" => ["a" => "Europe", "b" => "Africa", "c" => "South America", "d" => "Australia", "answer" => "d"],
    "What is the capital of Egypt?" => ["a" => "Cairo", "b" => "Alexandria", "c" => "Luxor", "d" => "Aswan", "answer" => "a"],
    "What is the largest country in South America by area?" => ["a" => "Brazil", "b" => "Argentina", "c" => "Peru", "d" => "Colombia", "answer" => "a"],
    "What is the highest mountain in the world?" => ["a" => "Mount Everest", "b" => "Hoverla", "c" => "Fuji", "d" => "Kilimanjaro", "answer" => "a"]
];
$page3  = [
    "What is the capital of Japan?" => "tokyo",
    "What is the most populated country in the world?" => "china",
    "What is the country with the largest GDP per capita?" => "Qatar",
    "What is the capital of Canada?" => "ottawa",
    "What is the value of 5 + 7?" => "12",
    "What is the product of 4 and 8?" => "32",
    "What is the value of 9 divided by 3?" => "3",
    "What is the difference between 15 and 8?" => "7",
    "What is the square root of 81?" => "9",
    "What is the value of 2 to the power of 5?" => "32"
];
function getPages() {
    global $page1, $page2, $page3;
    return [$page1, $page2, $page3];
}