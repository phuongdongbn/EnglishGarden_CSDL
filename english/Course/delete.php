<?php
if(isset($_GET['delete']))
{
    $id = $_GET["id"];

    if($id)
    {
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("english");
        $sql="delete from courses where id=".$id;
        $query=mysql_query($sql);

    }

}
header("location: index.php");
exit();

?>