<html>
<form action = "mission_1-5.php" method = "post">
 <input type = "text" name = "message" value = "コメント">
 <input type = "submit" value = "送信">
</form>

<?php 
 $filename = 'mission_1-5_naito.txt'; 
 $fp = fopen($filename,'w'); 
 fwrite($fp, $_POST['message']); echo file); fclose($fp);?>
 $message = $_POST['message']; 
 $date=date("Y年m月d日 H時i分s秒");
 $value = $message
 if(!empty("$_POST['message']")) echo "おめでとう！"
   
</html>