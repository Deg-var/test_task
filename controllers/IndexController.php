<?php

use CProducts as GlobalCProducts;

class IndexController extends Controller {

	private $pageTpl = '/views/main.tpl.php';


	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
	}


	public function index() {
		$date = CProducts::getDate();
		return $this->view->render($this->pageTpl, $this->pageData,['date'=>$date]);
	}
}

class CProducts{
	public static function getDate(){

		$result = DB::getDb();
		$id =  array();
		$name = array();
		$price = array();
		$article = array();
		$quantity = array();
		$status = array();
		$date = array();
		
		while($row = mysqli_fetch_array($result)){
			array_push ($id,$row["id"]);
			array_push ($name,$row["product_name"]);
			array_push ($price,$row["product_price"]);
			array_push ($article,$row["product_article"]);
			array_push ($quantity,$row["product_quantity"]);
			array_push ($status,$row["status"]);
			array_push ($date,$row["date_create"]);			
	};
	array_push($new, $id, $name, $price, $article, $quantity, $status, $date);
	return $new;
	
	}
}