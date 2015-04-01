<html>
    <head>
        <title>Parser</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <form name="parseAll" method="post" action="parser.php" style="display:inline;">
        <button name="parse" type="submit">Parse</button>
    </form>
    <form method="post" style="display:inline;">
        <input type="submit" name="Delete" value="Delete"/>
    </form>
     <p>*This function may take 1 minute</p>
    <?php 

        require_once("simple_html_dom.php"); 
        require_once("connection.php");

        $con = new connection();

        echo "<div class=out>".$con->Out()."</div>";
        
        if (isset($_POST['Delete'])){ 
            unset($_POST);
            $con->Truncate();
            echo "<script language='JavaScript' type='text/javascript'>window.location.reload()</script>";
        }
    ?>
    </body>
</html>
