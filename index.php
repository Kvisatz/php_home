<style>
	ul{
		display: flex;
		list-style: none;
		margin-bottom: 0;
	}
	ul li{
		padding: 5px 10px;
	}
	ul a{
		padding: 5px 10px;
		background-color: #ff0;
		border: 1px solid #000;
	}
	.inner_ul{
		flex-direction: column;
		margin: 0;
	}
</style>

<?php

	$menu_items = ["Main", "Photos","Shop","Contacts"];
	$main_items = ["First", "Second", "Third"];
	$photo_items = ["Photo", "Photo", "Photo"];
	$shop_items = ["Shop", "Shop", "Shop"];
	$contact_items = ["Contacts", "Contacts", "Contacts"];
	$list = "";

	echo "<ul>";
		for($i = 0; $i < count($menu_items); $i++){

			if(!isset($_GET['items_list'])){
				echo "<li><a href = 'index.php?items_list=".$menu_items[$i]."'>".$menu_items[$i]."</a></li>";
			}
			else{
				echo "<li><a href = 'index.php?items_list=".$menu_items[$i]."'>".$menu_items[$i]."</a><ul>".$list."</ul></li>";
				if($menu_items[$i] == 'Main' && $_GET['items_list'] == 'Main'){
					$list = render($main_items);
				}
				if($menu_items[$i] == 'Photos' && $_GET['items_list'] == 'Photos'){
					$list = render($photo_items);
				}
				if($menu_items[$i] == 'Shop' && $_GET['items_list'] == 'Shop'){
					$list = render($shop_items);
				}
				if($menu_items[$i] == 'Contacts' && $_GET['items_list'] == 'Contacts'){
					$list = render($contact_items);
				}
			}	
		}
	echo "</ul>";
	function render($arg){
		echo "<ul class='inner_ul'>";
		for($i = 0; $i < count($arg); $i++){
			echo "<li><a href = 'index.php'>".$arg[$i]."</a></li>";
		}
		echo "</ul>";
	}
	//render($main_items);
?>