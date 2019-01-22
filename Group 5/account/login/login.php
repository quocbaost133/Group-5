<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icon.css">
    
    <title>Đăng Nhập</title>
</head>
<body>
<div class="tbody">
<h2 style="color: #dad6cc;">Trang đăng nhập</h2>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="Avatar02-512.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="uname"><b>Tên đăng nhập</b></label>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" placeholder="Nhập tên đăng nhập" name="txttdn" required>
    </div>

    <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
    <label for="psw"><b>Mật khẩu</b></label>
    <div class="input-container">
      <i class="fa fa-unlock-alt icon"></i>
      <input class="input-field" type="password" 
              title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên"
              placeholder="Nhập mật khẩu" name="txtpassword" required>
    </div>

    <button type="submit">Đăng nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="chk" value="1"> Nhớ mật khẩu
      
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='../../home/site/index.html'">Thoát</button>

    <span class="psw">
    <a style="text-decoration: none" href="../register/register.php">Bạn chưa có tài khoản?</a>&nbsp;&nbsp;
    <a style="text-decoration: none" href="../forgetpsw/forgetpsw.php">Quên mật khẩu?</a></span>
  </div>
</form>
</div>
</body>
</html>