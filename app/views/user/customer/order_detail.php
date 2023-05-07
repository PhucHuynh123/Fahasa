<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/icon/fontawesome/css/all.css">
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

        .page-title h1 {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 400;
            line-height: 36px;
            color: #565555;
        }

        .order-view-status {
            width: fit-content;
            border-radius: 20px;
            border: 1px solid;
            padding: 2px 10px 1px 10px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 10px;
        }

        .order-view-status,
        .order-view-id,
        .order-view-date,
        .order-view-total,
        .order-view-vat {
            margin-bottom: 10px;
        }

        .order-view-container span:nth-child(2) {
            margin-left: 5px;
            font-size: 1.1em;
            font-weight: bold;
        }

        .order-view-title {
            font-size: 1.1em;
            text-transform: uppercase;
            color: black;
            font-weight: bold;
        }

        .box-account {
            padding: 15px;
            margin: 0 0 20px;
        }

        .box-account .box-head {
            border-bottom: 1px solid #f2f2f2;
            margin: 0 0 10px;
            text-align: right;
        }

        .box-account .box-head h2 {
            float: left;
            margin: 0;
            font-size: 17px;
            font-weight: normal;
            background-position: 0 0;
            background-repeat: no-repeat;
            color: #333;
            text-transform: uppercase;
        }

        .box-recent .box-head a {
            padding-top: 10px;
            display: block;
            color: #C92127;
        }

        .data-table {
            width: 100%;
            background: transparent;
        }

        .data-table thead th {
            font-family: Arial, Helvetica, sans-serif !important;
            font-weight: 600;
            vertical-align: bottom;
            padding: 10px;
            white-space: nowrap;
            text-align: left;
            text-transform: capitalize;
            font-size: 14px;
        }

        .data-table tr td {
            padding: 10px;
            font-size: 14px;
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
                        <li><a href="/Fahasa/customer/address">Sổ địa chỉ</a></li>
                        <li class="current"><a href="/Fahasa/customer/order">Đơn hàng của tôi</a></li>
                        <li><a href="/Fahasa/customer/rating">Nhận xét của tôi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="my-account mb-4">
                <div class="page-title">
                    <h1>Chi tiết đơn hàng</h1>
                </div>
                <div class="row">
                    <div class="order-view-container col-lg-6 col-md-6">
                        <div class="order-view-title">Chi tiết đơn hàng</div>
                        <?php if ($order['status'] == 1) { ?>
                            <div class="order-view-status" style="background:#B6F1B6;color:#2ED62E;border-color:#B6F1B6;">
                                Đã xác nhận
                            </div>
                        <?php } else if ($order['status'] == 0) { ?>
                            <div class="order-view-status" style="background: #FCDAB0;color: #F7941E;border-color: #FCDAB0;">
                                Chờ xác nhận
                            </div>
                        <?php } else if ($order['status'] == 2) { ?>
                            <div class="order-view-status" style="background: #F3B4AF;color: #A90000;border-color: #F3B4AF;">
                                Đã huỷ
                            </div>
                        <?php } ?>
                        <div class="order-view-id"><span>Mã đơn hàng: </span><span><?php echo $order['id'] ?></span></div>
                        <div class="order-view-date"><span>Ngày mua: </span><span><?php echo  date_format(date_create($order['created_at']), "d/m/Y"); ?></span></div>
                        <div class="order-view-id"><span>Số lượng: </span><span><?php echo $order_quantity ?></span></div>
                        <div class="order-view-total"><span>Tổng Tiền: </span><span><span class="price"><?php echo number_format($order['total'], 0, '', '.') ?></span><span class="sym-totals">đ</span></span></div>
                    </div>
                    <div class="order-view-container col-lg-6 col-md-6">
                        <div class="order-view-title">Thông tin người nhận</div>
                        <div class="order-view-id"><span>Tên: </span><span><?php echo $order['name'] ?></span></div>
                        <div class="order-view-id"><span>Địa chỉ: </span><span><?php echo $order['address'] ?></span></div>
                        <div class="order-view-id"><span>Phường, Quận: </span><span><?php echo $order['ward'] . ", " . $order['district'] ?></span></div>
                        <div class="order-view-id"><span>Tỉnh/Thành: </span><span><?php echo $order['city'] ?></span></div>
                        <div class="order-view-id"><span>Tel: </span><span><?php echo $order['phone_number'] ?></span></div>
                    </div>
                </div>
                <div class="box-account box-recent">
                    <table class="data-table table-striped account-order-history" id="my-orders-table">
                        <colgroup>
                            <col width="1">
                            <col width="">
                            <col width="1">
                            <col width="">
                            <col width="">
                        </colgroup>
                        <thead>
                            <tr class="first last">
                                <th>Hình ảnh</th>
                                <th>Sách</th>
                                <th>Mã sách</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order_details as $order_detail) {
                                $book = Book::getByID($order_detail['book_id']); ?>
                                <tr class="">
                                    <td><img width="80px" src="<?php echo $book['image'] ?>"></td>
                                    <td><a href="/Fahasa/product/<?php echo $order_detail['book_id'] ?>"><?php echo $book['title'] ?></a></td>
                                    <td><?php echo $book['book_code'] ?></td>
                                    <td>
                                        <span class="price"><?php echo number_format($book['price'] * (1 - $book['discount'] / 100), 0, '', '.') ?> đ</span>
                                    </td>
                                    <td><?php echo $order_detail['quantity'] ?></td>
                                    <td>
                                        <span class="price"><?php echo number_format($book['price'] * (1 - $book['discount'] / 100) * $order_detail['quantity'], 0, '', '.') ?> đ</span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    </script>
</body>

</html>