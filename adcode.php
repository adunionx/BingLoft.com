<?php  
include 'db.php';
include 'functions.php';

headtag("$SiteName - Adcodes");

if($userlog==1){

echo '<div class="title">Adcode</div>';
$site=formget("id");

$uid=dump_udata("id");

$chsite=mysql_query("SELECT id FROM sites WHERE userid='$uid' AND id='$site'");

if(mysql_num_rows($chsite)>0){




echo '<b>Note</b><span style="color:#FB0B0B"></br>*For Better Earning Please Use JavaScript Code.<br/>*If Any Problem With AD Codes Please Feel Free To Contact Us.</span><div class="form">
<b>Javascript Code (Adult):</b><br/><textarea><script type="text/javascript" src="http://show.earnbuzz.in/?uid='.$uid.'&sid='.$site.'"></script></textarea><br/><b>Javascript Code (Non Adult):</b><br/><textarea><script type="text/javascript" src="http://click.earnbuzz.in/?uid='.$uid.'&sid='.$site.'"></script></textarea><br/>
<b>HTML Banner Code (Adult):</b><br/><textarea><a href="http://show.earnbuzz.in/html.php?uid='.$uid.'&sid='.$site.'"><img src="http://adzsex.com/adultbanner.php" alt=""/></a></textarea><br/><b>HTML Banner Code (Non Adult):</b><br/><textarea><a href="http://show.earnbuzz.in/html.php?uid='.$uid.'&sid='.$site.'"><img src="http://earnbuzz.in/banner.php" alt=""/></a></textarea><br/><b>HTML Text Code:</b><br/><textarea><a href="http://show.earnbuzz.in/html.php?uid='.$uid.'&sid='.$site.'">Xclusive Hot Videos For Your Mobile!</a></textarea></div>';

}
else {
echo '<div class="error">You do not own this site!</div>';
}

echo '<div class="page"><a href="/user/dashboard">Go Back To Dashboard</a></div>';

include 'foot.php';
}
else {

header('Location:/');
}
?>
