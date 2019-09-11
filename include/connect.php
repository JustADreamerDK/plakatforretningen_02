<?php
$objCon = new mysqli("localhost", "kkjer_dk_plakatforretningen_02", "ucl010393", "kkjer_dk_plakatforretningen_02");
// $objCon = new mysqli("localhost", "root", "root", "plakatforretningen");
if ($objCon->connect_errno) {
    die('Kan ikke forbinde (' . $objCon->connect_errno . ')' . $objCon->connect_error);
}
$objCon->set_charset("utf8");
?>
