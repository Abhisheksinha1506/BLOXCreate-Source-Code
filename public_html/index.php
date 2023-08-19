<?php
$pagename = 'Home';
$pagelink = 'www.dimensious.com';
include('header.php');
?>
<?php
$id = $myu->id;
if ($user) {
?>
<center><h2>Welcome, <?php echo "$user"; ?></h2>
</center><div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div class="row">
<div class="col s12 m12 l3">
<div class="content-box">
<div style="position:absolute; width:186; height:186; z-index:4; background-image:url('../Market/Storage/<?php print_r($myu->outfit); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:4; background-image:url('../Market/Storage/<?php print_r($myu->hair); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:4; background-image:url('../Market/Storage/<?php print_r($myu->hat); ?>');"></div>
<div style="width:186; height:186; z-index:0; background-image:url('../Market/Storage/Avatar.png');"></div>
</div>
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;">Announcements</div>
<div class="content-box">
<a target="_blank" style="font-size:16px;color:#444444;"><div>Games Release</div></a><div style="font-size:12px;color:#666666;">Hello citizens of BLOX Create, we have officially released games as of 2/18/2017</div><div style="height:25px;"></div><a target="_blank" style="font-size:16px;color:#444444;"></a>
</div>
</div>
<div class="col s12 m12 l9">
<div class="content-box">
<form action="" method="post">
<input type="text" name="status" id="status" class="general-textbar" placeholder="What's up?">
<input type="hidden" name="csrf_token" value="/pAzDRYIxP4I5R+7Ghdg7buhF06UtFcrIZQ/gczlnt4=">
</form>
</div>
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;">Discussion</div>
<div style="border-bottom:1px solid #DDDDDD;"></div>










<div class="content-box" style="border:0;border:1px solid #DDDDDD;border-radius:0;border-top:0;padding:0;padding:0 15px;">
<table cellspacing="0" cellpadding="0" style="margin:0;padding:0;">
<tbody>
<tr>
<td width="13%" class="center-align">
<a href="/Profile/?id=1"><center><div style="width:50px;height:50px;border:1px solid #eee;overflow:hidden;" class="circle"><img src="/Market/Storage/Creator.png" width="100" style="margin-left:-25px;"></div></center></a>
<a href="/Profile/?id=1" style="padding-top:5px;display:inline-block;font-size:12px;">Creator</a>
</td>
<td width="87%" style="padding-left:15px;font-size:14px;color:#555555;">
Updated their status to "hi there."
<div style="color:#888888;font-size:12px;padding-top:5px;"><i class="material-icons" style="font-size:14px;">access_time</i> 1 day ago</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="content-box" style="border:0;border:1px solid #DDDDDD;border-radius:0;border-top:0;padding:0;padding:0 15px;">
<table cellspacing="0" cellpadding="0" style="margin:0;padding:0;">
<tbody>
<tr>
<td width="13%" class="center-align">
<a href="/Profile/?id=-1"><center><div style="width:50px;height:50px;border:1px solid #eee;overflow:hidden;" class="circle"><img src="/Market/Storage/BLOX.png" width="100" style="margin-left:-25px;"></div></center></a>
<a href="/Profile/?id=-1" style="padding-top:5px;display:inline-block;font-size:12px;">BLOX Create</a>
</td>
<td width="87%" style="padding-left:15px;font-size:14px;color:#555555;">
Updated their status to "Hello, welcome to BloxCreate, I am the founder of this wonderful establishment. If you need any help, please contact support@bloxcreate.net"
<div style="color:#888888;font-size:12px;padding-top:5px;"><i class="material-icons" style="font-size:14px;">access_time</i> 3 days ago</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="content-box" style="border:0;border:1px solid #DDDDDD;border-radius:0;border-top:0;padding:0;padding:0 15px;">

</div>


</div>
</div>
</div>
</div>
<?php
} else {
header('Location: /Landing');
}
?>
<?php
include('footer.php');
?>