<form action="" method="post" style="text-align: center">
    <input type="text" name="pattern" value="<?php echo isset($_POST['pattern'])?$_POST['pattern']:""; ?>" style="font-size: 20px;width: 40%"/>
    <button style="font-size: 20px">Go</button>
</form>
<?php
include_once '../../common/common.php';
$text = '
Salam Dooste aziz
Man Loghman Avand , Modir Website 7Learn.com hastam.
27 sal sen daram va modares in doureye Php hastam .
az in ke be bande eftekhar dadid ke dar khedmate shoma basham , sepasgozaram .
Email1 : Avand.Loghman@gmail.com
Email2 : avand@live.com
Email3 : avand@yahoo.co.uk
Mobile : 09399871654
Phone : 071-39876547
url : http://www.7Learn.com
';

e(nl2br($text));

// email
//$text = preg_replace('/[a-zA-Z0-9-_\.]+@[a-zA-Z]{3,10}\.[a-zA-Z]{2,6}/','<span style="color:red">*</span>',$text);
// $text = preg_replace('/\d/','<span style="color:red">*</span>',$text);
// my phone :   /0[0-9-]{8,12}/
// my url   :   /(http:\/\/|https:\/\/)?(www.)?[a-zA-Z0-9]{3,32}\.[a-zA-Z.]{2,6}[\s\.]/
if (isset($_POST['pattern'])) {
    $count = 0;
    $matches = array();
    e(preg_match_all($_POST['pattern'],$text,$matches));
    $text = preg_replace($_POST['pattern'], '<span style="color:red;">*</span>', $text, -1 /*limit*/, $count);
    e(nl2br("<b>count: $count</b> $text"));
    arrayNicePrint($matches);
}

// Form Validation using Regular Expressions
// validate email
function isValidEmail($email)
{
    return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i', $email);
}

// sanitize email
function fnSanitizeEmail($string)
{
    return preg_replace('((?:\n|\r|\t|%0A|%0D|%08|%09)+)i', '', $string);
}


// PHP 5.2+
// filter_var() : Returns the filtered data, or FALSE if the filter fails.
// type of filters (http://php.net/manual/en/filter.filters.php)

function isValidEmail2($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function fnSanitizeEmail2($url)
{
    return filter_var($url, FILTER_SANITIZE_EMAIL);
}

/* some useful patterns :

name,family  : '/^[A-Za-z\s ]+$/'
url : '/^(http(s?):\/\/|ftp:\/\/{1})((\w+\.){1,})\w{2,}$/i'
IP : '/^(([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]).){3}([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/'
Postal Code : '/^([0-9]{5})(-[0-9]{5})?$/i'
username : '/^[a-zA-Z\d_@.]{6,50}$/i'
password security : '/^(?=^.{8,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/'
*/

echo '<br>';

// split string by pattern
$str = "programming - 7Learn ,,,,, Php Class-";
$keywords = preg_split("/[\s-,]+/", trim($str, "- ,+*_"));
e($str,'g');
arrayNicePrint($keywords,'g');