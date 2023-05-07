<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/icon/fontawesome/css/all.css">
    <style>
        .cart-container {
            display: flex;
            flex-direction: column;
            margin: auto;
            width: 83%;
        }

        .cart-container .page-title h1 {
            margin: 0px 0 0;
            font-weight: 600;
            color: #333333 !important;
            line-height: 20px;
        }

        .cart-container .page-title {
            display: flex;
            margin: 16px 0 6px;
            align-items: center;
        }

        .page-title h1 {
            text-transform: uppercase;
            font-size: 20px;
        }

        .cart-title-num-items {
            margin-left: 5px;
            font-weight: 600;
            font-size: 16px;
        }

        .cart-ui-content {
            display: flex;
            margin-bottom: 5rem;
        }

        .shopping-btn {
            cursor: pointer;
            user-select: none;
            height: 44px;
            width: 200px;
            font-weight: 600;
            font-size: 1.2em;
            border-radius: 8px;
            color: #fff;
            background: #C92127;
            border: none;
        }

        .header-cart-item {
            display: flex;
            background-color: white;
            margin-bottom: 10px;
            border-radius: 8px;
            padding: 10px 0;
        }

        .header-cart-item>div {
            font-weight: 600;
            font-size: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        input.checkbox-add-cart[type="checkbox"] {
            height: 20px;
            width: 20px;
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            appearance: none;
            border: 1px solid #545759;
            border-radius: 4px;
            outline: none;
            transition-duration: 0.1s;
            cursor: pointer;
        }

        input.checkbox-add-cart[type="checkbox"]:checked {
            border: 0px solid #545759;
            background-color: #C92127;
            content: '\1F5F8';
            justify-content: center;
            align-items: center;
            display: flex;
        }

        input.checkbox-add-cart[type="checkbox"]:checked:after {
            content: '\1F5F8';
            display: block;
            text-align: center;
            color: #fff;
            font-size: 1.3em;
        }

        .book-cart-left {
            background-color: #ffffff;
            border-radius: 8px;
        }

        .item-book-cart {
            display: flex;
            padding: 1.6em 0;
        }

        .item-book-cart .checked-book-cart {
            display: flex;
            flex-basis: 8%;
            justify-content: center;
            align-items: center;
        }

        .item-book-cart .img-book-cart {
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-basis: 16%;
        }

        .group-book-info {
            flex-basis: 68%;
            display: flex;
        }

        .group-book-info .info-book-cart {
            flex-basis: 60%;
            padding-top: 15px;
            padding: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .group-book-info .number-book-cart {
            flex-basis: 40%;
            justify-content: center;
            align-items: center;
            margin: auto;
            display: flex;
        }

        .book-view-quantity-box {
            padding: 0px 10px 0px 10px;
            flex: 2;
        }

        .number-book-cart .cart-price-total {
            text-align: center;
            display: flex;
            flex-direction: column;
            flex: 3;
        }

        .cart-price-total .cart-price .price {
            color: #C92127;
            font-weight: bold;
            font-size: 1.2em;
        }

        .book-name-full-text a {
            font-size: 14px;
            color: #333333;
            word-break: break-word;
            white-space: normal;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            max-height: 6em;
            padding-top: 0px;
            font-weight: normal;
        }

        .book-view-quantity-box-block {
            display: flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            border: 1px solid #E0E0E0E0;
            border-radius: 5px;
            height: 30px;
        }

        .book-view-quantity-box {
            padding: 0px 10px 0px 10px;
            flex: 2;
        }

        .btn-add-qty,
        .btn-subtract-qty {
            width: 100%;
            display: block !important;
            text-align: center;
            flex: 1;
        }

        .book-view-quantity-box-block .qty-carts {
            border: none !important;
            flex: 1;
            width: 2em;
            font-weight: 650;
            font-size: 1.2em;
            text-align: center;
        }

        .border-book {
            width: 95%;
            margin: auto;
            border-bottom-width: 1px;
            border-bottom-color: #ededed;
            border-bottom-style: solid;
        }

        .info-book-cart .price {
            font-size: 1.2em;
            line-height: 1.2em;
            color: #333;
            font-weight: 650;
        }

        .info-book-cart .old-price .price {
            font-size: 1em;
            font-weight: normal !important;
            text-decoration: line-through;
        }

        .cart-book-price {
            display: flex;
            align-items: flex-end;
        }

        .total-cart-page {
            display: flex;
            font-size: 1.2em;
            padding: 10px 16px;
        }

        .title-cart-page-left {
            flex-basis: 65%;
        }

        .number-cart-page-right {
            flex-basis: 35%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .title-final-total {
            font-weight: 650;
            font-size: 1.2em;
        }

        .title-final-total .number-cart-page-right .price {
            color: #C92127;
            font-size: 1.4em;
        }


        .btn-proceed-checkout {
            user-select: none;
            height: 44px;
            width: 100%;
            font-weight: 600;
            font-size: 1.2em;
            text-transform: uppercase;
            color: white;
            background: #C92127;
            border: none;
            border-radius: 8px;
        }

        .btn-proceed-checkout:disabled {
            background: linear-gradient(90deg, rgba(224, 224, 224, 1) 0%, rgba(224, 224, 224, 1) 100%);
        }

        .block-total-cart {
            background: white;
            padding: 1rem;
            border-radius: 8px;
        }

        .retail-note a {
            color: red;
            transition: all 300ms ease-in 0s;
        }

        .retail-note a:hover {
            color: #F39801;
        }

        .item-book-cart .div-of-btn-remove-cart {
            flex-basis: 8%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>
    <div class="cart-container">
        <div style="margin-bottom: 12px;" class="page-title">
            <h1>Giỏ hàng</h1>
            <span class="cart-title-num-items">(<?php echo Cart::count() ?> sản phẩm)</span>
        </div>
        <div class="cart-ui-content row">
            <?php if (empty($cart)) { ?>
                <div style="flex: 1; box-shadow: 0px 0px 2px rgb(0 0 0 / 10%); padding: 2rem;
            background-color: #fff;
            border-radius: 8px; display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;">
                    <img src="https://cdn0.fahasa.com/skin//frontend/ma_vanese/fahasa/images/checkout_cart/ico_emptycart.svg">
                    <p style="font-size: 14px; margin: 20px 0;">Chưa có sản phẩm trong giỏ hàng của bạn.</p>
                    <a href="/Fahasa/category"><button class="shopping-btn" type="button">Mua sắm ngay</button></a>
                </div>
            <?php } else { ?>
                <div class="col-sm-8 col-xs-12">
                    <div class="header-cart-item">
                        <div style="flex-basis: 8%;">
                            <input onclick="checkAll();" id="checkbox-all-books" class="checkbox-add-cart" type="checkbox" <?php if ($allChecked) echo "checked" ?>>
                        </div>
                        <div style="flex-basis: 68%; justify-content: flex-start;">
                            <span>Chọn tất cả (<span class="num-items-checkbox"><?php echo count($cart) ?></span> sản phẩm)</span>
                        </div>
                        <div style="flex-basis: 13%;">
                            Số lượng
                        </div>
                        <div style="flex-basis: 21%;">
                            Thành tiền
                        </div>
                        <div style="flex-basis: 8%;"></div>
                    </div>
                    <div class="book-cart-left">
                        <?php foreach ($cart as $id => $book) { ?>
                            <div class="item-book-cart">
                                <div class="checked-book-cart"><input onclick="toggleCheckBook(<?php echo $id ?>)" type="checkbox" name="checkbox_product_379652" class="checkbox-add-cart" <?php if ($book['checked'] == "true") echo "checked" ?>></div>
                                <div class="img-book-cart">
                                    <a class="book-image" href="/Fahasa/product/<?php echo $id ?>">
                                        <img src="<?php echo $book['image'] ?>" width="120" height="120">
                                    </a>
                                </div>
                                <div class="group-book-info">
                                    <div class="info-book-cart">
                                        <div>
                                            <h2 class="book-name-full-text"><a href="/Fahasa/product/<?php echo $id ?>"><?php echo $book['title'] ?></a></h2>
                                        </div>
                                        <div class="price-original">
                                            <div class="cart-price">
                                                <div class="cart-book-price">
                                                    <div><span class="price"><?php echo number_format($book['price'] * (1 - $book['discount'] / 100), 0, '.', '.') ?> đ</span></div>
                                                    <div style="margin-left: 8px;" class="old-price"><span class="price"><?php echo number_format($book['price'], 0, '.', '.'); ?> đ</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="number-book-cart">
                                        <div class="book-view-quantity-box">
                                            <div class="book-view-quantity-box-block ">
                                                <a style="cursor: pointer;" class="btn-subtract-qty" onclick="subtractQuantity(<?php echo $id ?>)"><img style="width: 12px; height: auto;vertical-align: middle;" src="https://cdn0.fahasa.com/skin//frontend/ma_vanese/fahasa/images/ico_minus2x.png"></a>
                                                <input type="text" class="qty-carts" name="cart[379652][qty]" id="qty-379652" maxlength="12" align="center" value="<?php echo $book['quantity'] ?>" title="So luong">
                                                <a style="cursor: pointer;" class="btn-add-qty" onclick="addQuantity(<?php echo $id ?>)"><img style="width: 12px; height: auto;vertical-align: middle;" src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_plus2x.png"></a>
                                            </div>

                                        </div>
                                        <div class="cart-price-total"><span class="cart-price"><span class="price">
                                                    <?php $subtotal =  $book['price'] * (1 - $book['discount'] / 100) * $book['quantity'];
                                                    if ($book['checked'] == "true") {
                                                        $total += $subtotal;
                                                    }
                                                    echo number_format($subtotal, 0, '.', '.') ?> đ
                                                </span></span>
                                        </div>

                                    </div>

                                </div>
                                <div class="div-of-btn-remove-cart"><a onclick="deleteItem(<?php echo $id; ?>);" title="Remove Item" class="btn-remove-desktop-cart"><i class="fa-regular fa-trash-can" style="font-size:22px; color: #646464; cursor: pointer;"></i></a></div>
                            </div>
                            <div class="border-book"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block-total-cart">
                        <div class="block-totals-cart-page">
                            <div class="total-cart-page ">
                                <div class="title-cart-page-left">Thành tiền</div>
                                <div class="number-cart-page-right"><span class="price"><?php echo number_format($total, 0, '.', '.'); ?> đ</span></div>
                            </div>
                            <div class="total-cart-page ">
                                <div class="title-cart-page-left">Phí vận chuyển (Giao hàng tiêu chuẩn)</div>
                                <div class="number-cart-page-right"><span class="price">18.000 đ</span></div>
                            </div>
                            <div class="border-book"></div>
                            <div class="total-cart-page title-final-total">
                                <div class="title-cart-page-left">Tổng Số Tiền (gồm VAT)</div>
                                <div class="number-cart-page-right"><span class="price"><?php echo number_format($total, 0, '.', '.'); ?> đ</span></div>
                            </div>
                        </div>
                        <div class="checkout-type-button-cart" style="text-align: center;">
                            <div class="method-button-cart">
                                <a href="/Fahasa/onestepcheckout">
                                    <button type="button" title="Thanh toán" class="button btn-proceed-checkout btn-checkout" <?php if ($paymentCheck == false) echo "disabled" ?>>Thanh toán
                                    </button>
                                </a>
                                <div class="retail-note"><a href="https://www.fahasa.com/chinh-sach-khach-si/" target="_blank">(Giảm giá trên web chỉ áp dụng cho bán lẻ)</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleCheckBook(id) {
            $.ajax({
                url: "/Fahasa/cart/check",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function addQuantity(id) {
            $.ajax({
                url: "/Fahasa/cart/add",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function subtractQuantity(id) {
            $.ajax({
                url: "/Fahasa/cart/subtract",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function checkAll() {
            $.ajax({
                url: "/Fahasa/cart/checkall",
                type: 'post',
                data: {
                    check: document.getElementById("checkbox-all-books").checked,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function deleteItem(id) {
            $.ajax({
                url: "/Fahasa/cart/delete",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }
    </script>
</body>

</html>