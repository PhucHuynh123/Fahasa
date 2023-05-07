<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đánh giá</title>
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
                                    <h4 class="card-title">Quản lý đánh giá</h4>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sách</th>
                                                    <th>Khách hàng</th>
                                                    <th>Đánh giá</th>
                                                    <th>Bình luận</th>
                                                    <th>
                                                        Trạng thái
                                                    </th>
                                                    <th>
                                                        Ngày đăng
                                                    </th>
                                                    <th>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ratings as $rating) { ?>
                                                    <tr>
                                                        <?php $book = Book::getByID($rating['book_id']) ?>
                                                        <td><img class="mr-2" src="<?php echo $book['image'] ?>">
                                                            <a href="/Fahasa/product/<?php echo $rating['book_id'] ?>"><?php echo $book['title'] ?></a>
                                                        </td>
                                                        <td><?php echo User::getByID($rating['user_id'])['name'] ?></td>
                                                        <td><?php for ($r = 0; $r < 5; $r++) {
                                                                if ($r < $rating['rating']) { ?>
                                                                    <i class="mdi mdi-star" style="color: #F7941E;"></i>
                                                                <?php } else { ?>
                                                                    <i class="mdi mdi-star" style="color: gray;"></i>
                                                            <?php }
                                                            } ?>
                                                        </td>
                                                        <td><?php echo wordwrap($rating['comment'], 100, "<br><br>") ?>
                                                        </td>
                                                        <td class="font-weight-medium">
                                                            <?php if ($rating['is_approved'] == 1) { ?>
                                                                <div class="badge badge-success">Đã kiểm duyệt</div>
                                                            <?php } else { ?>
                                                                <div class="badge badge-warning">Chờ kiểm duyệt</div>
                                                            <?php }  ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $rating['created_at'] ?>
                                                        </td>
                                                        <td>
                                                            <button onclick="approveRating(<?php echo $rating['id'] ?>)" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-check"></i></button>
                                                            <button onclick="deleteRating(<?php echo $rating['id'] ?>)" class="btn btn-sm btn-outline-danger"><i class="mdi mdi-window-close"></i></button>
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

        function deleteRating(id) {
            $.ajax({
                url: "/Fahasa/dashboard/ratings/destroy/" + id,
                success: function(response) {
                    window.location.reload();
                }
            })
        }

        function approveRating(id) {
            $.ajax({
                url: "/Fahasa/dashboard/ratings/approve/" + id,
                success: function(response) {
                    window.location.reload();
                }
            })
        }
    </script>
</body>

</html>