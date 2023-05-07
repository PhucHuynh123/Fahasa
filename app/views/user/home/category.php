<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng hợp sản phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/icon/fontawesome/css/all.css">
    <style>
        .page-title h1 {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 400;
            line-height: 36px;
            color: #565555;
        }

        .page-title {
            margin-left: 20px;
        }

        .container-inner {
            display: flex;
            flex-direction: row;
        }

        .col-left-content {
            padding: 20px 10px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 8px;
            padding: 0;
        }

        .products-grid>li {
            position: relative;
            font-size: 0.8em;
        }

        .products-grid li:hover {
            box-shadow: 0px 0px 4px 2px rgb(0 0 0 / 10%);
        }

        .product-inner {
            position: relative;
        }

        .product-sale-label {
            background-color: #F7941E;
            width: 44px;
            height: 44px;
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .product-content {
            padding: 0.8em;
        }

        .product-image {
            margin: 0 0 10px;
            text-align: center;
        }

        .product-image img {
            max-height: 190px;
            max-width: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .product-content h2 {
            font-size: 14px;
            font-family: sans-serif;
            font-weight: normal;
        }

        .product-price {
            height: 3.5rem;
        }

        .product-content .special-price {
            font-size: 1.1rem;
            color: #C92127;
            font-weight: 700;
            margin: 0;
        }

        .product-content .old-price {
            text-decoration: line-through;
            font-size: 1rem;
            font-weight: 400;
            color: #999999;
            margin: 0;
        }

        .col-left {
            margin: 0;
            margin-right: 15px;
            background: none;
            padding: 0;
        }

        .col-left p {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 14px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .col-left a li {
            font-size: 14px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin: 4px 0;
        }

        .col-left-inner {
            background-color: white;
            padding: 0 15px;
            border: 1px solid #e6e6e6;
        }

        .col-main {
            background-color: white;
            padding: 2rem 0;
        }

        .col-left-inner,
        .col-main {
            border-radius: 10px;
        }

        .product-content .amount {
            color: #F6A500 !important;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php include(__DIR__ . '/' . '../../layouts/header.php');

    ?>
    <div class="container" style="background: none;">
        <div class="container-inner">
            <div class="col-left col-lg-3 col-md-3 col-sm-12 col-xs-12 container">
                <div class="col-left-inner">
                    <div class="col-left-content">
                        <div class="col-left-block">
                            <p>Thể loại</p>
                            <?php $pages = ceil(count($books) / 8);
                            foreach ($categories as $category) { ?>
                                <a onclick="appendCategory('<?php echo $category['name'] ?>')">
                                    <li style="cursor: pointer;"><?php echo $category['name']; ?></li>
                                </a>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="col-main-content">
                    <div class="page-title">
                        <?php if (isset($_GET["q"]) && !empty($_GET["q"])) { ?>
                            <h1>KẾT QUẢ TÌM KIẾM VỚI: <?php echo $_GET["q"] ?></h1>
                        <?php } ?>
                    </div>

                    <div class="toolbar-top">
                        <div class="toolbar col-sm-12 col-xs-12 col-md-12">
                            <div class="sorter col-sm-4 col-xs-6 col-md-4">
                                <div class="select-box select-box-order"></div>
                            </div>
                            <div class="pager col-sm-8 col-xs-5 col-md-8">
                                <div class="select-box select-box-limit"></div>
                            </div>
                        </div>
                    </div>
                    <div class="products-grid">
                        <?php $start = 0;
                        if (isset($_GET['p']) && $_GET['p'] != '') {
                            $start = 8 * $_GET['p'];
                        } ?>
                        <?php for ($i = $start; $i < $start + 8; $i++) {
                            if ($i < count($books)) { ?>
                                <li>
                                    <div class="product-inner">
                                        <?php if ($books[$i]['discount'] > 0) { ?>
                                            <div class="product-sale-label">
                                                <span><?php echo $books[$i]['discount']; ?>%</span>
                                            </div>
                                        <?php } ?>

                                        <div class="product-content">
                                            <div class="product-image">
                                                <a href="product/<?php echo $books[$i]['id'] ?>"><img src="<?php echo $books[$i]['image'] ?>"></a>
                                            </div>
                                            <a href="product/<?php echo $books[$i]['id'] ?>">
                                                <h2 class="product-name"><?php echo $books[$i]['title'] ?></h2>
                                            </a>
                                            <div class="price-label">
                                                <div class="product-price">
                                                    <?php if ($books[$i]['discount'] > 0) { ?>
                                                        <p class="special-price"><?php echo number_format($books[$i]['price'] * (1 - $books[$i]['discount'] / 100), 0, '.', '.') ?> đ</p>
                                                        <p class="old-price"><?php echo number_format($books[$i]['price'], 0, '.', '.'); ?> đ</p>
                                                    <?php } else { ?>
                                                        <p class="special-price"><?php echo $books[$i]['price'] ?>.000đ</p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div style="display:flex; align-items: center;" class="ratings">
                                                <div class="rating-box mr-1">
                                                    <?php $rating = floor(Book::getRating($books[$i]['id']));
                                                    for ($r = 0; $r < 5; $r++) {
                                                        if ($r < $rating) { ?>
                                                            <i class="fas fa-star" style="color: #F7941E;"></i>
                                                        <?php } else { ?>
                                                            <i class="fas fa-star" style="color: gray;"></i>
                                                    <?php }
                                                    } ?>
                                                </div>
                                                <div class="amount">(<?php echo Rating::getAllByBookID($books[$i]['id'])->num_rows ?>)</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php }
                        } ?>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <?php $p = 0;
                            if (isset($_GET['p']) && $_GET['p'] != '') $p = $_GET['p'] ?>
                            <li <?php if ($p == 0) echo 'class="page-item disabled"';
                                else echo 'class="page-item" style="cursor: pointer;" onclick="appendPage(' .  $p - 1 . ')"'; ?>>
                                <a class="page-link">Previous</a>
                            </li>
                            <?php for ($i = 0; $i < $pages; $i++) { ?>
                                <li <?php if ($i == $p) echo 'aria-current="page"' ?>style="cursor: pointer" onclick="appendPage(<?php echo $i ?>)" class="page-item <?php if ($i == $p) echo "active" ?>"><a class="page-link"><?php echo $i + 1 ?></a></li>
                            <?php } ?>
                            <li <?php if ($p == $pages - 1) echo 'class="page-item disabled"';
                                else echo 'class="page-item" style="cursor: pointer;" onclick="appendPage(' .  $p + 1 . ')"'; ?>>
                                <a class=" page-link">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/' . '../../layouts/footer.php') ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function appendCategory(category) {
            if (url.searchParams.get('c') != '') {
                url.searchParams.set('c', category);
            } else {
                url.searchParams.append('c', category);
            }
            appendPage(0);
            window.location.href = url;
        }

        function appendPage(page) {
            if (url.searchParams.get('p') != '') {
                url.searchParams.set('p', page);
            } else {
                url.searchParams.append('p', page);
            }
            window.location.href = url;
        }
    </script>

</body>

</html>