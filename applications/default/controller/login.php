<?php

class login extends Controller {
	
	var $models = FALSE;
	var $view;

	
	function __construct()
	{
		global $basedomain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$this->view->assign('basedomain',$basedomain);
    }
	
	function loadmodule()
	{
        $this->userHelper = $this->loadModel('userHelper');
        $this->loginHelper = $this->loadModel('loginHelper');
        $this->activityHelper = $this->loadModel('activityHelper');
        // $this->helper_model = $this->loadModel('helper_model');
	}
	
	function index(){

        return $this->loadView('login');
    }
	
    /**
     * @todo create new user
     *           
     * @return $statusName and $msgName = status and message for validating name
     * @return $statusEmail and $msgEmail = status and message for validating email
     * @return $statusUsername and $msgUsername = status and message for validating username
     * @return $statusTwitter and $msgTwitter = status and message for validating twitter                  
     */    
    function doSignup(){
        
        global $CONFIG;
        $data = $_POST;
        
        $checkEmail = $this->loginHelper->checkEmail($data['email']); 
        $checkUsername = $this->loginHelper->checkUsername($data['username']);       
        $checkTwitter = $this->loginHelper->checkTwitter($data['twitter']);
        
        if($checkEmail !== true || $checkUsername !== true || $checkTwitter !== true){
            $statusEmail = "";
            $msgEmail = "";
            $statusUsername = "";
            $msgUsername = "";
            $statusTwitter = "";
            $msgTwitter = "";
            
            if($checkEmail !== true){
                $statusEmail = "exist";
                $msgEmail = "Email already exist";
            }
            if($checkUsername !== true){
                $statusUsername = "exist";
                $msgUsername = "Username already exist";
            }
            if($checkTwitter !== true){
                $statusTwitter = "exist";
                $msgTwitter = "Twitter already exist";
            }
                echo json_encode(array('statusEmail' => $statusEmail, 'msgEmail' => $msgEmail, 'statusUsername' => $statusUsername, 'msgUsername' => $msgUsername, 'statusTwitter' => $statusTwitter, 'msgTwitter' => $msgTwitter));
                exit;
        }
        // else{
        //     echo json_encode(array('status' => 'error'));
        //     exit;
        // }
        
        if($checkEmail && $checkUsername && $checkTwitter){

        
            $signup = $this->loginHelper->createUser($data);
            if ($signup){

                $getToken = $this->loginHelper->getEmailToken($data['username']);

                // send mail before activate account
                $dataArr['email'] = $data['email'];
                $dataArr['username'] = $data['username'];
                $dataArr['password'] = $data['password'];
                $dataArr['token'] = sha1('register'.$data['email']);
                $dataArr['validby'] = $getToken['email_token'];
                $dataArr['regfrom'] = 1;

                $inflatData = encode(serialize($dataArr));
                logFile($inflatData);


                $to = $data['email'];
                $from = $CONFIG['email']['EMAIL_FROM_DEFAULT'];
                // $msg = "To activate your account please <a href='{$basedomain}login/validate/?ref={$inflatData}'>click here</a>";
                $this->view->assign('email',$data['email']);
                $this->view->assign('username',$data['username']);
                $this->view->assign('encode',$inflatData);
                $msg = "<p>Hi ".$data['username']."!</p>";
                $msg .= $this->loadView('emailTemplate');
                // try to send mail 
                $sendMail = sendGlobalMail($to, $from, $msg,true);
                logFile('mail send '.serialize($sendMail));

                $this->activityHelper->updateEmailLog(false,$to,'account',0);

            }

            echo json_encode(array('status' => true));
            exit;
        }
        exit;
    }
    
    /**
     * @todo enter the site as user
     */        
    function doLogin(){

        global $basedomain;
        //query data
        $getUserappData = $this->loginHelper->goLogin();
        // pr($getUserappData);
        if ($getUserappData){
            
            if ($getUserappData['login_count']>0){
                redirect($basedomain);    
            }else{
                // echo 'ada';exit;
                redirect($basedomain.'setting/category');
            }
            
        }else{
            redirect($basedomain);
        }

        exit;
    }
    


}

?>
