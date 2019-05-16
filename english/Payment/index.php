<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("english");
$sql = "select * from payments";
$query = mysql_query($sql);
if (isset($_POST['search'])){
    $query = mysql_query("select * from payments where payment_date = '".$_POST['tim']."'");
}
?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>Lớp học</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css">
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
                                    <li><a href="../Student/index.php" class="text-white">Danh sách</a> </li>
                                    <li><a href="../Student/add.php" class="text-white">Thêm học viên</a> </li>
                                </ul>
                            </li>
                            <hr>

                            <li><a class="fs18 text-white" href="#" id="btn-7" data-toggle="collapse" data-target="#submenu7" aria-expanded="false">Giao dịch<span class="caret"></span></a>
                                <ul class="nav collapse" id="submenu7" role="menu" aria-labelledby="btn-7">
                                    <li><a href="index.php" class="text-white">Danh sách</a> </li>
                                    <li><a href="add.php" class="text-white">Thêm giao dịch</a> </li>
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
                    <h3>Danh sách giao dịch</h3>
                    <form action="index.php" class="form-inline" method="POST">
                        <div class="form-group">
                            <input name="tim" type="text" class="form-control" placeholder="Ngày giao dịch">
                        </div>
                        <div class="form-group">
                            <button name="search" type="submit" class="btn btn-primary">Tìm</button>
                        </div>
                    </form>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Ngày giao dịch</th>
                            <th>Số tiền</th>
                            <th>Trạng thái</th>
                            <th>Hình thức</th>
                            <th>Học viên</th>
                            <th>Lớp</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($payment = mysql_fetch_array($query)){ ?>
                            <tr>
                                <td><?php echo $payment["id"] ?></td>
                                <td><?= $payment["payment_date"] ?></td>
                                <td><?= $payment["amount"] ?></td>
                                <td><?= $payment['status'] ?></td>
                                <td><?php
                                    $query1 = mysql_query("select * from payment_method where id=".$payment['payment_method_id']);
                                    echo mysql_fetch_array($query1)['name'];
                                    ?>
                                </td>
                                <td><?php
                                    $query1 = mysql_query("select * from students where id=".$payment['student_id']);
                                    echo mysql_fetch_array($query1)['fullname'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $sql2 = "select * from classes where id ='".$payment['class_id']."'";
                                    $query2 = mysql_query($sql2);
                                    echo mysql_fetch_array($query2)['name'];
                                    ?>
                                </td>

                                <td>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="edit.php" method="GET">
                                                <input type="hidden" name="id" value="<?= $payment['id'] ?>">
                                                <button type="submit" class="btn btn-primary" name="edit">Sửa</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="delete.php" method="GET">
                                                <input type="hidden" name="id" value="<?= $payment['id'] ?>">
                                                <button type="submit" class="btn btn-danger" name="delete">Xóa</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content-->
    </body>
    </html>
<?php mysql_close($conn); ?>