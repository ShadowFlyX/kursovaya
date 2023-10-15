<?php

$link = mysqli_connect('localhost', 'root', '', 'nazv-bazi');

if(mysqli_connect_errno()){

    echo 'Connection error to database ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();

}

?>