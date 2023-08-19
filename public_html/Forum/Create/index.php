<?php include "../../header.php"; 

if(!$user){
    header("Location:..");
}

?>
</center>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<script>document.title = "Create Thread | BLOXCreate";</script>
<div style="padding:10px 0;font-size:14px;color:#666;">
<a href="/forum/" style="color:#323a45;font-weight:600;">Forum</a> » <a href="#" style="color:#323a45;font-weight:600;">BLOXCreate</a> » <a href="#" style="color:#323a45;font-weight:600;">General</a>
</div>
<div class="content-box">
<div class="header-text">Create Post</div><div style="height:25px;"></div>
<form action="" method="POST">
<input type="text" name="title" id="title" class="general-textbar" placeholder="Title" value="">
<div style="height:15px;"></div>
<textarea name="post" id="post" class="general-textarea" placeholder="Post" style="height:125px !important;"></textarea>
<input type="hidden" name="csrf_token" value="/xhSA+UC+gIV1gP01IdCUSUgRmN6iSLQ4u0ldn32uZw=">
<div style="height:15px;"></div>
<div style="padding:3px 10px;">
<input type="submit" name="submit" class="waves-effect waves-light btn blue darken-1" value="Post Forum" style="display:block;">
<?
if ($Submit) {
mysql_query("INSERT INTO Threads (topicId, threadAdmin, threadTitle, threadBody) VALUES('1','$myu->username','hi','testingthere')");
$getNew = mysql_query("SELECT * FROM threads WHERE threadAdmin='1' and threadTitle='$myu->username'");
$gN = mysql_fetch_object($getNew);
header("Location: /Forum/");
}
?>
</div>
</form>
</div>
</div>
</div>