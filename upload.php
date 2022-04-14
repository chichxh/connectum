<?php 
require 'connect.php';

session_start();
$id = (int)$_SESSION['id'];
$nickname = $_SESSION['nickname'];
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];

if (isset($_POST['submitSW'])) {
	    $link_name = $_FILES['links']['name'];
	    $link_tmp = $_FILES['links']['tmp_name'];
	    move_uploaded_file($link_tmp,"softwares/".$link_name);

	    $file_name = $_FILES['img']['name'];
	    $file_tmp =$_FILES['img']['tmp_name'];
	    move_uploaded_file($file_tmp,"softwares/img/".$file_name);

	    $logo_name = $_FILES['logo']['name'];
	    $logo_tmp =$_FILES['logo']['tmp_name'];
	    move_uploaded_file($logo_tmp,"softwares/img/".$logo_name);

		$path = 'softwares/';
		$pathi = 'softwares/img/';
        $querySW = "INSERT INTO softwares (name, logo, links, decription, img) VALUES ('". $_POST['softname'] ."', '". $pathi . $_FILES['logo']['name'] ."',  '". $path . $_FILES['links']['name'] ."', '". $_POST['decription'] ."', '". $pathi . $_FILES['img']['name'] ."')";
        $resSW = mysqli_query($link, $querySW);
        if ($resSW) {
        	header("Location: forDevelop.php");
        }
        else {
        	echo "error";
        }
    }

if (isset($_POST['submitConnecten'])) {
	    $link_name = $_FILES['projfile']['name'];
	    $link_tmp = $_FILES['projfile']['tmp_name'];
	    move_uploaded_file($link_tmp,"uploads/".$link_name);

	    $file_name = $_FILES['projimg']['name'];
	    $file_tmp =$_FILES['projimg']['tmp_name'];
	    move_uploaded_file($file_tmp,"uploads/img/".$file_name);

		$path = 'uploads/';
		$pathi = 'uploads/img/';
        $query = "INSERT INTO uploads (projname, projauthor, projfile, projdescr, projimg, projtype) VALUES ('". $_POST['projname'] ."', '$nickname', '". $path . $_FILES['projfile']['name'] ."', '". $_POST['projdescr'] ."', '". $pathi . $_FILES['projimg']['name'] ."', '". $_POST['projtype'] ."')";
        $res = mysqli_query($link, $query);
        if ($res) {
        	header("Location: connecten.php");
        }
        else {
        	echo "error";
        }
    }


 ?>