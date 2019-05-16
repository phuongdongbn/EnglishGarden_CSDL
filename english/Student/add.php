<?php
if(isset($_POST['addstudent']))
{
    $name = $date = $address = $email = $phone = "";
    if($_POST['name'] == NULL)
    {
        echo "Vui lòng nhập tên<br />";
    }
    else
    {
        $name=$_POST['name'];
    }

    if($_POST['date'] != NULL)
    {
        $date=$_POST['date'];
    }


    if($_POST['phone'] != NULL )
    {
        $phone=$_POST['phone'];
    }

    if($_POST['email'] != NULL )
    {
        $email=$_POST['email'];
    }

    if($_POST['address'] != NULL)
    {
        $address=$_POST['address'];
    }

    $lcode[] = array();
    $code = $_POST['code'];
    $key=0;
    while ($len=strpos($code,' ')){
        $lcode[$key] = substr($code,0,$len);
        $code = substr($code,$len,strlen($code)-$len);
        $key++;
    }
    $lcode[$key]=$code;

    if($name)
    {
        $conn=mysql_connect("localhost","root","");
        mysql_select_db("english");
        $sql="insert into students(fullname, date_birth, phone, email, address) values('".$name."', '".$date."','".$phone."','".$email."','".$address."')";
        $query=mysql_query($sql);
        $si = mysql_fetch_array(mysql_query("select * from students where fullname='".$name."'"))['id'];
        echo $si;
        for ($i =0; $i<=$key; $i++){
            $query2=mysql_query("insert into class_student(class_id, student_id) values(".$lcode[$i].",".$si.")");
        }
    }
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Học viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script scr="../js/action.js"></script>
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
                        <li><a class="fs18 text-white" href="#" id="btn-5" data-toggle="collapse" data-target="#submenu5" aria-expanded="false">Học viên <span class="caret"></span></a>
                            <ul class="nav collapse" id="submenu5" role="menu" aria-labelledby="btn-5">
                                <li><a href="index.php" class="text-white">Danh sách</a> </li>
                                <li><a href="add.php" class="text-white">Thêm học viên</a> </li>
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
                <h3>Thêm học viên</h3>
                <form class="form-horizontal" action="add.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-xs-2">Tên học viên</label>
                        <div class="col-xs-10">
                            <input type="text" name="name" class="form-control" placeholder="Tên">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Ngày sinh</label>
                        <div class="col-xs-10">
                            <input type="text" name="date" class="form-control" placeholder="YYYY-MM-DD">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Số điện thoại</label>
                        <div class="col-xs-10">
                            <input type="text" name="phone" class="form-control" placeholder="SĐT">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Email</label>
                        <div class="col-xs-10">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Địa chỉ</label>
                        <div class="col-xs-9">
                            <input type="text" name="address" class="form-control" placeholder="địa chỉ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Mã các lớp tham gia</label>
                        <div class="col-xs-9">
                            <input type="text" name="code" class="form-control" placeholder="0 1 2...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button name="addstudent" type="submit" class="btn btn-primary">Thêm</button>
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