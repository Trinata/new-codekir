<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class home extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();
		$this->loadmodule();
		
		// $this->validatePage();
	}
	public function loadmodule()
	{
		
		// $this->contentHelper = $this->loadModel('contentHelper');
	}
	
	public function index(){
		
		// pr($_SESSION);
		echo 'mausk';
		return $this->loadView('home');

	}
	
	function listBerita()
	{
		global $basedomain;
		
		$table="dtataruang_news_content";
		$categoryid="4";
		$articletype="1";
		$orderby=array('postdate','DESC');
       
		// $result_data = $this->contentHelper->getData_news($table,$categoryid,$articletype,$orderby);
		
		// pr($result_data);
		if ($result_data) return $result_data;
	}
    
	public function informasi_gallery(){
        
		global $basedomain;
		
		
		// $result_data = $this->contentHelper->getData_gallery('dtataruang_news_content','6','2');
		
		
		if ($result_data) return $result_data;

	}
	
	public function ajax()
	{
		
		$idLocation = explode("_",$_POST['idLocation']);
		
		
		if ($_POST['idLocation']){
			// $data = $this->contentHelper->getChildLoc($idLocation[0]);
			echo json_encode($data);
		}
		exit;
	} 
}

?>
