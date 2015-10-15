<?php

class Test {
    
    private $test;
    
    function getTest() {
        return $this->test;
    }

    function setTest($test) {
        $this->test = $test;
    }
    
    public function __construct($test) {
        $this->test = $test;
    }
    
    
}
