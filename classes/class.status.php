<?php
class status {
    protected $_tag = array();
    protected $_id = null;

    function __constructor($label = null){
        $this->_id = $label;
        $this->_tag = $GLOBALS['status_cache'][$label];
    }

    function informations(){
        return $this->_tag;
    }
}