<?php

if(isset($_SESSION["admin_user"]["user_id"])){
    $user_id =$_SESSION ["admin_user"]["user_id"];

} else {
    header("location:" . BASE_URL . "login");
}