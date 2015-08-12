<?php
/* contoh models */

class helper_model extends Database {
	
	var $user;
	function __construct()
	{
		$sessi = new Session;
		$getUserSes = $sessi->get_session('login');
		$this->user = $getUserSes['login']['login'];
	}

	public function getData_sel($parameter){
			
			if($parameter['status'] == "true"){
				if($parameter['condition'] != ""){
					$bindCur = ",:friend_cv";
				}else{
					$bindCur = ":friend_cv";
				}
			} else {
				$bindCur = "";
			}
            
			$data['sql'] = "begin ".$parameter['package']."(".$parameter['condition']." ".$bindCur."); end;";
			$data['condition'] = $parameter['condition'];
			$data['value'] = $parameter['value'];
			
			$hasil = $this->fecthData($data,true);
			
			return $hasil;
			
    }

    function logActivity($action='surf', $comment=null)
    {
    	$sql = "SELECT id FROM code_activity WHERE activityValue = '{$action}' LIMIT 1 ";
    	$res = $this->fetch($sql,0,1);
    	if ($res){

    		$date = date('Y-m-d H:i:s'); 
    		$source = $_SERVER['REMOTE_ADDR'];
    		$comment = htmlentities($comment, ENT_QUOTES);
    		
    		$ins = "INSERT INTO code_activity_log (userid, activityId, activityDesc, source, datetimes, n_status)
    				VALUES ({$this->user['id']}, {$res['id']}, '{$comment}', '{$source}', '{$date}',1)";
    		$result = $this->query($ins,1);

    		if ($result) return true;
    		return false;
    	}

    	return false;
    }
}
?>
