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
  

  if(isset($_POST['btnsubmit'])){
    if ($_POST['txtmk']==$_POST['txtmk2']) {
      $ho = $_POST['txtho'];
      $ten = $_POST['txtten'];
      $tdn = $_POST['txttdn'];
      $email = $_POST['txtemail'];
      $mk = $_POST['txtmk'];
      $rd = rand(1000,9999);
      
      $noidung = "<h1>Chào mày :))</h1>
                  <h2>Mày đã vinh dự được đăng ký vào website tao !!!</h2>
                  <p><b>Họ tên của mày là :</b> $ho $ten</p>
                  <p><b>Tên đăng nhập :</b> $tdn</p>
                  <p><b>Mật khẩu :</b> $mk</p>
                  <p><b>Email :</b> $email</p>";
      $sql = "INSERT into `login` values('$ho','$ten','$tdn','$email','$mk',$rd)";
      $query = mysqli_query($conn,$sql);
      if($query){
        sendmail(
          'hqbaoa17063@cusc.ctu.edu.vn',
          '57638616348',
          'hqbaoa17063@cusc.ctu.edu.vn',
          $email,
          'hqbaoa17063@cusc.ctu.edu.vn',
          'Đăng ký thành công !!!',
          $noidung
      );
        echo "<script>alert('Đăng ký thành công.')</script>";
        echo "<script>location.href='../login/login.php'</script>";
      }else{
        echo "<script>alert('Tên đăng nhập bị trùng.')</script>";
      }
    }else{
      echo "<script>alert('Nhập lại mật khẩu không chính xác! Vui lòng kiểm tra lại.');</script>";
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
    <title>Resgister</title>
</head>
<body>
<div class="tbody">
  <h2>Trang đăng ký</h2>
  <form action="" method="POST">
  <div class="container">

    <table wdith="100%">
      <tr><td width="40%">
    <label for="#"><b>Họ</b></label>
      <input type="text" placeholder="Nhập họ" name="txtho" required>
      </td>
      <td width="50%">
      <label for="#"><b>Tên</b></label>
      <input type="text" placeholder="Nhập tên" name="txtten" required>
      </td>
    </div>
    </tr>
    </table>

    <div class="input-container">
    <label for="#"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Nhập tên đăng nhập" name="txttdn" required>
    </div>

    <div class="input-container">
    <label for="#"><b>Email</b></label>
      <input type="text"
      pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"
      title="Phải chứa @ địa chỉ email và tên miền ,VD: abc@gmail.com"
      placeholder="Nhập Email" name="txtemail" required>
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

    <button type="submit" name="btnsubmit" id="btnsubmit">Đăng Ký</button>

  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='#'">Thoát</button>
    <span class="psw">
      <a style="text-decoration: none" href="../login/login.php">Đăng nhập</a>&nbsp;&nbsp;
      <a style="text-decoration: none" href="../forgetpsw/forgetpsw.php">Quên mật khẩu?</a>
    </span>
  </div>
  </form>
  </div>
</body>
</html>