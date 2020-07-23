<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>WeSmile</title>
        <link rel="stylesheet" href="style1.css">
</head>
<body>
        <header>
          <a href="#" class="logo">WeSmile</a>
          <ul>
            <li><a href="register.php" >Register</a></li>
            <li><a href="mainpage.php" >About</a></li>
            <li><a href="login.php" >Logout</a></li>
          </ul>
        </header>
        <section class="banner"></section>
        <script type="text/javascript">
          window.addEventListener("scroll",function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky",window.scrollY > 0);
          })
</script>
</body>
</html>
    
  