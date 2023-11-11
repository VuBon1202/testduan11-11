
<!-- maincontent -->
<section class="mymaincontent my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/banner/banner1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/banner/banner2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/banner/banner3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dm2">
                <ul class="list-group ">
                    <div class="list-group-item active dm" aria-current="true">Danh mục sản phẩm</div>
                    <div class="boxright">      
                        <?php include "boxdm.php"?>
                    </div>
                </ul>
            </div>
            <style>
                .dm {
                    background-color: #DC3545 !important;
                    border: 10px solid #DC3545 !important;
                    text-align: center;
                    border-radius: 0% !important;
                    
                }

                .dm2 ul li {
                    border-radius: 0% !important;
                }


                .dm2 li a {
                    text-decoration: none !important;
                    color: black;
                }

                .dm2 li a:hover {
                    color: #ff0000;
                    opacity: 0.7;

                }

                .dm2 li:hover {
                    transform: scale(1.01);
                    color: #d51b2e;
                    border-left: 2px solid #d51b2e;
                    cursor: pointer;
                }
            </style>
            
        </div>
        <div class="hrne container mt-5">
            <style>
                .hrne {
                    max-width: 1080px;
                    height: 1px;
                    border: 1px solid #d51b2e;
                }
            </style>
        </div>
        <!-- slideshow -->
        <div class="slider">
            <div class="row">
                <div class="large-12 columns mt-5">
                    <div class="owl-carousel owl-theme anhcrs">
                        <div class="item">
                            <img src="./img/sanpham/sp1.png" alt="">
                            <p>Sản phẩm 1</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp2.png" alt="">
                            <p>Sản phẩm 2</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp3.png" alt="">
                            <p>Sản phẩm 3</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp4.png" alt="">
                            <p>Sản phẩm 4</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp5.png" alt="">
                            <p>Sản phẩm 5</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp6.png" alt="">
                            <p>Sản phẩm 6</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp7.png" alt="">
                            <p>Sản phẩm 7</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp1.png" alt="">
                            <p>Sản phẩm 1</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp2.png" alt="">
                            <p>Sản phẩm 2</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp3.png" alt="">
                            <p>Sản phẩm 3</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp4.png" alt="">
                            <p>Sản phẩm 4</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp5.png" alt="">
                            <p>Sản phẩm 5</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp6.png" alt="">
                            <p>Sản phẩm 6</p>
                        </div>
                        <div class="item">
                            <img src="./img/sanpham/sp7.png" alt="">
                            <p>Sản phẩm 7</p>
                        </div>
                    </div>
                    <style>
                        .anhcrs img {
                            max-width: 70px;
                            border-radius: 20%;
                            text-align: center;
                            border: 1px solid #efb7bb;
                            background-color: #f8dddd;
                        }

                        .anhcrs .item p {
                            text-align: center;
                        }


                        .anhcrs .item img {
                            margin-left: 85px;
                        }
                    </style>

                </div>
            </div>
        </div>
        <!-- end-slideshow -->

        <div class="product-content">
            <nav>
                <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kem chống nắng</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sữa rửa mặt</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Nước tẩy
                        trang</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="row mx-5">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <div class="row mx-5">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                    tabindex="0">
                    <div class="row mx-5">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Nước tẩy trang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-content">
            <nav>
                <div class="nav nav-tabs mt-4 baiviet" id="nav-tab" role="tablist">
                    <p class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tin tức mới nhất</p>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="row mx-5">
                        <div class="col-md-3 my-4">
                            <a href="#" class="baiposs">
                                <div class="card" style="width: 18rem;">
                                    <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body bv">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 my-4">
                            <a href="#" class="baiposs">
                                <div class="card" style="width: 18rem;">
                                    <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body bv">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 my-4">
                            <a href="#" class="baiposs">
                                <div class="card" style="width: 18rem;">
                                    <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body bv">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 my-4">
                            <a href="#" class="baiposs">
                                <div class="card" style="width: 18rem;">
                                    <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body bv">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .baiposs {
            text-decoration: none;
            color: #000000;
        }

        .bv {
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        .baiviet p {
            color: #ffffff !important;
            background-color: #d51b2e !important;
        }

        .nav button {
            color: #000000 !important;
        }

        #nav-tabContent {
            border: 1px solid #ccc;

        }

        .product-content img {
            max-width: 170px;
            margin-left: 33px;
            border: 1px solid #ccc !important;
        }

        .product-content p {
            text-align: center;
            font-size: 18px;
        }

        .product-content a {
            text-decoration: none;
            color: black;
        }

        .product-content a:hover {
            color: #d51b2e;
        }

        .card {
            margin-top: 20px;
            border: none;
            border-radius: 0%;
            max-width: 230px;
        }
    </style>

    </div>




</section>
<!-- endmaincontent -->