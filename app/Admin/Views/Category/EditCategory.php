    <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">



                    <!-- end row -->



                    <div class="row" style="margin-top:10px;padding-left:150px; ">
                        <div class="col-sm-9">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="text-center" style="font-family: system-ui;">CẬP NHẬT DANH MỤC</h1>
                                        <div class="demo-box">
                                            <form method="POST" action="../admin/index.php?act=UpdateCategory" data-parsley-validate novalidate enctype="multipart/form-data">
                                                <!-- <div class="result" id="result"></div> -->
                                                <input type="hidden" name="id" parsley-trigger="change" required placeholder="Tên" class="form-control" id="id" value="<?=$Ecate['id']?>">

                                                <div class="form-group">
                                                    <label for="userName">Tên<span class="text-danger">*</span></label>
                                                    <input type="text" name="name" parsley-trigger="change" required placeholder="Tên" class="form-control" id="name" value="<?=$Ecate['name']?>">
                                                    
                                                    <!-- <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name') }}</strong> -->
                                                
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="userName">Trạng thái<span class="text-danger">*</span></label><br>    
                                                           <select style="width: 140px;height: 30px;border-radius:4px;text-align:center;font-size:15px" class="form-select" id="status"  name="status" aria-label="Default select example">
                                                            <?php 
                                                                $status = array('0'=>'Hiện' , '1'=>'Ẩn');
                                                                foreach($status as $row =>$item){
                                                                    if($row == $Ecate['status'] ){

                                                            ?>
                                                                <option selected value="<?=$row?>"><?=$item?></option>   
                                                            <?php }else{ ?>
                                                                <option value="<?=$row?>"><?=$item?></option>   
                                                            <?php }} ?>
 
                                                            
                                                          <!-- @if($errors->has('status'))
                                                          <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('status') }}</strong>
                                                          @endif  -->
                                                          
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Parent_id<span class="text-danger">*</span></label><br>    
                                                           <select style="width: 140px;height: 30px;border-radius:4px;text-align:center;font-size:15px" class="form-select" id="parent_id" name="parent_id" aria-label="Default select example">
                                                                <option value="0">Không</option>
                                                            <?php 
                                                                foreach($listCate as $c){
                                                                    if($c['id']==$Ecate['parent_id']){
                                                            ?>
                                                                <option selected value="<?=$c['id']?>"><?=$c['name']?></option>   
                                                            <?php }else{ ?>
                                                                <option value="<?=$c['id']?>"><?=$c['name']?></option> 
                                                            <?php }} ?>
                                                                
                                                                                                        
                                                          <!-- @if($errors->has('status'))
                                                          <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('status') }}</strong>
                                                          @endif  -->
                                                          
                                                        </select>
                                                </div>


                                                <div class="form-group text-right m-b-0">
                                                    <button id="submit_cate" name="submit_cate"  class="btn btn-primary waves-effect waves-light" type="submit">
                                                        Cập nhật
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" style="height:34px"><a href="../admin/index.php?act=listCategory"   style="color:white;height:50px">Hủy bỏ</a></button>                                                            

                                                </div>

                                            </form>


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
<script type="text/javascript">
$(document).ready(function (){
    $("#submit_cate").on("click", function(e){
        e.preventDefault();
        var id = $("#id").val();
        var name = $("#name").val();
        var status = $("#status").val();
        var parent_id = $("#parent_id").val();
        var submit_cate = $("#submit_cate").val();
        if(name == ""){
            Swal.fire({
            icon: 'error',
            text: 'Không được bỏ trống'
            })
        }else{
            $.ajax({
            url: '../admin/index.php?act=UpdateCategory',
            method: "POST",
            data:{
                id: id,
                name:name,
                status:status,
                parent_id:parent_id,
                submit_cate: submit_cate


            },
            success: function(data){
                $("#result").html(data);
                Swal.fire({
                    icon: 'success',
                    text: 'Cập nhật thành công'
                }).then(()=>{
                    window.location.href="../admin/index.php?act=listCategory";
                })
                    
            }
            })
        }
        
    })
})


</script>

