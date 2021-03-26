<?php 
//article DB transection
class Article{
	public function fetch_all()
	{
		# code...Select*
		global  $conn;
		$query = $conn->prepare('SELECT * FROM cms.articles');
		$query->execute();
		return $query->fetchAll();
	}

	public function fetch_data($article_id){

		# code...SelectionCase
		global  $conn;
		$query = $conn->prepare('SELECT * FROM cms.articles WHERE article_id = ? ');
		$query->bindValue(1, $article_id);
		$query->execute();
		
		return $query->fetch();

	}

}