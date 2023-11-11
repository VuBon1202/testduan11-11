<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Dự án 1</title>
    <link rel="stylesheet" href="../Giaodien/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../img/style.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="./assets/vendors/jquery.min.js"></script>
    <script src="./assets/owlcarousel/owl.carousel.js"></script>
</head>

<body>
    <!-- header -->
    <section class="myheader">
        <div class="container py-3">
            <div class="row">
                <!-- logo -->
                <div class="col-md-2">
                    <img src="../img/logo/logo_duan1HT.png" style="max-width: 100%; height: 65px;" class="img-fluid"
                        alt="">
                </div>
                <!-- search -->
                <div class="col-md-4">
                    <form class="css input-group mb-3 mt-2 pt-2">
                        <input type="text" class="form-control search" placeholder="Tìm kiếm sản phẩm"
                            aria-label="Tìm kiếm sản phẩm" aria-describedby="basic-addon2">
                        <button class="input-group-text" type="submit" id="basic-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                        <style>
                            .search input[type=text] {
                                width: 100px !important;

                            }
                        </style>
                    </form>
                </div>
                <!-- support -->
                <div class="col-md-4 mt-2">
                    <div class="row">
                        <div class="col">
                            <div class="row ps-5">
                                <div class="col-2 ps-2">
                                    <div class="fs-3 text-danger">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-10 ps-3">
                                    Tư vấn hỗ trợ <br> <strong class="text-danger">0345497282</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row pe-6">
                                <div class="col-2">
                                    <div class="fs-3 text-danger">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-10">
                                    Xin chào!<br> <a href="" class="text-decoration-none"><strong
                                            class="text-danger fs-6">Đăng nhập</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sign in -->
                <div class="col-md-2 pt-2 d-flex mt-2">
                    <div class="row">
                        <div class="col"><a href="#" class="position-relative ms-1">
                                <span><i class="fa-solid fa-cart-shopping text-dark fs-4"></i></span>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </a></div>
                        <div class="col"><a href="#" class="position-relative ms-2">
                                <span><i class="fa-solid fa-heart text-dark fs-4"></i></span>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </a></div>
                        <div class="col"><a href="#" class="position-relative ps-2">
                                <span><i class="fa-solid fa-circle-half-stroke text-dark fs-4"></i></span>
                            </a></div>

                    </div>




                </div>
            </div>
        </div>
    </section>
    <!-- endheader -->
    <!-- mainmenu -->
<section class="mymainmenu bg-danger mb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-danger hovermenu">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 cangiua">
                                <li class="nav-item">
                                    <a class="nav-link active text-white px-4" aria-current="page" href="#">Trang
                                        chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-4" href="#">Giới thiệu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white px-4" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Sản phẩm
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-4" href="#">Bài viết</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white px-4" href="#">Câu hỏi thường
                                        gặp</a>
                                </li>
                            </ul>
                            <style>
                                .hovermenu ul li a:hover {
                                    color: rgb(51, 49, 49) ! important;
                                }

                                .cangiua {
                                    margin: auto !important;
                                }
                            </style>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>