<!--/.sidebar-->
<?php
include('../config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM giaoduc WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Học Vấn</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quá Trình Học</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">

                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>2006-2012</label>
                                <input name="2006-2012" required class="form-control" placeholder="" value = "<?php echo $row['tu2006-2012'] ?>">
                            </div>
                            <div class="form-group">
                                <label>2012-2015</label>
                                <input name="2012-2015" required class="form-control" placeholder="" value = "<?php echo $row['tu2012-2015'] ?>">
                            </div>
                            <div class="form-group">
                                <label>2015-2018</label>
                                <input name="2015-2018" required class="form-control" placeholder="" value = "<?php echo $row['tu2015-2018'] ?>">
                            </div>
                            <div class="form-group">
                                <label>2018-nay</label>
                                <input name="2018-nay" required class="form-control" placeholder="" value = "<?php echo $row['tu2018-nay'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Trường ĐH</label>
                                <input name="truong" required class="form-control" placeholder="" value = "<?php echo $row['truongdh'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Chức danh</label>
                                <input name="chucdanh" required class="form-control" placeholder="" value = "<?php echo $row['chucdanh'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Khoa</label>
                                <input name="khoa" required class="form-control" placeholder="" value = "<?php echo $row['khoa'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Điểm TB</label>
                                <input name="diemtb" required class="form-control" placeholder="" value = "<?php echo $row['diemtb'] ?>">
                            </div>
                        
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>

                    </form>
                    <?php
                    if(isset($_POST['sbm'])){
                        $tieuhoc = $_POST['2006-2012'];
                        $coso = $_POST['2012-2015'];
                        $phothong = $_POST['2015-2018'];
                        $daihoc = $_POST['2018-nay'];
                        $truong = $_POST['truong'];
                        $chucdanh = $_POST['chucdanh'];
                        $khoa = $_POST['khoa'];
                        $diemtb = $_POST['diemtb'];


                        $sql_hocvan = "UPDATE giaoduc SET tu2006-2012='$tieuhoc',tu2012-2015='$coso',tu2015-2018='$phothong',tu2018-nay='$daihoc',truongdh='$truong',chucdanh='$chucdanh',khoa='$khoa',diemtb='$diemtb' WHERE id=$id";
                        $query_hocvan=mysqli_query($conn, $sql_hocvan);
                        if($query){
                            header('location: index.php?page=hocvan');
                        }else{
                            echo "sai";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row -->

</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
