<?php
require 'dbconfig.php';
function checkuser($fuid,$ffname,$femail)
{
    $check = mysql_query("select * from Users where Fuid='$fuid'");
    $check = mysql_num_rows($check);
    if (empty($check)) { // if new user . Insert a new record
        $query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$femail')";
        mysql_query($query);
    } else {   // If Returned user . update the user record
        $query = "UPDATE Users SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
        mysql_query($query);
    }
}
    function insertMap($userid, $lat, $lon)
    {
        $date = new Date('y-m-d');
        $query = mysql_query("insert into maped VALUES ('$userid','$lat','$lon','$date')");
        mysql_query($query);
    }

function getUserInfo($uid){
        $query="select * from maped where userid='$uid'";
        $result=mysql_query($query);
}

?>
