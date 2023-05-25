<main class="">
<section class="product__details-area pb-45 box-plr-45 gray-bg-4 p-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="product__details-nav-wrapper d-sm-flex align-items-center">
                            <div class="product__details-nav mr-120">
                                <ul class="nav nav-tabs flex-sm-column" id="productDetailsNav" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="pro-nav-1-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-1" type="button" role="tab" aria-controls="pro-nav-1" aria-selected="true">
                                          <img style="width:80px;height:102px" src="./app/public/upload/<?=$prodDetail['img']?>" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pro-nav-2-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-2" type="button" role="tab" aria-controls="pro-nav-2" aria-selected="false">
                                        <img style="width:80px;height:102px" src="./app/public/upload/<?=$prodDetail['img']?>" alt="">
                                    </button>
                                    </li>

                                  </ul>
                            </div>
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productDetailsTabContent">
                                    
                                    <div class="tab-pane fade show active" id="pro-nav-1" role="tabpanel" aria-labelledby="pro-nav-1-tab">
                                        <div class="product-nav-thumb-wrapper">
                                            <a href="" class="product-img-zoom popup-image">
                                                <i class="fal fa-compress"></i>
                                            </a>
                                            <img src="./app/public/upload/<?=$prodDetail['img']?>" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-nav-2" role="tabpanel" aria-labelledby="pro-nav-2-tab">
                                        <div class="product-nav-thumb-wrapper">
                                            <a href="" class="product-img-zoom popup-image">
                                                <i class="fal fa-compress"></i>
                                            </a>
                                            <img src="./app/public/upload/<?=$prodDetail['img']?>" alt="">
                                        </div>
                                    </div>

                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6">
                        <div class="product__details-content pt-60">
                            <h3 class="product__details-title">
                                <a href="product-details.html"><?=$prodDetail['name_prod']?></a>
                            </h3>
                            <div class="product__details-price">
                                <span><?=number_format($prodDetail['price'])?>đ</span>
                                <!-- @if ($product->price_saled)
                                <del>{{ number_format($product->price_saled) }}đ</del>
                                @endif -->

                            </div>
                            <!-- @if($product->saled)

                                <div class="product__details-price">
                                    Giảm giá: <b>{{$product->saled}}%</b>
                                </div>



                            @endif -->

                            <!-- <div class="product__details-color d-sm-flex align-items-center mb-25">
                                <span>Màu sắc:</span>
                                <ul>
                                    <li><a href="#" class="black"></a></li>
                                    <li><a href="#" class="active brown"></a></li>
                                    <li><a href="#" class="blue"></a></li>
                                    <li><a href="#" class="red"></a></li>
                                    <li><a href="#" class="white"></a></li>
                                </ul>
                            </div> -->
                            <!-- <div class="product__details-size d-sm-flex align-items-center mb-30">
                                <span>Kích thước: </span>
                                <ul class="mr-30">
                                    <li>
                                        <a href="#" class="unavailable">S</a>
                                    </li>
                                    <li>
                                        <a href="#" >M</a>
                                    </li>
                                    <li>
                                        <a href="#">L</a>
                                    </li>
                                    <li>
                                        <a href="#">XL</a>
                                    </li>

                                </ul>
                                <button type="button" class="product-size-guide-btn float-sm-end" data-bs-toggle="modal" data-bs-target="#productSizeModal">Bảng size</button>
                            </div> -->
                            <div class="product__details-action">
                                <form action="#">
                                    <div class="product__details-quantity d-sm-flex align-items-center">
                                        <div class="product-quantity mb-20 mr-15">
                                            <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                        </div>
                                        <div class="product-add-cart mb-20">
                                            <button class="s-btn s-btn-2 s-btn-big">Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="product__details-compare">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fal fa-heart"></i>Add to Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fal fa-layer-group"></i>Add to Compare</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__details-meta mb-25">
                                <ul>
                                    <li>
                                        <div class="product-availibility">
                                            <span>Tình trạng:</span>
                                            <p>
                                                <span>Còn hàng</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-sku">
                                            <span>Sku:</span>
                                            <p>
                                                <span>0026AG90</span>
                                            </p>
                                        </div>
                                    </li>
                                    <?php 
                                        foreach($listCate as $c){
                                            if($c['id']==$prodDetail['cate_id']){
                                        
                                    ?>
                                    <li>
                                        <div class="product-sku">
                                            <span>Danh mục:</span>
                                            <p>
                                                <a href="#"><?=$c['name']?></a>

                                            </p>
                                        </div>
                                    </li>

                                    <?php }} ?>
                                    

                                    <!-- <li>
                                        <div class="product-sku">
                                            <span>Từ khóa:</span>
                                            <p>
                                                <a href="#">{{$product->tags}}</a>

                                            </p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="product__details-social d-sm-flex align-items-center">
                                <span>Share: </span>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- product details area end -->

        <!-- product info area start -->
        <section class="product__info-area pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__info-btn text-center" role="tablist">
                            <ul class="nav nav-tabs d-sm-flex justify-content-center" id="productInfoTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" type="button" id="des-tab" data-bs-toggle="tab" data-bs-target="#des"  role="tab" aria-controls="des" aria-selected="true">Mô tả</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" type="button" id="addi-tab" data-bs-toggle="tab" data-bs-target="#addi"  role="tab" aria-controls="addi" aria-selected="true">Thông tin thêm</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" type="button" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" role="tab" aria-controls="review" aria-selected="true">Nhận xét </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__info-tab-content tab-content pb-75">
                            <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                                <div class="product__details-description pt-100">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="description-thumb m-img text-center">
                                                <img src="client/assets/img/products/details/description/product-des-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="description-thumb m-img text-center">
                                                <img src="client/assets/img/products/details/description/product-des-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="description-thumb m-img text-center">
                                                <img src="client/assets/img/products/details/description/product-des-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12 ">
                                            <p class="product-additional-des mt-90"><?=$prodDetail['description']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="addi" role="tabpanel" aria-labelledby="addi-tab">
                                <div class="product__details-info mt-50">
                                    <ul>
                                       <li>
                                          <h4>Trọng lượng</h4>
                                          <span>2 lbs</span>
                                       </li>
                                       <li>
                                          <h4>Kích thước</h4>
                                          <span>12 × 16 × 19 in</span>
                                       </li>
                                       <li>
                                          <h4>Sản phẩm</h4>
                                          <span>{{$product->title}}</span>
                                       </li>
                                       <li>
                                          <h4>Màu sắc</h4>
                                          <span>{{$product->color}}</span>
                                       </li>
                                       <li>
                                          <h4>Kích thước</h4>
                                          <span>{{$product->size}}</span>
                                       </li>

                                       <li>
                                          <h4>Gía tiền</h4>
                                          <span>{{ number_format($product->price) }}đ</span>
                                          @if ($product->price_saled)
                                    <del style="padding-left:24px">{{ number_format($product->price_saled) }}đ</del>
                                    @endif
                                       </li>

                                       <li>
                                          <h4>Thương hiệu</h4>
                                          @foreach ($brand as $b)
                                          <span>{{$b->name}}</span>
                                          @endforeach
                                       </li>
                                    </ul>
                                 </div>
                            </div>
                            <div class="tab-pane fade " id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="product__details-review mt-50">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="produc-review-wrapper">
                                                <div class="product-review-item">
                                                    <div class="product-review-top d-flex align-items-center justify-content-between">
                                                        <div class="product-review-name d-sm-flex align-items-center">
                                                            <h4 class="mr-10">Shahnewaz Sakil</h4>
                                                            <span class="date">September 06, 2020</span>
                                                        </div>
                                                        <div class="product-review-rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Many desktop publishing packages and web page editors now use lorem ipsum as default model text, and a search for “lorem ipsum” will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                </div>
                                                <div class="product-review-item">
                                                    <div class="product-review-top d-flex align-items-center justify-content-between">
                                                        <div class="product-review-name d-sm-flex align-items-center">
                                                            <h4 class="mr-10">Anya Ivanova</h4>
                                                            <span class="date">September 06, 2020</span>
                                                        </div>
                                                        <div class="product-review-rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Many desktop publishing packages and web page editors now use lorem ipsum as default model text, and a search for “lorem ipsum” will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                </div>
                                                <div class="product-review-item">
                                                    <div class="product-review-top d-flex align-items-center justify-content-between">
                                                        <div class="product-review-name d-sm-flex align-items-center">
                                                            <h4 class="mr-10">Evan Bohringer</h4>
                                                            <span class="date">September 06, 2020</span>
                                                        </div>
                                                        <div class="product-review-rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Many desktop publishing packages and web page editors now use lorem ipsum as default model text, and a search for “lorem ipsum” will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                </div>
                                                <div class="product-review-item">
                                                    <div class="product-review-top d-flex align-items-center justify-content-between">
                                                        <div class="product-review-name d-sm-flex align-items-center">
                                                            <h4 class="mr-10">Eren Topher</h4>
                                                            <span class="date">September 06, 2020</span>
                                                        </div>
                                                        <div class="product-review-rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Many desktop publishing packages and web page editors now use lorem ipsum as default model text, and a search for “lorem ipsum” will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="product-review-form pl-60">
                                                <form action="#">
                                                    <h3 class="product-review-title">YOU'RE REVIEWING: <span>“Simple Stylish Women Backpack”</span></h3>
                                                    <p class="product-review-form-des">Your email address will not be published. Required fields are marked *</p>
                                                    <div class="product-review-form-rating mb-40">
                                                        <p>Your Rating</p>
                                                        <ul>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-review-form-wrapper">
                                                        <div class="row">
                                                            <div class="col-xxl-12">
                                                                <div class="product-review-input">
                                                                    <label>Your Review *</label>
                                                                    <textarea></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <div class="product-review-input">
                                                                    <label>Name *</label>
                                                                    <input type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <div class="product-review-input">
                                                                    <label>Email *</label>
                                                                    <input type="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="product-review-agree d-flex align-items-center mb-45">
                                                                    <input type="checkbox" id="agree">
                                                                    <label for="agree">Save my name, email, and website in this browser for the next time I comment.</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12">
                                                                <div class="product-review-btn">
                                                                    <button type="submit" class="s-btn s-btn-2 s-btn-big-2">Submit Review</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>