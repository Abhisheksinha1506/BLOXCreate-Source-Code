<? include "../header.php"; ?>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div style="padding:10px 0;font-size:14px;color:#666;">
<div class="row" style="margin:0;">
<div class="col s12 m12 l6">
<a href="#" style="color:#323a45;font-weight:600;">Forum</a> » <a href="#" style="color:#323a45;font-weight:600;">BLOX Create</a> » <a href="#" style="color:#323a45;font-weight:600;">General</a>
</div>
<div class="col s12 m12 l6 right-align">
<a href="#" style="color:#323a45;font-weight:600;">My Threads</a>
&nbsp;|&nbsp;&nbsp;<a href="#" style="color:#323a45;font-weight:600;">Search Forum</a>
</div>
</div>
</div><?php $result = mysql_query("SELECT * FROM threads WHERE threadId=" . $_GET['id']) or die("That thread does not exist.");
            while($row = mysql_fetch_assoc($result)){ ?>
<div class="light-blue darken-2" style="color:white;padding:15px 25px;">
<div style="font-size:18px;"><? echo $row['threadTitle']; ?></div>
</div>
<div class="content-box" style="border-top:0;border-radius:0;">
<div class="row">
<div class="col s3 center-align">
<div title="Last seen 5 days ago" style="background:#c2c2c2;width:10px;height:10px;border-radius:10px;display:inline-block;"></div>
&nbsp;<a href="../../../Profile?id=1"><? echo($row['threadAdmin'] . "<br>"); ?></a>
<a href="#">
<? echo "
<img src='../../../Market/Storage/Avatar.png' width='182' height='182'>
"; ?>
</a>
<div class="row" style="padding-top:15px;font-size:14px;margin-bottom:0;">
<div class="col s3">&nbsp;</div>
<div class="col s3 right-align">
</div>
<div class="col s3 left-align">
<?php $result2 = mysql_query("SELECT * FROM users WHERE username='" . $row['threadAdmin'] . "'") or die("Error");
            while($row2 = mysql_fetch_assoc($result2)){ echo $row2['posts'];  } ?>
</div>
</div>
<div class="row" style="font-size:14px;margin-bottom:0;">
<div class="col s3">&nbsp;</div>
<div class="col s3 right-align">
</div>
<div class="col s3 left-align">
</div>
</div>
</div>
<div class="col s9">
<div class="row" style="margin-bottom:0;">
<div class="col s6">
</div>
</div>
<div style="word-break:break-word;"><?php echo $row['threadBody']; ?></div>


</div>
</div>
<? } ?>
</div>