<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!--delete Record query-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!--Pagigation-->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()?>/jquery.simplePagination.js"></script>
<link href="<?php echo base_url()?>/simplePagination.css" rel="stylesheet" type="text/css" />

  <style type="text/css">

  ::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }

  body {
    background-color: #fff;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }

  h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 15px;
  }

  
  #body {
    margin: 0 15px 0 15px;
  }

  p.footer {
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }

  #container {
    margin: 10px;
    border: 1px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D0D0;
  }
  .table-dark {
    --bs-table-bg: #607D8B;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: #fff;
    border-color: #373b3e;
}
.btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    margin-left: 90%;
    margin: top;
    /* height: 36px; */
}

i.fa.fa-trash-o {
    color: white;
}


  </style>
</head>
<body>

<div id="container">

  <h1>User Data!</h1>

<div class="m-4">
    <table class="table">

        <thead class="table-dark">
            <tr>
                <th>#Srno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mob No.</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($usersdata as $key => $value) {
            
          ?>
            <tr>
                <td><?= $value['uid']?></td>
                <td><?= $value['uname']?></td>
                <td><?= $value['email']?></td>
                <td><?= $value['mob_no']?></td>


            </tr>
        <?php }?>
          
        </tbody>
    </table>
    <p><?php echo $links; ?></p>
</div>






</body>
</html>