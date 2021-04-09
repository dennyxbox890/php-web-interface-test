<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style-p.css">
</head>
<body>
//from https://www.w3schools.com/html/html_forms.asp
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="a">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //using htmlspecialchars 2 prevent hack
    $a = htmlspecialchars($_REQUEST['a']);
    if (empty($a)) {
        echo "empty";
    } else {
        echo $a;
    }
}
?>

</body>
</html>