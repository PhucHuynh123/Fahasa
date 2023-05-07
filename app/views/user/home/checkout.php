<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Step Checkout</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/icon/fontawesome/css/all.css">
    <style>
        .checkout-block {
            padding: 8px 16px;
            background-color: white;
            margin: 0 auto;
            margin-bottom: 16px;
            font-size: 14px;
            width: 83%;
            border-radius: 8px;
        }

        .checkout-block .checkout-block-title {
            padding: 8px 0;
            text-transform: uppercase;
            font-size: 1.1em;
            font-weight: 600;
            border-bottom: 1px solid #ced4da;
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
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
        }

        .checkout-address-list {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .checkout-address-list .checkout-address-item {
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
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin: 0.4rem 0px;
        }

        .checkout-address-item span {
            padding: 4px 8px;
            color: #007bff;
            font-weight: 600;
            cursor: pointer;
            user-select: none;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .radio {
            display: inline-table;
            position: relative;
            padding-right: 20px;
            padding-left: 30px !important;
            font-weight: normal !important;
            font-size: 1em !important;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio input:checked~.radiomark {
            border: 2px solid #C92127;
        }

        .radio input:checked~.radiomark::after {
            display: block;
        }

        .radiomark {
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            transform: translate(0, -50%);
            left: 0;
            height: 20px;
            width: 20px;
            border: 2px solid #e6e6e6;
            border-radius: 50%;
        }

        .radio .radiomark::after {
            display: none;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 50%;
            border-radius: 50%;
            background: #C92127;
            content: "";
            position: absolute;
        }

        .checkout-books-item {
            padding: 8px 0;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            border-top: 1px solid #ced4da;
        }

        .checkout-books-item-img {
            width: 145px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
        }

        .checkout-books-item-detail {
            width: calc(100% - 145px);
            padding: 0 4px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .checkout-books-item-name {
            width: calc(100% - 345px);
        }

        .checkout-books-item-price {
            width: 100px;
        }

        .checkout-books-item-qty {
            width: 100px;
            text-align: center;
        }

        .checkout-books-item-total {
            width: 100px;
            color: #F39801;
            font-weight: 600;
        }

        .checkout-books-item-old-price {
            color: #BFBFBF;
            text-decoration: line-through;
        }

        .bsidebar {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999;
            width: 100%;
            background-color: white;
            padding: 16px 0px;
            box-shadow: 0px -4px 10px -4px rgb(0 0 0 / 66%);
        }

        .bsidebar-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 83%;
            margin: auto;
        }

        .bsidebar-top {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-bottom: 1px solid #ced4da;
        }

        .bsidebar-top>div {
            padding-bottom: 4px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-end;
            font-size: 1.2em;
        }

        .bsidebar-top>div>div:last-of-type {
            flex-basis: 15%;
            text-align: right;
        }

        .bsidebar-total>div:first-of-type {
            font-weight: 600;
        }

        .bsidebar-total>div:last-of-type {
            font-size: 1.2em;
            font-weight: 700;
            color: #F39801;
        }

        .bsidebar-bottom {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        #btn-order-confirm {
            user-select: none;
            height: 44px;
            padding: 0px 40px;
            font-weight: 700;
            font-size: 19.6px;
            color: white;
            background: #C92127;
            border: none;
            border-radius: 8px;
        }

        #form-account-info .row {
            margin: 0;
            align-items: center;
        }

        #form-account-info label {
            width: 150px;
            font-weight: normal;
            color: #555555;
        }

        #form-account-info input,
        #form-account-info select {
            height: 30px;
            font-weight: 600;
            font-size: 1em;
            width: 70%;
            padding: 0 1.1em;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }



        #form-account-info .form-check-input {
            height: initial;
            width: initial;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>

    <div class="checkout-block">
        <div class="checkout-block-title">Địa chỉ giao hàng</div>
        <div class="checkout-block-content">
            <?php if (!empty($addresses)) { ?>
                <ul class="checkout-address-list">
                    <?php foreach ($addresses as $address) { ?>
                        <li class="checkout-address-item">
                            <div style="flex-basis: 70%">
                                <label class="radio" style="margin-top: 2px;"> <?php echo $address['name'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $address['address'] . ", " . $address['ward'] . ", " . $address['district'] . ", " . $address['city'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $address['phone_number'] ?>
                                    <input type="radio" id="<?php echo $address['id'] ?>" name="checkout-block-address-list-item-option" <?php if ($address['is_default']) echo "checked" ?>>
                                    <span class="radiomark"></span>
                                </label>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <form id="form-account-info">
                    <div class="row align-items-center justify-content-center my-3">
                        <label for="name" class="form-label">Tên</label>
                        <input name="name" id="name" class="form-control" placeholder="Nhập tên" value="">
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <label for="phone_number" class="form-label">Số điện thoại</label>
                        <input name="phone_number" id="phone_number" class="form-control" placeholder="Nhập số điện thoại" value="">
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input name="address" id="address" class="form-control" placeholder="Nhập địa chỉ" value="">
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <label for="city" class="form-label">Tỉnh/Thành phố</label>
                        <select id="city" name="city" class="form-select" aria-label="Default select example">
                            <option selected>Vui lòng chọn</option>
                        </select>
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <label for="district" class="form-label">Quận/Huyện</label>
                        <select id="district" name="district" class="form-select" aria-label="Default select example">
                            <option selected>Vui lòng chọn</option>
                        </select>
                    </div>
                    <div class="row align-items-center justify-content-center my-3">
                        <label for="ward" class="form-label">Xã/Phường</label>
                        <select id="ward" name="ward" class="form-select" aria-label="Default select example">
                            <option selected>Vui lòng chọn</option>
                        </select>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>

    <div class="checkout-block">
        <div class="checkout-block-title">Kiểm tra lại đơn hàng</div>
        <div class="checkout-block-content">
            <div class="checkout-books">
                <?php foreach ($cart as $book) {
                    if ($book['checked'] == "true") { ?>
                        <div class="checkout-books-item">
                            <div class="checkout-books-item-img"><img style="max-width: 100%" src="<?php echo $book['image'] ?>"></div>
                            <div class="checkout-books-item-detail">
                                <div class="checkout-books-item-name">
                                    <div><?php echo $book['title'] ?></div>
                                </div>
                                <div class="checkout-books-item-price">
                                    <div><?php echo number_format($book['price'] * (1 - $book['discount'] / 100), 0, '.', '.') ?> đ</div>
                                    <div class="checkout-books-item-old-price"><?php echo number_format($book['price'], 0, '.', '.'); ?> đ</div>
                                </div>
                                <div class="checkout-books-item-qty"><?php echo $book['quantity'] ?></div>
                                <div class="checkout-books-item-total"><?php $subtotal =  $book['price'] * (1 - $book['discount'] / 100) * $book['quantity'];
                                                                        echo number_format($subtotal, 0, '.', '.');
                                                                        $total += $subtotal ?> đ</div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>

    <div class="bsidebar">
        <div class="bsidebar-content">
            <div class="bsidebar-top">
                <div class="bsidebar-subtotal">
                    <div>Thành tiền</div>
                    <div><?php echo number_format($total, 0, '.', '.') ?> đ</div>
                </div>
                <div class="bsidebar-shipping">
                    <div>Phí vận chuyển (Giao hàng tiêu chuẩn)</div>
                    <div>0.000 đ</div>
                </div>
                <div class="bsidebar-total">
                    <div>Tổng Số Tiền (gồm VAT)
                    </div>
                    <div><?php echo number_format($total, 0, '.', '.') ?> đ</div>
                </div>
            </div>
            <div class="bsidebar-bottom">
                <div class="bsidebar-back-to-cart">
                    <a href="/Fahasa/checkout/cart">
                        <span style="padding-right: 8px;">
                            <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/btn_back.svg?q=101680">
                        </span>
                        <span style="color: #555555; font-weight: 600; font-size: 14px;">Quay về giỏ hàng</span>
                    </a>
                </div>
                <button type="button" title="Xác nhận thanh toán" id="btn-order-confirm">
                    Xác nhận thanh toán
                </button>
            </div>
        </div>
    </div>

    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        <?php if (isset($_SESSION['id'])) { ?>
            const address_input = document.querySelectorAll(".checkout-address-list input")
            $('#btn-order-confirm').click(function() {
                var address_id;
                address_input.forEach(element => {
                    if (element.checked) {
                        address_id = element.id;
                    }
                })

                $.ajax({
                    url: "/Fahasa/checkout/confirm",
                    type: 'post',
                    data: {
                        address_id: address_id,
                        total: <?php echo $total ?>
                    }
                }).done(function(respone) {
                    window.location.href = "/Fahasa";
                });
            })
        <?php } else { ?>

            $('#btn-order-confirm').click(function() {
                $.ajax({
                    url: "/Fahasa/checkout/confirm",
                    type: 'post',
                    data: {
                        name: $('#name').val(),
                        phone_number: $('#phone_number').val(),
                        address: $('#address').val(),
                        city: $('#city').val(),
                        district: $('#district').val(),
                        ward: $('#ward').val(),
                        total: <?php echo $total ?>,
                    }
                }).done(function(respone) {
                    window.location.href = "/Fahasa";
                });
            })

            var cities = document.getElementById("city");
            var districts = document.getElementById("district");
            var wards = document.getElementById("ward");

            var firstDistrict = 0;

            var Parameter = {
                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                method: "GET",
                responseType: "application/json",
            };

            var promise = axios(Parameter);
            promise.then(function(result) {
                renderCity(result.data);
            });

            function renderCity(data) {

                for (const x of data) {
                    cities.options[cities.options.length] = new Option(x.Name, x.Name);
                }

                cities.onchange = function() {
                    districts.length = 1;
                    wards.length = 1;
                    if (cities.value != "") {
                        const result = data.filter(n => n.Name === cities.value);

                        for (const k of result[0].Districts) {
                            districts.options[districts.options.length] = new Option(k.Name, k.Name);
                        }
                    }
                };

                districts.onchange = function() {
                    wards.length = 1;
                    const dataCity = data.filter((n) => n.Name === cities.value);
                    if (district.value != "") {
                        const dataWards = dataCity[0].Districts.filter(n => n.Name === district.value)[0].Wards;

                        for (const w of dataWards) {
                            wards.options[wards.options.length] = new Option(w.Name, w.Name);
                        }
                    }
                };
            }
        <?php } ?>
    </script>
</body>

</html>