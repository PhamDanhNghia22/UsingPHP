
  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
           
              <div class="table-responsive">
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
                        if(isset($_SESSION['iddh'])){
                        $tong=0;
                        foreach($getOrder as $o){
                          $tt = $o['dongia'] * $o['soluong'];
                          $tong+=$tt ;
                          
                          if($o['orderID']==$_SESSION['iddh']){
                      
                      ?>
                      <tr>
                                <td>
                                    <input type="hidden" value="<?=$i++?>">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="./app/public/upload/<?=$o['img']?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?=$o['name_prod']?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5><?=number_format($o['dongia'])?></h5>
                                </td>
                              <td>
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="5" min="1" max="5" value="<?=$o['soluong']?>" title="Quantity:"
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
                              <!-- <td>
                                  <a href="index.php?url=delCart&id=<?=$item[0]?>" class="btn btn-danger" >Xoá</a>
                              </td> -->
                          </tr>

                      
                      <?php }}}?>
                      </ttbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  