<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="main_title">
    </div>
    <div class="navbar">
        <a href="index.php">首頁</a>
        <a href="http://tsj.tw/">分頁1</a>
        <div class="dropdown">
        
          <button class="dropbtn">連結
            <!--<i class="fa fa-caret-down"></i>-->
          </button>
          <div class="dropdown-content">
            <!--<div class="header">
              <h2>測試選單</h2>
            </div>-->
            <div class="row"></div>
              <div class="column">
                <a href="page1.php">連結1</a>
                <a href="#">連結2</a>
                <a href="#">連結3</a>
                <a href="#">連結4</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="paragraph">
      <div  id="php1">
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
    ?>
</div>
      </div>
    </div>
</body>
</html>