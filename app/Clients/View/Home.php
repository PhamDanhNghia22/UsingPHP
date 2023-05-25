<main>

<!-- slider area start -->
<section class="slider-area-rel">

    <div class="pl-20 pr-20">
        <div class="row row-2">
            <div class="col-xxl-6 col-xl-6 col-md-6 col-12">
                <div class="single-category mb-20 p-rel wow fadeInUp" data-wow-delay=".1s">
                    <a href="shop.html">
                        <div class="cat-thumb fix">
                            <img src="./app/public/client/assets/img/slider/mmmm.jpg" alt="#">
                        </div>
                        <div class="cat-content p-abs bottom-left">
                            <h2 style="position: absolute;left: 100px;bottom: 113px;" class="pb-15">CHÚC MỪNG NGÀY 20/11</h2>
                                <p class="s-desc pb-75" style="padding-left: 62px;font-size: 17px;position: absolute;left: 39px;bottom: 27px;">Ngày nhà giáo Việt Nam 20/11 là sự kiên lớn rất thích hợp cho ra mắt sản phẩm mới  </p>
                                <div class="click" style="padding-left:163px">
                                    <button class="cat-subtitle " style="background-color: black;color: white; width: 187px;height: 44px;font-size: 23px;">Xem ngay</button>

                                </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xxl-6 col-xl-6 col-md-6 col-12">
                <div class="row row-2">
                    <div class="col-xxl-12">
                        <a href="shop.html">
                            <div class="single-category mb-20 p-rel wow fadeInUp" data-wow-delay=".9s">
                                <div class="cat-thumb fix">
                                    <img src="./app/public/client/assets/img/slider/vvv.jpg" alt="#">
                                </div>
                                <div class="cat-content p-abs bottom-left">
                                    <h4  class="pb-15">GIẢM GIÁ ĐẾN 70% </h4>
                                    <span class="cat-subtitle">Xem ngay</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-12">
                        <a href="shop.html">
                            <div class="single-category mb-20 p-rel wow fadeInUp" data-wow-delay=".9s">
                                <div class="cat-thumb fix">
                                    <img src="./app/public/client/assets/img/slider/vvv.jpg" alt="#">
                                </div>
                                <div class="cat-content p-abs bottom-left">
                                    <h4  class="pb-15">BLACK FRIDAY</h4>
                                    <span class="cat-subtitle">28 Products</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- slider area end -->

<!-- category area start -->

<div class="category-area fix mt-3-px pb-75">
    <div class="row row-3">
       
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-12">
                <a href="shop.html">
                    <div class="single-category mb-20 p-rel wow fadeInUp" data-wow-delay=".3s">
                        <div class="cat-thumb fix">
                            <img src=" alt="#">
                        </div>
                        <div class="cat-content p-abs bottom-left">
                            <h4 class="pb-15"> </h4>
 


                            <span class="cat-subtitle"> Sản phẩm</span>

                        </div>
                    </div>
                </a>
        </div>
    

    </div>
</div>

<!-- category area end -->

