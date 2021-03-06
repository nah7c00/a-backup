<?php
	class languagesHandler {
		private $db_conn;
		
		public function __construct() {
			require_once("dbconnector.class.php");
			$this->db_conn = new dbConnector();
		}
		
		public function getShort() {
			$sql = "SELECT id, short";
			$sql.= " FROM languages";
			$stmt = $this->db_conn->pdo->prepare($sql);
			$stmt->execute();
			$lang = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
			return $lang;
		}
		
		public function get() {
			$sql = "SELECT id, lang";
			$sql.= " FROM languages";
			$stmt = $this->db_conn->pdo->prepare($sql);
			$stmt->execute();
			$lang = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
			return $lang;
		}

	}
?>
