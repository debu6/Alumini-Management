
<?Php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p>Wlocome <?Php echo $_SESSION['$first_name']; ?></p>
    <form action="registerUserDetails.php" method="post">
        <input type="number" name="registration_no" id="">
        <input type="submit" name="submit" id="" value="Search">
    </form>
</body>
</html>
