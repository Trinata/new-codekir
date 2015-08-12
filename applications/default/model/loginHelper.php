<?php

class loginHelper extends Database {
	var $salt;
    function __construct()
    {
        global $basedomain;
        $this->loadmodule();
        $this->salt = '1nf0k0mun1t4s';
        $this->set_session = new Session();
    }
    
    function loadmodule()
    {
        // include APP_MODELS.'activityHelper.php';
        // $this->activityHelper = new helper_model;
       
    }

    function goLogin()
    {
        // pr($_POST);
        $email = _p('email');
        $password = _p('password');
        
        // pr($data);       
        $data['status'] = false;
        $newCred = array();

        $sql = "SELECT * FROM social_member WHERE email = '{$email}' AND usertype IN (1) AND n_status = 1 LIMIT 1";
        // pr($sql);
        $res = $this->fetch($sql);
        // pr($res);
        // exit;
        if ($res){
            
            $salt = sha1($res['salt'].$password);
            
            // pr($salt);exit;
            if ($res['password'] == $salt){
                
                $loginCount = intval($res['login_count'] +1);
                $lastLogin = date('Y-m-d H:i:s');
                
                $sqlu = "UPDATE social_member SET last_login = '{$lastLogin}' ,login_count = {$loginCount} WHERE id = {$res['id']} LIMIT 1";
                $result = $this->query($sqlu);
                
                // $_SESSION['user'] = $res;

                $ignoreFIeld = array('salt','password','email_token','email','username');

                foreach ($res as $key=> $val){
                    
                    if (!in_array($key, $ignoreFIeld))$newCred[$key] = $val;
                }

                $this->set_session->set_session($newCred);
                
                return $newCred;
            }
        }
        
        return false;
    }

	function local($data=false)
	{
		if($data== false) return false;
		
		
		$password = sha1($data['password'].$this->salt);
		$sql = "SELECT * FROM login where username = '{$data['username']}' AND password = '{$password}' LIMIT 1";
		$res = $this->fetch($sql, 0);
		// pr($sql);
		if ($res) return $res;
		return false;
	}
	
    /**
     * @todo insert data user into person and florakb_person
     * 
     * @return boolean
     */
	function createUser($data=false)
	{
		if($data==false) return false;
		global $CONFIG, $basedomain;
		
		$host = $CONFIG['default']['hostname'];
		$port = "12345";
		
		$salt = $CONFIG['default']['salt'];
		$password = sha1($data['password'].$salt);
        //echo $password.' = '.$data[0]['password'].' + '.$salt;
		$startTransaction = $this->begin();
		if (!$startTransaction) return false;
		
        if (empty($data['twitter'])){
            $dataTwitter = 'NULL';
        }else{
            $dataTwitter = "'".$data['twitter']."'";
        }
        
        if (empty($data['website'])){
            $dataWeb = 'NULL';
        }else{
            $dataWeb = "'".$data['website']."'";
        }
        
        if (empty($data['phone'])){
            $dataPhone = 'NULL';
        }else{
            $dataPhone = "'".$data['phone']."'";
        }
        
		$sql = "INSERT INTO person (name, email, twitter, website, phone) VALUES ('{$data['name']}','{$data['email']}',$dataTwitter,$dataWeb,$dataPhone)";
		$res = $this->query($sql,0);
        
        $getID = "SELECT id from person WHERE email= '".$data['email']."' ";
		$resID = $this->fetch($getID,0);

        $email_token = sha1(CODEKIR.date('ymdhis'));
        $register_date = date('Y-m-d H:i:s');
        $sql2 = "INSERT INTO florakb_person (id, password, username, salt,register_date,email_token) VALUES ('{$resID['id']}','{$password}','{$data['username']}','{$salt}','{$register_date}','{$email_token}')";
		$res2 = $this->query($sql2,1);
		
        if ($res && $res2){

            
                $this->commit();
                logFile('==success create user==');
                return true;
                exit;
            // else $this->rollback();
            // createAccount($data);
			// exec("echo '".$data['username']. " ".$data['password']."' | nc ".$host." ".$port);
			
			// logFile("echo '".$data['username']. " ".$data['password']."' | nc ".$host." ".$port);
			
			
			// return false;
		}
		
		$this->rollback();
		logFile('==ROLLBACK || failed create user==');
		return false;
	}
    
    /**
     * @todo check if name of user exist or not
     * 
     * @param $data = inputted name
     * @return boolean
     */
    function checkName($data=false)
    {
        if($data==false) return false;
        $sql = "SELECT COUNT(`id`) AS total FROM `person` WHERE `name` = '".$data."' ";
        $res = $this->fetch($sql,0);
        
        if ($res['total'] > 0){
            logFile('Name EXIST/');
            return false;
        }
        return true;
    }
    
