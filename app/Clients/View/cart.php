  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
            <div class="cart_inner row">
                <div class="table-responsive col-md-6">
                  <table class="table">
                      <thead>
                          <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <!-- <th scope="col"></th> -->
                          </tr>
                      </thead>
                      <tbody>
                            <?php
                                
                                if(isset($_SESSION['cart']) && (count($_SESSION['cart'])>0)){
                                    $i=0;
                                    $tong=0;
                                foreach($_SESSION['cart'] as $item){
                                    $tt = $item[2] * $item[4];
                                    $tong+=$tt;
                            ?>
                                <tr>
                                <td>
                                    <input type="hidden" value="<?=$i++?>">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="./app/public/upload/<?=$item[3]?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?=$i++?>-<?=$item[1]?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5><?=number_format($item[2])?></h5>
                                </td>
                              <td>
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="5" min="1" max="5" value="<?=$item[4]?>" title="Quantity:"
                                          class="input-text qty">
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                          class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                          class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                  </div>
                              </td>
                              <td>
                                  <h5><?=number_format($tt)?>đ</h5>
                              </td>
                              <td>
                                  <a href="index.php?url=delCart&id=<?=$item[0]?>" class="btn btn-danger" >Xoá</a>
                              </td>
                          </tr>
                            <?php }} ?>
                            

                        
                          <tr class="bottom_button">
                              <td>
                                  <a class="button" href="index.php?url=delCart">Delete Cart</a>
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="cupon_text d-flex align-items-center">
                                      <input type="text" placeholder="Coupon Code">
                                      <a class="primary-btn" href="#">Apply</a>
                                      <a class="button" href="#">Have a Coupon?</a>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Subtotal</h5>
                              </td>
                              <td>
                                  <h5><?php  if(isset($tong)){echo number_format($tong);}else {echo $tong=0; }?>đ
                                </h5>
                              </td>
                          </tr>
                            <!-- <tr class="shipping_area">
                              <td class="d-none d-md-block">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Shipping</h5>
                              </td>
                              <td>
                                  <div class="shipping_box">
                                      <ul class="list">
                                          <li><a href="#">Flat Rate: $5.00</a></li>
                                          <li><a href="#">Free Shipping</a></li>
                                          <li><a href="#">Flat Rate: $10.00</a></li>
                                          <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                      </ul>
                                      <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                      <select class="shipping_select">
                                          <option value="1">Bangladesh</option>
                                          <option value="2">India</option>
                                          <option value="4">Pakistan</option>
                                      </select>
                                      <select class="shipping_select">
                                          <option value="1">Select a State</option>
                                          <option value="2">Select a State</option>
                                          <option value="4">Select a State</option>
                                      </select>
                                      <input type="text" placeholder="Postcode/Zipcode">
                                      <a class="gray_btn" href="#">Update Details</a>
                                  </div>
                              </td>
                          </tr> -->
                            <!-- <tr class="out_button_area col-md-4">
                            
                              <td class="d-none-l">

                              </td>
                              <td class="">

                              </td>
                              <td>

                              </td>
                              <td>
                        
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="index.php">Continue Shopping</a>
                                      <a class="primary-btn ml-2" href="#">Proceed to checkout</a>
                                  </div>
                              </td>
                          </tr> -->
                      </tbody>
                  </table>
                </div>
              <div class="ms-4 col-md-5 ">
                    <form action="index.php?url=order" method="POST" class="p-3 border rounded  shadow-sm">
                        <h4 class="text-center">Thông tin đặt hàng</h4>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" name="ht" id="ht" class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số điện thoại</label>
                            <input type="text" name="sdt" id="sdt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phương thức thanh toán</label>
                            <br>
                            <input type="radio" name="pttt" id="pttt" value="0" >Thanh toán trực tiếp</br>
                            <input type="radio" name="pttt" id="pttt" value="1">Thanh toán online</br>
                        </div>
                        <input type="hidden" name="tongdon" id="tongdon" class="form-control" value="<?=$tong?>">
                        <button type="submit" name="thanhtoan" class="btn btn-outline-danger">Đặt hàng</button>
                    </form>
              </div>
            </div>
      </div>
  </section>

  <!-- <script type="text/javascript">
    function del(event,i){
        event.preventDefault();
        Swal.fire({
            title: 'Bạn có chắc không?',
            text: "Bạn sẽ không thể trở lại ban đầu !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, xóa nó!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Xóa!',
                    'Đã bị xóa',
                    'Thành công'
                ).then(()=>{
                    window.location.href ='index.php?url=delCart&i='+i;
                })
                // xóa
                

            }
        })

        
    }
</script> -->