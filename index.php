<html>

<body>

<?php echo "start calling"; ?>

<form action = "./makecall.php" method = "post" >
    <input type="submit" value = "start call ">
</form >

<?php echo "HTPDOCS : test calling";?>

<form action = "./twilioCall.php" method = "post" >
    <input type="submit" value = "test call">
</form >

</body>
</html>
