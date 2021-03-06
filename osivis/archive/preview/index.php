<?php 
    if(isset($_GET["id"])){
        require_once("../../../connect.php");
        $id = mysqli_real_escape_string($conn,$_GET["id"]);
        $y = mysqli_real_escape_string($conn, $_GET["q"]);
        $qry = "SELECT coursetitle FROM `course` WHERE `courseid`=$id";
        $result = mysqli_query($conn,$qry);
        if(mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();
            $courseTitle = $row["coursetitle"];
        }
    }
    else{
     Redirect();   
    }
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Preview</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif|Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/responsive.css">	
<style type="text/css">
    header{
        height: 65px;
        display: block;
        position: relative;
    }
    header>div.head{
        background: white;
        position: fixed;
        width: 100%;
        z-index: 1;
        opacity: 0.95;
    }
    .body{
        height: 100%;
    }
</style>
</head>
<body> 
	<header>
        <div class="head">
		<h2 style="text-align: center; margin: 5px 0;">
			Osivis
            <small style="display: block;"><?php echo $courseTitle ?></small>
		</h2>
        </div>
	</header>
	<div class="body">
		<div class="panel-body">
            <ul class="nav nav-tabs">
    	        <li class="active"><a href="#query" data-toggle="tab">Questions</a>
        	    </li>
                <li><a href="#answers" data-toggle="tab">Answers</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="query">
                        <?php
                            include'../../includes/query.php';
                        ?>
                </div>
                <div class="tab-pane fade" id="answers">
                <section>
                   <div><h4>ANSWER TAB</h4></div>
                    <div class="panel-body">
                        <?php 
                            $sql=" SELECT answer, logic FROM Questions WHERE courseid=$id AND yearid=$y";
                            $r= mysqli_query($conn, $sql);
                            if(!$r){

                            }
                            else{
                                echo '<ol>';
                                while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                                    if($row['logic'] == 1){
                                        if($row['answer'] == 1){
                                        $row['answer'] = "true";
                                        }
                                        elseif ($row['answer'] == 0) {
                                            $row['answer'] = "false";
                                        }
                                    }
                                    echo '<li>'. $row['answer'].'</li>';
                                }
                                echo '</ol>';
                            }
                        ?>
                    </div>
                </section>
                </div>
            </div>
        </div>
        </div>
	<footer>
        <?php
            include("../../includes/footer.php");
        ?>
    </footer>
    <script type="text/javascript" src="../../js/jquery-3.1.1.min.js "></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>