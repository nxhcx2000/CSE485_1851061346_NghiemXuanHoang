<!--/.sidebar-->
<?php
include('../config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM quyenloi WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="">Quản lý Lợi Ích</a></li>
            <li class="active">Sửa lợi ích</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Lợi Ích</h1>
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
                                <label>Tên sở thích</label>
                                <input name="sothich" required class="form-control" placeholder="" value="<?php echo $row['sothich'];?>" >
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>

                    </form>
                    <?php
                    if(isset($_POST['sbm'])){
                        $st = $_POST['sothich'];
                        
                        
                       $sql_sot = "UPDATE quyenloi SET sothich='$st' WHERE id=$id";
                           $query_ql = mysqli_query($conn, $sql);
                        if($query_ql){
                            header('location: index.php?page=loiich');
                        }else{
                            echo 'sai';
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
