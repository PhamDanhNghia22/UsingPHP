<div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">



                    <!-- end row -->



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                        <div class="demo-box">
                                            <form action="" class="form-inline" role="form">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm" name="key" value="">
                                                <button style="background-color:#36404e;" type="submit" class="btn btn- "><i style="color:white;" class="fas fa fa-search"></i></button>
                                                <a href="../admin/index.php?act=addProduct" class="btn btn-success">Thêm mới</a>
                                            </form>
                                            <hr>
                                            <?php 
                                                if(isset($mess)){
                                            ?>
                                                <div id="div-alert" style="position:absolute; right: 10px;" class="float-right mt-2 alert alert-success alert-dismissible show" role="alert" style="position: absolute;">
                                                    <strong><?php echo $mess ?></strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <?php } ?>
                                            
                                            <table id="dt-opt" class="table table-striped add-edit-table table-bordered ">
                                                <thead style="background-color:#36404e;color:white;">
                                                    <tr>
                                                        <th style="text-align: center;font-size:18px">Thứ tự</th>
                                                        <th style="text-align: center;font-size:18px">Hình</th>
                                                        <th style="text-align: center;font-size:18px">Tên</th>
                                                        <th style="text-align: center;font-size:18px">Giá</th>
                                                        <th style="text-align: center;font-size:18px"> Trạng thái</th>
                                                        <th style="text-align: center;font-size:18px">Danh Mục</th>
                                                        <th style="text-align: center;font-size:18px">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                            
                                                <tbody>
                                                    <?php 
                                                        foreach($listProd as $p){
                                                    ?>
                                                        <tr>
                                                            <th style="text-align: center"><?=$p['id_prod']?></th>
                                                            <th>
                                                            <image width="60px" height="80px" src="../public/upload/<?=$p['img']?>">
                                                            </th>
                                                            <th style="text-align: center"><?=$p['name_prod']?></th>
                                                            <th style="text-align: center"><?=$p['price']?></th>
                                                            <th style="text-align: center">
                                                                <?php 
                                                                    if($p['status_prod']==0){
                                                                ?>
                                                                <button class="btn btn-success btn-sm">hiện</button>
                                                                <?php }else{ ?>
                                                                    <button class="btn btn-danger btn-sm">Ẩn</button>
                                                                <?php } ?>
                                                            
                                                                
                                                            </th>
                                                           
                                                            <th style="text-align: center"><?=$p['name']?></th>
                                                            <td class=" text-center font-size-10">
                                                                <button class="btn btn-primary btn-sm " style="width:35px"><a href="../admin/index.php?act=EditProduct&id=<?=$p['id_prod']?>" class="text-gray m-r-5"><i style="color:white;padding-left:2px" class="ti-pencil"></i></a></button>
                                                                <button class="btn btn-danger btn-sm" ><a href="../admin/index.php?act=DeleteCate&id=" id="delete" onclick="delete()"  class="text-gray "><i style="color:white" class="ti-trash "></i></a></button>
                                                            </td> 
                                                        </tr>
                                                    

                                                    <?php }?>
                                                    

                                                    
                                                </tbody>

                                                
                                            </table>

                                        </div>

                                    </div>


                                </div>

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container -->

            </div> <!-- content -->



        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
