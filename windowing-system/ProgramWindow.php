<?php

class Size {
    public $width;
    public $height;
    public function __construct($height, $width) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Position {
    public $x;
    public $y;
    public function __construct($y, $x) {
        $this->x = $x;
        $this->y = $y;
    }
}

class ProgramWindow
{
    public $x;
    public $y;
    public $width;
    public $height;
    function __construct() {
        $this->x = null;
        $this->y = null;
        $this->width = 800;
        $this->height = 600;
    }
    function resize($size): void {
        $this->width = $size->width;
        $this->height = $size->height;
    }
    function move($position): void {
        $this->x = $position->x;
        $this->y = $position->y;
    }
}
