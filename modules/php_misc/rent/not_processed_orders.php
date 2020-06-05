<?php
class Order{
	public $id_orders = null;
	public $number_house = null;
	public $house_id = null;
	public $date_rent = null;
	public $season = null; 
	public $price = null;
	public $phone = null;
	public $fnp = null;
	public $additionally = null;

	public function __construct( $data=array()) {
		if ( isset( $data['id_orders'] ) ) $this->id_orders = (int) $data['id_orders'];
		if ( isset( $data['number_house'] ) ) $this->number_house = (string) $data['number_house'];
		if ( isset( $data['house_id'] ) ) $this->house_id = (int) $data['house_id'];
		if ( isset( $data['date_rent'] ) ) $this->date_rent = (string) $data['date_rent'];
		if ( isset( $data['season'] ) ) $this->season = (int) $data['season'];
		if ( isset( $data['price'] ) ) $this->price = (int) $data['price'];
		if ( isset( $data['phone'] ) ) $this->phone = (int) $data['phone'];
		if ( isset( $data['fnp'] ) ) $this->fnp = (string) $data['fnp'];
		if ( isset( $data['additionally'] ) ) $this->additionally = (string) $data['additionally'];
	}
		public static function getById( $id ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SET NAMES utf8";
		$st = $conn->prepare( $sql );
		$st->execute();

		$sql = "SELECT * FROM orders";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":id", $id, PDO::PARAM_INT );
		$st->execute();
		$row = $st->fetch();
		$conn = null;
		if ( $row ) return new order ( $row );
	}

	public static function getList($fnp='',$number_house='',$phone='') {
	$fnp = strval($fnp);
	$number_house = strval($number_house);
	$phone = intval($phone);

    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );

	$sql = "SET NAMES utf8";
	$st = $conn->prepare( $sql );
    $st->execute();
    
	$sql = "SELECT * FROM `orders` WHERE ((fnp = :fnp_par) OR (:fnp_par = '')) AND ((number_house = :num_par) OR (:num_par = '')) AND ((phone	 = :ph_par) OR (:ph_par = ''))";

    $st = $conn->prepare( $sql );
    $st->bindValue( ":fnp_par", $fnp, PDO::PARAM_STR ); 
    $st->bindValue( ":num_par", $number_house, PDO::PARAM_STR );
     $st->bindValue( ":ph_par", $phone, PDO::PARAM_INT );
	$st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
      $order = new Order( $row );
      $list[] = $order;
    }

    $conn = null;
    return $list;
  } 
}

