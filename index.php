<?php
session_start();
if (isset($_POST['name1'])&&isset($_POST['name2'])&&!empty($_POST['name1'])&&!empty($_POST['name2'])) {
	$name=$_POST['name1'];
	$t=$_SESSION['secure'];
	if ($name==$t) {
		echo 'STRING MATCHED';
	}else {
      		echo 'STRING NOT MATCHED,TRY AGAIN';
              $_SESSION['secure']=rand(1000,9999);  		
	}
	
}else {
	$_SESSION['secure']=rand(1000,9999);
}

?>
<img src="capta.php"/>
<form action="index.php" method="POST">
ENTER THE STRING:
<input type='text' name='name1'><br>
<input type='submit' name='name2' value='SUBMIT'>
</form>