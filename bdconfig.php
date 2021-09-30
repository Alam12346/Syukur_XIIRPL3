<?php

try {

    $con = new PDO('mysql:host=localhost;dbname=penentuan_wisata', 'root', '', array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {

    echo $e->getMessage();
}

include_once 'Class.php';

$user = new clas($con);

?> 