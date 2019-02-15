<html lang ="ja">
<form action = "mission_1-5_naito_2.php" method = "post">
 <input type = "text" name = "message" value = "コメント">
 <input type = "submit" value = "送信">
</form>

<?php 
 $filename = 'mission_1-5_naito.txt'; 
 $fp = fopen($filename,'w'); 
 fwrite($fp, $_POST['message']); fclose($fp);
 $message = $_POST['mission 1-4 naito 2'];
 $date=date("Y年m月d日 H時i分s秒");
 if(!empty($message)){echo "おめでとう！"};
 else echo $_SERVER['PHP_SELF']
 ?>
   
</html>