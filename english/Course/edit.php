<?php

if (isset($_GET['edit'])){
    $id = $_GET['id'];
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("english");
    $sql="select * from courses where id=".$id;
    $query=mysql_query($sql);
    $arr = mysql_fetch_array($query);
}

if(isset($_POST['editcourse']))
{
    $le=$d=$t=$l=$c="";
    if($_POST['lesson'] == NULL)
    {
        echo "Vui lòng nhập số bài học<br />";
    }
    else
    {
        $le=$_POST['lesson'];
    }

    if($_POST['term'] == NULL)
    {
        echo "Vui lòng nhập thời gian<br />";
    }
    else
    {
        $t=$_POST['term'];
    }

    if($_POST['level'] == NULL)
    {
        echo "Vui lòng nhập mức độ<br />";
    }
    else
    {
        $id_l=$_POST['level'];

    }

    if($_POST['category'] == NULL)
    {
        echo "Vui lòng nhập khóa học<br />";
    }
    else
    {
        $id_c = $_POST['category'];


    }

    if($_POST['description'] != NULL )
    {
        $d=$_POST['description'];
    }



        $sql="update courses set lessons='".$le."', description ='".$d."', term='".$t."', level_id='".$id_l."', category_id='".$id_c ."' where id=".$id;
        $query=mysql_query($sql);
        header("location: index.php");
        exit();

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
                                <li><a href="index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="add.php" class="text-white">Thêm khóa học</a> </li>
                            </ul>
                        </li>
                        <hr>
                        <li><a class="fs18 text-white" href="#" id="btn-2" data-toggle="collapse" data-target="#submenu2" aria-expanded="false">Mức độ học<span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu2" role="menu" aria-labelledby="btn-2">
                                <li><a href="../Level/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Level/add.php" class="text-white">Thêm mức độ</a> </li>
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
                        <li><a class="fs18 text-white" href="#" id="btn-6" data-toggle="collapse" data-target="#submenu6" aria-expanded="false">Nhân viên <span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu6" role="menu" aria-labelledby="btn-6">
                                <li><a href="../Staff/index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="../Staff/add.php" class="text-white">Thêm nhân viên</a> </li>
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
                <h3>Sửa khóa học</h3>
                <form class="form-horizontal" action="edit.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-xs-2">Số buổi học</label>
                        <div class="col-xs-10">
                            <input type="text" name="lesson" class="form-control" value="<?= $arr['lessons'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Mô tả ngắn</label>
                        <div class="col-xs-10">
                            <input type="text" name="description" class="form-control" value="<?= $arr['description'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Thời gian học</label>
                        <div class="col-xs-10">
                            <input type="text" name="term" class="form-control" value="<?= $arr['term'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Mức độ</label>
                        <div class="col-xs-10">
                            <input type="text" name="level" class="form-control" value="<?= $arr['level_id'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Danh mục</label>
                        <div class="col-xs-10">
                            <input type="text" name="category" class="form-control" value="<?= $arr['category_id'] ?>">
                        </div>
                    </div>
                    <input type="hidden" value="<?= $id ?>" name="id">
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button name="editcourse" type="submit" class="btn btn-primary">Sửa</button>
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