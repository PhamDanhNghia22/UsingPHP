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
                                        <h1 class="text-center" style="font-family: system-ui;">THÊM SẢN PHẨM</h1>
                                        <div class="demo-box">
                                            <form method="POST" action="../admin/index.php?act=addProduct" data-parsley-validate novalidate enctype="multipart/form-data">
                                                <!-- <div class="result" id="result"></div> -->
                                                <div class="form-group">
                                                    <label for="userName">Tên<span class="text-danger">*</span></label>
                                                    <input type="text" name="nameprod" parsley-trigger="change" required placeholder="Tên" class="form-control" id="nameprod" value="">
                                                    
                                                    <!-- <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name') }}</strong> -->
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Giá<span class="text-danger">*</span></label>
                                                    <input type="text" name="price" parsley-trigger="change" required placeholder="Giá" class="form-control" id="price" value="">
                                                    
                                                    <!-- <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name') }}</strong> -->
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Hình Ảnh<span class="text-danger">*</span></label>
                                                    <input type="file" name="img" multiple parsley-trigger="change" required placeholder="Hình" class="form-control" id="img" value="">
                                                    
                                                    <!-- <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name') }}</strong> -->
                                                
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="userName">Trạng thái<span class="text-danger">*</span></label><br>    
                                                           <select style="width: 140px;height: 30px;border-radius:4px;text-align:center;font-size:15px" class="form-select" id="status"  name="status" aria-label="Default select example">
                                                            <option value="0">Hiện</option>    
                                                            <option value="1">Ẩn</option>                                                    
                                                          <!-- @if($errors->has('status'))
                                                          <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('status') }}</strong>
                                                          @endif  -->
                                                          
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Category_id<span class="text-danger">*</span></label><br>    
                                                           <select style="width: 140px;height: 30px;border-radius:4px;text-align:center;font-size:15px" class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                                                            <?php 
                                                                foreach($listCate as $c){
                                                            ?>
                                                            <option value="<?=$c['id']?>"><?=$c['name']?></option>
                                                            <?php } ?>                                                 
                                                          <!-- @if($errors->has('status'))
                                                          <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('status') }}</strong>
                                                          @endif  -->
                                                          
                                                        </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="userName">Mô tả<span class="text-danger">*</span></label>
                                                    <textarea name="des" id="des" parsley-trigger="change" required class="form-control" cols="30" rows="10"></textarea>
                                                    <!-- <input type="text" name="name" parsley-trigger="change" required placeholder="Tên" class="form-control" id="name" value=""> -->
                                                    
                                                    <!-- <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name') }}</strong> -->
                                                
                                                </div>


                                                <div class="form-group text-right m-b-0">
                                                    <button id="submit_prod" name="submit_prod"  class="btn btn-primary waves-effect waves-light" type="submit">
                                                        Thêm
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
    <script src="../public/admin/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('des')
        CKEDITOR.replace('des')
    </script>
    <script>
        $(document).ready(function (){
            $('#submit_prod').click(function (e){
                e.preventDefault();
                var form_Data = new FormData();
                // alert(new FormData(this));
                var img = $("#img")[0].files;
                // console.log(img[0]);
                var des = CKEDITOR.instances['des'].getData();
                var nameprod = $('#nameprod').val();
                var price = $('#price').val();
                var category_id = $('#category_id').val();
                var status = $('#status').val();
                var submit_prod =$('#submit_prod').val();

                form_Data.append('img', img[0]);
                form_Data.append('nameprod', nameprod);
                form_Data.append('price', price);
                form_Data.append('des',des);
                form_Data.append('status', status);
                form_Data.append('category_id',category_id);
                form_Data.append('submit_prod',submit_prod);

                
                
                if(name=="" && price==""){
                    alert("không được bỏ trống");
                }else{
                    $.ajax({
                        url: '../admin/index.php?act=addProduct',
                        type: 'POST',
                        data: form_Data,
                        contentType: false,
                        processData: false,
                        success: function (res){
                            // console.log(res);
                            Swal.fire({
                                    icon: 'success',
                                    text: 'Thêm thành công'
                            })

                        }
                    })
                }
                
            })
        })
    </script>

