<?php 
 function Redirect()
    {
     $location = 'http://localhost/osivis/'; 
     header( "Location:$location" );
     exit();
    }
    session_start();
    if(isset($_GET["id"])){
        require_once("../../connect.php");
        $id = mysqli_real_escape_string($conn,$_GET["id"]);
        $qry = "SELECT coursetitle, courseimg FROM `course` WHERE `courseid`=$id";
        $result = mysqli_query($conn,$qry);
        if(mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();
            $courseTitle = $row["coursetitle"];
            $imgUrl = $row["courseimg"];
        }
		else{
			Redirect();
		}
    }
    else{
        Redirect();
    }

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Archive</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif|Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsive.css">	
    <style type="text/css">
    .p, .t{
        width: 25%;
        text-align: center;
    }
    thead>tr th:first-child{
        width: 50%;
    }
    header{
        width: 100%;
        max-height: 375px;
        min-height: 300px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
    ul.pagination {
    display: block;
    overflow: hidden;
    padding: 0;
    margin: 0 auto;
    width: fit-content;
}

.os h2{
    margin-bottom: 5px;
}
ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

    ul.pagination li a.active {
    background-color: #4CAF50;
    color: white;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}

</style>
</head>
<body>
	<header style="background-image:url(<?php echo $imgUrl ?>);">
		<div class="head-content mobile-100">	
		<!--	<div class="logo" style="width: 50%; margin: auto;">
				<img src="../img/logo.jpg">
			</div>-->
			<hr style="border: none;border-top: 3px #ffffff solid;margin: 55% 25% 0;">
			<div class="os" style="text-align: center; margin: 10px 5px; color:white;">
				<h2><?php echo $courseTitle ?></h2>
			</div>
		</div>
	</header>
	<div class="body">
		<div class="panel-heading">
			<h2>Archive</h2>
		</div>
		<div class="panel-body">
					<?php			
						$sql="SELECT year, yearid FROM period NATURAL JOIN questions WHERE courseid=$id GROUP BY year ORDER BY year DESC";
						$r = mysqli_query($conn, $sql);
						if(!$r){
							echo '
                                <div class="panel-body alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Sorry, there are no past-questions concerning this course in our archives<a href="localhost/osivis" class="alert-link"></a>.
                                </div>';
						}
						else{
                            // 
                            //    <td
                            if(mysqli_num_rows($r) > 0){
							echo '<div class="table-responsive"><table class="table table-hover">
							<thead>
								<tr>
									<th>Year</th>
									<th class="t">Preview</th>
									<th class="t">PDF</th>
									<th class="t">Take</th>
								</tr>
							</thead>
							<tbody>';
							while($col = mysqli_fetch_array($r, MYSQLI_ASSOC)){
							echo '
								<tr>
									<td>'. $col['year'] .'</td>
									<td class="t"><a href="preview/?id='.$id.'&q='.$col['yearid'].'"><p class="fa fa-list-alt"></p></a></td>
									<td class="t"><a href="pdf/?id='.$id.'&q='.$col['yearid'].'"><p class="fa fa-download"></p></a></td>
									<td class="t"><a href="take/?id='.$id.'&q='.$col['yearid'].'"><p class="fa fa-pencil-square-o"></p></a></td>
								</tr>';
							}
							
							echo '</tbody></table></div>';
							mysqli_free_result($r);
							}
							else{
                            echo '
                                <div class=" panel-body alert alert-danger">
                                    Sorry, there are no past-questions concerning this course in our archives, 
                                    tell us the problem in the complaint box below and we\'ll get right to it. 
                                    <a href="localhost/osivis" class="alert-link">HOME</a>.
                                </div>';
							}
						}
					mysqli_close($conn);
					?>
  <!--              <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul> -->
        </div>
	</div>
	<footer>
        <?php
            include("../includes/footer.php");
        ?>
    </footer>
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js "></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>