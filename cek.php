<?php
//jika belu login
if(isset($_SESSION['log'])){

} else {
    header('location:index.php');
}