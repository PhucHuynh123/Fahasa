<div class="top-container">
    <div class="top-header">
        <div class="ads-banner">
            <a href="#">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/ThienLong11_1263x60.jpg" alt="Ads Banner">
            </a>
        </div>
    </div>
    <div class="cover-container">
        <div class="cover-navbar">
            <div class="logo">
                <a href="/Fahasa/">
                    <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/logo/fahasa_logo.png">
                </a>
            </div>
            <div id="list-menu-icon">
                <a href="/Fahasa/category"><i class="fa-solid fa-list-ul"></i></a>

            </div>
            <form onsubmit="appendSearch(event)" class="search-form">
                <input id="search-input" class="search" name="q" type="text" placeholder="Tìm kiếm sản phẩm mong muốn...">
                <a href="#" class="search-button-container">
                    <button type="buttonm" class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </a>
            </form>
            <div class="notice cover-icon">
                <a href="#" class="notice-button" style="flex-direction: column;">
                    <div class="notice-icon">
                        <i class="fa-regular fa-bell"></i>
                    </div>
                    <div style="align-items: center;">
                        <p style="font-size:13px;">
                            Thông báo
                        </p>
                    </div>
                </a>
            </div>
            <div id="cart-icon" class="cart cover-icon" style="position: relative;">
                <a href="/Fahasa/checkout/cart" class="cart-button" style="flex-direction: column;">
                    <div class="cart-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div>
                        <p style="font-size:13px;">
                            Giỏ hàng
                        </p>
                    </div>
                </a>
                <?php $mini_cart = $_SESSION['cart'] ?>

                <div id="cart-dropdown">
                    <div class="cart-dropdown-title">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Giỏ hàng (<?php echo count($mini_cart) ?>)</span>
                    </div>
                    <div class="cart-dropdown-content">
                        <?php if (empty($mini_cart)) { ?>
                            <img style="margin-top: 20px;" width="100" src="https://cdn0.fahasa.com/skin//frontend/ma_vanese/fahasa/images/checkout_cart/ico_emptycart.svg">
                            <p style="font-size: 16px; margin: 20px 0;">Chưa có sản phẩm nào</p>
                        <?php } else { ?>

                            <?php foreach ($mini_cart as $index => $item) { ?>
                                <div class="cart-dropdown-item">
                                    <a href="/Fahasa/product/<?php echo $index ?>"><img height="80px" src="<?php echo $item['image'] ?>"></a>
                                    <div class="item-detail">
                                        <a href="/Fahasa/product/<?php echo $index ?>" class="item-name"><?php echo $item['title'] ?></a>
                                        <div>
                                            <span class="price"><?php echo number_format($item['price'] * (1 - $item['discount'] / 100), 0, '.', '.') ?> đ</span>
                                            <span style="margin-left: 8px; color: #7A7E7F; font-size: 1.1em;">x<?php echo $item['quantity'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="login-icon" class="login cover-icon">
                <a href="<?php if (isset($_SESSION['id'])) echo "/Fahasa/customer/account";
                            else echo "/Fahasa/login"; ?> " class="login-button" style="flex-direction: column;">
                    <div class="login-icon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div>
                        <p style="font-size:13px;">
                            <?php if (isset($_SESSION['id'])) {
                                if (mb_strlen($_SESSION['name']) >= 7) {
                                    echo mb_substr($_SESSION['name'], 0, 7) . "...";
                                } else {
                                    echo $_SESSION['name'];
                                }
                            } else {
                                echo "Tài khoản";
                            } ?>
                        </p>
                    </div>
                </a>
                <?php if (isset($_SESSION['id'])) { ?>
                    <div id="login-dropdown" class="login-dropdown container">
                        <a href="/Fahasa/customer/account" class="login-dropdown-top">
                            <div class="login-dropdown-top-container">
                                <h5><?php echo $_SESSION['name'] ?></h5>
                                <p><?php if ($_SESSION['level'] == 1) {
                                        echo "Thành viên Fahasa";
                                    } else {
                                        echo "Quản trị viên";
                                    } ?></p>
                            </div>
                            <i style="font-size: 16px;" class="fa-solid fa-chevron-right"></i>
                        </a>
                        <div class="login-nav">
                            <?php if ($_SESSION['level'] == 0) { ?>
                                <a href="/Fahasa/dashboard">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            <?php } ?>
                            <a href="/Fahasa/customer/order">
                                <i class=" fa-regular fa-clipboard"></i>
                                <span>Đơn hàng của tôi</span>
                            </a>
                            <a href="/Fahasa/login/logout_process">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Thoát tài khoản</span>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div style="display: none;" id="category">
        <div class="category-container">
            <div class="left-category">
                <h5>
                    Danh Mục Sản Phẩm
                </h5>
                <div class="nav-link">
                    <a href="" onmouseover="ShowSubMenu('Sách Trong Nước');">
                        <span>Sách Trong Nước</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('Sách Nước Ngoài');">
                        <span>Sách Nước Ngoài</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('VPP - Dụng Cụ Học Sinh');">
                        <span>VPP - Dụng Cụ Học Sinh</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('Đồ Chơi');">
                        <span>Đồ Chơi</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('Làm Đẹp - Sức Khoẻ');">
                        <span>Làm Đẹp - Sức Khoẻ</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('Hành Trang Đến Trường');">
                        <span>Hành Trang Đến Trường</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('VPP - DCHS Theo Thương Hiệu');">
                        <span>VPP - DCHS Theo Thương Hiệu</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('Đồ Chơi Theo Thương Hiệu');">
                        <span>Đồ Chơi Theo Thương Hiệu</span>
                    </a>
                    <a href="" onmouseover="ShowSubMenu('Bách Hoá Online - Lưu Niệm');">
                        <span>Bách Hoá Online - Lưu Niệm</span>
                    </a>
                </div>
            </div>
            <div style="display: block" id="sub-menu">
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Kinh tế</h3>
                            <ul class="nav-link">
                                <li><a href="">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <ul>
            <li>
            </li>

            <li><a href="">Sách Nước Ngoài<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr style="font-size: 14px;">
                            <th><a class="product" href="">FICTION</a></th>
                            <th><a class="product" href="">BUSINESS &#38; MANAGEMENT</a></th>
                            <th><a class="product" href="">PERSONAL DEVELOPMENT</a></th>
                            <th><a class="product" href="">CHILDREN'S BOOK</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Contemporary Fiction</a></td>
                            <td><a class="product" href="">Business &#38; Management</a></td>
                            <td><a class="product" href="">Popular Psychology</a></td>
                            <td><a class="product" href="">Picture and Activity Books</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Romance</a></td>
                            <td><a class="product" href="">Economics</a></td>
                            <td><a class="product" href="">Advice On Careers &#38; Achieving Success</a>
                            </td>
                            <td><a class="product" href="">Fiction &#40;For Kids &#38; Teens&#41;</a>
                            </td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Fantasy</a></td>
                            <td><a class="product" href="">Finance &#38; Accounting</a></td>
                            <td><a class="product" href="">Personal Finance</a></td>
                            <td><a class="product" href="">Education</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Classics</a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href="">Non-Fiction</a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                        </tr>
                        <tr>
                            <th><a class="product" href="">DICTIONARIES &#38; LANGUAGES</a></th>
                            <th><a class="product" href="">OTHER LANGUAGES</a></th>
                            <th><a class="product" href="">OTHER CATEGORIES</a></th>
                            <th><a class="product" href=""></a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">ELT: Learning Material &#38; Coursework</a>
                            </td>
                            <td><a class="product" href="">Japanese Books</a></td>
                            <td><a class="product" href="">Biography</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">ELT: English For Specific Purposes</a></td>
                            <td><a class="product" href="">German Books</a></td>
                            <td><a class="product" href="">Society &#38; Social Sciences</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Dictionaries</a></td>
                            <td><a class="product" href="">French Books</a></td>
                            <td><a class="product" href="">Science &#38; Geography</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href="">Foods &#38; Drinks</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <th><a class="product" href="">NEW ARRIVALS <i class="fas fa-heart"></i></a>
                            </th>
                            <th><a class="product" href="">COMING SOON <i class="fas fa-heart"></i></a>
                            </th>
                            <th><a class="product" href="">BEST SELLERS <i class="fas fa-heart"></i></a>
                            </th>
                            <th><a class="product" href="">NYT BESTSELLERS <i class="fas fa-heart"></i></a></th>
                        </tr>

                    </table>
                </div>
            </li>
            <li><a href=""> VPP - Dụng Cụ Học Sinh<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                            <th><a class="product" href="">BÚT - VIẾT</a></th>
                            <th><a class="product" href="">DỤNG CỤ HỌC SINH</a></th>
                            <th><a class="product" href="">DỤNG CỤ VĂN PHÒNG</a></th>
                            <th><a class="product" href="">DỤNG CỤ VẼ</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Bút bi - Ruột bút bi</a></td>
                            <td><a class="product" href="">Gôm - Tẩy</a></td>
                            <td><a class="product" href="">Bìa - File Hồ Sơ</a></td>
                            <td><a class="product" href="">Bút Vẽ</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Bút Gel - Bút Nước</a></td>
                            <td><a class="product" href="">Gọt Bút Chì</a></td>
                            <td><a class="product" href="">Kẹp Giấy - Kẹp Bướm</a></td>
                            <td><a class="product" href="">Màu Vẽ</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Bút Mực - Bút Máy</a></td>
                            <td><a class="product" href="">Thước</a></td>
                            <td><a class="product" href="">Đồ Bấm Kim - Kim Bấm - Gỡ Kim</a></td>
                            <td><a class="product" href="">Khay - Cọ Vẽ</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Bút Dạ Quang</a></td>
                            <td><a class="product" href="">Bóp Viết - Hộp Bút</a></td>
                            <td><a class="product" href="">Cắm Bút - Bảng Tên</a></td>
                            <td><a class="product" href="">Tập Vẽ - Giấy Vẽ</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Bút Chì - Ruột Bút Chì</a></td>
                            <td><a class="product" href="">Bộ Dụng Cụ Học Tập</a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                        </tr>
                        <tr>
                            <th><a class="product" href="">SẢN PHẨM VỀ GIẤY</a></th>
                            <th><a class="product" href="">SẢN PHẨM KHÁC</a></th>
                            <th><a class="product" href="">SẢN PHẨM ĐIỆN TỬ</a></th>
                            <th><a class="product" href="">SẢN PHẨM MỚI <i class="fas fa-heart"></i></a>
                            </th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Tập - Vở</a></td>
                            <td><a class="product" href="">Dao Rọc Giấy - Lưỡi Dao Rọc Giấy - Kéo</a>
                            </td>
                            <td><a class="product" href="">Máy Tính Điện Tử</a></td>
                            <th><a class="product" href="">SẢN PHẨM BÁN CHẠY <i class="fas fa-heart"></i></a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Sổ Tay Các Loại</a></td>
                            <td><a class="product" href="">Băng Kep - Cắt Băng Keo</a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Giấy Photo</a></td>
                            <td><a class="product" href="">Bút Xóa Nước - Xóa Kéo</a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Giấy Note</a></td>
                            <td><a class="product" href="">Hồ Dán</a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="">Đồ Chơi<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                            <th><a class="product" href="">ĐỒ CHƠI NỔI BẬT</a></th>
                            <th><a class="product" href="">PHƯƠNG TIỆN CÁC LOẠI</a></th>
                            <th><a class="product" href="">MÔ HÌNH CÁC LOẠI</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Xếp Hình - Lắp Ghép</a></td>
                            <td><a class="product" href="">Ô Tô</a></td>
                            <td><a class="product" href="">Mô Hình Giấy</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Đồ Chơi Giáo Dục</a></td>
                            <td><a class="product" href="">Máy Bay </a></td>
                            <td><a class="product" href="">Mô Hình Gỗ</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Đồ Chơi Điều Khiển</a></td>
                            <td><a class="product" href="">Tàu Hỏa</a></td>
                            <td><a class="product" href="">Mô Hình Nhân Vật</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Board Game</a></td>
                            <td><a class="product" href="">Tàu Thủy</a></td>
                            <td><a class="product" href="">Mô Hình Động Vật</a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href="">Phương Tiện Khác</a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <th><a class="product" href="">ĐỒ CHƠI THEO PHIM</a></th>
                            <th><a class="product" href="">ĐỒ CHƠI KHÁC</a></th>
                            <th><a class="product" href="">SẢN PHẨM MỚI <i class="fas fa-heart"></i></a>
                            </th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">My Little Pony</a></td>
                            <td><a class="product" href="">Bột Nặn - Cát Nặn</a></td>
                            <th><a class="product" href="">SẢN PHẨM BÁN CHẠY <i class="fas fa-heart"></i></a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Paw Patrol</a></td>
                            <td><a class="product" href="">Búp Bê</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Super Wings</a></td>
                            <td><a class="product" href="">Thú Bông</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Chiến Thần Vô Cực - NADO</a></td>
                            <td><a class="product" href="">Hướng Nghiệp Nhập Vai</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="">Làm Đẹp - Sức Khỏe<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                            <th><a class="product" href="">LÀM ĐẸP - SỨC KHỎE</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Khẩu Trang Các Loại</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Nước Rửa Tay Xà Phòng</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Băng Keo Cá Nhân</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Khăn Giấy - Khăn Ướt</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Chăm Sóc Cá Nhân Khác</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Sản Phẩm Làm Đẹp</a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="">Hành Trang Đến Trường<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                        <tr>
                            <th><a class="product" href="">Sách Giáo Khoa</a></th>
                            <th><a class="product" href="">Sách Tham Khảo</a></th>
                            <th><a class="product" href="">Luyện Thi THPTQG - Lớp 12</a></th>
                            <th><a class="product" href="">Đồ Nghề Đến Trường</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 1</a></td>
                            <td><a class="product" href="">Mẫu Giáo</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Toán</a></th>
                            <td><a class="product" href="">Cặp, Balo</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 2</a></td>
                            <td><a class="product" href="">Lớp 1</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Ngữ Văn</a></th>
                            <td><a class="product" href="">Máy Tính</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 3</a></td>
                            <td><a class="product" href="">Lớp 2</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Tiếng Anh</a></th>
                            <td><a class="product" href="">Bút Các Loại</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 4</a></td>
                            <td><a class="product" href="">Lớp 3</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Vật Lý</a></th>
                            <td><a class="product" href="">Bóp Viết - Hộp Bút</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 5</a></td>
                            <td><a class="product" href="">Lớp 4</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Hóa Học</a></th>
                            <td><a class="product" href="">Tập Vở</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 6</a></td>
                            <td><a class="product" href="">Lớp 5</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Sinh Học</a></th>
                            <td><a class="product" href="">Bao Tập - Bao Sách</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 7</a></td>
                            <td><a class="product" href="">Lớp 6</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Địa Lý</a></th>
                            <td><a class="product" href="">Mực</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 8</a></td>
                            <td><a class="product" href="">Lớp 7</a></th>
                            <td><a class="product" href="">Luyện Thi Môn Lịch Sử</a></th>
                            <td><a class="product" href="">Gôm Tẩy</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 9</a></td>
                            <td><a class="product" href="">Lớp 8</a></th>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href="">Gọt Bút Chì</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 10</a></td>
                            <td><a class="product" href="">Lớp 9</a></th>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href="">Compa</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 11</a></td>
                            <td><a class="product" href="">Lớp 10</a></th>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href="">Bảng Viết - Bông Lau Bảng</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lớp 12</a></td>
                            <td><a class="product" href="">Lớp 11</a></th>
                            <td><a class="product" href=""></a></td>
                            <td><a class="product" href="">Phấn - Hộp Đựng Phấn</a></th>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></td>
                            <td><a class="product" href=""><em>Xem thêm...</em></a></th>
                            <td><a class="product see-more" href=""></a></td>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                        </tr>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="">VPP - DSCH Theo Thương Hiệu<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                            <td><a class="product" href="">Thiên Long</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Hàn Quốc - Morning Glory</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Hàn Quốc - Kyobo</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Nhật - Kinokuniya</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Nhật - Artline</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Nhật - Marvy</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Tây Ban Nha - Milan</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Tây Ban Nha - Apli</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Anh Quốc - Helix</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Đức - Faber-Castell</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Đức - Stabilo</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Pháp - Maped</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Thương Hiệu Indonesia - Bantex</a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="">Đồ Chơi Theo Thương Hiệu<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                            <td><a class="product" href="">Lego</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">tiNiToy</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lắp Ráp DUKA</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lắp Ráp Sluban</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Lắp Ráp LaQ</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Mô Hình Gỗ DIY - Robotime</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Đồ Chơi VBCare</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Hot Wheels</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Play - Doh</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Barbie</a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                        </tr>
                    </table>
                </div>
            </li>
            <li><a href="">Bách Hóa Online - Lưu Niệm<i class="fas fa-chevron-right"></i></a>
                <div class="sub-menu">
                    <table class="table-menu">
                        <tr>
                            <th><a class="product" href="">ĐỒ DÙNG CÁ NHÂN</a></th>
                            <th><a class="product" href="">ĐỒ ĐIỆN GIA DỤNG</a></th>
                            <th><a class="product" href="">NHÀ CỬA ĐỜI SỐNG</a></th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Túi - Ví Thời Trang</a></th>
                            <td><a class="product" href="">Đèn bàn</a></td>
                            <td><a class="product" href="">Ly, Cốc, Bình Nước</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Đồng Hồ</a></th>
                            <td><a class="product" href="">Đèn Ngủ</a></td>
                            <td><a class="product" href="">Hộp Đựng Đồ Cá Nhân</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Phụ Kiện Du Lịch</a></th>
                            <td><a class="product" href="">Đèn Pin</a></td>
                            <td><a class="product" href="">Trang Trí Nhà Cửa</a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Phụ Kiện Tóc</a></th>
                            <td><a class="product" href="">Pin &#38; Dụng Cụ Sạc Pin</a></td>
                            <td><a class="product" href="">Sửa Chữa Nhà Cửa</a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                        </tr>
                        <tr>
                            <th><a class="product" href="">LƯU NIỆM</a></th>
                            <th><a class="product" href="">SẢN PHẨM KHÁC</a></th>
                            <th><a class="product" href="">SẢN PHẨM MỚI <i class="fas fa-heart"></i></a>
                            </th>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Móc Khóa</a></th>
                            <td><a class="product" href="">Thực Phẩm</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Gương - Lược</a></th>
                            <td><a class="product" href="">Thiết Bị Số - Phụ Kiện Số</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Khung Hình</a></th>
                            <td><a class="product" href="">Quạt Các Loại</a></td>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Tượng</a></th>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product" href="">Quà Tặng Trang Trí Khác</a></th>
                            <td><a class="product" href=""></a></th>
                            <td><a class="product" href=""></a></td>
                        </tr>
                        <tr>
                            <td><a class="product see-more" href=""><em>Xem thêm...</em></a></th>
                            <td><a class="product" href=""></a></th>
                            <td><a class="product" href=""></a></td>
                        </tr>
                    </table>
                </div>
            </li>
        </ul> -->
    </div>

</div>

<script>
    const list_menu_icon = document.getElementById('list-menu-icon');
    const category = document.getElementById('category');
    const sub_menu = document.getElementById('sub-menu');
    const category_a = document.querySelectorAll('.left-category .nav-link a');
    const login_icon = document.getElementById('login-icon');
    const cart_icon = document.getElementById('cart-icon');
    const login_dropdown = document.getElementById('login-dropdown');
    const cart_dropdown = document.getElementById('cart-dropdown');

    let url = new URL(window.location.href);

    function appendSearch(event) {
        event.preventDefault();
        search = $('#search-input').val();
        if (search != '') {
            if (url.searchParams.get('q') != '') {
                url.searchParams.set('q', search);
            } else {
                url.searchParams.append('q', search);
            }
            window.location.href = url;
        }
    }

    cart_icon.addEventListener("mouseover", function() {
        cart_dropdown.style.display = 'block';
    });

    cart_icon.addEventListener("mouseleave", function() {
        cart_dropdown.style.display = 'none';
    });

    cart_dropdown.addEventListener("mouseover", function() {
        cart_dropdown.style.display = 'block';
    });

    cart_dropdown.addEventListener("mouseleave", function() {
        cart_dropdown.style.display = 'none';
    });

    list_menu_icon.addEventListener("mouseover", function() {
        category.style.display = 'block';
    });

    list_menu_icon.addEventListener("mouseleave", function() {
        category.style.display = 'none';
    });

    category.addEventListener("mouseover", function() {
        category.style.display = 'block';
    })

    category.addEventListener("mouseleave", function() {
        category.style.display = 'none';
    })

    <?php if (isset($_SESSION['id'])) { ?>
        login_icon.addEventListener("mouseover", function() {
            login_dropdown.style.display = 'flex';
        })

        login_dropdown.addEventListener("mouseover", function() {
            login_dropdown.style.display = 'flex';
        })

        login_dropdown.addEventListener("mouseleave", function() {
            login_dropdown.style.display = 'none';
        })

        login_icon.addEventListener("mouseleave", function() {
            login_dropdown.style.display = 'none';
        })
    <?php } ?>


    function ShowSubMenu(str) {
        category_a.forEach(function(item) {
            item.style.backgroundColor = "white";
            console.log(item.childNodes[1].textContent);
            if (item.childNodes[1].textContent == str) {
                item.style.backgroundColor = '#f2f4f5';
            };
        });

        switch (str) {
            case 'Sách Trong Nước':
                sub_menu.innerHTML = `
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Kinh tế</h3>
                            <ul class="nav-link">
                                <li><a href="">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>`;
                break;
            case 'Sách Nước Ngoài':
                sub_menu.innerHTML = `
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Fiction</h3>
                            <ul class="nav-link">
                                <li><a href="">Comtemporary Fiction</a></li>
                                <li><a href="">Romance</a></li>
                                <li><a href="">Fantasy</a></li>
                                <li><a href="">Classics</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Business & Management</h3>
                            <ul class="nav-link">
                                <li><a href="">Business & Management</a></li>
                                <li><a href="">Economics</a></li>
                                <li><a href="">Finance & Accounting</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Personal Development</h3>
                            <ul class="nav-link">
                                <li><a href="">Popular Psychology</a></li>
                                <li><a href="">Advice On Careers & Ac</a></li>
                                <li><a href="">Personal Finance</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>CHILDREN'S BOOK</h3>
                            <ul class="nav-link">
                                <li><a href="">Picture and Activity Books</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>`;
                break;
            case 'Đồ Chơi':
                sub_menu.innerHTML = `
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Đồ chơi nổi bật</h3>
                            <ul class="nav-link">
                                <li><a href="">Comtemporary</a></li>
                                <li><a href="">Romance</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Phương tiện các loại</h3>
                            <ul class="nav-link">
                                <li><a href="">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="widget">
                            <h3>Văn học</h3>
                            <ul class="nav-link">
                                <li><a href="">Tiểu Thuyết</a></li>
                                <li><a href="">Truyện Ngắn Tản Văn</a></li>
                                <li><a href="">Light Novel</a></li>
                                <li><a href="">Ngôn tình</a></li>
                                <li><a href="">Xem tất cả</a></li>
                            </ul>
                        </div>
                    </div>
                </div>`;
                break;
        }
    }
</script>