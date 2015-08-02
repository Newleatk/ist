<?php
function formatId($id){
    while(strlen($id) < IST_BUG_LABEL_LENGTH){
        $id = "0" . $id;
    }
    return IST_BUG_LABEL_ADD . IST_BUG_LABEL_DELIMITER . $id;
}