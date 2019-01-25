<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rest API Client Side Demo</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Rest API </h2>
  <form class="form-inline" action="" method="GET">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control"  placeholder="Enter Product Name" required/>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
  <form action="deletehoroscope.php" method='POST'>
  <button type='submit' name='submit'>Delete horoskop</button>
  
  </form>
  <p>&nbsp;</p>
  <h3>
  <?php
include "addHoroscope.php";
include "viewHoroscope.php";
   ?>
  </h3>
</div>

<?PHP
print_r($_SERVER['REQUEST_METHOD']);
echo "<br>";
print_r($_REQUEST);
echo "<br>";
echo "hi THIS IS";
?>
<?php
//index.php
echo $_SERVER['REQUEST_METHOD'], '<BR>';
print_r($_REQUEST);
print_r(getallheaders())
?>
</body>
</html>