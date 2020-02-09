<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: wfdesings.com
$siteKey = "6Ld-EygUAAAAAO3spTxBotxPx79gXtmq9BF0CdB9";
$secretKey = "6Ld-EygUAAAAAMhUfqeA5A0pmdegnQcdxS4az7ep";

//this helps eliminate PHP date errors
date_default_timezone_set("America/Los Angeles");

$nav1["index.php"] = "Home";
$nav1["AIA.php"] = "AIA";
$nav1["big/index.php"] = "BIG";
$nav1["ux.php"] = "Google Doc (UX)";
$nav1["fp/index.php"] = "Final Project";
$nav1["contact.php"] = "Contact Will";


//this constant allows a page to know it's own url/name
define("THIS_PAGE", basename($_SERVER["PHP_SELF"]));

switch(THIS_PAGE)
{
    case "index.php":
        $title = "Home";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
    case "AIA.php":
        $title = "AIA";
        $logo = "fa-users";
        $PageID = "AIA";
    break;
    case "contact.php":
        $title = "Contact";
        $logo = "fa-pencil-square";
        $PageID = "Contact";
    break;
    case "ux.php":
        $title = "UX";
        $PageID = "Google UX";
        $logo = "fa-file";
    break;
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
        
}

/*

<li class="active"><a href="index.php" >Home</a></li>
                    <li><a href="AIA.php">AIA</a></li>
                    <li><a href="#">BIG</a></li>
                    <li><a href="ux.php">Google Doc (UX)</a></li>
                    <li><a href="#">Final Project</a></li>
                    <li><a href="contact.php">Contact Will</a></li>

*/

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//Add class
           $myReturn .= '<li><a href='. $url . '"class=active">'. $text .'</a></li>';  
        }else{//no class
          $myReturn .= '<li><a href='. $url . '>'. $text .'</a></li>';  
        }   
    }
    
    return $myReturn;
}