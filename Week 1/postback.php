<?php
$msg="";
$userAns="";
if(isset($_POST["answerBtn"]))
{
    $userAns=$_POST["capital"];
    if($userAns===""){
        $msg = "You need to answer the question";
    }else{
        if($userAns==="Paris"){
            $msg = "You are correct";
        }else{
            $msg = "You are wrong";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Submitting a form to the same page</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="capital">What is the capital of France:</label>
<input type="text" value="<?php echo $userAns;?>" name="capital">
<input type="submit" name="answerBtn">
</form>

<?php
echo "<p>{$msg}</p>";
?>
</body>
</html>