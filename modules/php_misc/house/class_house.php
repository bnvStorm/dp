<?php
class House{
	public $img_source = null;
	public $house_id = null;
	public $number_house = null;
	public $category = null;
	public $capacity = null; 
	public $description = null;
	public $price = null;

	public function __construct( $data=array()) {
		if ( isset( $data['img_source'] ) ) $this->img_source = (string) $data['img_source'];
		if ( isset( $data['house_id'] ) ) $this->house_id = (int) $data['house_id'];
		if ( isset( $data['number_house'] ) ) $this->number_house = (string) $data['number_house'];
		if ( isset( $data['category'] ) ) $this->category = (string) $data['category'];
		if ( isset( $data['capacity'] ) ) $this->capacity = (int) $data['capacity'];
		if ( isset( $data['description'] ) ) $this->description = (string) $data['description'];
		if ( isset( $data['price'] ) ) $this->price = (int) $data['price'];	
	}

		public static function getById( $id ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SET NAMES utf8";
		$st = $conn->prepare( $sql );
		$st->execute();

		$sql = "SELECT * FROM houses WHERE house_id = :id";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":id", $id, PDO::PARAM_INT );
		$st->execute();
		$row = $st->fetch();

		$conn = null;
		if ( $row ) return new house ( $row );
	}


public static function getList($category='', $capacity='', $number_house=''	) { 
$category = intval($category); 
$capacity = intval($capacity);
$number_house = strval($number_house);
$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 

$sql = "SET NAMES utf8"; 
$st = $conn->prepare( $sql ); 
$st->execute(); 

$sql = "SELECT * FROM `houses` WHERE ((category = :cat_par) OR (:cat_par = '')) AND ((capacity = :cap_par) OR (:cap_par = '')) AND ((number_house = :num_par) OR (:num_par = '')) "; 

$st = $conn->prepare( $sql ); 
$st->bindValue( ":cat_par", $category, PDO::PARAM_INT ); 
$st->bindValue( ":cap_par", $capacity, PDO::PARAM_INT ); 
$st->bindValue( ":num_par", $number_house, PDO::PARAM_INT ); 
$st->execute(); 
$list = array(); 

    while ( $row = $st->fetch() ) {
      $house = new House( $row );
      $list[] = $house;
    }

$conn = null; 
return $list; 
} 
}
