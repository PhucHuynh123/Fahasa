<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tài khoản</title>
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
                                    <h4 class="card-title">Quản lý tài khoản</h4>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Tên</th>
                                                    <th>Email</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Trạng thái</th>
                                                    <th>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $user) { ?>
                                                    <tr>
                                                        <td><?php echo $user['id'] ?></td>
                                                        <td><?php echo $user['name'] ?></td>
                                                        <td><?php echo $user['email'] ?></td>
                                                        <td><?php echo $user['phone_number'] ?></td>
                                                        <td class="font-weight-medium">
                                                            <?php if ($user['is_verified'] == 1) { ?>
                                                                <div class="badge badge-success">Đã xác nhận</div>
                                                            <?php } else { ?>
                                                                <div class="badge badge-warning">Chờ xác nhận</div>
                                                            <?php }  ?>
                                                        </td>

                                                        <td><?php if ($user['level'] == 1) { ?>
                                                                <button onclick="deleteUser(<?php echo $user['id'] ?>)" class="btn btn-danger">Xoá</button>
                                                            <?php } ?>
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

        function deleteUser(id) {
            $.ajax({
                url: "/Fahasa/dashboard/users/destroy/" + id,
                success: function(response) {
                    window.location.reload();
                }
            })
        }
    </script>
</body>

</html>