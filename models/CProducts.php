<?php
class CProducts{
	public static function getDate(){

	$result = db::getDb();
		$id = [];
		$name = [];
		$price = [];
		$article = [];
		$quantity = [];
		$status = [];
		$date = [];


		while($row = mysqli_fetch_array($result)){
			$id = array_push ($id,$row["id"]);
			$name = array_push ($name,$row["name"]);
			$price = array_push ($price,$row["price"]);
			$article = array_push ($article,$row["article"]);
			$quantity = array_push ($quantity,$row["quantity"]);
			$status = array_push ($status,$row["status"]);
			$date = array_push ($date,$row["date"]);			
	};
return [$id, $name, $price, $article, $quantity, $status, $date];
	
	}
}
?>
