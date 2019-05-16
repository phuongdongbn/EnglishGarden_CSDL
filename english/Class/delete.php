<?php
if(isset($_GET['delete']))
{
    $id = $_GET["id"];

    if($id)
    {
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("english");
        $sql="delete from classes where id=".$id;
        $query=mysql_query($sql);
        $query1 = mysql_query("delete from class_student where class_id=".$id);

    }

}
header("location: index.php");
exit();

?>