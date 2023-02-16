<?php
include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FestPict</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }
  
  .container {
      width: 100%;
      columns: 5;
      column-gap: 15px;
      padding: 15px;
  }
  
  img {
      width: 100%;
      margin-bottom: 15px;
      border-radius: 10px;
  }
</style>
</head>
<body>
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light"><b>FestPict</b></a>
    <form class="d-flex" role="search">
        <a href="index.php" class="btn btn-info me-2">Settings</a>
        <a href="logout.php" class="btn btn-danger me-2">Logout</a>
    </form>
  </div>
</nav>
<div class="container">
    <div class="img">
    <?php
include('dbconnection.php');
$ret=mysqli_query($con,"select * from tblusers");
while ($row=mysqli_fetch_array($ret)) {
?>
        <img src="profilepics/<?php echo $row['ProfilePic']; ?>">
    </div>
    <?php } ?>
</div>
</body>
</html>

