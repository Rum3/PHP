<?php
class MyClass {
    public $a;
    public function method1() {}
    protected function method2() {}
}

$reflector = new ReflectionClass('MyClass');
echo 'Class name: ' . $reflector->getName() . "\n";
echo 'Public methods: ' ;

$methods = $reflector->getMethods(ReflectionMethod::IS_PUBLIC);
foreach ($methods as $method) {
    echo $method->getName() . ', ';
}
