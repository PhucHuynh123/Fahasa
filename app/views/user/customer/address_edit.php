<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa địa chỉ</title>
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

        #btn-save-account {
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
                        <li><a href="/Fahasa/customer/account/edit">Thông tin tài khoản</a></li>
                        <li class="current"><a href="/Fahasa/customer/address">Sổ địa chỉ</a></li>
                        <li><a href="/Fahasa/customer/order">Đơn hàng của tôi</a></li>
                        <li><a href="/Fahasa/customer/rating">Nhận xét của tôi</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="my-account mb-4">
                <div class="page-title">
                    <h1>Sửa địa chỉ</h1>
                </div>
                <form id="form-account-info" method="post" action="/Fahasa/customer/address/editPost/<?php echo $address['id'] ?>">

                    <div class="row align-items-center my-3">
                        <label for="name" class="form-label">Tên</label>
                        <input name="name" id="name" class="form-control" placeholder="Nhập tên" value="<?php echo $address['name'] ?>">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="phone_number" class="form-label">Số điện thoại</label>
                        <input name="phone_number" id="phone_number" class="form-control" placeholder="Nhập số điện thoại" value="<?php echo $address['phone_number'] ?>">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input name="address" id="address" class="form-control" placeholder="Nhập địa chỉ" value="<?php echo $address['address'] ?>">
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="city" class="form-label">Tỉnh/Thành phố</label>
                        <select id="city" name="city" class="form-select" aria-label="Default select example">
                            <option selected>Vui lòng chọn</option>
                        </select>
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="district" class="form-label">Quận/Huyện</label>
                        <select id="district" name="district" class="form-select" aria-label="Default select example">
                            <option selected>Vui lòng chọn</option>
                        </select>
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="ward" class="form-label">Xã/Phường</label>
                        <select id="ward" name="ward" class="form-select" aria-label="Default select example">
                            <option selected>Vui lòng chọn</option>
                        </select>
                    </div>
                    <div class="row align-items-center my-3">
                        <label for="email" class="form-label">Mặc định</label>
                        <div class="form-check">
                            <input id="default-check" class="form-check-input" name="default" type="checkbox" <?php if ($address['is_default']) echo "checked" ?>>
                            <label class="form-check-label">
                                Đặt làm địa chỉ mặc định
                            </label>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: center;" class="mt-4 mb-3">
                        <button id="btn-save-account" type="submit">Lưu địa chỉ</button>
                    </div>
                </form>

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


        <?php if ($address['is_default']) { ?>
            $('#default-check').click(function() {
                $(this).prop('checked', !$(this).prop('checked'));
            });
        <?php } ?>

        function renderCity(data) {

            for (const x of data) {
                cities.options[cities.options.length] = new Option(x.Name, x.Name);
            }
            cities.value = "<?php echo $address['city'] ?>"
            LoadDistrict(data)
            districts.value = "<?php echo $address['district'] ?>"
            LoadWard(data);
            wards.value = "<?php echo $address['ward'] ?>"

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

            function LoadDistrict(data) {
                districts.length = 1;
                wards.length = 1;
                if (cities.value != "") {
                    const result = data.filter(n => n.Name === cities.value);

                    for (const k of result[0].Districts) {
                        districts.options[districts.options.length] = new Option(k.Name, k.Name);
                    }
                }
            }

            function LoadWard(data) {
                wards.length = 1;
                const dataCity = data.filter((n) => n.Name === cities.value);
                if (district.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Name === district.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Name);
                    }
                }
            }
        }
    </script>
</body>

</html>