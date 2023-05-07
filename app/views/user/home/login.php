<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng đăng nhập</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/icon/fontawesome/css/all.css">
    <style>
        .login-form {
            border-radius: 10px;
        }

        .login-form-content {
            width: 450px;
            max-width: calc(100vw - 20px);
            margin: auto;
            padding: 4.5rem 0rem;
        }

        .login-form-content input {
            width: 100%;
            height: 40px;
            padding-left: 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .login-form-content input:focus-visible {
            outline: none;
        }

        .login-form-content label {
            font-size: 1.1em;
        }

        .nav-tabs {
            border: none;
        }

        .nav-tabs .nav-link {
            border: none;
            transition: all 0.3s;
            font-size: 1.1em;
            font-weight: normal;
        }

        .nav-tabs .nav-link:focus {
            color: #c92127;
        }

        .nav-tabs .nav-link:hover {
            color: #c92127;
        }

        .nav-tabs .nav-link.active {
            color: #c92127;
        }

        span {
            font-size: 14px;
        }

        .input-group {
            align-items: center;
        }

        .showpass,
        .show-regis,
        .OTP {
            position: absolute;
            right: 12px;
            color: #2489F4;
            cursor: pointer;
            user-select: none;
        }

        .forgot-pass {
            margin-top: 5px;
            text-align: end;
        }

        .forgot-pass>span {
            color: red;
            cursor: pointer;
        }

        .group-button {
            text-align: center;
        }

        .login-button,
        .loginfb-button {
            width: 245px;
            border: none;
            padding: 8px 0;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 700;

        }

        .login-button {
            background: linear-gradient(90deg, rgba(224, 224, 224, 1) 0%, rgba(224, 224, 224, 1) 100%);
            color: #636363;
            transition: all 0.3s;
        }

        .login-button:focus {
            outline: none;
        }

        .login-button:hover {
            cursor: default;
        }

        .loginfb-button {
            background-color: #2489F4;
            color: white;
            border: 1px solid #2489F4;
        }

        .login-button-group {
            margin-top: 20px;
        }

        .form-control {
            color: #495057;
        }

        .input-group>.form-control:focus {
            z-index: 0;
        }

        .log-container {
            padding: 0;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>
    <div class="login-form container">
        <div class="login-form-content">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item" style="width: 50%; text-align: center;">
                    <a class="nav-link active" data-toggle="tab" href="#login-container">Đăng Nhập</a>
                </li>
                <li class="nav-item" style="width: 50%; text-align: center;">
                    <a class="nav-link" data-toggle="tab" href="#register-container">Đăng Ký</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active log-container" id="login-container">
                    <form onsubmit="loginSubmit(event);" style="margin-top: 15px;">
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input maxlength="200" class="form-control" id="email-1" type="email" name="email" placeholder="Nhập email">
                        </div>
                        <label for="password">Mật khẩu</label>
                        <div class="input-group">
                            <input class="form-control" type="password" id="password-1" name="password" placeholder="Nhập mật khẩu">
                            <span class="showpass">Hiện</span>
                        </div>

                        <div class="forgot-pass mt-3"><span>Quên mật khẩu ?</span></div>
                        <div class="group-button">
                            <div class="login-button-group"><button type="button" id="login-button" class="login-button">Đăng Nhập</button></div>
                            <div class="login-button-group"><button type="button" class="loginfb-button" style="white-space: nowrap;"><i class="fab fa-facebook"></i> Đăng nhập bằng Facebook</button></div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane log-container" id="register-container">
                    <form onsubmit="registerSubmit(event)">
                        <div style="margin-top: 15px;">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input name="email" class="form-control" type="text" id="email-2" placeholder="Nhập email">
                            </div>
                        </div>
                        <label class="mt-3" for="matkhau">Mật khẩu</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="password" id="password-2" placeholder="Nhập mật khẩu">
                        </div>
                        <label class="mt-3" for="matkhau">Xác nhận mật khẩu</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="password-confirm" id="password-confirm-2" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="group-button">
                            <div class="login-button-group"><button type="button" id="register-button" class="login-button">Đăng Kí</button></div>
                            <div style="font-size: 12px; margin-top: 10px;">
                                <div>Bằng việc đăng ký, bạn đã đồng ý với Fahasa.com về</div>
                                <div><a style="text-decoration: none;" href="">Điều khoản dịch vụ </a>&#38;<a style="text-decoration: none;" href=""> Chính sách bảo mật</a></div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div style="position: fixed; top: 2rem; right: 2rem" id="liveAlertPlaceholder"></div>

    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const login_email_input = document.getElementById('email-1');
        const login_password_input = document.getElementById('password-1');
        const login_button = document.getElementById('login-button');

        const register_email_input = document.getElementById('email-2');
        const register_password_input = document.getElementById('password-2');
        const register_password_confirm_input = document.getElementById('password-confirm-2');
        const register_button = document.getElementById('register-button');

        const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        const passwordPattern = /^.{6,}$/

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

        $("#email-1").on('change paste input', LoginValidation)
        $("#password-1").on('change paste input', LoginValidation)

        $("#email-2").on('change paste input', RegisterValidation)
        $("#password-2").on('change paste input', RegisterValidation)
        $("#password-confirm-2").on('change paste input', RegisterValidation)

        function LoginValidation() {
            if (emailPattern.test(login_email_input.value) && passwordPattern.test(login_password_input.value)) {
                console.log("true");
                login_button.style.color = "white";
                login_button.style.background = "#C92127";
                login_button.style.cursor = "pointer";
                login_button.setAttribute('type', "submit");
            } else {
                login_button.style.color = "#636363";
                login_button.style.background = "linear-gradient(90deg, rgba(224, 224, 224, 1) 0%, rgba(224, 224, 224, 1) 100%)";
                login_button.style.cursor = "default";
                login_button.setAttribute('type', "button");
            }
        }

        function RegisterValidation() {
            if (emailPattern.test(register_email_input.value) &&
                passwordPattern.test(register_password_input.value) &&
                passwordPattern.test(register_password_confirm_input.value) &&
                register_password_input.value == register_password_confirm_input.value) {

                register_button.style.color = "white";
                register_button.style.background = "#C92127";
                register_button.style.cursor = "pointer";
                register_button.setAttribute('type', "submit");
            } else {
                register_button.style.color = "#636363";
                register_button.style.background = "linear-gradient(90deg, rgba(224, 224, 224, 1) 0%, rgba(224, 224, 224, 1) 100%)";
                register_button.style.cursor = "default";
                register_button.setAttribute('type', "button");
            }
        }

        function loginSubmit(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "/Fahasa/login/login_process",
                data: {
                    "email": $("#email-1").val(),
                    "password": $("#password-1").val(),
                },
                success: function(response) {
                    if (response == "Đăng nhập thành công") {
                        window.location.href = "/Fahasa"
                    }
                    alert(response, "danger");
                }
            });
        }

        function registerSubmit(event) {
            event.preventDefault();
            alert("Vui lòng xác nhận email để đăng nhập", "warning");
            $.ajax({
                type: "post",
                url: "/Fahasa/login/register_process",
                data: {
                    "email": $("#email-2").val(),
                    "password": $("#password-2").val(),
                    "password-confirm": $("#password-confirm-2").val(),
                },
                success: function(response) {
                    if (respone == "Email đã được sử dụng" || respone == "Vui lòng xác nhận email để đăng nhập") {
                        alert(response, "warning");
                    }
                }
            });
        }
    </script>
</body>

</html>