<?php
    require("../../connect.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Captain</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    body{
        width: 100%;
        min-width: 320px;
        height: auto;
        position: relative;
        background-image: url(../img/bg/log.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please provide the required info</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="form" action="Question/index.php" method="GET">
                            <fieldset>
                                <div class="form-group">
<?php
    $sql= "SELECT coursecode, coursetitle, courseid From course order by courseid ASC";
    $r= mysqli_query($conn, $sql);
?>
                                    <label>
                                    Course: 
                                        <select class="form-control" name="course">
            <?php
                while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                    $cc = $row["coursecode"];
                    $ct = $row["coursetitle"];
                    $ci = $row["courseid"];
                    echo '<option value="'. $ci .'">'. $cc .'| '. $ct.'</option>';
                }
            ?>
                                        </select>
                                    </label>
                                </div>
                                <div class="form-group">
<?php
    $sql= "SELECT year, yearid From period order by yearid ASC";
    $r= mysqli_query($conn, $sql);
?>
                                  <label>
                                    Year: 
                                        <select class="form-control" name="year">
            <?php
                while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                    $y = $row["year"];
                    $yi = $row["yearid"];
                    echo '<option value="'. $yi .'">'. $y .'</option>';
                }
            ?>
                                        </select>
                                    </label>
                                </div>
                                <hr>
                                <h4>Please select the right Section type below</h4>
                                <div class="form-group">
                                   <?php 
                                        $sec = "A";
                                        include'../includes/select.php';
                                   ?>
                                </div>
                                <div class="form-group">
                                   <?php 
                                        $sec = "B";
                                        include'../includes/select.php';
                                   ?>
                                </div>
                                <div class="form-group">
                                   <?php 
                                        $sec = "C";
                                        include'../includes/select.php';
                                   ?>
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Begin">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function query() {
        alert("click");
    }
    </script>
</body></html>