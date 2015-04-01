<?php
 class connection{    
    
    function Out(){
        $host="mysql.hostinger.ru";
        $user='u848290133_root';
        $pass='1EAd15n6QO';
        $db='u848290133_parse'; 
        $mysqli = new mysqli($host,$user,$pass,$db); 
        $result = $mysqli->query('SELECT link,name FROM u848290133_parse.vendors ORDER BY name ASC'); 
        if($result->num_rows==0)
            echo "No have data";   
        else{     
            
            echo 'Number of items selected: <b>'.$result->num_rows.'</b><br><hr>';
            while( $row = $result->fetch_assoc() ){ 
            printf("<b>".$row['name']."</b> &rArr; <a href=".$row['link'].">посилання</a> <br>"); 
            } 
        }
    $result->close(); 
    }
    
     function Truncate(){
        $host='mysql.hostinger.ru';
        $user='u848290133_root';
        $pass='1EAd15n6QO';
        $db='u848290133_parse'; 
        $mysqli = new mysqli($host,$user,$pass,$db); 
        $truncate = "TRUNCATE TABLE u848290133_parse.vendors";
        $mysqli->query($truncate);
     }
     
     function Insert($link,$name){
         $host='mysql.hostinger.ru';
        $user='u848290133_root';
        $pass='1EAd15n6QO';
        $db='u848290133_parse'; 
        $mysqli = new mysqli($host,$user,$pass,$db); 
        $insert = "INSERT INTO u848290133_parse.vendors (link, name)
        VALUES ('".$link."','".$name."')";
        $mysqli->query($insert);   
    } 
     
 }
?>   