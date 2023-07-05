<?php

interface Inter {
    public function jump();
}

abstract class Abst{
    abstract public function around();
}

$Object = new class extends Abst implements Inter {
    public function jump() {
        echo "Jump ";
    }

    public function around() {
        echo "around!!!";
    }
};

$Object->jump();
$Object->around();
?>
