
<!-- Empty variables -->

<?php
$bg_colour="";
$txt_colour="";
$font="";
$heading_txt="";
$main_txt="";
$err_msg="";
$errors=false;
$submitted=false;




// Test the subimit first before 
if(isset($_POST['submit_btn'])){
    $submitted=true;
    if(isset($_POST['bg_colour'])){
	    $bg_colour=$_POST['bg_colour'];
    }
    else{
        $errors=true;
        $err_msg.="<p>You need to choose a background colour</p>";
    }
    if(isset($_POST['txt_colour'])){
	    $txt_colour=$_POST['txt_colour'];
    }
    else{
        $errors=true;
        $err_msg.="<p>You need to choose a text colour</p>";
    }
    if(!empty($bg_colour) && !empty($txt_colour)){
        if($bg_colour===$txt_colour){
            $errors=true;
            $err_msg.="<p>You can't choose the same colour for the text and background</p>";
        }
    }
    $font=$_POST['font'];
	  $heading_txt=trim($_POST['heading_txt']);
	  $main_txt=trim($_POST['main_txt']);
    if(empty($heading_txt)){
        $errors=true;
        $err_msg.="<p>You need to enter some text for the heading</p>";
    }
    if(empty($main_txt)){
        $errors=true;
        $err_msg.="<p>You need to enter some main text</p>";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Design Your Own Page Form</title>

<style>
<?php
if(!$errors && $submitted){
?>
.user-page{
    margin:5%;
    padding:5%;
    color:<?php echo $txt_colour;?>;
    background-color:<?php echo $bg_colour;?>;
    font-family:"<?php echo $font;?>";
}
<?php
}
?>
</style>


</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<h1>Design Your Own Webpage</h1>
<fieldset>
<legend>What colour background would you like?</legend>
<label for="bg_red">Red</label><input <?php if($bg_colour=="red") echo "checked"; ?> id="bg_red" type="radio" name="bg_colour" value="red">
<label for="bg_blue">Blue</label><input <?php if($bg_colour=="blue") echo "checked"; ?> id="bg_blue" type="radio" name="bg_colour" value="blue">
<label for="bg_green">Green</label><input <?php if($bg_colour=="green") echo "checked"; ?> id="bg_green" type="radio" name="bg_colour" value="green">
<label for="bg_yellow">Yellow</label><input <?php if($bg_colour=="yellow") echo "checked"; ?> id="bg_yellow" type="radio" name="bg_colour" value="yellow">
</fieldset>

<fieldset>
<legend>What colour text would you like?</legend>
<label for="txt_red">Red<input <?php if($txt_colour=="red") echo "checked"; ?> id="txt_red" type="radio" name="txt_colour" value="red">
<label for="txt_blue">Blue<input <?php if($txt_colour=="blue") echo "checked"; ?> id="txt_red" type="radio" name="txt_colour" value="blue">
<label for="txt_green">Green<input <?php if($txt_colour=="green") echo "checked"; ?> id="txt_red" type="radio" name="txt_colour" value="green">
<label for="txt_yellow">Yellow<input <?php if($txt_colour=="yellow") echo "checked"; ?> id="txt_red" type="radio" name="txt_colour" value="yellow">
</fieldset>

<fieldset>
<label for="font">Choose a font</label>
<select id="font" name="font">
<option <?php if($font=="Arial") echo "selected"; ?> value="Arial">Arial</option>
<option <?php if($font=="Verdana") echo "selected"; ?> value="Verdana">Verdana</option>
<option <?php if($font=="Courier") echo "selected"; ?> value="Courier">Courier</option>
<option <?php if($font=="Comic Sans MS") echo "selected"; ?> value="Comic Sans MS">Comic Sans</option>
</select>
</fieldset>
<fieldset>
<div>
<label for="heading_txt">Heading Text</label>
<input type="text" id="heading_txt" value="<?php echo $heading_txt;?>" name="heading_txt">
</div>
</fieldset>
<fieldset>
<div>
<label for="main_txt">Main Text</label>
<textarea name="main_txt" id="main_txt"  rows="5" cols="20"><?php echo $main_txt;?></textarea>
</div>
</fieldset>
<div>
<input type="submit" name="submit_btn" value="Make my page"/>
</div>
</form>
<?php
if($submitted){
  if($errors){
      echo $err_msg;
  }else{
      echo "<h2>Here's your page...</h2>";
      echo "<div class='user-page'>";
      echo "<h1>{$heading_txt}</h1>";
      echo "<p>{$main_txt}</p>";
      echo "</div>";
  }
}
?>

</body>
</html>