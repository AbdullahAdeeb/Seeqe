<?php
/**************************************************************************************************
| Answer Question Script
| http://www.answerquestionscript.com
| webmaster@answerquestionscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.answerquestionscript.com/eula.html and to be bound by it.
|
| Copyright (c) AnswerQuestionScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");

$redirect = base64_decode($_REQUEST['redirect']);
$redirect = htmlentities(strip_tags($redirect), ENT_COMPAT, "UTF-8");

if ($_SESSION[USERID] != "" && $redirect != "")
{
    header("Location:$redirect");exit;
}

$username = htmlentities(strip_tags($_REQUEST['username']), ENT_COMPAT, "UTF-8");
$username = str_replace("(", "", $username);
$username = str_replace(")", "", $username);
$email = htmlentities(strip_tags($_REQUEST['email']), ENT_COMPAT, "UTF-8");
STemplate::assign('username',$username);
STemplate::assign('email',$email);
STemplate::assign('redirect',base64_encode($redirect));
if($_REQUEST[register]!=""){

    $password = htmlentities(strip_tags($_REQUEST['password']), ENT_COMPAT, "UTF-8");
    $confirmpassword = htmlentities(strip_tags($_REQUEST['confirmpassword']), ENT_COMPAT, "UTF-8");
    $imagecode = cleanit($_REQUEST['imagecode']);
    $store = isset($_REQUEST['store']);
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $website = $_REQUEST['website'];

    if ($username == "")
    {
        $error = $lang['67'];
    }
    elseif (!verify_email_username($username))
    {
        $error = $lang['68'];
    }
    elseif ($password == "")
    {
        $error = $lang['69'];
    }
    elseif ($confirmpassword == "")
    {
        $error = $lang['70'];
    }
    elseif ($password != $confirmpassword)
    {
        $error = $lang['71'];
    }
    elseif(!verify_valid_email($email))
    {
        $error = $lang['72'];
    }
    elseif (!verify_email_unique($email))
    {
        $error = $lang['73'];
    }
    elseif($store == true){
        if ($address == "" || $city == "")
        {
            $error= $lang['265'];
        }
    }else{
        // check reCaptcha
        $re_secret = '6LcU-wcTAAAAALfUiajKLn2gko2xj-311ALjtzY7';
        $re_url = 'https://www.google.com/recaptcha/api/siteverify';
        $re_res = $_REQUEST['g-recaptcha-response'];
        $re_req = array('secret'=>$re_secret,'response'=>$re_res);
        $ch = curl_init($re_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $re_req);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        $responsejson = json_decode($response,true);
        if($responsejson['success'] !== TRUE){
            $error= "Robot Detected !!";
        }
        //         grecaptcha.reset();
    }

    //    old captcha.php
    //	elseif($imagecode != $_SESSION['imagecode'])
    //	{
    //		if ($config['enable_captcha'] != "0")
    //		{
    //			$error= $lang['74'];
    //		}
    //	}

    STemplate::assign('store',$store);
    STemplate::assign('address',$address);
    STemplate::assign('city',$city);
    STemplate::assign('website',$website);

    if ($error == ""){

        $md5pass = md5($password);
        if($config['man_mem_val'] == "1"){
            $addtosql = ", status='0'";
        }

        $query="INSERT INTO members SET email='".mysql_real_escape_string($email)."',username='".mysql_real_escape_string($username)."', password='".mysql_real_escape_string($md5pass)."', addtime='".time()."', lastlogin='".time()."' $addtosql";
        if($store == true){
            $query.=",store= '1', address= '".mysql_real_escape_string($address)."' , city='".mysql_real_escape_string($city)."'";
            //            echo $query;

        }
        $result=$conn->execute($query);
        $userid = mysql_insert_id();

        //		echo '<br>'.$userid;

        if($userid != "" && is_numeric($userid) && $userid > 0)
        {
            $query="SELECT USERID,email,username,verified from members WHERE USERID='".mysql_real_escape_string($userid)."'";
            $result=$conn->execute($query);

            $SUSERID = $result->fields['USERID'];
            $SEMAIL = $result->fields['email'];
            $SUSERNAME = $result->fields['username'];
            $SVERIFIED = $result->fields['verified'];
            if($config['man_mem_val'] != "1")
            {
                $_SESSION['USERID']=$SUSERID;
                $_SESSION['EMAIL']=$SEMAIL;
                $_SESSION['USERNAME']=$SUSERNAME;
                $_SESSION['VERIFIED']=$SVERIFIED;
            }

            // Generate Verify Code Begin
            $verifycode = generateCode(5).time();
            $query = "INSERT INTO members_verifycode SET USERID='".mysql_real_escape_string($SUSERID)."', code='$verifycode'";
            $conn->execute($query);
            if(mysql_affected_rows()>=1)
            {
                $proceedtoemail = true;
            }
            else
            {
                $proceedtoemail = false;
            }
            // Generate Verify Code End

            // Send Welcome E-Mail Begin
            if ($proceedtoemail)
            {
                STemplate::assign('verifycode',$verifycode);
                $sendto = $SEMAIL;
                $sendername = $config['site_name'];
                STemplate::assign('sendername',$sendername);
                $from = $config['site_email'];
                $query = "SELECT * FROM sendmail WHERE EID='welcomeemail'";
                $executequery = $conn->execute($query);
                $subject = $lang['215']." ".$sendername;
                $sendmailtemplate = $executequery->fields['template'];
                $sendmailbody=STemplate::fetch($sendmailtemplate);
                mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
            }
            // Send Welcome E-Mail End

            if($config['man_mem_val'] != "1")
            {
                if($redirect == "")
                {
                    header("Location:$config[baseurl]/account");exit;
                }
                else
                {
                    header("Location:$redirect");exit;
                }
            }
            else
            {
                $message = $lang['75'];
            }
        }
    }
}

$pagetitle = $lang['76'];
STemplate::assign('pagetitle',$pagetitle);
STemplate::assign('message',$message);
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('signup.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>