<!-- top selling area start -->
<div class="top-selling-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title top-selling-title text-center pb-47">
                    <span class="p-subtitle p-subtitle-2">Khám phá cách nhìn</span>
                    <h3 class="p-title pb-15 mb-0">TẤT CẢ SẢN PHẨM</h3>

                </div>
            </div>
        </div>
        <div class="row pb-20">
            <?php 
                foreach($prod as $p ){
                    if($p['status_prod']==0){
            ?>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                    <div class="product-thumb">
                        <img src="./app/public/upload/<?=$p['img']?>" alt="">
                        <img src="" alt="#">
                        <!-- index.php?url=addCart -->
                        <form action="index.php?url=addCart" method="POST">
                            <input type="hidden" id="idprod" name="idprod" value="<?=$p['id_prod']?>">
                            <input type="hidden" id="nameprod" name="nameprod" value="<?=$p['name_prod']?>">
                            <input type="hidden" id="price" name="price" value="<?=$p['price']?>">
                            <input type="hidden" id="img" name="img" value="<?=$p['img']?>">
                            <button type="submit" name="addCart" id="addCart"  class="cart-btn cart-btn-1 p-abs p-2">Thêm vào giỏ hàng</button>
                        </form>
                        <!-- <div >
                            <a href="#"></a>
                        </div> -->
                            
                        <div class="product-action product-action-1 p-abs">
                            <a href="" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModal">
                                <i class="fal fa-eye"></i>
                                <i class="fal fa-eye"></i>
                            </a>
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-heart"></i>
                                <i class="fal fa-heart"></i>
                            </a>
                            <a href="#" class="icon-box icon-box-1">
                                <i class="fal fa-layer-group"></i>
                                <i class="fal fa-layer-group"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4 class="pro-title pro-title-1"><a href=""><?=$p['name_prod']?></a></h4>
                        <div class="pro-price">
                            <span><?=number_format($p['price'])?>đ</span>
                            
                            <del>đ</del>
                            
                        </div>
                        <div class="rating">
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star active"></i>
                            <i class="fal fa-star"></i>
                            <i class="fal fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
            
            
            




        <div class="row">
            <div class="col-xxl-12">
                <div class="btn-area text-center wow fadeInUp" data-wow-delay="1.2s">
                    <div class="p-btn p-btn-1">
                        <a href="shop.html">TẤT CẢ SẢN PHẨM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top selling area end -->

<!-- banner area start -->
<!-- {{-- <div class="banner-area pb-95">
    <div class="pl-15 pr-15">
        <div class="row">
            <div class="col-xxl-6 col-lg-6 col-md-6 ps-0">
                <div class="single-banner single-banner-2 p-rel fix mb-30 mb-md-0 wow">
                    <div class="thumb">
                        <img src="./app/public/client/assets/img/banner/banner-3.jpg" class=" wow fadeInRight h-100"
                            data-wow-delay=".10s" alt="#">
                    </div>
                    <div class="banner-content banner-content-2 wow fadeInLeft" data-wow-delay=".10s">
                        <span>For women products</span>
                        <h4><a href="shop.html">Premium Travel Backpack</a></h4>
                        <p>Price guarantee. Found it cheaper - we'll match</p>
                        <div class="p-btn p-btn-2">
                            <a href="shop.html">SHOP COLLECTION</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-md-6 pe-0">
                <div class="single-banner single-banner-2 p-rel fix wow fadeInRight" data-wow-delay=".15s">
                    <div class="thumb ">
                        <img src="./app/public/client/assets/img/banner/banner-4.jpg" class=" wow fadeInRLeft h-100"
                            data-wow-delay=".10s" alt="#">
                    </div>
                    <div class="banner-content banner-content-2  wow fadeInLeft" data-wow-delay=".15s">
                        <span>TRENDING PRODUCTS</span>
                        <h4><a href="shop.html">Lifestyle Accessories Parrot</a></h4>
                        <p>Secure & encrypted checkout</p>
                        <div class="p-btn p-btn-2">
                            <a href="shop.html">SHOP COLLECTION</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}} -->
<!-- banner area end -->

<!-- top selling product area start -->
<div class="top-selling-product pb-65">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section-title text-center pb-47">
                    <span class="p-subtitle p-subtitle-2">KHÁM PHÁ CÁCH NHÌN</span>
                    <h3 class="p-title pb-15 mb-0">SẢN PHẨM NỔI BẬT</h3>
                </div>
            </div>
        </div>
        <div class="row">
            
                <div class="col-xxl-12">
                    <div class="top-selling-active owl-carousel">
                        <?php
                            foreach($prod as $p){
                            if($p['status_prod']==0 && $p['noibat']==0){
                        ?>
                        <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                            <div class="product-thumb">
                                <img src="./app/public/upload/<?=$p['img']?>" alt="#">
                                <img src="" alt="#" >
                                <div class="cart-btn cart-btn-2 p-abs">
                                    <a href="#">Thêm vào giỏ hàng</a>
                                </div>
                            
                                <span class="discount discount-3 p-abs"  >

                                    %

                                    </span>
                                
                                <div class="product-action product-action-1 p-abs">
                                    <a href="" class="icon-box icon-box-2" data-bs-toggle="modal" data-bs-target="#productModal">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-2">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-2">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4 class="pro-title pro-title-2"><a href="index.php?url=productDeatil&id=<?=$p['id_prod']?>"><?=$p['name_prod']?></a></h4>
                                <div class="pro-price">
                                    <span><?=number_format($p['price'])?>đ</span>
                                    
                                    <del>đ</del>
                                    
                                </div>
                                <div class="rating">
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                    </div>
                   
                </div>
           
            
        </div>
    </div>
</div>
<!-- top selling product area end -->
<hr class="mb-100">

<!-- blog area start -->
<div class="blog-area pb-60">
    <div class="container">
        <div class="row mb-45">
            <div class="col-xxl-12">
                <div class="section-title text-center">
                    <span class="p-subtitle p-subtitle-2">KHÁM PHÁ CÁCH NHÌN</span>
                    <h3 class="p-title pb-15 mb-0">BÀI VIẾT MỚI NHẤT</h3>

                </div>
            </div>
        </div>
        <div class="blog-active owl-carousel">
           
            <div class="col-xxl-12">
                <div class="single-blog wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="" alt="#"></a>
                    </div>
                    <div class="blog-content blog-content-3">
                        <a href="#" class="tag-btn tag-btn-2"></a>
                        <div class="blog-meta blog-meta-2">
                            Ngày đăng: <a href="#"><span></span></a> / Bởi: <a href="#"><span></span></a>.
                        </div>
                        <div class="row" style="width:330px;height:100px">
                            <h1 class="blog-title blog-title-2" style="font-size: 18px;text-transform: uppercase"><a href="blog-details.html"></a></h1>

                        </div>
                        <div class="border-bottom-gray border-0">
                            <p></p>
                            <div class="p-btn p-btn-3">
                                <a href="blog-details.html">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- blog area end -->

<!-- subscribe area start -->

<!-- subscribe area end -->

<!-- product modal area start -->
<div class="product__modal-area modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="product__modal-inner position-relative">
            <div class="product__modal-close">
                <button data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="product__modal-left">
                <div class="tab-content mb-10" id="productModalThumb">
                    <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="client/ssets/img/products/modal/product-modal-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="client/assets/img/products/modal/product-modal-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="client/assets/img/products/modal/product-modal-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                        <div class="product__modal-thumb w-img">
                            <img src="client/assets/img/products/modal/product-modal-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="product__modal-nav">
                    <ul class="nav nav-tabs" id="productModalNav" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1" aria-selected="true">
                            <img src="client/assets/img/products/modal/product-modal-sm-1.jpg" alt="">
                        </button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab" aria-controls="pro-2" aria-selected="false">
                            <img src="client/assets/img/products/modal/product-modal-sm-2.jpg" alt="">
                        </button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab" aria-controls="pro-3" aria-selected="false">
                            <img src="client/assets/img/products/modal/product-modal-sm-3.jpg" alt="">
                        </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button" role="tab" aria-controls="pro-4" aria-selected="false">
                            <img src="client/assets/img/products/modal/product-modal-sm-4.jpg" alt="">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product__modal-right">

                <h3 class="product__modal-title">
                    <a href="product-details.html"></a>
                </h3>
                <div class="product__modal-rating d-flex align-items-center">
                    <ul class="mr-10">
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-star"></i></a>
                        </li>
                    </ul>
                    <div class="customer-review">
                        <a href="#">(1 customer review)</a>
                    </div>
                </div>
                <div class="product__modal-price mb-10">
                    <span class="price new-price">$700.00</span>

                    <span class="price old-price">$899.99</span>
                </div>
                <div class="product__modal-available">
                    <p> Availability: <span>In Stock</span> </p>
                </div>
                <div class="product__modal-sku">
                    <p> Sku: <span> 0026AG90-1</span> </p>
                </div>
                <div class="product__modal-des">
                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod legunt saepius.…</p>
                </div>
                <div class="product__modal-quantity mb-15">
                    <h5>Quantity:</h5>
                    <form action="#">
                        <div class="pro-quan-area d-sm-flex align-items-center">
                            <div class="product-quantity mr-20 mb-25">
                                <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                            </div>
                            <div class="product__modal-cart mb-25">
                                <button class="product-modal-cart-btn " type="submit">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="product__modal-categories d-sm-flex align-items-center">
                    <span>Categories: </span>
                    <ul>
                        <li><a href="#">Decor, </a></li>
                        <li><a href="#">Lamp, </a></li>
                        <li><a href="#">Lighting</a></li>
                    </ul>
                </div>
                <div class="product__modal-categories d-sm-flex align-items-center">
                    <span>Tags: </span>
                    <ul>
                        <li><a href="#">Furniture, </a></li>
                        <li><a href="#">Lighting, </a></li>
                        <li><a href="#">Living Room, </a></li>
                        <li><a href="#">Table</a></li>
                    </ul>
                </div>
                <div class="product__modal-share d-sm-flex align-items-center">
                    <span>Share this product: </span>
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
</div>
<!-- product modal area start -->

<!-- popup area start -->
<div class="subscribe-popup d-none">
    <div class="subscribe-wrapper s-popup-padding h-100">
        <div class="pl-75 pr-75">
            <div class="row">
                <div class="col-xxl-6">
                    <div class="subscribe-content">
                        <div class="logo mb-65">
                            <a href="index.html"><img src="client/assets/img/logo/logo-black.png" alt=""></a>
                        </div>
                        <h4 class="popup-title">Comming Soon</h4>
                        <p class="popup-desc">We’ll be here soon with our new<br>
                            awesome site, subscribe to be notified.</p>
                        <div class="comming-countdown  pb-45">
                            <div class="countdown-inner" data-countdown="" data-date="Mar 02 2024 20:20:22">
                                <ul>
                                    <li><span data-days="">401</span> Days</li>
                                    <li><span data-hours="">1</span> hours</li>
                                    <li><span data-minutes="">29</span> mins</li>
                                    <li><span data-seconds="">40</span> secs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="subscribe-form-2 mb-30">
                            <input type="email" placeholder="Enter your email...">
                            <button class="p-btn border-0">Subscribe</button>
                        </div>
                        <div class="popup-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fal fa-basketball-ball"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="subscribe-thumb" data-background="./app/public/client/assets/img/popup/subscribe-bg.jpg"></div>
</div>
<!-- popup area end -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<!-- <script src="./app/public/client/assets/js/addCart.js"></script> -->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $("#addCart").on("click", function (e){
            e.preventDefault();
            var id = $("#idprod").val();
            // alert(id);
        })
    })

</script> -->



