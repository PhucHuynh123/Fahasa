<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 12">
    <title>Nhà sách trực tuyến Fahasa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/icon/fontawesome/css/all.css">
    <style>
        div#menu {
            display: flex;
        }

        .menu-info>a {
            display: block;
            margin-bottom: 10px;
        }

        .menu-info>a>img {
            width: 60px;
        }

        div.col-sms-3 {
            flex: 8%;
            margin: 10px 10px;
            text-align: center;
        }

        #menu {
            background-color: rgb(247, 243, 243);
            width: 83%;
            margin: auto;
            font-size: 12px;
            height: 115px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>
    <div>
        <div>
            <div class="vertical_menu-carousel">
                <div class="slide-image" style="z-index: 0;">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner mb-4">
                            <div class="carousel-item active">
                                <img src="https://cdn0.fahasa.com/media/magentothem/banner7/bigsale_t11_resize_840x320.jpg" alt="Carousel 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn0.fahasa.com/media/magentothem/banner7/FAHASA_potico_840x320.png" alt="Carousel 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn0.fahasa.com/media/magentothem/banner7/VNpay_Sieu_sale_11.11_840x320.jpg" alt="Carousel 3">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn0.fahasa.com/media/magentothem/banner7/HoaCuQuy4_banner_840x320.jpg" alt="Carousel 4">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-banner">
        <div class="banner mr-2">
            <a href="">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/bigsale_t11_voucher_310x210.jpg" alt="">
            </a>
        </div>
        <div class="banner mr-2">
            <a href="">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/ThienLong11_310x210.jpg" alt="">
            </a>
        </div>
        <div class="banner mr-2">
            <a href="">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/VPP_Main_banner_T10_310x210.jpg" alt="">
            </a>
        </div>
        <div class="banner">
            <a href="">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/Megasale_Banner_giaidoan01_Smallbanner_310x210.jpg" alt="">
            </a>
        </div>
    </div>
    </div>
    <!-- Son -->

    <div id="menu" class="container bg-white">
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="https://www.fahasa.com/ma-giam-gia?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_FlashSale_Hot_8px_1.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Flash Sale</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/ma-giam-gia?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_MaGiamGia_8px_1.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Mã Giảm Giá</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/phien-cho-do-cu?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_PCSC.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Phiên Chợ <br>Sách Cũ</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/deal-hot-pages?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_Trending_Hot_8px_1.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Xu Hướng</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/chong-dich-tai-gia?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_covid-2.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Health Care</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/vpp-dung-cu-hoc-sinh?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_vpp_hot.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Văn Phòng Phẩm</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/daily-suggestion?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_goiy.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Gợi Ý Cho Bạn</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/cua-tiem-giac-mo-do-choi?fhs_campaign=HOME_ICON"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_dochoi.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Đồ Chơi</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/nhap-hoi-manga-comic?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/Icon_MangaCommic_8px_1.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Manga - Comic</div>
        </div>
        <div class="col-sms-3 col-sm-3 col-md-3">
            <div class="menu-info">
                <a href="/sach-kinh-te-mua-manh-giam-bao?fhs_campaign=homepageicon"><img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_kinhte.png" class="center"></a>
            </div>
            <div class="cms-icon-menu-item-name">Kinh Tế</div>
        </div>
    </div>
    </div>
    <!-- Phuoc -->
    <style>
        body {
            background-color: light gainsboro;
        }

        .truyen {
            overflow: hidden
        }

        .book-item {
            width: 20%;
            height: 100%;
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container-title {
            font-size: 17px;
            font-weight: 550;
            text-transform: uppercase;
        }
    </style>
    </head>


    <body>
        <ul class="carousel-indicators">
            <li data-target="#main-ads" data-slide-to="0" class="active"></li>
            <?php $carousel_items = ceil(count($books) / 5);
            for ($i = 1; $i < $carousel_items; $i++) { ?>
                <li data-target="#main-ads" data-slide-to="<?php echo $i ?>"></li>
            <?php } ?>
            <li data-target="#main-ads" data-slide-to="3"></li>
        </ul>
        <div id="kinhte" class="carousel slide my-4" data-ride="carousel" style="padding:2rem; border-radius: 8px; width: 83%; margin: auto; background-color: white">
            <div class="carousel-inner">
                <div class="container-title">Kinh tế</div>
                <div class="carousel-item active">
                    <div class="truyen" style="display: flex;justify-content: center;">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="book-item">
                                <a href="/Fahasa/product/<?php echo $books[$i]['id'] ?>">
                                    <img src="<?php echo $books[$i]['image'] ?>" width="100%" alt=""></a>
                                <div style="display: flex;width: 80%;flex-direction: column;margin-top: 10px;">
                                    <p><?php echo $books[$i]['title'] ?></p>
                                    <div style="display: flex; margin: unset;">
                                        <h4 style="justify-self: flex-start;color: brown;font-weight: bold;">
                                            <?php echo number_format($books[$i]['price'] * (1 - $books[$i]['discount'] / 100), 0, '.', '.') ?> đ
                                        </h4>
                                        <div style="margin-left: 10px;border-radius: 10%; background-color: brown;color: white;padding: 3px;">
                                            -<?php echo $books[$i]['discount'] ?>%</div>
                                    </div>
                                    <p style="color: gray;opacity: 0.8;text-decoration: line-through;">
                                        <?php echo number_format($books[$i]['price'], 0, '.', '.'); ?> đ
                                    </p>
                                    <div style="display: flex;">
                                        <div>
                                            <?php $rating = floor(Book::getRating($books[$i]['id']));
                                            for ($r = 0; $r < 5; $r++) {
                                                if ($r < $rating) { ?>
                                                    <i class="fas fa-star" style="color: #F7941E;"></i>
                                                <?php } else { ?>
                                                    <i class="fas fa-star" style="color: gray;"></i>
                                            <?php }
                                            } ?>
                                        </div>
                                        <div style="color: orange; margin-left: 10px;">(<?php echo Rating::getAllByBookID($books[$i]['id'])->num_rows ?>)</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- end item -->
                    </div>
                </div>
                <?php
                for ($i = 1; $i < $carousel_items; $i++) { ?>
                    <div class="carousel-item">
                        <div class="truyen" style="display: flex; justify-content: center; ">
                            <?php for ($j = 0; $j < 5 && $i * 5 + $j < count($books); $j++) { ?>
                                <div class="book-item">
                                    <a href="/Fahasa/product/<?php echo $books[$i * 5 + $j]['id'] ?>">
                                        <img src="<?php echo $books[$i * 5 + $j]['image'] ?>" width="100%" alt="">
                                    </a>
                                    <div style="display: flex; width: 80%;flex-direction: column;margin-top: 10px;">
                                        <p><?php echo $books[$i * 5 + $j]['title'] ?></p>
                                        <div style="display: flex; margin: unset;">
                                            <h4 style="justify-self: flex-start;color: brown;font-weight: bold;">
                                                <?php echo number_format($books[$i * 5 + $j]['price'] * (1 - $books[$i * 5 + $j]['discount'] / 100), 0, '.', '.') ?> đ
                                            </h4>
                                            <div style="margin-left: 10px;border-radius: 10%; background-color: brown;color: white;padding: 3px;">
                                                -<?php echo $books[$i * 5 + $j]['discount'] ?>%</div>
                                        </div>
                                        <p style="color: gray;opacity: 0.8;text-decoration: line-through;"><?php echo number_format($books[$i * 5 + $j]['price'], 0, '.', '.'); ?> đ</p>
                                        <div style="display: flex;">
                                            <div>
                                                <?php $rating = floor(Book::getRating($books[$i * 5 + $j]['id']));
                                                for ($r = 0; $r < 5; $r++) {
                                                    if ($r < $rating) { ?>
                                                        <i class="fas fa-star" style="color: #F7941E;"></i>
                                                    <?php } else { ?>
                                                        <i class="fas fa-star" style="color: gray;"></i>
                                                <?php }
                                                } ?>
                                            </div>
                                            <div style="color: orange; margin-left: 10px;">(<?php echo Rating::getAllByBookID($books[$i * 5 + $j]['id'])->num_rows ?>)</div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#kinhte" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#kinhte" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <div id="vanhoa" class="carousel slide my-4" data-ride="carousel" style="padding:2rem; border-radius: 8px; width: 83%; margin: auto; background-color: white">
            <div class="carousel-inner">
                <div class="container-title">Kinh tế</div>
                <div class="carousel-item active">
                    <div class="truyen" style="display: flex;justify-content: center;">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="book-item">
                                <a href="/Fahasa/product/<?php echo $books[$i]['id'] ?>">
                                    <img src="<?php echo $books[$i]['image'] ?>" width="100%" alt=""></a>
                                <div style="display: flex;width: 80%;flex-direction: column;margin-top: 10px;">
                                    <p><?php echo $books[$i]['title'] ?></p>
                                    <div style="display: flex; margin: unset;">
                                        <h4 style="justify-self: flex-start;color: brown;font-weight: bold;">
                                            <?php echo number_format($books[$i]['price'] * (1 - $books[$i]['discount'] / 100), 0, '.', '.') ?> đ
                                        </h4>
                                        <div style="margin-left: 10px;border-radius: 10%; background-color: brown;color: white;padding: 3px;">
                                            -<?php echo $books[$i]['discount'] ?>%</div>
                                    </div>
                                    <p style="color: gray;opacity: 0.8;text-decoration: line-through;">
                                        <?php echo number_format($books[$i]['price'], 0, '.', '.'); ?> đ
                                    </p>
                                    <div style="display: flex;">
                                        <div>
                                            <?php $rating = floor(Book::getRating($books[$i]['id']));
                                            for ($r = 0; $r < 5; $r++) {
                                                if ($r < $rating) { ?>
                                                    <i class="fas fa-star" style="color: #F7941E;"></i>
                                                <?php } else { ?>
                                                    <i class="fas fa-star" style="color: gray;"></i>
                                            <?php }
                                            } ?>
                                        </div>
                                        <div style="color: orange; margin-left: 10px;">(<?php echo Rating::getAllByBookID($books[$i]['id'])->num_rows ?>)</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- end item -->
                    </div>
                </div>
                <?php
                for ($i = 1; $i < $carousel_items; $i++) { ?>
                    <div class="carousel-item">
                        <div class="truyen" style="display: flex; justify-content: center; ">
                            <?php for ($j = 0; $j < 5 && $i * 5 + $j < count($books); $j++) { ?>
                                <div class="book-item">
                                    <a href="/Fahasa/product/<?php echo $books[$i * 5 + $j]['id'] ?>">
                                        <img src="<?php echo $books[$i * 5 + $j]['image'] ?>" width="100%" alt="">
                                    </a>
                                    <div style="display: flex; width: 80%;flex-direction: column;margin-top: 10px;">
                                        <p><?php echo $books[$i * 5 + $j]['title'] ?></p>
                                        <div style="display: flex; margin: unset;">
                                            <h4 style="justify-self: flex-start;color: brown;font-weight: bold;">
                                                <?php echo number_format($books[$i * 5 + $j]['price'] * (1 - $books[$i * 5 + $j]['discount'] / 100), 0, '.', '.') ?> đ
                                            </h4>
                                            <div style="margin-left: 10px;border-radius: 10%; background-color: brown;color: white;padding: 3px;">
                                                -<?php echo $books[$i * 5 + $j]['discount'] ?>%</div>
                                        </div>
                                        <p style="color: gray;opacity: 0.8;text-decoration: line-through;"><?php echo number_format($books[$i * 5 + $j]['price'], 0, '.', '.'); ?> đ</p>
                                        <div style="display: flex;">
                                            <div>
                                                <?php $rating = floor(Book::getRating($books[$i * 5 + $j]['id']));
                                                for ($r = 0; $r < 5; $r++) {
                                                    if ($r < $rating) { ?>
                                                        <i class="fas fa-star" style="color: #F7941E;"></i>
                                                    <?php } else { ?>
                                                        <i class="fas fa-star" style="color: gray;"></i>
                                                <?php }
                                                } ?>
                                            </div>
                                            <div style="color: orange; margin-left: 10px;">(<?php echo Rating::getAllByBookID($books[$i * 5 + $j]['id'])->num_rows ?>)</div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#vanhoa" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#vanhoa" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>


        <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>

</html>