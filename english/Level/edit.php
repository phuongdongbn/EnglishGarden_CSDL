<?php
if (isset($_GET['edit'])){
    $id = $_GET['id'];
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("english");
    $sql="select * from levels where id=".$id;
    $query=mysql_query($sql);
    $arr = mysql_fetch_array($query);
}

if(isset($_POST['editlevel']))
{
    $u=$c="";
    if($_POST['name'] == NULL)
    {
        echo "Vui lòng nhập tên<br />";
    }
    else
    {
        $u=$_POST['name'];
    }
    if($_POST['code'] == NULL)
    {
        echo "Vui lòng nhập mã<br />";
    }
    else
    {
        $c=$_POST['code'];
    }
    if($u && $c)
    {
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("english");
        $sql="update levels set name='".$u."', sign='".$c."' where id =".$_POST['id'];
        $query=mysql_query($sql);
        header("location: index.php");
        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh mục</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Header -->
<div class="header bg-green wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="font-header text-white"><h1>English</h1></div>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Content -->

<div>
    <div class="container-fluid no-pad-left">
        <div class="row">
            <div class="col-sm-3">
                <div class="bg-dark">

                    <ul class="pb20">
                        <li class="pt20"><a class="fs18 text-white" href="#" id="btn-0" data-toggle="collapse" data-target="#submenu0" aria-expanded="false">Danh mục khóa học<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu0" role="menu" aria-labelledby="btn-0">
                                <li><a href="../Category/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Category/add.php" class="text-white">Thêm danh mục</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Khóa học<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                                <li><a href="../Course/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Course/add.php" class="text-white">Thêm khóa học</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-2" data-toggle="collapse" data-target="#submenu2" aria-expanded="false">Mức độ học<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu2" role="menu" aria-labelledby="btn-2">
                                <li><a href="index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="add.php" class="text-white">Thêm mức độ</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-3" data-toggle="collapse" data-target="#submenu3" aria-expanded="false">Lớp học<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu3" role="menu" aria-labelledby="btn-3">
                                <li><a href="../Class/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Class/add.php" class="text-white">Thêm lớp học</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-4" data-toggle="collapse" data-target="#submenu4" aria-expanded="false">Giảng viên <span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu4" role="menu" aria-labelledby="btn-4">
                                <li><a href="../Teacher/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Teacher/add.php" class="text-white">Thêm giảng viên</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-5" data-toggle="collapse" data-target="#submenu5" aria-expanded="false">Học viên <span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu5" role="menu" aria-labelledby="btn-5">
                                <li><a href="../Student/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Student/add.php" class="text-white">Thêm học viên</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-7" data-toggle="collapse" data-target="#submenu7" aria-expanded="false">Giao dịch<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu7" role="menu" aria-labelledby="btn-7">
                                <li><a href="../Payment/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Payment/add.php" class="text-white">Thêm giao dịch</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-8" data-toggle="collapse" data-target="#submenu8" aria-expanded="false">Hình thức giao dịch<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu8" role="menu" aria-labelledby="btn-8">
                                <li><a href="../PaymentMethod/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../PaymentMethod/add.php" class="text-white">Thêm hình thức giao dịch</a> </li>
                            </ul>
                        </li>
                        <hr>

                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <h3>Sửa mức độ</h3>
                <form class="form-horizontal" action="edit.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-xs-2">Tên mức độ</label>
                        <div class="col-xs-10">
                            <input type="text" name="name" class="form-control" value="<?= $arr['name'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Mã mức độ</label>
                        <div class="col-xs-10">
                            <input type="text" name="code" class="form-control" value="<?= $arr['sign'] ?>">
                        </div>
                    </div>
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button name="editlevel" type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- End Content-->
</body>
</html>