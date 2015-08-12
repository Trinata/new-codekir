<?php
class contentHelper extends Database {
	
	function getNews()
	{
		
		$sql = "SELECT n.title, cr.friendlyUrl FROM tbl_news n LEFT JOIN code_url_redirect cr ON n.id = cr.articleId
				WHERE cr.n_status = 1";
		$res = $this->fetch($sql,1);
		if ($res) return $res;
		return false;
	}
	
	function readNews($url=false)
	{
		if(!$url) return false;
		
		$urlArticle = clean($url);
		global $CONFIG;
		
		if ($CONFIG['uri']['short']) $field = " shortUrl ";
		if ($CONFIG['uri']['friendly']) $field = " friendlyUrl ";
		
		
		$sql = "SELECT n.* FROM tbl_news n LEFT JOIN code_url_redirect cr 
				ON n.id = cr.articleId WHERE cr.{$field} = '{$urlArticle}' LIMIT 1";
		// pr($sql);
		$res = $this->fetch($sql);
		if ($res) return $res;
		return false;
		
	}
	
	
}
?>