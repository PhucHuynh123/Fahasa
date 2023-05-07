<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $book['title'] ?></title>
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/icon/fontawesome/css/all.css">

    <style>
        .product-essential {
            display: flex;
        }

        .product-essential-media {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: 40%;
        }

        .product-view-image>img {
            max-height: 392px;
            max-width: 100%;
            height: auto;
            width: auto;
        }

        .product-view-sa {
            display: flex;
        }

        .price-box {
            display: flex;
            margin: 2rem 0px;
        }

        .product-view-add-box {
            margin-top: 24px;
        }

        .product-view-add-box button,
        #review-write-btn,
        #post-review-btn {
            cursor: pointer;
            user-select: none;
            height: 44px;
            width: 200px;
            font-weight: 600;
            font-size: 1.2em;
            border-radius: 8px;
        }

        #review-write-btn {
            margin: auto !important;
        }

        #btn-add-to-cart,
        #review-write-btn {
            margin-left: 0;
            color: #C92127;
            background: #fff;
            border: 2px solid #C92127;
        }

        .btn-buy-now,
        #post-review-btn {
            color: #fff;
            background: #C92127;
            border: none;
        }

        .btn-buy-now {
            margin-left: 10px;
        }

        .product-essential-detail h1 {
            font-size: 1.7em;
            font-weight: 600;
            color: #333;
            line-height: 1.5em;
            overflow-wrap: break-word;
            padding-bottom: 16px;
        }

        .product-view-sa-supplier {
            display: inline-block;
            font-size: 1.1em;
            padding-right: 15px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .product-view-sa-supplier:first-child {
            width: 400px;
        }

        .special-price {
            font-size: 32px;
            line-height: 32px;
            color: #C92127;
            font-family: 'Roboto', sans-serif !important;
            font-weight: 700;
        }

        .old-price {
            margin-left: 8px;
            font-size: 1.1em;
            font-weight: 300;
            text-decoration: line-through;
        }

        .product-view-quantity-box label {
            font-size: 1.4em;
            font-weight: 650;
            padding: 0 8px 0 0;
            margin-bottom: 0;
            text-align: left;
            max-width: 200px;
            min-width: 150px;
            color: #555555;
        }

        .product-form {
            width: 83%;
            margin: auto;
        }

        #product-view-info {
            width: 83%;
            margin: auto;
            margin-top: 30px;
        }

        #product-view-info table tr th,
        #product-view-info table tr td {
            width: 70%;
            font-size: 1.1em;
            font-weight: normal;

        }

        #product-view-review {
            padding: 2rem;
            border-radius: 10px;
        }

        .product-view-content-title {
            font-size: 1.4em;
            font-weight: 700;
        }

        .product-view-tab-content {
            padding-bottom: 20px;
            border-bottom: 1px solid #c1c1c1;
        }

        .product-view-tab-content-rating {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .product-tab-description {
            line-height: 25px;
            margin-top: 20px;
            font-size: 1.1em;
        }

        .reviews-number {
            color: #F6A500;
        }

        .chart {
            /* width: 500px; */
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            height: 100%;
        }

        .chart .rate-box {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .chart .rate-box>* {
            height: 100%;
            display: flex;
            color: #444;
        }

        .rate-box .value {
            display: flex;
            align-items: center;
        }


        .chart .value,
        .count {
            font-size: 1.3em;
            font-weight: 400;
        }

        .rate-box .progress-bar {
            border-width: 1px;
            position: relative;
            background-color: #cfd8dc91;
            height: 5px;
            width: 225px;
        }

        .rate-box .progress-bar .progress {
            background-color: #f6a500;
            height: 100%;
            border-radius: 100px;
            transition: 300ms ease-in-out;
        }

        .global {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-right: 50px;
        }

        .one .fas {
            color: #cfd8dc;
        }

        .two {
            background: linear-gradient(to right, #f6a500 0%, transparent 0%);
            background-clip: text;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            transition: 0.5s ease-in-out all;
        }

        .global-value {
            font-size: 4em;
            font-weight: 600;
            line-height: 1.1em;
            font-family: Arial, Helvetica, sans-serif;
        }

        .rating-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 10%;
        }

        .rating-icons span {
            position: absolute;
            display: flex;
            font-size: 14px;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 5px;
        }

        #popup-write-review .rating-icons span {
            font-size: 25px;
        }


        .total-reviews {
            font-size: 14px;
            color: #7A7E7F;
            font-weight: 400;
        }

        .comment-list li {
            display: flex;
            margin-bottom: 3rem;
        }

        .comment-list li p {
            font-size: 1.1em;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
        }

        .comment-left {
            width: 15%;
            margin-right: 8px;
            display: flex;
            flex-direction: column;
        }

        .comment-right {
            flex-basis: 85%;
            display: flex;
            flex-direction: column;
            margin-top: 12px;
        }

        .comment-right-content {
            font-size: 1.1em;
            color: black;
            margin-top: 1rem;
        }

        .comment-right .rating-icons {
            align-self: flex-start;
            justify-self: flex-start;
        }

        .comment-right .rating-icons span {
            transform: none;
        }

        #popup-write-review {
            position: fixed;
            width: 55%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            flex-direction: column;
            align-items: center;

            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        #popup-write-review .popup-title {
            width: 100%;
            text-transform: uppercase;
            color: #212121;
            font-weight: 600;
            font-size: 1.1em;
            text-align: center;
        }

        #popup-write-review .popup-title i {
            float: right;
            font-size: 24px;
            color: #c1c1c1;
            cursor: pointer;
        }

        #popup-write-review .popup-content {
            width: 100%;
        }

        #post-review-btn {
            float: right;
        }

        #review-field {
            height: 122px;
            resize: none;
            width: 100%;
            margin: 24px 0;
        }

        .product-view-quantity-box {
            display: flex;
        }

        .product-view-quantity-box-block {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #c1c1c1;
            border-radius: 4px;
            height: 32px;
        }

        .product-view-quantity-box-block #qty {
            border: none !important;
            width: 3em !important;
            color: #0D0E0F;
            font-weight: 700;
            font-size: 1.2em;
            height: 100%;
            display: inline;
            text-align: center;
            border: none;
            outline: none;
        }



        a.btn-subtract-qty,
        a.btn-add-qty {
            padding: 0 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include(__DIR__ . '/' . '../../layouts/header.php'); ?>
    <form class="product-form bg-white mt-4" action="" method="post">
        <div class="product-view">
            <div class="product-essential p-4">
                <div class="product-essential-media">
                    <div class="product-view-image">
                        <img src="<?php echo $book['image'] ?>" alt="">
                    </div>
                    <div class="product-view-add-box">
                        <button type="button" onclick="addToCart();" id="btn-add-to-cart">Thêm vào giỏ hàng</button>
                        <button class="btn-buy-now">Mua ngay</button>
                    </div>
                </div>
                <div class="product-essential-detail">
                    <h1><?php echo $book['title'] ?></h1>
                    <div class="product-view-sa">
                        <div class="product-view-sa-supplier">Nhà cung cấp: <b><?php echo $supplier['name'] ?></b></div>
                        <div class="product-view-sa-supplier">Tác giả: <b><?php echo $book['author'] ?></b> </div>
                    </div>
                    <div class="product-view-sa">
                        <div class="product-view-sa-supplier">Nhà xuất bản: <b><?php echo $publisher['name'] ?></b></div>
                        <div class="product-view-sa-supplier">Hình thức bìa: <b>Bìa Mềm</b></div>
                    </div>
                    <div class="rating mt-2">
                        <div class="rating-stars"></div>
                        <div class="reviews-number">(<?php echo $total_reviews ?> đánh giá)</div>
                    </div>
                    <div class="price-box">
                        <p class="special-price"><?php echo number_format($book['price'] * (1 - $book['discount'] / 100), 0, '.', '.') ?> đ</p>
                        <p class="old-price"><?php echo number_format($book['price'], 0, '.', '.'); ?> đ</p>
                    </div>
                    <div id="expected-delivery"></div>
                    <div class="product-view-quantity-box">
                        <label for="qty">Số lượng:</label>
                        <div class="product-view-quantity-box-block">
                            <a onclick="subtractQty();" class="btn-subtract-qty">
                                <img style="user-select: none;   width: 12px; height: auto;" src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_minus2x.png">
                            </a>
                            <input name="qty" id="qty" maxvalue="999" minvalue="1" align="center" value="1" onkeypress="validateNumber(event)" class="input-text qty">
                            <a onclick="addQty();" class="btn-add-qty">
                                <img style="user-select: none;   width: 12px; height: auto;" src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_plus2x.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="product-view-info" class="bg-white p-4">
        <div class="product-view-content-title mb-3">Thông tin sản phẩm</div>
        <div class="product-view-tab-content">
            <table>
                <tbody>
                    <tr>
                        <th>Mã hàng</th>
                        <td><?php echo $book['book_code'] ?></td>
                    </tr>
                    <tr>
                        <th>Tên Nhà Cung Cấp</th>
                        <a href="">
                            <td><?php echo $supplier['name'] ?></td>
                        </a>
                    </tr>
                    <tr>
                        <th>Tác giả</th>
                        <td><?php echo $book['author'] ?></td>
                    </tr>
                    <tr>
                        <th>NXB</th>
                        <td><?php echo $publisher['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Năm XB</th>
                        <td>2022</td>
                    </tr>
                    <tr>
                        <th>Số trang</th>
                        <td><?php echo $book['page_quantity'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="product-tab-description">
            <?php echo $book['description'] ?>
        </div>
    </div>
    <div id="product-view-review" class="container">
        <div class="product-view-content-title mb-3">Đánh giá sản phẩm</div>
        <div class="product-view-tab-content-review">
            <div class="product-view-tab-content-rating">
                <div class="global">
                    <span class="global-value"><?php echo number_format($rating_value, 1, '.', ''); ?></span>
                    <div class="rating-icons">
                        <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="two" style="background: linear-gradient(to right, #f6a500 <?php echo $rating_value / 5 * 100 ?>%, transparent 0%)"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    </div>
                    <span class="total-reviews">(<?php echo $total_reviews ?> đánh giá)</span>
                </div>
                <div class="chart">
                    <?php for ($i = 5; $i > 0; $i--) { ?>
                        <div class="rate-box">
                            <span class="value"><?php echo $i ?> sao</span>
                            <div class="progress-bar">
                                <span style="width: <?php echo $progress[$i - 1] ?>%" class="progress"></span>
                            </div>
                            <span class="count"><?php echo round($progress[$i - 1]) ?>%</span>
                        </div>
                    <?php } ?>
                </div>
                <?php if (isset($_SESSION['id'])) { ?>
                    <button type="button" id="review-write-btn"><i class="fa-solid fa-pencil"></i> Viết đánh giá</button>
                <?php } else { ?>
                    <span style="margin: auto;">Chỉ có thành viên mới có thể viết nhận xét. Vui lòng đăng nhập hoặc đăng ký.</span>
                <?php } ?>
            </div>
            <div class="product-view-tab-content-comment">
                <div class="comment-content">
                    <?php
                    if ($total_reviews > 0) {
                    ?>
                        <ul class="comment-list">
                            <?php foreach ($ratings as $rating) {
                                if ($rating['is_approved'] == 1) { ?>
                                    <li>
                                        <div class="comment-left">
                                            <p class="user-name"><?php $user_id = $rating['user_id'];
                                                                    echo mysqli_fetch_array(mysqli_query($conn, "SELECT * from users WHERE id = $user_id"))['name'] ?></p>
                                            <span class="comment-date"><?php echo date_format(date_create($rating['created_at']), "d/m/Y") ?></span>
                                        </div>
                                        <div class="comment-right">
                                            <div class="rating-icons">
                                                <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                                <span class="two" style="background: linear-gradient(to right, #f6a500 <?php echo $rating['rating'] / 5 * 100 ?>%, transparent 0%)"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                            </div>
                                            <span class="comment-right-content"><?php echo $rating['comment'] ?></span>
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['id'])) { ?>
        <div class="black-background-box">
            <div id="popup-write-review" class="container">
                <div class="popup-title">
                    Viết đánh giá sản phẩm
                    <i id="close-review-btn" class="fa-solid fa-xmark"></i>
                </div>
                <div style="margin: 2rem 0;" class="rating-icons">
                    <span class="one">
                        <i onmouseover="ratingProduct(1)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(2)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(3)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(4)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(5)" class="fas fa-star"></i>
                    </span>
                    <span class="two" style="background: linear-gradient(to right, #f6a500 100%, transparent 0%)">
                        <i onmouseover="ratingProduct(1)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(2)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(3)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(4)" class="fas fa-star"></i>
                        <i onmouseover="ratingProduct(5)" class="fas fa-star"></i>
                    </span>
                </div>
                <div class="popup-content">
                    <form>
                        <textarea id="review-field" class="form-control" placeholder="Nhập nhận xét của bạn"></textarea>
                        <button onclick="postRating();" type="button" id="post-review-btn" type="button">Gửi nhận xét</button>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php include(__DIR__ . '/' . '../../layouts/footer.php') ?>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        <?php if (isset($_SESSION['id'])) { ?>
            let two = document.querySelector("#popup-write-review .two");
            let popup_write_review = document.getElementById("popup-write-review");
            let review_write_btn = document.getElementById("review-write-btn");
            let close_review_btn = document.getElementById("close-review-btn");
            let review_field = document.getElementById("review-field");
            let qty = document.getElementById("qty");

            let value = 100;

            review_write_btn.addEventListener('click', function() {
                popup_write_review.parentElement.style.display = 'block';
            })

            close_review_btn.addEventListener('click', function() {
                popup_write_review.parentElement.style.display = 'none';
            })

            function ratingProduct(star) {
                value = star / 5 * 100
                two.style.background = "linear-gradient(to right, #f6a500 " + value + "%, transparent 0%)";
            }

            function postRating() {
                $.ajax({
                    url: "/Fahasa/product/rating",
                    type: 'post',
                    data: {
                        book_id: <?php echo $book['id'] ?>,
                        rating: value / 20,
                        comment: review_field.value,
                    }
                }).done(function(respone) {
                    location.reload();
                });
            }
        <?php } ?>

        function validateNumber(event) {
            var theEvent = event || window.event;

            if (theEvent.type == 'paste') {
                key = event.clipBoardData.getData('/text/plain');
            } else {
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }

            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault)
                    theEvent.preventDefault();
            }
        }

        function subtractQty() {
            qty.value--;
            if (qty.value < 1 && qty.value > <?php echo $book['quantity'] ?>) {
                qty.value = 1;
            }
        }

        function addQty() {
            qty.value++;
            if (qty.value < 1 && qty.value > <?php echo $book['quantity'] ?>) {
                qty.value = <?php echo $book['quantity'] ?>;
            }
        }

        function addToCart(quantity = 1) {
            if (qty.value > 0 && qty.value < <?php echo $book['quantity'] ?>) {
                quantity = qty.value;

                $.ajax({
                    url: "/Fahasa/cart/addtocart",
                    type: 'post',
                    data: {
                        id: <?php echo $book['id'] ?>,
                        checked: false,
                        quantity: quantity,
                    }
                }).done(function(respone) {
                    location.reload();
                });
            }

        }
    </script>
</body>

</html>