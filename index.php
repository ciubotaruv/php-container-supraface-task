<?php

require_once 'autoload.php'; // Include an autoloader

use Objects\Circle;
use Objects\Square;
use Containers\BigContainer;
use Containers\SmallContainer;

// Transport 1
$transport1 = [
    new Circle(50),
    new Circle(50),
    new Square(100, 100),

];

// Transport 2
$transport2 = [
    new Square(400, 400),
    new Circle(100)
];

// Transport 3
$transport3 = [
    new Square(150, 100),
    new Square(50, 50),
    new Circle(50)
];

$containers = [
    new BigContainer(300, 200),
    new SmallContainer(100, 100)
];

?>

<h1>Transport Information</h1>

<!-- Transport 1 -->
<h2>Transport 1</h2>
<ul>
    <li>Objects:
        <ol>
            <li>circle: radius 50</li>
            <li>circle: radius 50</li>
            <li>square: width 100, length 100</li>
        </ol>
    </li>
    <li>Containers:
        <ol>
            <li>1 big container; width 300, length 200</li>
            <li>1 small container; width 100, length 100</li>
        </ol>
    </li>
    <li>Result:</li>
    <ol>
        <?php foreach (Calculation::calculateContainers($transport1, $containers) as $type => $count): ?>
            <li> <?= "Number of $type needed: $count "; ?></li>
        <?php endforeach; ?>
    </ol>
</ul>

<!-- Transport 2 -->
<h2>Transport 2</h2>
<ul>
    <li>Objects:
        <ol>
            <li>square: width 400, length 400</li>
            <li>circle: radius 100</li>
        </ol>
    </li>
    <li>Containers:
        <ol>
            <li>1 big container; width 300, length 200</li>
            <li>1 small container; width 100, length 100</li>
        </ol>
    </li>
    <li>Result:</li>
    <ol>
        <?php foreach (Calculation::calculateContainers($transport2, $containers) as $type => $count): ?>
            <li> <?= "Number of $type needed: $count "; ?></li>
        <?php endforeach; ?>
    </ol>
</ul>

<!-- Transport 3 -->
<h2>Transport 3</h2>
<ul>
    <li>Objects:
        <ol>
            <li>square; width 150, length 100</li>
            <li>square; width 50, length 50</li>
            <li>circle; radius 50</li>
        </ol>
    </li>
    <li>Containers:
        <ol>
            <li>1 big container; width 300, length 200</li>
            <li>1 small container; width 100, length 100</li>
        </ol>
    </li>
    <li>Result:</li>
    <ol>
        <?php foreach (Calculation::calculateContainers($transport3, $containers) as $type => $count): ?>
            <li> <?= "Number of $type needed: $count "; ?></li>
        <?php endforeach; ?>
    </ol>
</ul>
