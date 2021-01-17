<!--/.sidebar-->
<?php
include('../config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM kynang WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Kỹ năng</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kỹ năng</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">

                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Công Cụ Làm Việc</label>
                                <input name="cclv" class="form-control" placeholder=""
                                    value="<?php echo $row['congculamviec'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Việc Làm</label>
                                <input name="vl" class="form-control" placeholder=""
                                    value="<?php echo $row['vieclam'] ?>">
                            </div>
                         


                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>


                    </form>
                    <?php
                    if(isset($_POST['sbm'])){
                        $lang = $_POST['cclv'];
                        $congviec = $_POST['vl'];
                        $sql = "UPDATE kynang SET congculamviec = '$lang',vieclam='$congviec' WHERE id=$id";
                        $query = mysqli_query($conn, $sql);
                        if($query){
                            header('location: index.php?page=kinang');
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
