<?php
include("../../connection.php");

if (isset($_GET['tdn']) && isset($_GET['email'])) {
  $tdn = $_GET['tdn'];
  $email = $_GET['email'];

  $sql = "SELECT * from `login` where email='$email' and tendangnhap='$tdn'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $rd = $row['random'];

  if (isset($_POST['btnsubmit'])) {
    if ($_POST['txtmxn'] == $rd) {
      if ($_POST['txtmk'] == $_POST['txtmk2']) {
        $mk = $_POST['txtmk'];
        $sql2 = "UPDATE `login` set matkhau='$mk' where email='$email' and tendangnhap='$tdn'";
        $result2 = mysqli_query($conn, $sql2);
        echo "<script>alert('Bạn đã đổi mật khẩu thành công')</script>";
        echo "<script>location.href='../login/login.php'</script>";
      } else {
        echo "<script>alert('Nhập lại mật khẩu không chính xác! Vui lòng kiểm tra lại.');</script>";
      }
    } else {
      echo "<script>alert('Mã xác nhận không chính xác!')</script>";
    }
  }

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>ForgetPSW2</title>
</head>
<body>
  <div class="tbody">
  <h2>Trang quên mật khẩu (bước 2):</h2>
  <form action="" method="POST">
  <div class="container">
    
  <label for="#"><b>Mã xác nhận:</b></label>
    <div class="input-container">
      <input type="text" placeholder="Nhập tên đăng nhập" name="txtmxn" required>
    </div>

    <label for="#"><b>Mật khẩu</b></label>
    <div class="input-container">
    <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
      <input type="password" 
      title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên"
      placeholder="Nhập mật khẩu" name="txtmk" required>
    </div>

    <label for="#"><b>Xác nhận mật khẩu</b></label>
    <div class="input-container">
      <input type="password" 
      title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên"
      placeholder="Nhập lại mật khẩu" name="txtmk2" required>
    </div>
  

    <button type="submit" name='btnsubmit'>Xác nhận</button>

  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='#'">Thoát</button>
    <span class="psw">
      <a style="text-decoration: none" href="../login/login.php">Đăng nhập</a>&nbsp;&nbsp;
      <a style="text-decoration: none" href="../register/register.php">Đăng ký</a>
    </span>
  </div>
  </form>
  </div>
</body>
</html>
<?php 
}
?>