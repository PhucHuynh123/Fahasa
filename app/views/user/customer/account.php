<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
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

        .page-title h1 {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 400;
            line-height: 36px;
            color: #565555;
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

        table.account-order-history,
        table.account-order-history th,
        table.account-order-history td,
        table.account-order-history thead,
        table.account-order-history .odd {
            border: none !important;
            border-right: none !important;
            border-top: none !important;
            box-shadow: none;
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
                        <li class="current"><a href="/Fahasa/customer/account">Bảng điều khiển tài khoản</a></li>
                        <li><a href="/Fahasa/customer/account/edit">Thông tin tài khoản</a></li>
                        <li><a href="/Fahasa/customer/address">Sổ địa chỉ</a></li>
                        <li><a href="/Fahasa/customer/order">Đơn hàng của tôi</a></li>
                        <li><a href="/Fahasa/customer/rating">Nhận xét của tôi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="my-account">
                <div class="page-title">
                    <h1>Bảng điều khiển của khách hàng</h1>
                </div>
                <div class="box-account box-recent">
                    <div class="box-head">
                        <h2>Những đơn hàng gần đây</h2>
                        <a href="/Fahasa/customer/order">Xem tất cả</a>
                    </div>
                    <table class="data-table table-striped account-order-history" id="my-orders-table">
                        <colgroup>
                            <col width="1">
                            <col width="1">
                            <col width="">
                            <col width="1">
                            <col width="">
                            <col width="">
                        </colgroup>
                        <thead>
                            <tr class="first last">
                                <th>Đơn hàng #</th>
                                <th>Ngày</th>
                                <th>Người nhận</th>
                                <th><span class="nobr">Tổng cộng</span></th>
                                <th>Trạng thái</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) { ?>
                                <tr class="">
                                    <td><?php echo $order['id'] ?></td>
                                    <td><span class="nobr"><?php echo date_format(date_create($order['created_at']), "d/m/Y")  ?></span></td>
                                    <td><?php echo $order['name'] ?></td>
                                    <td>
                                        <span class="price"><?php echo number_format($order['total'], 0, '.', '.') ?></span>
                                    </td>
                                    <td>
                                        <?php if ($order['status'] == 0) echo "Chờ xác nhận";
                                        else if ($order['status'] == 1) echo "Đã xác nhận";
                                        else if ($order['status'] == 2) echo "Đã huỷ" ?>
                                    </td>
                                    <td class="a-center last">
                                        <span class="nobr">
                                            <a href="/Fahasa/customer/order/view/<?php echo $order['id'] ?>">Xem</a>
                                            <span class="separator">|</span>
                                            <?php if ($order['status'] != 2) { ?>
                                                <a href="/Fahasa/customer/order/cancel/<?php echo $order['id'] ?>" class="link-reorder">Huỷ</a>
                                            <?php } ?>
                                    </td>
                                    </span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="box-account box-recent">
                    <div class="box-head">
                        <h2>Nhận xét gần đây</h2>
                        <a href="/Fahasa/customer/rating">Xem tất cả</a>
                    </div>
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
                                <th>Ngày</th>
                                <th>Sách</th>
                                <th>Đánh giá</th>
                                <th>Bình luận</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ratings as $rating) {
                                if ($rating['is_approved'] == 1) { ?>
                                    <tr class="">
                                        <td><span class="nobr"><?php echo date_format(date_create($rating['created_at']), "d/m/Y")  ?></span></td>
                                        <td>Shin - Cậu Bé Bút Chì - Tập 45 (Tái Bản 2019)</td>
                                        <td>
                                            <span class="price"><?php echo $rating['rating'] ?></span>
                                        </td>
                                        <td><?php echo mb_substr($rating['comment'], 0, 100) ?>...</td>
                                        <td class="a-center last">
                                            <span class="nobr">
                                                <a href="/Fahasa/product/<?php echo $rating['book_id'] ?>">Xem</a>
                                            </span>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
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