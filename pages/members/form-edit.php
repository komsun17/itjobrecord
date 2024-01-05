<?php 
    /**
     * Page Manager Edit Admin
     * 
     * @link https://appzstory.dev
     * @author Yothin Sapsamran (Jame AppzStory Studio)
     */
    require_once('../authen.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>จัดการผู้ดูแลระบบ | AppzStory</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon.ico">
  <!-- stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit" >
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include_once('../includes/sidebar.php') ?>
    <div class="content-wrapper pt-3">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header border-0 pt-4">
                                <h4> 
                                    <i class="fas fa-users"></i> 
                                    เพิ่มข้อมูลลูกค้า
                                </h4>
                                <a href="./" class="btn btn-info mt-3">
                                    <i class="fas fa-list"></i>
                                    กลับหน้าหลัก
                                </a>
                            </div>
                            <form id="formData">
<<<<<<< HEAD
                            <?php
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $stmt = $conn->query("SELECT * FROM tb_members WHERE m_id = $id");
                                        $stmt->execute();
                                        $data = $stmt->fetch();
                                    }
                            ?>
=======
>>>>>>> ca48ac4b007cba3846b354f6a341670ea37fd656
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 px-1 px-md-5">

                                            <div class="form-group">
<<<<<<< HEAD
                                                <label for="m_id">ID</label>
                                                <input type="text" readonly class="form-control" name="m_id" id="m_id" placeholder="ID" value="<?php echo $data['m_id']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_id">Employee ID</label>
                                                <input type="text" class="form-control" name="emp_id" id="emp_id" placeholder="Employee ID" value="<?php echo $data['emp_id']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_name">Employee Name</label>
                                                <input type="text" class="form-control" name="emp_name" id="emp_name" placeholder="Employee Name" value="<?php echo $data['emp_name']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_email">Email</label>
                                                <input type="email" class="form-control" name="emp_email" id="emp_email" placeholder="Email" value="<?php echo $data['emp_email']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_section">Section</label>
                                                <input type="text" class="form-control" name="emp_section" id="emp_section" placeholder="Section" value="<?php echo $data['emp_section']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="emp_position">Position</label>
                                                <input type="text" class="form-control" name="emp_position" id="emp_position" placeholder="Position" value="<?php echo $data['emp_position']; ?>" required>
=======
                                                <label for="first_name">ชื่อจริง</label>
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="ชื่อจริง" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">นามสกุล</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="นามสกุล" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">เบอร์โทรศัพท์</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">อีเมล</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล" required>
>>>>>>> ca48ac4b007cba3846b354f6a341670ea37fd656
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block mx-auto w-50" name="submit">บันทึกข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../includes/footer.php') ?>
</div>
<!-- SCRIPTS -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../../assets/js/adminlte.min.js"></script>

<script>
     $(function() {
        $('#formData').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'PUT',
                url: '../../service/members/update.php',
                data: $('#formData').serialize()
            }).done(function(resp) {
                Swal.fire({
                    text: 'อัพเดทข้อมูลเรียบร้อย',
                    icon: 'success',
                    confirmButtonText: 'ตกลง',
                }).then((result) => {
                    location.assign('./');
                });
            })
        });
    });
</script>

</body>
</html>
