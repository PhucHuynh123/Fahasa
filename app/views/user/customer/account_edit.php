<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/icon/fontawesome/css/all.css">
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

        #form-account-info .row {
            margin: 0;
            align-items: center;
        }

        #form-account-info label {
            width: 150px;
            font-weight: normal;
            color: #555555;
        }

        #form-account-info input {
            height: 30px;
            font-weight: 600;
            font-size: 1em;
            width: 70%;
            padding: 0.375rem 1.1em;
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

        #btn-save-account,
        #btn-save-password {
            user-select: none;
            height: 40px;
            padding: 0 50px;
            font-weight: 600;
            font-size: 1.2em;
            color: white;
            background: #C92127;
            border: none;
            border-radius: 8px;

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
                        <li class="current"><a href="/Fahasa/customer/account/edit">Thông tin tài khoản</a></li>
                        <li><a href="/Fahasa/customer/address">Sổ địa chỉ</a></li>
                        <li><a href="/Fahasa/customer/order">Đơn hàng của tôi</a></li>
                        <li><a href="/Fahasa/customer/rating">Nhận xét của tôi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="my-account mb-4">
                <div class="page-title">
                    <h1>Thông tin tài khoản</h1>
                </div>
                <form id="form-account-info" method="post" action="/Fahasa/customer/account/editPost">

                    <div class="row align-items-center my-3">
                        <label for="name" class="form-label">Tên</label>
                        <input name="name" id="name" class="form-control" placeholder="Nhập tên" value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="phone_number" class="form-label">Số điện thoại</label>
                        <input name="phone_number" id="phone_number" class="form-control" placeholder="Nhập số điện thoại" value="<?php echo $user['phone_number'] ?>">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" id="email" class="form-control" placeholder="Nhập email" value="<?php echo $user['email'] ?>">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="email" class="form-label">Giới tính</label>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" value="Nam" type="radio" id="male" <?php if ($user['gender'] == "Nam") echo "checked" ?>>
                            <label class="form-check-label" for="male">
                                Nam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="gender" value="Nữ" type="radio" id="female" <?php if ($user['gender'] == "Nữ") echo "checked" ?>>
                            <label class="form-check-label" for="female">
                                Nữ
                            </label>
                        </div>
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="birthday" class="form-label">Ngày sinh</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" max="<?php echo date("Y-m-d") ?>" value="<?php echo $user['birthday'] ?>">
                    </div>
                    <div style="display: flex; justify-content: center;" class="mt-4 mb-3">
                        <button id="btn-save-account" type="submit">Lưu thay đổi</button>
                    </div>
                </form>

            </div>
            <div class="my-account">
                <div class="page-title">
                    <h1>Đổi mật khẩu</h1>
                </div>
                <form id="form-account-info" method="post" action="/Fahasa/customer/account/updatePassword">
                    <div class="row align-items-center my-3">
                        <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
                        <input type="password" name="current_password" id="name" class="form-control" placeholder="Mật khẩu hiện tại">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="password" class="form-label">Mật khẩu mới</label>
                        <input type="password" name="password" id="phone_number" class="form-control" placeholder="Mật khẩu mới">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="confirmation" class="form-label">Nhập lại mật khẩu mới</label>
                        <input type="password" name="confirmation" id="email" class="form-control" placeholder="Nhập lại mật khẩu mới">
                    </div>
                    <div style="display: flex; justify-content: center;" class="mt-4 mb-3">
                        <button id="btn-save-password" type="submit">Lưu thay đổi</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div style="position: fixed; top: 2rem; right: 2rem" id="liveAlertPlaceholder"></div>

    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let phoneNumberRegex = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;

        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

        const alert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

        $("#btn-save-account").click(function(event) {
            if ($("#phone_number").val() != "") {
                if (phoneNumberRegex.test($("#phone_number").val())) {

                } else {
                    event.preventDefault();
                    alert('Số điện thoại không đúng', 'danger');
                }
            }
        })
    </script>
</body>

</html>