<html>
<form action = "mission 1-4 naito 2.php" method = "post">
 <input type = "text" name = "message" value = "コメント">
 <input type = "submit" value = "送信">
</form>

<?php 
 $message = $_POST['message']; 
 $date=date("Y年m月d日 H時i分s秒");
  if( !(empty($message)) );
   echo "ご入力ありがとうございます。<br>".$date."に".$message."を受け付けました。";
?>
</html>