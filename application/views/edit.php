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
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
input, textarea{
    color: #f00;
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
<h2>Edit Student's Information</h2>

<form method="post" action="<?php echo base_url();?>index.php/users/update" >
<?php
extract($user);
?>
<table border="0" cellpadding="5" align="center">
<tr>
<th align="right" scope="row">Enter Student's name</th>
<td><input type="text" name="name" size="20" value="<?php echo $name; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter email</th>
<td><input type="text" name="email" size="20" value="<?php echo $email; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter Address</th>
<td><textarea name="address" rows="5" cols="20"><?php echo $address; ?></textarea></td>
</tr>
<tr>
<th align="right" scope="row">Enter Date of Birth</th>
<td><input type="text" name="dob" size="20" value="<?php echo $dob; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>