<meta charset="utf-8">
<?php
    require_once("simple_html_dom.php"); 
    require_once("connection.php");

    $con = new connection();
        
    $con->Truncate();   
    
    for($i=1;$i<=39;$i++){ 
        $html= file_get_html("http://price.ua/index/vendors/page".$i.".html");
        foreach($html->find("a[class='item-name']") as $element){
                $con->Insert($element->href,$element->innertext);
        }
    }   
        
    $html->clear();
    unset($html);
    header('Location: index.php');
?>