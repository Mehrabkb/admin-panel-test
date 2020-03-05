<?php 

function islogin(){
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}