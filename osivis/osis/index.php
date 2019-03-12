<?php
    require("../../connect.php");
    /*
        Osis page to handle ocument upload and population of database
        //1. create upload form for document
        //2-a. check if document is pdf or word document
        //2-b. if document skip to step 3
        2-c. if pdf, convert to document
        3. parse document.
    */
    printf("%05d    ", 12);
    printf("%0.3f  ", 169.5638);
    printf("%015.6f ", 3475.986);
    printf("%02.2f  ", 74390.98647);
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
        html, body{
            height: 100%;
        }
        body{
            width: 100%;
            min-width: 320px;
            position: relative;
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .container{
            width: 100%;
            height:100%;
            background-color: #000000b3;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form name="upload" action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="dox" id="dox" >
                    <button type="submit" id="upload" hidden></button>
                    <span class="btn btn-default" onclick="parseDocument()">upload</span>
                </form>
            </div>
        </div>
        <script>
            function parseDocument(){
                var ext = document.forms['upload']['dox'].value;
                if(!(ext.endsWith("docx") || ext.endsWith("doc") || ext.endsWith("pdf"))){
                    if(ext == ''){
                        console.log('empty');
                    }else{
                        console.log('Error: Can\'t parse document');
                    }
                    //terminate function
                    return;                    
                }else if(ext.endsWith("pdf")){
                    //convert pdf document to word file.
                    console.log('pdf');
                }
                //function to process word document
                docStrip(paper);
            }

            function docStrip(paper){

            }
        </script>
    </body>
</html>