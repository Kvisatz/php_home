<?php

	if(isset($_POST['search']) && !empty($_POST['search'])){
		$connect = new mysqli("localhost", "root", "", "web11_db");

		$sql = "SELECT * FROM `product` WHERE name LIKE '%".$_POST['search']."%'";
		$result = $connect->query($sql);
		$data = [];
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		echo "<ul>";
		foreach ($data as $product) {
			echo "<li>{$product['name']}</li>";
		}
		echo "</ul>";
	}
	


?>

<form action="index.php" method="POST">
	<input type="text" name="search">
	<input type="submit" value="найти">
</form>

SELECT s.id as s_id, s.name as s_name, g.name as g_name, g.coach_id as g_coach FROM `sportsman` s INNER JOIN `groups` g ON s.group_id = g.id AND g.coach_id IS NULL;