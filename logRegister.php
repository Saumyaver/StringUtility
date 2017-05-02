<?php
    $url = $_REQUEST['url'];
    $title = $_REQUEST['title'];
    echo $url;

    $conn = mysql_connect("localhost","root","") or die(mysql_error());

    mysql_select_db("track");
    
    if ((strcmp($url,"null")==0) || (strcmp($url,"http://localhost/phpmyadmin/sql.php?server=1")==0))
{echo "Equal!!!!!";}
else
{
       $sql = "INSERT INTO record (URL,Title) VALUES   	('$url','$title')";
    //$sql = "INSERT INTO record (URL) VALUES ('$url')";
    if ( mysql_query($sql))
    {
        echo "Working";
    }
    else
        echo "Error creating Table"."</br>". mysql_error($conn);
}
    mysql_close($conn);

?>