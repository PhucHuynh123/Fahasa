<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sổ địa chỉ</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/icon/fontawesome/css/all.css">
    <style>
        .account-container {
            background: none;
            display: flex;
            width: 83%;
            margin: 12px auto;
        }

        .block-account {
            background: white;
            border: 1px solid #e6e6e6;
            border-radius: 8px;
            padding: 1rem;
            padding-bottom: 0;
        }

        .block-title {
            padding: 18px 20px;
            font-size: 20px;
            font-weight: 600;
            border-bottom: 2px solid #f6f6f6;
            color: #C92127;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .block-account .block-content li {
            border-bottom: 1px solid #f2f2f2;
            color: #ea7696;
        }

        .block-account .block-content .current a {
            color: #bf9a61;
        }

        .block-account .block-content li a {
            display: block;
            padding: 10px 0px;
            transition: all 300ms ease-in 0s;
        }

        .my-account {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .page-title {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .page-title h1 {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 400;
            line-height: 36px;
            color: #565555;

        }

        #add-address-btn {
            user-select: none;
            height: 40px;
            padding: 0 30px;
            font-weight: 600;
            font-size: 1.1em;
            color: white;
            background: #C92127;
            border: none;
            border-radius: 8px;
            text-transform: uppercase;
        }

        .addresses-list {
            display: flex;
            justify-content: space-around;

        }

        .addresses-primary h2,
        .addresses-additional h2 {
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .addresses-list address {
            margin: 0 0 3px;
        }

        address {
            font-style: normal;
            line-height: 25px;
        }

        .addresses-list a {
            font-weight: bold;
            color: #C92127;
        }

        .addresses-list .addresses-additional li {
            margin-bottom: 12px;
        }
    </style>

</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>
    <div class="account-container">
        <div class="col-left col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding: 0;">
            <div class="block-account">
                <div class="block-title">
                    Tài khoản
                </div>
                <div class="block-content">
                    <ul>
                        <li><a href="/Fahasa/customer/account">Bảng điều khiển tài khoản</a></li>
                        <li><a href="/Fahasa/customer/account/edit">Thông tin tài khoản</a></li>
                        <li class="current"><a href="/Fahasa/customer/address">Sổ địa chỉ</a></li>
                        <li><a href="/Fahasa/customer/order">Đơn hàng của tôi</a></li>
                        <li><a href="/Fahasa/customer/rating">Nhận xét của tôi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="my-account">
                <div class="page-title">
                    <h1>Sổ địa chỉ</h1>
                    <a href="/Fahasa/customer/address/new"><button id="add-address-btn">Thêm địa chỉ mới</button></a>
                </div>
                <div class="addresses-list">
                    <div class="addresses-primary">
                        <h2>Địa chỉ mặc định</h2>
                        <?php foreach ($addresses as $address) {
                            if ($address['is_default']) { ?>
                                <address>
                                    <?php echo $address['name'] ?><br>
                                    <?php echo $address['address'] ?><br>
                                    <?php echo $address['ward'] . ", " . $address['district'] . ", " . $address["city"]; ?><br>
                                    Tel: <?php echo  $address['phone_number'] ?>
                                </address>
                                <a href="/Fahasa/customer/address/edit/<?php echo $address['id'] ?>">
                                    Thay đổi địa chỉ
                                </a>
                        <?php break;
                            }
                        } ?>
                    </div>
                    <div class="addresses-additional">
                        <h2>Địa chỉ khác</h2>
                        <ol>
                            <?php foreach ($addresses as $address) {
                                if (!$address['is_default']) { ?>
                                    <li>
                                        <address>
                                            <?php echo $address['name'] ?><br>
                                            <?php echo $address['address'] ?><br>
                                            <?php echo $address['ward'] . ", " . $address['district'] . ", " . $address["city"]; ?><br>
                                            Tel: <?php echo  $address['phone_number'] ?>
                                        </address>
                                        <a href="/Fahasa/customer/address/edit/<?php echo $address['id'] ?>">
                                            Sửa địa chỉ
                                        </a>
                                        <span>|</span>
                                        <a href="/Fahasa/customer/address/delete/<?php echo $address['id'] ?>">
                                            Xoá địa chỉ
                                        </a>
                                    </li>
                            <?php
                                }
                            } ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>