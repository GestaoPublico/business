<?php
session_start();
if(!isset($_SESSION['language'])){
    $_SESSION['language'] = 'pt-br.php';
	}
	elseif(isset($_GET['language'])){
    include $_GET['language'];
}else{
    include 'pt-br.php';
};
?>
