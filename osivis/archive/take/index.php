<?php 
session_start();
    if(isset($_GET["id"]) && isset($_GET["q"])){
        require_once("../../../connect.php");
        $id = mysqli_real_escape_string($conn,$_GET["id"]);
        $y = mysqli_real_escape_string($conn, $_GET["q"]);
        $qry = "SELECT coursetitle, year FROM `course` NATURAL JOIN period WHERE `courseid`=$id AND yearid=$y";
        $result = mysqli_query($conn,$qry);
        if(mysqli_num_rows($result) > 0){
        	$row = $result->fetch_assoc();
            $courseTitle = $row["coursetitle"];
            $year = $row["year"];
    		$sql="SELECT year FROM period NATURAL JOIN questions WHERE courseid=$id AND yearid=$y GROUP BY year";
			$r = mysqli_query($conn, $sql);
			$col = $r -> fetch_assoc();
            if ($col['year'] != $row['year']) {
            	Redirect();
            }
        }
        else{
        	Redirect();
        }
    }
    else{
    	Redirect();
    }
if ($_SERVER['REQUEST_METHOD'] != 'post') {
	require('../../includes/confirm.php');
}
elseif ($_SERVER['REQUEST_METHOD'] == 'post') {
	require '../../includes/tt.php';
}
?>