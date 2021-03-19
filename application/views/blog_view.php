<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <!-- load bootstrap css file -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>

  <!-- <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><?php echo $content; ?></h1>
        <p class="lead">This is my first blog.</p>
      </div>
    </div>
  </div> -->

  <div class="container">
    <h1><?php echo $content;?></h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

</body>

</html>