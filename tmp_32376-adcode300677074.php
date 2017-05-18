<?php

/************************************

Script : Adnetwork
Website : http://facebook.com/pranto007

Script is created and provided by Pranto (http://facebook.com/pranto007)
**************************************/

include 'db.php';
include 'functions.php';

headtag("$SiteName - Adcodes");

if($userlog==1){
include 'head.php';

echo '<div class="title">Adcode</div>';
$site=formget("id");

$uid=dump_udata("id");

$chsite=mysql_query("SELECT * FROM sites WHERE userid='$uid' AND id='$site'");

if(mysql_num_rows($chsite)>0){




echo '<div class="notice"><font color="red"> Note :</font> For better Earning Please use Our JavaScript Code on Header, before Download Link and after Download Link. </div><div class="notice"><font color="red"> Note : </font> There Is Different AdCode. Adult And Non Adult ads Type. </div><br><div class="line"> Javascript AdCode UnderPopup ( Better Earning ) </div><div class="catRow"><textarea> <script type="text/javascript" src="http://adunion.x20.asia/show/?uid='.$uid.'&sid='.$site.'"></script> </textarea></div><div class="line"> Javascript AdCode (Without Popup) </div><div class="catRow"><textarea> <script type="text/javascript" src="http://adunion.x20.asia/show/Js.php?uid='.$uid.'&sid='.$site.'"></script> </textarea></div><div class="line"> Javascript AdCode ( Adult Adcode ) </div><div class="catRow"><textarea> <script type="text/javascript" src="http://adunion.x20.asia/show/adult.php?uid='.$uid.'&sid='.$site.'"></script> </textarea></div><div class="borderline"></div><br><div class="line"> HTML Text AdCode</div><div class="catRow"><textarea> <a href="http://adunion.x20.asia/show/html.php?uid='.$uid.'&sid='.$site.'">Best Download Zone</a> </textarea></div><div class="borderline"></div><br><div class="line"> HTML Banner AdCode </div><div class="catRow"><textarea> <a href="http://adunion.x20.asia/show/html.php?uid='.$uid.'&sid='.$site.'"><img src="http://adunion.x20.asia/show/adtools/banner.php" alt=""/></a> </textarea></div>';

}
else {
echo '<br/><div class="error">You do not own this site!</div><br/>';
}

echo '<br/><div class="back"><img src="/home.png"/> <a href="/">Home</a> | <a href="/sites">My Sites</a></div>';

include 'foot.php';
}
else {

header('Location:/');
}
?>
