<?php
function generateTree ($depth) {
    if($depth){
        return 0;
    }
    $node = [
        'value' => rand(1, 100),
        'left' => generateTree($depth - 1),
        'right' => generateTree($depth -1),
    ];
    return $node;
}

$tree = generateTree(3);
var_dump($tree);

print_r($tree);

function getNodeValue($node) {
    debug_print_backtrace();
    return $node['value'];
}
echo getNodeValue($tree['left']['right']);

function generateTreeMax($depth, $maxValue) {
    $node = [
        'value' => rand($maxValue, 1),
        'left' => generateTree($depth - 1, $maxValue),
        'right' => generateTree($depth -1, $maxValue),
    ];
    return $node;
}
function printBacktrace($node) {
    echo "Node value: " . $node->value . "\n";
    $backtrace = debug_backtrace();
    array_shift($backtrace);
    foreach ($backtrace as $i => $call) {
        echo "#$i {$call['function']} called at [{$call['file']}:{$call['line']}]\n";
    }
    echo "\n";
}
printBacktrace($tree->left->right);
$treeMax = generateTreeMax(3,100);
var_dump($treeMax);