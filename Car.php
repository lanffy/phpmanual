<?php
class Car{
    var $color;
    function Car($color="green") {
        $this->color=$color;
    }
    function getColor() {
        return $this->color;
    }
}