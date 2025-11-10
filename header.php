<?PHP  @session_start(); ?>
<html>
<head>
<title> CCET-CART </title>
<link href="./style/mystyle.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="main">
        <div id="header">
           <div id="leftLogo">
            <a href='index.php'>
            <img src="./images/logoleft.png">
</a>
           </div><!--end of leftLogo-->
           <div id="title">
             <h1><a href='index.php' style='color:azure'>CCET-CART</a></h1>
             <h3> A hub of quality products!!!!!!  </h3>
             <?php 
     if(isset($_SESSION["uname"]))
     {
       echo("<div id='logMessage'>");

    echo("Welcome ".$_SESSION["uname"]."......");
    echo("<a href='logout.php'>Logout</a>");
        echo("</div>");

     }

?>
           </div><!--end of title-->
           <div id="rightLogo">
           <img src="./images/logoright.png">
           </div><!--end of rightLogo-->


        </div><!--end of header-->