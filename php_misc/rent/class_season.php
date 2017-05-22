<?php
class Season{
	public $season_id = null;
	public $season_name = null;
	public $date_begin = null;
	public $date_end = null;
	public $percent = null;


	public function __construct( $data=array()) {
		if ( isset( $data['season_id'] ) ) $this->season_id = (int) $data['season_id'];
	if ( isset( $data['season_name'] ) ) $this->season_name = (string) $data['season_name'];
		if ( isset( $data['date_begin'] ) ) $this->date_begin = (string) $data['date_begin'];
		if ( isset( $data['date_end'] ) ) $this->date_end = (int) $data['date_end'];
		if ( isset( $data['percent'] ) ) $this->percent = (int) $data['percent'];
	}

		public static function getById( $id ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SET NAMES utf8";
		$st = $conn->prepare( $sql );
		$st->execute();

		$sql = "SELECT * FROM season WHERE season_id = :id";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":id", $id, PDO::PARAM_INT );
		$st->execute();
		$row = $st->fetch();

		$conn = null;
		if ( $row ) return new season ( $row );
	}

	public static function getList() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$sql = "SET NAMES utf8";
	$st = $conn->prepare( $sql );
    $st->execute();
    
	$sql = "SELECT * FROM `season`";
    $st = $conn->prepare( $sql );
	$st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
      $season = new Season( $row );
      $list[] = $season;
    }

    $conn = null;
    return $list;
  }
}