<? include "../header.php"; 

?>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div style="padding:10px 0;font-size:14px;color:#666;">
<div class="row" style="margin:0;">
<div class="col s12 m12 l6 hide-on-med-and-down">
    <?php
            $result = mysql_query("SELECT * FROM topics WHERE id=" . $_GET['id']) or die("That topic does not exist.");
            while($row = mysql_fetch_assoc($result)){ 
    ?>
<a href="/Forum/" style="color:#323a45;font-weight:600;">Forum</a> » <a href="." style="color:#323a45;font-weight:600;"><? echo $row['name']; ?></a>
    <?php } ?>
</div>
<div class="col s12 m12 l6 right-align">
<?php if($user) { echo '<a href="/Forum/" style="color:#323a45;font-weight:600;">My Threads</a>
&nbsp;|&nbsp;&nbsp;<a href="/Forum/" style="color:#323a45;font-weight:600;">Search Forum</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/Forum/Create/NewThread.php" style="color:#323a45;font-weight:600;">Create Thread</a>'; } else { echo '<a href="/Forum/" style="color:#323a45;font-weight:600;">My Threads</a>
&nbsp;|&nbsp;&nbsp;<a href="/Forum/" style="color:#323a45;font-weight:600;">Search Forum</a>'; } ?>

</div>
</div>
</div>
<div class="light-blue darken-2" style="color:white;padding:15px 25px;font-size:18px;">
<div class="row valign-wrapper" style="margin-bottom:0;">
<div class="col s8 m8 l8 valign"><div style="font-weight:500;">Post</div></div>
<div class="col s2 m2 l1 valign center-align"><div style="font-weight:500;">Replies</div></div>
<div class="col s2 m2 l1 valign center-align"><div style="font-weight:500;">Views</div></div>
<div class="col l2 valign right-align hide-on-med-and-down"><div style="font-weight:500;">Last Post</div></div>
</div>
</div>
<?php
$id = $_GET['id'];
$result2 = mysql_query("SELECT * FROM threads WHERE topicId='$id' ORDER BY threadId DESC LIMIT 10") or die("That topic does not exist.");
while($row = mysql_fetch_assoc($result2)){ 
$counter++;
?>
<div class="content-box" style="border-top:0;border-radius:0;">
<div class="row valign-wrapper" style="margin-bottom:0">
<div class="col s8 m8 l8 valign">
<div style="display:inline-block;float:left;padding-right:25px;" class="hide-on-med-and-down">
<div style="position:relative;">
<div style="position:relative;width:75px;height:75px;solid #0288d1;overflow:hidden;" class="circle">
<img src="../../Market/Storage/Avatar.png" width="150" style="margin-left:-40px;">
</div>
</div>
</div>
<div style="display:inline-block;margin-top:15px;">
<a href="../../Forum/ShowPost.php?id=<? echo $row['threadId']; ?>" style="color:#333;font-weight:600;"><div style="font-size:18px;display:inline-block;"><?php echo $row['threadTitle']; ?></div></a>
<div style="font-size:12px;color:#555;">posted by <a href="#"><?php echo $row['threadAdmin']; ?></a></div>
</div>
</div>
<div class="col s2 m2 l1 center-align valign">
<?php echo $row['replies']; ?>
</div>
<div class="col s2 m2 l1 center-align valign">
<?php echo $row['views']; ?>
</div>
</div>
</div>
    
    <?php } ?>