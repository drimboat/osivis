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
</head>
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
	.well{
		background: rgba(0, 0, 0, 0.65);
		margin: 15px 2.5px;
	}.body>.well{
		margin: 10px 15px;
	}
	.panel-body{
		opacity: 1;
			}
	body{
		width: 100%;
		min-width: 320px;
		height: auto;
		position: relative;
		background-image: url(../../img/bg/testbg.jpg);
		background-size: cover;
		background-attachment: fixed;
		background-position: center center;
		background-repeat: no-repeat;
	}
	img{
		width: 100%;
		height: auto;
		margin: 0;
	}	
	header{
		background: black;
		width: 100%;
		height: auto;
		margin-bottom: 15px;
	}
	header>div{
		overflow: hidden;
		margin-bottom: 20px;
	}
	.logo, .crse, .timer{
		height: 100%;
	}
	ol{
		list-style-type: upper-alpha;
	}
	ol li{
		margin: 10px 0;
	}
	hr{
		clear: both;
		margin: 25px 50px;
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
[class*="col-"]::after{
	content: "";
	display: block;
	clear: both;
}
.body{
	float: right;
}
.no-show{
	display: none!important;
}
.time{
	float: right;
	text-align: right;
	padding: 2.5px 50px;
	width: 100%;
}
.time::after{
	content: "";
	display: block;
	clear: both;
}
small{
	display: block;
}
.cntrl{
	width: 50%;
	padding: 0 15px;
}
@media screen and (max-width: 900px){
	.main .body{
		width: 50%;
	}
	.main aside{
		width: 50%;
	}
	.time{
	text-align: right;
	padding: 2.5px 25px;
	width: 100%;
}
}
@media screen and (max-width: 520px){
	.mobile-100{
		width: 100%!important;
	}
	.hide-mobile{
		display: none;
	}
	.show-mobile{
		display: block!important;
	}
	.well{
		background: none;
		border: none;
		padding: 5px 19px;
	}
	.body>.well{
		margin: 0 2.5px;
	}
	.main{
		background: rgba(0, 0, 0, 0.65);
		border: 1px solid black;										
		margin: auto;
		width: 80%;
		overflow: hidden;
	}	
	.crse{
		width: 50%;
		margin: auto;
	}
	.lgo{
		width: 20%;
	}
	.timr{
		width: 30%;
		display: inline-block!important;
	}
}
</style>
<body>
	<header>
		<div class="sect">
			<ul class="list-inline" style="text-align:center; margin: 0;">
				<li class="lgo col-2"><h3>Osivis</h4></li>
				<li class="crse col-10"><h3>Health Principles</h3></li>
				<li class="no-show timr">
					<div>
                    	<h3><small>00h:14m:20s</small></h3>
                	</div>
                </li>
			</ul>
		</div>
	</header>
	<div class="main">	
	<div class="body mobile-100 col-8">
	<div class="hide-mobile time">
		<h1><small>Timer</small>00h:14m:20s</h1>
	</div>
	<div class="well">
		<div>
			<h2>Question 1 <small> of 30 </small></h2>
		</div>
		<div class="panel-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua?
		</div>
	</div>
</div>
<hr class="hide show-mobile">
<aside class="mobile-100 col-4" style="position: relative; bottom: 25px; padding: 0 30px;">
	<div class="well">
		<ol>
            <li>List Item Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliquborum.</li>
            <hr class="op hide-mobile">
            <li>List iam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in volm. Item</li>
            <hr class="op hide-mobile">
            <li>iam,upidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. List Item</li>
            <hr class="op hide-mobile">
            <li>List It iam,
            quis nostrud exercitation ullamco laboris nisi ut rum. em</li>
        </ol>
	</div>
</aside>
	<div class="col-8 cntrl body mobile-100">
		<button type="button" class="btn btn-primary btn-lg prvs col-4">Previous</button>
		<button type="button" class="btn btn-primary btn-lg col-4 sbmt">Submit</button>
		<button type="button" class="btn btn-primary btn-lg nxt col-4">Next</button>
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