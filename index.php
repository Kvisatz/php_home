<style>
	/*.active{
		background-color: #f00;
	}*/
</style>

<?php
	// echo "233144"."<br>";
	// echo "<br>";
	// echo "233144";
	// $a = 10;
	// echo $a;
	// echo "blallalabla $a"."<br>";
	// $age = 33;
	// echo 'Andrey'."$age";
	// echo "Andrey$age";

	// $a = [10, [4, 8, [70, 20]], 7];
	// echo "<pre>";
	// print_r($a);//для массива
	// echo "</pre>";

	// prinArray($a);
	// function prinArray($arr){
	// 	echo "<pre>";
	// 	print_r($arr);//для массива
	// 	echo "</pre>";
	// }

	//var_dump($a);

	// $a = [5, 7];
	// for($i = 0; $i < count($a); $i++){
	// 	echo $a[$i];
	// }
	// $i = 0;
	// while($i < count($a)){
	// 	echo $a[$i];
	// 	$i++;
	// }
	// if(false){
	// 	echo "+";
	// }
	// else{
	// 	echo "-";
	// }
	// $b = 1;
	// switch($b){
	// 	case '0': echo "0"; break;
	// 	case '1': echo "1"; break;
	// 	default: echo "else"; break;

	// }
	// $a = [5, 7, 4, 7, 4];

	// for($i = 0; $i < count($a); $i++){
	// 	if($a[$i] > 5){
	// 		echo $a[$i];
	// 		$b = [];
	// 		$b[] = $a[$i];
	// 		$flag = false;
	// 		for($j = 0; $j < count($b); $j++){
	// 			if($b[$j] == $a[$i]){
	// 				echo $b[$j];
	// 				$flag = true;
	// 			}
	// 		}
	// 		if($flag = false){
	// 			$b[] = $a[$i];

	// 		}		
	// 	}
	// }

	// prinArray($b);

	// $a = [
	// 	'name' => 'Andrey'
	// 	];
	// $a['name'];

	// foreach($a as $key => $value){
	// 	echo $value;
	// }

	// $student = [
	// 	['name' => 'Alexey'],
	// 	['name' => 'Evgeniy'],
	// 	['name' => 'Andrey']

	// ];

	
	// prinArray($student);
	// echo "<ul>";
	// foreach($student as $value){
	// 	echo "<li>".$value['name']."</li>";
	// }
	// echo "</ul>";

	// $links = [
	// 	['name' => 'Main', 'url' => 'https://ya.ru'],
	// 	['name' => 'Contacts', 'url' => 'https://ya.ru'],
	// 	['name' => 'More', 'url' => 'https://ya.ru']
	// ];
	// echo "<ul>"; 
	// foreach($links as $value){
	// 	echo "<li><a href = '{$value['url']}'>{$value['name']}</a></li>";
	// }
	// echo "</ul>";


	// $posts = [
	// 			"Новость 1",
	// 			"Новость 2",
	// 			"Новость 3",
	// 			"Новость 4",
	// 			"Новость 5",
	// 			"Новость 6",
	// 			"Новость 7",
	// 			"Новость 8",
	// 			"Новость 9"
	// 		];

	// $count_posts_page = 2;

	// if(!isset($_GET['page'])){
	// 	$_GET['page'] = 1;
				
	// }
	// render($count_posts_page, $posts);
	
	// $count_pages = count($posts)/$count_posts_page;

	// echo "<ul>";
	// for ($i=0; $i < $count_pages; $i++) { 

	// 	$page = $i+1;

	// 	if(isset($_GET['page']) && $_GET['page'] == $page){
			
	// 		echo "<li class = 'active'><a href = 'index.php?page=".$page."'>".$page."</a></li>";
	// 	}
	// 	else{
	// 		echo "<li><a href = 'index.php?page=".$page."'>".$page."</a></li>";
	// 	}
		
	// }
	// echo "</ul>";

	// function render($count_posts_page, $posts){
	// 	$start;
	// 	if($_GET['page'] == 1){
	// 		$start = 0;
	// 	}
	// 	else{
	// 		$start = ($_GET['page'] - 1)*$count_posts_page;
	// 	}
	// 	$j = 0;
	// 	for($i=$start; $i < count($posts); $i++){
	// 		if($count_posts_page > $j){
	// 			echo "<div>".$posts[$i]."</div>";
	// 		}
	// 		$j++;
	// 	}
	// }

	// if(isset($_GET['page'])){
	// 	echo $_GET['page'];
	// }
	
	
?>
<?php 
    // print_r($_POST["number"]);
    $mass = $_POST['number'];
	// print_r($mass);
    if(isset($mass) && is_array($mass)){
        renderListNames($mass);
    }
    function renderListNames($mass){
        echo "<ul>";
        for($i=0; $i < count($mass); $i++){
            echo "<li>$mass[$i]</li>";
        }
        echo "</ul>"; 
    }
?>


<?php
	$user_names = ["Andrey", "Oleg", "Alex", "Egor"];
	echo "<form action='index.php' method='POST'><select name='number[]' multiple>";
	for($i=0; $i < count($user_names); $i++){
		// echo "<option value='$user_names[$i]'>$user_names[$i]</option>";
		if($mass > 0){
			for($j=0; $j < count($mass); $j++){
				if($mass[$j] == $user_names[$i]){
					echo "<option value='$user_names[$i]' selected>$user_names[$i]</option>";
				}
				// else{
				// 	echo "<option value='$user_names[$i]'>$user_names[$i]</option>";
				// }
				// echo "<option value='$user_names[$i]' selected>$user_names[$i]</option>";
			}
			// echo "<option value='$user_names[$i]'>$user_names[$i]</option>";
		}
		else{
			echo "<option value='$user_names[$i]'>$user_names[$i]</option>";
		}
		// else{
		// 	for($j=0; $j < count($mass); $j++){
		// 		if($mass[$j] == $user_names[$i]){
		// 			echo "<option value='$user_names[$i]' selected>$user_names[$i]</option>";
		// 		}
		// 		else{
		// 			echo "<option value='$user_names[$i]'>$user_names[$i]</option>";
		// 		}
		// 		// echo "<option value='$user_names[$i]' selected>$user_names[$i]</option>";
		// 	}
			
						
		// }

	}
	echo "</select><button type='submit'>Send</button></form>";
	

?>
<!-- <a href="index2.php?a=123">ссылка</a> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="obr.php" method="POST">
		<input type="text" name="field_1">
		<input type="radio"name="r1" checked value="0">1
		<input type="radio" name="r1" value="1">2

		<br>
		<input type="checkbox" name="c1" value="0">2
		<input type="checkbox" name="c2" value="1">2
		<select name="number[]" id="" multiple>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
		<button type="submit">Send</button>

	</form>
</body>
</html> -->