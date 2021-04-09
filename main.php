<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style-p.css">
</head>
<body>



<div class="form">
<!--from https://www.w3schools.com/html/html_forms.asp-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  test input: <input type="text" name="a" id="text_box">
  <input type="submit" id="submit_button">
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
</div>

<hr>

<div class="sys_time">
    <?php 
        echo date("Y-m-d\ne h:i");
        sleep(1);
    ?>
</div>

</body>
</html>