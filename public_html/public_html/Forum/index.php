<?php include "../header.php"; ?>
<div class="container" style="width:100%;">
<style>.gray-hover:hover{background:#fbfbfb!important;}</style>
<div class="light-blue darken-2" style="color:white;padding:15px 25px;">
<div class="row valign-wrapper" style="margin-bottom:0;">
<div class="col s8 m8 l8 valign">
<div style="font-size:16px;">BLOX Create</div>
</div>
<div class="col s2 m2 l1 center-align valign">
<div style="font-size:16px;">Threads</div>
</div>
<div class="col s2 m2 l1 center-align valign">
<div style="font-size:16px;">Replies</div>
</div>
<div class="col s12 m12 l2 valign right-align hide-on-med-and-down">
<div style="font-size:16px;">Last Post</div>
</div>
</div>
</div>
    <?php
            $result = mysql_query("SELECT * FROM topics") or die(mysql_error());
            while($row = mysql_fetch_assoc($result)){
    ?>
<div style="background:#ffffff;padding:15px 25px;border:1px solid #e8e8e8;border-top:0;font-size:14px;" class="gray-hover">
<div class="row valign-wrapper" style="margin-bottom:0;">
<div class="col s8 m8 l8 valign">
<a href="./topic.php?id=<? echo $row['id']; ?>" style="color:#333;">
    
<div style="font-size:16px;font-weight:500;"><? echo $row['name']; ?></div>
<div style="font-size:13px;color:#555;"><?php echo $row['description']; ?></div>
</a>
</div>
<div class="col s2 m2 l1 center-align valign" style="color:#777;">
<? echo $row['threads'] ?>
</div>
<div class="col s2 m2 l1 center-align valign" style="color:#777;">
<? echo $row['replies'] ?>
</div>
<div class="col s12 m12 l2 valign right-align hide-on-med-and-down">
<a href="#" style="font-size:12px;word-break:break-word;"><? echo $row['lastPostTitle']; ?></a>
<div style="padding:3px 0;font-size:11px;color:#666;">by <a title="UntakenUsername" href="#"><? echo $row['lastPostBy']; ?></a></div>
</div>
</div>
</div>





<? } ?>









<div style="height:25px;"></div>
</div>
</div>
<div class="col s12 m3 l2 hide-on-med-and-down">
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 
<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-5035877450680880" data-ad-slot="8435736652" data-adsbygoogle-status="done"><ins id="aswift_3_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_3_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><iframe width="160" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_3" name="aswift_3" style="left:0;position:absolute;top:0;"></iframe></ins></ins></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
</div>
<?php include "../footer.php"; ?>