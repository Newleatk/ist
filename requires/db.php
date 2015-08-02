<?php
$db = new PDO("mysql:dbname=ist;host=localhost", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
global $db;
$status_cache = array();
$q = $db->query("SELECT `label`, `color`, `description`, `name` FROM `status`");
function pythdiff($R1,$G1,$B1,$R2,$G2,$B2){
    $RD = $R1 - $R2;
    $GD = $G1 - $G2;
    $BD = $B1 - $B2;

    return  sqrt( $RD * $RD + $GD * $GD + $BD * $BD ) ;
}
function hex2rgb($hex) {
    $hex = str_replace("#", "", $hex);

    if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
    }
    $rgb = array("r" => $r, "g" => $g, "b" => $b);
    return $rgb;
}
while($d = $q->fetch()){
    if(!isset($status_cache[$d['label']])) {
        if(pythdiff(hex2rgb($d['color'])['r'], hex2rgb($d['color'])['g'], hex2rgb($d['color'])['b'], 255, 255, 255) >= pythdiff(hex2rgb($d['color'])['r'], hex2rgb($d['color'])['g'], hex2rgb($d['color'])['b'], 50, 50, 50)){
            $c = "ffffff";
        }else{
            $c = "323232";
        }
        $status_cache[$d['label']] = array("label" => $d['label'], "contrast" => $c, "color" => $d['color'], "description" => $d['description'], "name" => $d['name']);
    }
}
$q->closeCursor();
global $status_cache;