<?php
class User {

    private $_user = array();

    function __construct($id = null){
        if($id !== null){
            $q = $GLOBALS['db']->prepare("SELECT * FROM users WHERE id = ?");
            $q->execute(array(intval($id)));
            while($d = $q->fetch()){
                $this->_user = $d;
            }
            $q->closeCursor();
        }
        return $this;
    }

    public function informations(){
        return $this->_user;
    }
}