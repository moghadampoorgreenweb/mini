<?php
require_once __DIR__."/../../config/config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello index</h1>
<form action="<?php echo BASE_URL_ACTION ?>/userController/index" method="post">
<input type="text" name="firstName" >
<input type="text" name="lastName" >
<input type="text" name="email" >
<input type="text" name="password" >
<input type="text" name="phoneNumber" >
<input type="text" name="status" >
    <input type="submit" value="Submit" name="submit">

</form>
</body>
</html>





