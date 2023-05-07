<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sách</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../public/js/select.dataTables.min.css">
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../public/css/vertical-layout-light/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <?php include(dirname(__FILE__) . '/' . '../../layouts/_navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include(dirname(__FILE__) . '/' . '../../layouts/_sidebar.php'); ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Quản lý sách</h4>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã sách</th>
                                                    <th>Sách</th>
                                                    <th>Tác giả</th>
                                                    <th>Giá gốc</th>
                                                    <th>Số lượng</th>
                                                    <th>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($books as $book) { ?>
                                                    <tr>
                                                        <td><?php echo $book['book_code'] ?></td>
                                                        <td><img style="border-radius: 0px" class="mr-2" src="<?php echo $book['image'] ?>"><a href="/Fahasa/product/<?php echo $book['id'] ?>"><?php echo $book['title'] ?></a></td>
                                                        <td><?php echo $book['author'] ?></td>
                                                        <td><?php echo $book['price'] ?></td>
                                                        <td><?php echo $book['quantity'] ?></td>
                                                        <td><button onclick="changeForm('edit', '<?php echo base64_encode(json_encode($book, JSON_UNESCAPED_UNICODE)); ?>');" class="btn btn-primary mr-2">Sửa</button>
                                                            <button onclick="deleteBook(<?php echo $book['id'] ?>)" class="btn btn-danger">Xoá</button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 id="form-title" class="card-title">Thêm sách</h4>
                                    <form id="book-form" method="post" action="/Fahasa/dashboard/books/store" class="forms-sample">
                                        <div class="row">
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="title">Tựa đề</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Tựa đề" required>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="author">Tác giả</label>
                                                <input type="text" class="form-control" id="author" name="author" placeholder="Tên tác giả" required>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="category">Thể loại</label>
                                                <select class="form-control" id="category" name="category_id">
                                                    <?php foreach ($categories as $category) { ?>
                                                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="supplier">Nhà cung cấp</label>
                                                <select class="form-control" id="supplier" name="supplier_id">
                                                    <?php foreach ($suppliers as $supplier) { ?>
                                                        <option value="<?php echo $supplier['id'] ?>"><?php echo $supplier['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="publisher">Nhà xuất bản</label>
                                                <select class="form-control" id="publisher" name="publisher_id">
                                                    <?php foreach ($publishers as $publisher) { ?>
                                                        <option value="<?php echo $publisher['id'] ?>"><?php echo $publisher['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="publication_date">Ngày xuất bản</label>
                                                <input type="date" class="form-control" id="publication_date" name="publication_date" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Link ảnh</label>
                                            <input type="text" class="form-control" id="image" name="image" placeholder="https://cdn0.fahasa.com/media/catalog/product/i/m/image_217480.jpg" required>
                                        </div>


                                        <div class="row">
                                            <div class="form-group col-lg-2 col-md-4">
                                                <label for="price">Giá</label>
                                                <input type="number" class="form-control" id="price" name="price" placeholder="12000" required>
                                            </div>
                                            <div class="form-group col-lg-2 col-md-4">
                                                <label for="discount">Giảm giá</label>
                                                <input type="number" class="form-control" id="discount" name="discount" placeholder="50" required>
                                            </div>
                                            <div class="form-group col-lg-2 col-md-4">
                                                <label for="quantity">Tồn kho</label>
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="200" required>
                                            </div>
                                            <div class="form-group col-lg-2 col-md-6">
                                                <label for="page_quantity">Số trang</label>
                                                <input type="number" class="form-control" id="page_quantity" name="page_quantity" placeholder="200" required>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-6">
                                                <label for="book_code">Mã sách</label>
                                                <input type="number" class="form-control" id="book_code" name="book_code" placeholder="8935235226272" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea1">Mô tả</label>
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        </div>
                                        <div class="row ml-2">
                                            <button id="main-btn" type="submit" class="btn btn-primary mr-1">Thêm</button>
                                            <button type="button" style="display: none;" onclick="changeForm('create', '')" id="cancel-btn" class="btn btn-danger">Huỷ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 id="form-title" class="card-title">Thêm thể loại</h4>
                                    <form id="category-form" method="post" action="/Fahasa/dashboard/books/addCategory" class="forms-sample">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="category" name="category" required>
                                        </div>
                                        <button class="btn btn-primary">Thêm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 id="form-title" class="card-title">Thêm nhà cung cấp</h4>
                                    <form id="supplier-form" method="post" action="/Fahasa/dashboard/books/addSupplier" class="forms-sample">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="supplier" name="supplier" required>
                                        </div>
                                        <button class="btn btn-primary">Thêm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 id="form-title" class="card-title">Thêm nhà xuất bản</h4>
                                    <form id="publisher-form" method="post" action="/Fahasa/dashboard/books/addPublisher" class="forms-sample">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="publisher" name="publisher" required>
                                        </div>
                                        <button class="btn btn-primary">Thêm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include(dirname(__FILE__) . '/' . '../../layouts/_footer.php'); ?>
                </div>
            </div>
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../vendors/chart.js/Chart.min.js"></script>
        <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="../public/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../public/js/off-canvas.js"></script>
        <script src="../public/js/hoverable-collapse.js"></script>
        <script src="../public/js/template.js"></script>
        <script src="../public/js/settings.js"></script>
        <script src="../public/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            })

            function changeForm(action, json) {
                if (action == 'edit') {
                    var book = JSON.parse(decodeURIComponent(escape(window.atob(json))));

                    $('#form-title').text('Sửa sách');

                    $('#book-form').attr('action', '/Fahasa/dashboard/books/update/' + book['id']);
                    $('#title').val(book['title']);
                    $('#author').val(book['author']);
                    $('#category').val(book['category_id']);
                    $('#supplier').val(book['supplier_id']);
                    $('#publisher').val(book['publisher_id']);
                    $('#publication_date').val(book['publication_date'].substring(0, 10));
                    $('#image').val(book['image']);
                    $('#price').val(book['price']);
                    $('#discount').val(book['discount']);
                    $('#quantity').val(book['quantity']);
                    $('#page_quantity').val(book['page_quantity']);
                    $('#book_code').val(book['book_code']);
                    $('#description').val(book['description']);

                    $('#main-btn').text('Sửa');
                    $('#cancel-btn').css('display', 'block');

                } else if (action == 'create') {
                    $('#form-title').text('Thêm sách');
                    $('#book-form').trigger("reset");
                    $('#book-form').attr('action', '/Fahasa/dashboard/books/store/');

                    $('#main-btn').text('Thêm');
                    $('#cancel-btn').css('display', 'none');
                }
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#form-title").offset().top
                }, 500);
            }

            function deleteBook(id) {
                $.ajax({
                    url: "/Fahasa/dashboard/books/destroy/" + id,
                    success: function(response) {
                        window.location.reload();
                    }
                })
            }
        </script>
</body>

</html>