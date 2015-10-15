<?php

class Options {
    
    private $option;
    
    function getOption() {
        return $this->option;
    }

    function setOption($option) {
        $this->option = $option;
    }
    
    public function __construct($option) {
        $this->option = $option;
    }


}
