<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Administration</title>
<script type="text/javascript">

function show_confirm(act,gotoid)

{

if(act=="edit")

var r=confirm("Do you really want to edit?");

else

var r=confirm("Do you really want to delete?");

if (r==true)

{

window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;

}

}

</script>
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
  
<h2> Student Information </h2>

 
<table width="600" border="1" cellpadding="5" align="center">

<tr>

<th scope="col">Id</th>

<th scope="col">Subject Name</th>

<th scope="col">Max Marks</th>

<th scope="col" colspan="2">Action</th>

</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->sub_id; ?></td>

<td><?php echo $u_key->sub_name; ?></td>

<td><?php echo $u_key->max_mrks; ?></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('edit_sub',<?php echo $u_key->sub_id;?>)">Edit</a></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('delete_sub',<?php echo $u_key->sub_id;?>)">Delete </a></td>

</tr>

<?php }?>

<tr>

<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/add_sub">Insert New Subject</a></td>

</tr>
</table>
</div>

</body>

</html>
