<?php

$link = mysqli_connect('localhost', 'root', '', 'start_table');

if (mysqli_connect_errno())
{
    echo'Ошибка в подключении к базе данных ('.mysqli_coonect_erno().'): '.mysqli_connect_error();
    exit();
}