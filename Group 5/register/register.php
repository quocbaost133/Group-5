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
  <h2>Trang đăng ký</h2>
  <form action="">
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
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
      title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên"
      placeholder="Nhập mật khẩu" name="txtpassword" required>
    </div>

    <label for="#"><b>Xác nhận mật khẩu</b></label>
    <div class="input-container">
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
      title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên"
      placeholder="Nhập lại mật khẩu" name="txtpassword2" required>
    </div>

    <button type="submit">Đăng Ký</button>

  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='#'">Thoát</button>
    <span class="psw">
      <a style="text-decoration: none" href="../login/login.php">Đăng nhập</a>&nbsp;&nbsp;
      <a style="text-decoration: none" href="#">Quên mật khẩu?</a>
    </span>
  </div>
  </form>
</body>
</html>