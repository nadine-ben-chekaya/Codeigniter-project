<!doctype html>
<html>
<head>
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <title>Sapnatech</title>
</head>

<style>
/*ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}*/
/*login style*/
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?php echo base_url()?>/dashboard" style="font-family: 'Sofia';font-size: 33px;">SapnaTech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php if (session()->get('isLoggedIn')): ?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>/dashboard" style="font-family: 'Sofia';font-size: 22px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>/services" style="font-family: 'Sofia';font-size: 22px;">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>/projects" style="font-family: 'Sofia';font-size: 22px;">Projects</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>/about" style="font-family: 'Sofia';font-size: 22px;">About</a>
     </li>

     <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>/contacts" style="font-family: 'Sofia';font-size: 22px;">Contact us</a>
    </li>
    </ul>

    <ul class="navbar-nav my-2 my-lg-0">
       <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url()?>/dashboard/logout" style="font-family: 'Sofia';font-size: 22px;">Logout</a>
      </li>
    </ul>


  <?php else: ?>
 
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>/services">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>/projects">Projects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>/about">About</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>/contacts/add">Contact us</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url()?>/users">Login</a>
    </li>
      
      
    </ul>
    </div>
  <?php endif; ?>
  </div>
</nav>

  


    

<h1><?= esc($title); ?></h1>