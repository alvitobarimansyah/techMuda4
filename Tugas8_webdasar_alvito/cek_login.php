<?php
function login($uname, $pass){
    if($uname == 'admin' && $pass == 'mimin'){
        echo 'Hello Admin anda Administrator';
    } else if($uname == 'bedu' && $pass == 'okedeh'){
        echo 'Hello Bedu anda Operator';
    } else {
        echo 'Maaf Anda Gagal Login';
    }
}
$username = $_POST['uname'];
$password = $_POST['pass'];
login($username,$password);