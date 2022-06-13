<?php
require_once('libs/common.php');
require_once('libs/chat.php');
require_once('libs/operator.php');
require_once('libs/groups.php');

$groupid = verifyparam( "group", "/^\d{1,8}$/", "");
if($groupid) {
   loadsettings();
   if($settings['enablegroups'] == '1') {
      $group = group_by_id($groupid);
      if(!$group) {
         $groupid = "";
      }
   } else {
      $groupid = "";
   }
}
$image_postfix = has_online_operators($groupid) ? "on" : "off";

if ( $image_postfix == "on" ) {

   echo "<span style='color:green;'><b><i class='fa fa-user'></i> Chat Online</b></span>";
}

if ( $image_postfix == "off" ) {
   echo "<span style='color:rgba(0,0,0,0.5);'><i class='fa fa-user'></i> Chat Offline</span>";
}


?>