    /**
     * @todo check if email of user exist or not
     * 
     * @param $data = inputted email
     * @return boolean
     */
    function checkEmail($data=false)
    {
        if($data==false) return false;
        $sql = "SELECT COUNT(`id`) AS total FROM `social_member` WHERE `email` = '".$data."' ";
        $res = $this->fetch($sql,0);
        
        if ($res['total'] > 0){
            logFile('Email EXIST/');
            return false;
        }
        return true;
    }
    
    /**
     * @todo check if username of user exist or not
     * 
     * @param $data = inputted username
     * @return boolean
     */
    function checkUsername($data=false)
    {
        if($data==false) return false;
        $sql = "SELECT COUNT(`id`) AS total FROM `florakb_person` WHERE `username` = '".$data."' ";
        $res = $this->fetch($sql,0,1);
        
        if ($res['total'] > 0){
            logFile('username EXIST/');
            return false;
        }
        return true;
    }
    
    /**
     * @todo check if twitter of user exist or not
     * 
     * @param $data = inputted twitter
     * @return boolean
     */
    function checkTwitter($data)
    {
        if($data==''){return true;}
        else{
            $sql = "SELECT COUNT(`id`) AS total FROM `person` WHERE `twitter` = '".$data."' ";
            $res = $this->fetch($sql,0);
            
            if ($res['total'] > 0){
                logFile('Twitter EXIST/');
                return false;
            }
        }
        return true;
    }
     
     /**
     * @todo check password only
     * 
     * @param ID from db person
     * @param password inputted to validate
     */
    function checkPassword($data=false,$dataPassword){
        //select salt from ID
        $sql = "SELECT salt,password FROM `florakb_person` WHERE `id` = '".$data['id']."' ";
        $res = $this->fetch($sql,1,1);
        
        //match email and password
        $salt = $res[0]['salt']; 
        $passwordDB = sha1($dataPassword."$salt");
        $password = $res[0]['password'];
        if($passwordDB==$password){return TRUE;}
        return FALSE;
    }
	
    /**
     * @todo create session after success login
     * 
     * @param $data = userdata(id,name,email,twitter,website,phone)
     */
	function setSession($data=false, $password=false)
	{

        $session = new Session;

        if($data==false && $password==false) return false;
		// store session data
        $dataSession = array(
                'id' => $data[0]['person']['id'],
                'name' => $data[0]['person']['name'],
                'email' => $data[0]['person']['email'],
                'username' => $data[0]['person_app']['username'],
                'project' => $data[0]['person']['project'],
                'institutions' => $data[0]['person']['institutions'],
                'twitter' => $data[0]['person']['twitter'],
                'website' => $data[0]['person']['website'],
                'phone' => $data[0]['person']['phone'],
                'password' => $password
            );
        // $_SESSION['login'] = $dataSession;

        // set session, parameternya (data sessi, nama sessinya)
        $session->set_session($dataSession, 'login');
	}
    
    /**
     * @todo destroy session
     * 
     */

    function getEmailToken($username=false)
    {
        if($username==false) return false;
        $sql = "SELECT email_token FROM `florakb_person` WHERE `username` = '".$username."' LIMIT 1";
        // logFile($sql);
        $res = $this->fetch($sql,0,1);
        if ($res) return $res;
        return false;
    }

    function updateUserStatus($username=false)
    {
        if (!$username) return false;
        $date = date('Y-m-d H:i:s');
        $sql = "UPDATE florakb_person SET n_status = 1, verified_date = '{$date}' WHERE username = '{$username}' AND n_status = 0 LIMIT 1";
        $res = $this->query($sql,1);
        if($res) return true;
        return false;
    }

    function updateUserAccount($data=array())
    {

        $date = date('Y-m-d H:i:s');
        $email = $data['email'];
        $username = $data['username'];
        $password = sha1($data['password'].$this->salt);

        $getID = "SELECT id FROM person WHERE email = '{$email}' LIMIT 1";
        // pr($getID);
        $resID = $this->fetch($getID);
        if ($resID){
            $sql = "UPDATE florakb_person SET username = '{$username}', password = '{$password}', n_status = 1, 
                    verified_date = '{$date}' WHERE id = '{$resID['id']}' AND n_status = 0 LIMIT 1";
            // pr($sql);
            $res = $this->query($sql,1);
            if($res) return true;
        }
        
        
        return false;
    }

    function logoutUser()
    {
        session_destroy();
        global $basedomain;  
        header( 'Location: '.$basedomain ) ;  
    }
}
?>