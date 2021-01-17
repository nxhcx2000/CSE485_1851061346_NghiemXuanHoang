<?php
include('../config.php');
$sql = "SELECT * FROM giaoduc";
$query =mysqli_query($conn, $sql);

?>
<!--/.sidebar-->
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
    <div id="toolbar" class="btn-group">
        <a href="index.php?page=add_hocvan" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm quá trình
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table style="text-align: center;" data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">2006-2012</th>                             
                                <th>2012-2015</th>                               
                                <th>2015-2018</th>                               
                                <th>2018-nay</th>
                                <th>Trường đại học</th>
                                <th>Chức danh</th>
                                <th>Khoa</th>
                                <th>Điểm TB</th>
                                <th>Hành động</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td style="">
                                <?php echo $row['id'];?>
                                </td>
                                <td style="">
                                <?php echo $row['tu2006-2012'];?>
                                </td>
                                <td style="">
                                <?php echo $row['tu2012-2015'];?>
                                </td>
                                <td style="">
                                <?php echo $row['tu2015-2018'];?>
                                </td>
                                <td style="">
                                <?php echo $row['tu2018-nay'];?>
                                </td>    
                                <td style="">
                                <?php echo $row['truongdh'];?>
                                </td>
                                <td style="">
                                <?php echo $row['chucdanh'];?>
                                </td>
                                <td style="">
                                <?php echo $row['khoa'];?>
                                </td>                
                                <td style="">
                                <?php echo $row['diemtb'];?>
                                </td>          
                                <td class="form-group">
											<a href="index.php?page=edit_hocvan&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
											<a onclick="return confirm('Bạn muốn xóa không ?')" href="index.php?page=del_hocvan&id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
										</td>
                            </tr>

                       
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>

<!--/.main-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<!--/.main-->
