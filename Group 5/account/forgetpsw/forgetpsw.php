<?php
  include("../../connection.php");
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require_once "../PHPMailer/src/PHPMailer.php";
  require_once "../PHPMailer/src/SMTP.php";
  require_once "../PHPMailer/src/Exception.php";
function sendmail($username, $password, $name, $addresses, $replyTos, $subject, $content)
{
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->addAddress($addresses);
    $mail->addReplyTo($replyTos);
    $mail->setFrom($username, $name);
    $mail->Subject = $subject;
    $mail->msgHTML($content);
    $mail->CharSet = 'UTF-8';
    $mail->send();
}
  $rd = rand(1000,9999);
  $noidung = "<h1>Mã thay đổi mật khẩu:</h1>
              <br><br>
              <h1><i><b>$rd</b></i></h1>";
  if(isset($_POST['btnsubmit'])){
    $tdn = $_POST['txttdn'];
    $email = $_POST['txtemail'];

    $sql = "UPDATE `login` set random=$rd where email='$email' and tendangnhap='$tdn'";
    $result = mysqli_query($conn,$sql);
      if($result){
      sendmail(
        'hqbaoa17063@cusc.ctu.edu.vn',
        '57638616348',
        'hqbaoa17063@cusc.ctu.edu.vn',
        $email,
        'hqbaoa17063@cusc.ctu.edu.vn',
        'Quên mật khẩu',
        $noidung
      );
      echo "<script>alert('Mã đã được gửi')</script>";
      echo "<script>location.href='forgetpsw2.php?tdn=$tdn&email=$email'</script>";
    }else{
      echo "<script>alert('Email hoặc tên đăng nhập sai!')</script>";
      echo "<script>location.href='forgetpsw.php'</script>";
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
    <title>ForgetPSW</title>
</head>
<body>
  <div class="tbody">
  <h2>Trang quên mật khẩu (bước 1):</h2>
  <form action="" method="POST">
  <div class="container">

    
    <label for="#"><b>Tên đăng nhập</b></label>
    <div class="input-container">
      <input type="text" placeholder="Nhập tên đăng nhập" name="txttdn" required>
    </div>

    
    
    <label for="#"><b>Email</b></label>
    <div class="input-container">
      <input type="text"
      pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"
      title="Phải chứa @ địa chỉ email và tên miền ,VD: abc@gmail.com"
      placeholder="Nhập Email" name="txtemail" required>
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