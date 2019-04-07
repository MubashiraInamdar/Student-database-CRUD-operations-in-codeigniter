<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
input, textarea{
    color: #f00;
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
  </style>

</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>index.php/login/my_profile">My Profile</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>index.php/users/admin">Admins</a></li>
        <li><a href="<?php echo base_url();?>index.php/users/student">Students</a></li>
        <li><a href="<?php echo base_url();?>index.php/users/subject">Subjects</a></li>
        <li><a href="<?php echo base_url();?>index.php/users/scores">Scores</a></li> 
      </ul>
    </div>
<div class="nav navbar-nav navbar-right" >
<?php echo anchor('login/logout', 'Logout');?>
</div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
<h2>Edit Admin's Information</h2>

<form method="post" action="<?php echo base_url();?>index.php/login/update_my_profile" >
<?php
extract($admins);
?>
<table border="0" cellpadding="5" align="center">
<tr>
<th align="right" scope="row">Enter Admin's user name</th>
<td><input type="text" name="username" size="20" value="<?php echo $username; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter Email</th>
<td><input type="text" name="email" size="20" value="<?php echo $email; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">Profile Picture</th>
<td><input type="file" name="picture" value="<?php echo $picture; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td>
<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
<input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>




