<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

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

body {
    margin-top: 147px;
    background-color: #E91E63;
}

form {
    box-shadow: 5px 5px 5px #141212ba;
     background-color: #9e9e9ea8;
}

table, th, td {
  border:1px solid black;
}

</style>
</head>
<body>

<div class="container">
	<!---Start Session sms display karnya sathi use kela jato -->
<div class="col-md-10">
<?php 
if($this->session->userdata('success')){
$success = $this->session->userdata('success');
if($success != "") {
?>
<div class="alert alert-success"><?php echo $success;?></div>
<?php
 }
}
?>

<?php 
if($this->session->userdata('danger')){
$danger = $this->session->userdata('danger');
if($danger != "") {
?>
<div class="alert alert-danger"><?php echo $danger;?></div>
<?php
 }
}
?>
</div>
<!--End Session-->

<form action="<?php echo base_url()?>User/add" method="post" style="max-width:500px;margin:auto">
  <!-- <h2>How TO - Toggle Password Visibility</h2> -->

  <h2 align="center">User Login Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" required>
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" id="myInput" placeholder="Password" name="psw" required>
  </div>

<!-- An element to toggle between password visibility -->
<input type="checkbox" onclick="myFunction()">Show Password
<hr>
<br>

  <button type="submit" class="btn">Register</button>
</form>













</div>

<script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>




</body>
</html>
