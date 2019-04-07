 <html>

<head>

<title>Form Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
input, textarea {color: #f00;  }
  

}
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style></head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      
    </div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
<h2>Administrator Login</h2>
<form action="<?php echo base_url();?>index.php/login/login_form" method="post" name="login">

<table border="0" cellpadding="4" align="center">

<tr>

<td>Username</td>

<td>:</td>

<td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>"> <?php echo form_error('username');?></td>

</tr>

<tr>

<td>Password</td>

<td>:</td>

<td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>"> <?php echo form_error('password');?></td>

</tr>

<td>&nbsp;</td>

<td>&nbsp;</td>

<td><input type="submit" name="login" value="Login"> </td>

</tr>

</table>

</div>

</form>

</body>

</html>