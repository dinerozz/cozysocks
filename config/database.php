<?php

    $db = new mysqli('localhost','root','','web97');

    if($db->connect_error){
        echo $db->connect_error;
    }