<?php
	$link = new mysqli("localhost", "admin_web11", "1234", "web11_db");
	
	function selectData($link){
		if(isset($_GET['abc_sort']) && $_GET['abc_sort'] == 'zyx'){
			$sql = "SELECT id, name FROM `lang` ORDER BY name DESC";
		}
		else{
			$sql = "SELECT id, name FROM `lang` ORDER BY name ASC";
		}

		$resource = $link->query($sql);

		$data = [];

		while($row = $resource->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}
	if(isset($_POST['lang']) && isset($_POST['id'])){
		$sql = 'UPDATE `lang` SET name = \''.$_POST['lang'].'\' WHERE id = '.$_POST['id'];
		$link->query($sql);
	}

	if(isset($_GET['lang_delete'])){
		$sql = 'DELETE FROM `lang` WHERE id = '.$_GET['lang_delete'];
		$link->query($sql);
	}

	if(isset($_GET['lang_name'])){
		$data = selectData($link);
		// print_r($data);
		$flag = false;
		foreach ($data as $value){
						if($value['name'] == $_GET['lang_name']){
				$flag = true;
				break;
			}
		}
		if(!$flag){
			$sql = 'INSERT INTO `lang` (name) VALUES(\''.$_GET['lang_name'].'\')';
			$link->query($sql);
		}
		
	}

	$data = selectData($link);
	echo "<ul>";
	foreach ($data as $value) {
		// if($_GET['lang_name'] === $value['name']){
		// 	$sql = 'DELETE FROM `lang` WHERE name = \''.$_GET['lang_name'].'\'';
		// 	$link->query($sql);
		// }
		echo "<li>{$value['name']}
				<a href='index.php?lang_delete={$value['id']}''>delete</a>
				<a href='update.php?lang_update={$value['id']}''>update</a>
			 </li>";
	}
	echo "</ul>";

?>

<form action="index.php" method="GET">
	<input type="text" placeholder="Enter language" name="lang_name">
	<input type="radio" name="abc_sort" value="abc" checked>abc
	<input type="radio" name="abc_sort" value="zyx">zyx
	<input type="submit" value="Add">
</form>