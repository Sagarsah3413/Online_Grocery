<?php
function string_in($string, $start, $end){
    $inner = [];
    $ini = 0;
    while((strpos($string, $start, $ini) !== false) && (strpos($string, $end, $ini) !== false)){
        $ini += strpos($string, $start, $ini) - $ini;
        $ini += strlen($start) - 1;
        $len = strpos($string, $end, $ini) - $ini - 1;
        $inner[] = substr($string, $ini+1, $len);
        $ini += $len;
        $ini += strlen($end);
    }
    return $inner;
}
?>