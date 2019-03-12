<!DOCTYPE HTML>
<html>
<head>
    <title>Osivis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif|Roboto" rel="stylesheet" > 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
<style type="text/css">
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: white;
}
    html, body{
        height: 100%;
    }
    body{
        width: 100%;
        min-width: 320px;
        height: 100%;
        position: relative;
        background-image: url(../../img/bg/query.jpg);
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
    }   
    .body{
        height: auto;
        min-height: 100%;
        position: relative;
    }
    header{
        width: 100%;
    }
    .confirm{
        width: 50%;
        margin: auto;
        text-align: center;
    }
    footer{
        display: none;
    }
    .col-1{ width:8.33%;}
.col-2{ width:16.66%;}
.col-3{ width:25%;}
.col-4{ width:33.33%;}
.col-5{ width:41.66%;}
.col-6, .grid-50{ width:50%;}
.col-7{ width:58.33%;}
.col-8{ width:66.66%;}
.col-9{ width:75%;}
.col-10{ width:83.33%;}
.col-11{ width:91.66%;}
.col-12{ width:100%;}
[class*="col-"]{
    float: left;
    padding: 0 1.5px;
}
.cancel, .proceed, .edit{
    margin: 1.5px 0;
    }
    .btn-lg{
        padding: 10px 5px;
    }
        label{
        color: black;
        display: block;
        padding: 0 5px;
    }
    .form-group{
        overflow: hidden;
        text-align: left;
        clear: both;
}
.form-t{
    width: 20%;
    margin: 0 5px;
    display: inline-block;
}
    hr{
        clear: both;
        margin: 12.5px 50px;
    }
@media screen and (max-width: 850px){
    .confirm{
        width: 80%;
    }
}
@media screen and (max-width: 500px){
    .mobile-100{
        width: 100%;
    }
    .proceed{
        width:75%;
    }
}
</style>
</head>
<body>
			<div class="body">
		<header>
			<h2>Osivis</h2>
		</header>
		<div class="confirm mobile-100">
			<div class="panel-body">
				<h4>You are about to take:</h4>
				<h3><?php echo $courseTitle ?></h3>
				<h3><?php echo $year ?></h3>
				<h4>Things you should know:</h4>
				<ul  style="list-style-type:none;text-align:left;">
					<li>It takes time</li>
					<li>lorem ipsum dolo ramet</li>
					<li>this is just another dummy text</li>
					<li>fourth dummy text</li>
					<li>this is th elast info text</li>
				</ul>
			</div>
			<div class="panel-body">
				<div class="edit col-3 mobile-100">
					<button type="button" class="btn btn-primary btn-lg btn-block" style="background:w#0090bb;border-color:#0090bb;" data-toggle="modal" data-target="#myModal"><span class="fa fa-gears"> Edit</span></button>
				</div>
				<div class="cancel col-3">
					<button type="button" class="btn btn-danger btn-lg btn-block">Cancel</button>
				</div>
				<div class="proceed col-6">
					<button type="button" class="btn btn-success btn-lg btn-block">Proceed</button>
				</div>
			</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content" style="max-width:450px; margin: auto;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    	    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-gears"> Edit</span></h4>
                        </div>
                        <div class="modal-body panel-body">
                       		<div class="form-group">
                       		    <input class="form-control" placeholder="FULL NAME">
                       		</div>
                            <hr>
                        	<div class="form-group">
                                <label class="col-12">
                                Number of questions to answer: <input class="form-control" type="number" min="5" max="" step="5" placeholder="60">
                                </label>
                              	<div class="form-group" style="margin-bottom: 1px;">
                                <label>Question from section:</label>
                                <label class="col-12">
                               		<input class="form-sect" type="checkbox" placeholder="GEDS222"> A
                                </label>
                                <label class="col-12">
                               		<input class="form-sect" type="checkbox" placeholder="GEDS222"> B
                                </label>
                                <label class="col-12">
                                	<input class="form-sect" type="checkbox" placeholder="GEDS222"> C 
                                </label>                                
                            </div>
                                <label class="col-12" style="margin-bottom: 15px;">
                                	<input class="form-sect" type="checkbox" placeholder="GEDS222"> Shuffle Questions
                                </label>
                            <div class="form-group">
                                <hr>                                
                                <label class="col-12">
                                	<input class="form-sect" type="checkbox" placeholder="GEDS222"> Timer on 
                                </label>
                                <label class="col-12" style="display: block;">
                                	Time limit<input class="form-t form-control" type="number" min="0" step="15" placeholder="0">min
                                </label>                          
                        	</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" onClick="saveChanges()" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
        <footer>
        <h5 style="text-align: center;">Osivis@2017
            <small style="display: block;">
                Website by DUST
            </small>
        </h5>
        <div class="form-group">
            <input class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="E-mail">
        </div>
    </footer>
    <script type="text/javascript" src="../../js/jquery-3.1.1.min.js "></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>