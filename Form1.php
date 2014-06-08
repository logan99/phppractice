<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br> <!-- Now here $_POST global variable has both the name and email values, we can deference it by calling the $_POST['variable name'] and access it, we can also use it perform manipulative calculation to show complex outputs -->
Your email address is: <?php echo $_POST["email"]; ?> <!-- same as above , $_POST is an associative array -->

</body>
</html>