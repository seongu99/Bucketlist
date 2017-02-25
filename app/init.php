<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=bucketlist;host=seongu', 'locahost', 'password');

if(!isset($_SESSION['user_id'])) {
    die ('you are not signed in.');
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

