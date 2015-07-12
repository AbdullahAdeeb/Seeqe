<?php

function escape($data)
{
    if (ini_get('magic_quotes_gpc'))
	{
    	$data = stripslashes($data);
    }
    return mysql_real_escape_string($data);
}

function insert_get_categories($a)
{
    global $config,$conn;
	$query = "select * from categories where parent='0' order by name asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_best_total($a)
{
    global $config,$conn;
	$query = "select count(*) as total from posts_comments where best='1' AND USERID='".mysql_real_escape_string($a[USERID])."'"; 
	$executequery=$conn->execute($query);
    $returnthis = $executequery->fields['total'];
	return $returnthis;
}

function insert_get_subcategories($a)
{
    global $config,$conn;
	$query = "select * from categories where parent='".mysql_real_escape_string($a['parent'])."' order by name asc"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_get_advertisement($var)
{
        global $conn;
        $query="SELECT code FROM advertisements WHERE AID='".mysql_real_escape_string($var[AID])."' AND active='1' limit 1";
        $executequery=$conn->execute($query);
        $getad = $executequery->fields[code];
		echo strip_mq_gpc($getad);
}

function verify_login_admin()
{
        global $config,$conn;
        if($_SESSION['ADMINID'] != "" && is_numeric($_SESSION['ADMINID']) && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
        {
			$query="SELECT * FROM administrators WHERE username='".mysql_real_escape_string($_SESSION['ADMINUSERNAME'])."' AND password='".mysql_real_escape_string($_SESSION['ADMINPASSWORD'])."' AND ADMINID='".mysql_real_escape_string($_SESSION['ADMINID'])."'";
        	$executequery=$conn->execute($query);
			
			if(mysql_affected_rows()==1)
			{
			
			}
			else
			{
				header("location:$config[adminurl]/index.php");
            	exit;
			}
			
        }
		else
		{
			header("location:$config[adminurl]/index.php");
            exit;
		}
}

function verify_email_username($usernametocheck)
{
    global $config,$conn;
	$query = "select count(*) as total from members where username='".mysql_real_escape_string($usernametocheck)."' limit 1"; 
	$executequery = $conn->execute($query);
	$totalu = $executequery->fields[total];
	if ($totalu >= 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function verify_valid_email($emailtocheck)
{	
	if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emailtocheck))
	{
		return false;
	}
	else
	{
		return true;
	}

}

function verify_email_unique($emailtocheck)
{
    global $config,$conn;
	$query = "select count(*) as total from members where email='".mysql_real_escape_string($emailtocheck)."' limit 1"; 
	$executequery = $conn->execute($query);
	$totalemails = $executequery->fields[total];
	if ($totalemails >= 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="")
{
	global $SERVER_NAME;
	$subject = nl2br($subject);
	$sendmailbody = nl2br($sendmailbody);
	$sendto = $sendto;
	if($bcc!="")
	{
		$headers = "Bcc: ".$bcc."\n";
	}
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=utf-8\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: PHP/"."MIME-Version: 1.0\n";
	$headers .= "From: " . $from . "\n";
	$headers .= "Content-Type: text/html\n";
	mail("$sendto","$subject","$sendmailbody","$headers","-f $from");
}

function insert_answer_count($a)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts_comments WHERE PID='".mysql_real_escape_string($a[pid])."' limit 1";
        $executequery=$conn->execute($query);
        $total = $executequery->fields[total];
		echo $total;
}

function insert_answer_count2($a)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts_comments WHERE PID='".mysql_real_escape_string($a[pid])."' limit 1";
        $executequery=$conn->execute($query);
        $total = $executequery->fields[total];
		return $total;
}

function answer_count($a)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts_comments WHERE PID='".mysql_real_escape_string($a)."' limit 1";
        $executequery=$conn->execute($query);
        $total = $executequery->fields[total];
		return $total;
}

function get_cat($cid)
{
        global $conn;
        $query="SELECT name FROM categories WHERE CATID='".mysql_real_escape_string($cid)."' limit 1";
        $executequery=$conn->execute($query);
        $name = $executequery->fields[name];
		return $name;
}

function insert_get_cat($var)
{
        global $conn;
        $query="SELECT name FROM categories WHERE CATID='".mysql_real_escape_string($var[CATID])."' limit 1";
        $executequery=$conn->execute($query);
        $name = $executequery->fields[name];
		echo $name;
}

function insert_get_stripped_phrase($a)
{
	$stripper = $a[details]; 
	$stripper = str_replace("\\n", "<br>", $stripper);
	$stripper = str_replace("\\r", "", $stripper);
	$stripper = str_replace("\\", "", $stripper);
	return $stripper;
}

function insert_get_stripped_phrase2($a)
{
	$stripper = $a[details]; 
	$stripper = str_replace("\\n", "\n", $stripper);
	$stripper = str_replace("\\r", "\r", $stripper);
	return $stripper;
}

function listdays($selected)
{
	$days = "";
    for($i=1;$i<=31;$i++)
    {
    	if($i == $selected)
		{
        	$days .= "<option value=\"$i\" selected>$i</option>";
        }
        else
		{
        	$days .= "<option value=\"$i\">$i</option>";
        }
    }
    return $days;
}

function listmonths($selected)
{
	global $lang;
    $months = "";
    $allmonths = array("",$lang['83'],$lang['84'],$lang['85'],$lang['86'],$lang['87'],$lang['88'],$lang['89'],$lang['90'],$lang['91'],$lang['92'],$lang['93'],$lang['94']);
    for($i=1;$i<=12;$i++)
    {
        if($i == $selected)
		{
        	$months .= "<option value=\"$i\" selected>$allmonths[$i]</option>";
        }
        else
		{
        	$months .= "<option value=\"$i\">$allmonths[$i]</option>";
        }
    }
    return $months;
}

function listyears($selected)
{
        $years = "";
        $thisyear = date("Y");
        for($i=$thisyear-100+13;$i<=$thisyear-13;$i++)
        {
                if($i == $selected)
                        $years .= "<option value=\"$i\" selected>$i</option>";
                else
                        $years .= "<option value=\"$i\">$i</option>";
        }
        return $years;
}

function listcountries($selected)
{
    $country="";
    $countries = array("Afghanistan","Albania","Algeria","American Samoa","Andorra","Angola","Anguilla","Antartica","Antigua and Barbuda","Argentina","Armenia","Aruba","Ascension Island","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Botswana","Bouvet Island","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde Islands","Cayman Islands","Chad","Chile","China","Christmas Island","Colombia","Comoros","Cook Islands","Costa Rica","Cote d Ivoire","Croatia/Hrvatska","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Guiana","French Polynesia","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guadeloupe","Guam","Guatemala","Guernsey","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Ireland","Isle of Man","Israel","Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte Island", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion Island", "Romania", "Russian Federation", "Rwanda", "Saint Helena", "Saint Lucia", "San Marino", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovak Republic", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga Islands", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Western Sahara", "Western Samoa", "Yemen", "Yugoslavia", "Zambia","Zimbabwe");
    for($i=0;$i<count($countries);$i++)
    {
    	if($selected == $countries[$i])
        {
			$country .="<option value=\"$countries[$i]\" selected>$countries[$i]</option>";
		}
        else
		{
			$country .="<option value=\"$countries[$i]\">$countries[$i]</option>";
		}
	}
    return $country;
}

function insert_get_member_profilepicture($var)
{
        global $conn;
        $query="SELECT profilepicture FROM members WHERE USERID='".mysql_real_escape_string($var[USERID])."' limit 1";
        $executequery=$conn->execute($query);
		$results = $executequery->fields[profilepicture];
		if ($results == "")
			return "noprofilepicture.gif";
		else
			return $results;
}

function generatethumbs($theconvertimg,$thevideoimgnew,$thewidth,$theheight)
{
	global $config;
    $convertimg = $theconvertimg;
    $videoimgnew = $thevideoimgnew;

    $theimagesizedata = GetImageSize($convertimg);
    $videoimgwidth = $theimagesizedata[0];
    $videoimgheight = $theimagesizedata[1];
    $videoimgformat = $theimagesizedata[2];

    $whratio = 1;
    if ($videoimgwidth > $thewidth)
    {
        $whratio = $thewidth/$videoimgwidth;
    }
	
    if($whratio != 1)
    {
        $dest_height = $whratio * $videoimgheight;
        $dest_width = $thewidth;
    }
    else
    {
        $dest_height=$videoimgheight;
        $dest_width=$videoimgwidth;
    }
	
    if($dest_height > $theheight)
    {
        $whratio = $theheight/$dest_height;
        $dest_width = $whratio * $dest_width;
        $dest_height = $theheight;
    }
	
    if($videoimgformat == 2)
    {
        $videoimgsource = @imagecreatefromjpeg($convertimg);
        $videoimgdest = @imageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $dest_width, $dest_height, $videoimgwidth, $videoimgheight);
        imagejpeg($videoimgdest, $videoimgnew, 100);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
    elseif ($videoimgformat == 3)
    {
        $videoimgsource = imagecreatefrompng($convertimg);
        $videoimgdest = imageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $dest_width, $dest_height, $videoimgwidth, $videoimgheight);
        imagepng($videoimgdest, $videoimgnew, 9);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
    else
    {
        $videoimgsource = imagecreatefromgif($convertimg);
        $videoimgdest = imageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $dest_width, $dest_height, $videoimgwidth, $videoimgheight);
        imagejpeg($videoimgdest, $videoimgnew, 100);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
}

function insert_get_fav_status($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_favorited WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."' AND PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function insert_com_count($var)
{
    global $conn;
	$query="SELECT count(*) as total FROM posts_comments WHERE PID='".intval($var[PID])."'";
	$executequery=$conn->execute($query);
	$total = $executequery->fields[total];
	return intval($total);
}

function does_post_exist($a)
{
	global $conn, $config;
    $query="SELECT USERID FROM posts WHERE PID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
    if ($executequery->recordcount()>0)
        return true;
    else
		return false;
}

function update_last_viewed($a)
{
        global $conn;
		$query = "UPDATE posts SET last_viewed='".time()."' WHERE PID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_your_viewed ($a)
{
        global $conn;
		$query = "UPDATE members SET yourviewed  = yourviewed  + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_you_viewed($a)
{
        global $conn;
		$query = "UPDATE members SET youviewed = youviewed + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function session_verification()
{
    if ($_SESSION[USERID] != "")
	{
		if (is_numeric($_SESSION[USERID]))
		{
        	return true;
		}
    }
	else
		return false;
}
function insert_get_username_from_userid($var)
{
        global $conn;
        $query="SELECT username FROM members WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $getusername = $executequery->fields[username];
		return "$getusername";
}

function does_profile_exist($a)
{
	global $conn;
    global $config;
    $query="SELECT username FROM members WHERE USERID='".mysql_real_escape_string($a)."'";
    $executequery=$conn->execute($query);
    if ($executequery->recordcount()>0)
        return true;
    else
		return false;
}

function update_viewcount_profile($a)
{
        global $conn;
		$query = "UPDATE members SET profileviews = profileviews + 1 WHERE USERID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function update_viewcount_question($a)
{
        global $conn;
		$query = "UPDATE posts SET viewcount = viewcount + 1 WHERE PID='".mysql_real_escape_string($a)."'";
        $executequery=$conn->execute($query);
}

function insert_get_tags($a)
{
        $results = $a[tags];
		$results = str_replace(",", " ", $results);
		$results = str_replace("?", "", $results);
        $returnthis = explode(" ",$results);
        return $returnthis;
}

function update_pviewed($SID,$PID)
{
        global $conn;
		$query = "SELECT count(*) as total FROM members_visits WHERE PID='".mysql_real_escape_string($PID)."' AND VID='".mysql_real_escape_string($SID)."'";
       	$executequery = $conn->execute($query);
		$total = $executequery->fields[total];
		if($total >= 1)
		{
			$query = "UPDATE members_visits SET time='".time()."' WHERE PID='".mysql_real_escape_string($PID)."' AND VID='".mysql_real_escape_string($SID)."'";
        	$executequery=$conn->execute($query);
		}
		else
		{
			$query = "INSERT INTO members_visits SET time='".time()."', PID='".mysql_real_escape_string($PID)."', VID='".mysql_real_escape_string($SID)."'";
        	$executequery=$conn->execute($query);
		}
}

function insert_get_member_comments_count($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts_comments WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $results = $executequery->fields[total];
		echo "$results";
}

function insert_get_posts_count($var)
{
        global $conn;
        $query="SELECT count(*) as total FROM posts WHERE USERID='".mysql_real_escape_string($var[USERID])."'";
        $executequery=$conn->execute($query);
        $results = $executequery->fields[total];
		echo "$results";
}

function insert_get_static($var)
{
        global $conn;
        $query="SELECT $var[sel] FROM static WHERE ID='".mysql_real_escape_string($var[ID])."'";
        $executequery=$conn->execute($query);
        $returnme = $executequery->fields[$var[sel]];
		$returnme = strip_mq_gpc($returnme);
		echo "$returnme";
}

function insert_get_last_answer($a)
{
        global $conn;
        $query="SELECT time_added FROM posts_comments order by CID desc limit 1";
        $executequery=$conn->execute($query);
        $returnme = $executequery->fields[time_added];
		return $returnme;
}

function insert_get_time_to_days_ago($a)
{
	global $lang;
	$currenttime = time();
	$timediff = $currenttime - $a[time];
	$oneday = 60 * 60 * 24;
	$dayspassed = floor($timediff/$oneday);
	if ($dayspassed == "0")
	{
		$mins = floor($timediff/60);
		if($mins == "0")
		{
			$secs = floor($timediff);
			if($secs == "1")
			{
				return $lang['95'];
			}
			else
			{
				return $secs." ".$lang['96'];
			}
		}
		elseif($mins == "1")
		{
			return $lang['97'];
		}
		elseif($mins < "60")
		{
			return $mins." ".$lang['98'];
		}
		elseif($mins == "60")
		{
			return $lang['99'];
		}
		else
		{
			$hours = floor($mins/60);
			return "$hours ".$lang['100'];
		}
	}
	else
	{
		if($dayspassed == "1")
		{
			return $dayspassed." ".$lang['101'];
		}
		else
		{
			return $dayspassed." ".$lang['102'];
		}
	}
}

function seo_clean_titles($title2)
{
	$title2 = explode(" ", $title2);
	$i = 0;
	foreach($title2 as $line)
	{
		if($i < 15)
		{
			$title .= $line."-";
			$i++;
		}
	}
    $title = str_replace(array(":", ".", "^", "*", ",", ";", "~", "[", "]", "<", ">", "\\", "/", "=", "+", "%"),"", $title);
	$title = str_replace(" ", "-", $title);
	echo $title;
} 

function insert_seo_clean_titles($a)
{
	$title2 = explode(" ", $a['title']);
	$i = 0;
	foreach($title2 as $line)
	{
		if($i < 15)
		{
			$title .= $line."-";
			$i++;
		}
	}
    $title = str_replace(array(":", ".", "^", "*", ",", ";", "~", "[", "]", "<", ">", "\\", "/", "=", "+", "%"),"", $title);
	
	$last = substr($title, -1);
	if($last == "-")
	{
		$title = substr($title, 0, -1);
	}

	$title = str_replace(" ", "-", $title);
	return $title."_".$a['PID'];
} 

function seo_clean_titles2($title2)
{
	$title2 = explode(" ", $title2);
	$i = 0;
	foreach($title2 as $line)
	{
		if($i < 15)
		{
			$title .= $line."-";
			$i++;
		}
	}
    $title = str_replace(array(":", ".", "^", "*", ",", ";", "~", "[", "]", "<", ">", "\\", "/", "=", "+", "%"),"", $title);
	$title = str_replace(" ", "-", $title);
	return $title;
} 

function insert_get_top5($a)
{
    global $config,$conn;
	$query = "select USERID, username, points from members where status='1' order by points desc limit 5"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

function insert_clickable_link($var)
{
	$text = $var['text'];
	$text = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $text);
	$ret = ' ' . $text;
	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
	$ret = substr($ret, 1);
	return $ret;
}

function cleanit($text)
{
	return htmlentities(strip_tags(stripslashes($text)), ENT_COMPAT, "UTF-8");
}

function insert_get_seo_url($a)
{
    $title = $a['title'];
	$PID = $a['PID'];
	return "question?id=".$PID;
}

function get_seo_url($title, $PID)
{
	return "question?id=".$PID;
}


function insert_get_countries()
{
    global $config,$conn;
	$query = "SELECT DISTINCT c.name, c.code FROM countries c WHERE c.name <> '' ORDER BY c.name ASC"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}
function insert_get_regions($country)
{
    global $config,$conn;
	$query = "SELECT DISTINCT r.name, r.ID, r.code FROM regions r WHERE r.country = '".trim($country)."' AND r.name <> '' ORDER BY r.name"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}
function insert_get_cities($prov, $country)
{
    global $config,$conn;
	$query = "SELECT DISTINCT c.name, c.ID FROM cities c WHERE c.region = '".trim($prov)."' AND c.country = '".trim($country)."' AND c.name <> '' ORDER BY c.name"; 
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

?>