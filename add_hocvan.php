<!--/.sidebar-->
<?php
include('../config.php');

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
                                <input name="tu2006-2012" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>2012-2015</label>
                                <input name="tu2012-2015" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>2015-2018</label>
                                <input name="tu2015-2018" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>2018-nay</label>
                                <input name="tu2018-nay" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Trường đh</label>
                                <input name="truongdh" required class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Chức danh</label>
                                <input name="chucdanh" required class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Khoa</label>
                                <input name="khoa" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Điểm TB</label>
                                <input name="diemtb" required class="form-control" placeholder="">
                            </div>
                        
                            <button name="sbm" type="submit" class="btn btn-success">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>

                    </form>
                    <?php
                    if(isset($_POST['sbm'])){
                        $tieuhoc = $_POST['tu2006-2012'];
                        $coso = $_POST['tu2012-2015'];
                        $phothong = $_POST['tu2015-2018'];
                        $daihoc = $_POST['tu2018-nay'];
                        $truong = $_POST['truongdh'];
                        $chucdanh = $_POST['chucdanh'];
                        $khoa = $_POST['khoa'];
                        $diemtb = $_POST['diemtb'];

                        $sql = "INSERT INTO giaoduc(tu2006-2012,tu2012-2015,tu2015-2018,tu2018-nay,truongdh,chucdanh,khoa,diemtb)
                                VALUES('$tieuhoc','$coso','$phothong','$daihoc','$truong','$chucdanh','$khoa','$diemtb')";
                        
                        if(mysqli_query($conn, $sql)){
                            header('location: index.php?page=hocvan');
                        }else{
                            echo $sql;
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
