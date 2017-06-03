<?php
	class newsHandler {
		private $db_conn;
		
		public function __construct() {
			require_once("dbconnector.class.php");
			$this->db_conn = new dbConnector();
			//var_dump($this->db_conn->pdo);
		}
		public function getTitles() {
			$sql = "SELECT id, lang, date, title";
			$sql.= " FROM news";
			$stmt = $this->db_conn->pdo->prepare($sql);
			$stmt->execute();
			$titles = $stmt->fetchAll();
			return $titles;
		}
		
		public function getByID($id) {
			$sql = "SELECT lang, date, title, content";
			$sql.= " FROM news";
			$sql.= " WHERE id = :id";
			$stmt = $this->db_conn->pdo->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$article = $stmt->fetch(PDO::FETCH_ASSOC);
			return $article;
		}
		
		public function getByLang($lang) {
			$sql = "SELECT id, lang, date, title, content";
			$sql.= " FROM news";
			$sql.= " WHERE lang = :lang OR lang IS NULL";
			$sql.= " ORDER BY id DESC";
			$stmt = $this->db_conn->pdo->prepare($sql);
			$stmt->bindParam(':lang', $lang);
			$stmt->execute();
			$article = $stmt->fetchAll();
			return $article;
		}
	}
?>