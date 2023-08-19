<? include "../../header.php";
$id = $_GET['id'];
$baseplate = $handler->query("SELECT * FROM games WHERE id=" . $_GET['id']);
$gB = $baseplate->fetch(PDO::FETCH_OBJ);
?>
</center>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<h5><? echo "$gB->owner"; ?></h5>
<div class="content-box">
<div class="row" style="margin-bottom:0;">
<div class="col s12 m12 l8">
<img src="http://i.imgur.com/tWj4Ohs.png" style="width:900px;height:350px;" class="responsive-img">
</div>
<div class="col s12 m12 l4 center-align">
<div style="width:50%;margin:0 auto;">
<a href="#"><div style="width:150px;height:150px;border:1px solid #eee;overflow:hidden;margin:0 auto;" class="circle">
<img src="Creator.png" width="300" style="margin-left:-80px;">
</div></a>
<div style="padding-top:5px;font-size:16px;"><a href="#"><? echo "$gB->owner"; ?></a></div>
</div>
<div style="width:75%;margin:0 auto;padding-top:25px;">
<a href="/Download">
  <div id="play" class="play-game">
    Play
  </div>
</a>
</div>
</div>
</div>
<div class="row" style="padding-top:15px;margin-bottom:0;">
<div class="col s12 m12 l3 center-align">
<div style="font-size:22px;"><? echo "$gB->visits"; ?></div>
<div style="color:#999;">Game Visits</div>
</div>
<div class="col s12 m12 l3 center-align">
<div style="font-size:22px;"><? echo "$gB->favorites"; ?></div>
<div style="color:#999;">Favorited</div>
</div>
<div class="col s12 m12 l3 center-align">
<div style="font-size:22px;"><? echo "$gB->Created"; ?></div>
<div style="color:#999;">Date Created</div>
</div>
<div class="col s12 m12 l3 center-align">
<div style="font-size:22px;"><? echo "$gB->Created"; ?></div>
<div style="color:#999;">Last Updated</div>
</div>
</div>
</div>
<div style="height:25px;"></div>
<div style="color:#666666;font-weight:bold;font-size:14px;">DESCRIPTION</div>
<div class="content-box">
<div style="font-size:14px;"><? echo "$gB->description"; ?></div>
</div>
<div style="height:25px;"></div>
<style>.gray-h:hover{background:#F0F0F0!important;}</style>
<div style="display: inline-block; padding: 5px 15px; text-align: center; background: rgb(255, 255, 255); border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(221, 221, 221); border-right-color: rgb(221, 221, 221); border-left-color: rgb(221, 221, 221); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; font-size: 16px; cursor: pointer; font-weight: normal;" onclick="servers()" class="gray-h" id="servers-tab">Servers</div>
<div style="display: inline-block; padding: 5px 15px; text-align: center; background: rgb(255, 255, 255); border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(221, 221, 221); border-right-color: rgb(221, 221, 221); border-left-color: rgb(221, 221, 221); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; font-size: 16px; cursor: pointer; font-weight: bold;" onclick="comments()" class="gray-h" id="comments-tab">Comments</div>
<div class="content-box" id="Servers" style="display: none;">There are no active servers.</div>
<style>.blue-hover:hover{background:#1F89DE!important;}</style>
<div id="Comments" style="display: block;">
<div class="content-box">
<a name="ViewComments"></a>
<form action="#ViewComments" method="POST">
<textarea name="post" id="post" style="outline:none;margin:0;border:0;box-sizing:border-box;padding:0;border:2px solid #ddd !important;font-size:15px;padding:6px 12px;height:75px;" placeholder="Write your comment here"></textarea>
<div style="height:10px;"></div>
<input type="hidden" name="csrf_token" value="MfNwTToCsKtinZch7YM1RXT1Ef/7y173Hqj04sOONHs=">
<input type="submit" name="submit_comment" value="Post Comment" style="background:#2196F3;color:white;padding:5px 6px;font-size:14px;font-weight:500;border:0;border-radius:2px;border-bottom:1px solid #207FC9;outline:none;" class="blue-hover">
</form>
</div>
<div class="content-box" style="border-top:1px solid #eee;padding:0;padding:5px 15px;">
<table width="100%">
<tbody><tr>
<td width="10%" class="center-align">
<a href="#"><center><div style="width:75px;height:75px;border:1px solid #eee;overflow:hidden;" class="circle"><img src="../../Market/Storage/Creator.png" width="150" style="margin-left:-40px;"></div></center></a>
<a href="#" style="padding-top:5px;display:inline-block;font-size:14px;">WorldCreate</a>
</td>
<td width="80%">
<div style="word-break:break-word;">Testing!</div>
<div style="padding:3px 0;color:#999;font-size:12px;display:inline-block;">Posted 2 Days ago</div>
</td>
</tr>
</tbody></table>
</div>
</div>
</div>
</div>
<? include "../../footer.php"; ?>