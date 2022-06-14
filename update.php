

<?php
	$link = new mysqli("localhost", "admin_web11", "1234", "web11_db");
	function selectData($link){
		$sql = 'SELECT id, name FROM `lang` WHERE id = '.$_GET['lang_update'];

		$resource = $link->query($sql);

		$data;

		while($row = $resource->fetch_array(MYSQLI_ASSOC)){
			$data = $row;
		}
		return $data;
	}


	if(isset($_GET['lang_update'])){
		$data = selectData($link);
	}
	else{
		header("location: index.php");
	}
?>

<form action="index.php" method="POST">
	<input type="text" name="lang" value="<?php echo $data['name'];?>">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>">
	<input type="submit" value="update">
</form>