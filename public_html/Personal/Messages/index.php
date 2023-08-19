<? include "../../header.php"; ?>
</center>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<script>document.title = "Messages | BLOXCreate";</script>
<style>.gray-h:hover{background:#F0F0F0!important;}</style>
<h5>Messages</h5>
<div style="display: inline-block; padding: 5px 15px; text-align: center; background: rgb(255, 255, 255); border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(221, 221, 221); border-right-color: rgb(221, 221, 221); border-left-color: rgb(221, 221, 221); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; font-size: 16px; cursor: pointer; font-weight: 500;" onclick="received()" class="gray-h" id="received-tab">Received (4)</div>
<div style="display: inline-block; padding: 5px 15px; text-align: center; background: rgb(255, 255, 255); border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(221, 221, 221); border-right-color: rgb(221, 221, 221); border-left-color: rgb(221, 221, 221); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; font-size: 16px; cursor: pointer; font-weight: normal;" onclick="sent()" class="gray-h" id="sent-tab">Sent</div>
<div style="display: inline-block; padding: 5px 15px; text-align: center; background: rgb(255, 255, 255); border-width: 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-left-style: solid; border-top-color: rgb(221, 221, 221); border-right-color: rgb(221, 221, 221); border-left-color: rgb(221, 221, 221); border-image: initial; border-bottom-style: initial; border-bottom-color: initial; font-size: 16px; cursor: pointer; font-weight: normal;" onclick="archive()" class="gray-h" id="archive-tab">Archived</div>
<div class="bc-content" id="Received" style="display: block; padding: 0px;">
<form action="" method="POST">
<table width="100%">
<tbody><tr>
<td width="145" class="center-align">
<input type="checkbox" id="select_all" class="filled-in" onclick="toggle(this)">
<label for="select_all" style="" onclick="toggle(this)">Select All</label>
</td>
<td>
<i class="waves-effect waves-gray btn-flat waves-input-wrapper" style=""><input type="submit" name="MarkAsRead" class="waves-button-input" value="Mark As Read"></i>
<i class="waves-effect waves-gray btn-flat waves-input-wrapper" style=""><input type="submit" name="MarkAsUnread" class="waves-button-input" value="Mark As Unread"></i>
<i class="waves-effect waves-gray btn-flat waves-input-wrapper" style=""><input type="submit" name="Archive" class="waves-button-input" value="Archive"></i>
</td>
</tr>
</tbody></table>
<script>
		function toggle(reference) {
			checkbox = document.getElementsByName("message[]");
			
			for (var i = 0, n = checkbox.length; i<n; i++) {
				checkbox[i].checked = reference.checked;
			}
		}
	</script>



<a href="1/" class="message-read">
<table width="100%">
<tbody><tr>
<td width="50" class="center-align">
<input type="checkbox" name="message[]" id="label16979" value="16979" class="filled-in" style="margin:0 auto;">
<label for="label16979" style="padding-left:0;margin-bottom:-5px;font-size:0;">&nbsp;</label>
</td>
<td width="75" class="center-align">
<div style="width:50px;height:50px;border:1px solid #dedede;margin:0 auto;overflow:hidden;" class="circle center-align">
<img src="https://storage.googleapis.com/bloxcity-file-storage/8ce6a6e3d38010e58a544e6839c774e65854e154c2af6.png" width="100" height="100" style="margin-left:-25px;">
</div>
</td>
<td>
<div>
<div style="font-size:14px;color:#666;display:inline-block;"><a href="#" style="color:#666;">Creator</a></div>
<div style="font-size:12px;color:#999;display:inline-block;"> - Received 01/29/2017 12:27AM CST</div>
</div>
<div style="font-size:16px;color:#222;display:inline-block;">I've noticed that you joined BloxCreate...</div>
<div style="font-size:14px;color:#999;display:inline-block;" class="hide-on-med-and-down">&nbsp;-&nbsp;</div>
<div style="font-size:14px;color:#666;display:inline-block;word-break:break-word;">Welcome to BloxCreate, thanks for joining. If you need help, please contact support!</div>
</td>
</tr>
</tbody></table>
</a>
</form>
</div>
<div class="bc-content" id="Sent" style="display: none; padding: 0px;">


<a href="2/" class="message-hover">
<table width="100%">
<tbody><tr>
<td width="75" class="center-align">
<div style="width:50px;height:50px;border:1px solid #dedede;margin:0 auto;overflow:hidden;" class="circle center-align">
<img src="https://storage.googleapis.com/bloxcity-file-storage/d600d88aaff3ec3a43882c6d3f35357b588439fa1e510.png" width="100" height="100" style="margin-left:-25px;">
</div>
</td>
<td>
<div>
<div style="font-size:14px;color:#666;display:inline-block;"><a href="#" style="color:#666;">Nicholas</a></div>

</div>
<div style="font-size:16px;color:#222;display:inline-block;">I just joined BloxCreate!</div>
<div style="font-size:14px;color:#999;display:inline-block;" class="hide-on-med-and-down">&nbsp;-&nbsp;</div>
<div style="font-size:14px;color:#666;display:inline-block;">Hello Nicholas, I've just joined BloxCreate! I agree to any terms and conditions and subject myself to any punishment nessicary if they shall be broken at any point in time!</div>
</td>
</tr>
</tbody></table>
</a>
</div>
<div class="bc-content" id="Archive" style="display: none; padding: 0px;">
</div>
<script>
		var receivednum = "4";
		var sentnum = "3";
		var archivenum = "0";
		
		window.onload = function() {
			document.getElementById("received-tab").innerHTML = "Received (" + receivednum + ")";
			
			
		}
		
		function received() {
			document.getElementById("received-tab").innerHTML = "Received (" + receivednum + ")";
			document.getElementById("sent-tab").innerHTML = "Sent";
			document.getElementById("archive-tab").innerHTML = "Archived";
			document.getElementById("Received").style.display = "block";
			document.getElementById("received-tab").style.fontWeight = "500";
			document.getElementById("Sent").style.display = "none";
			document.getElementById("sent-tab").style.fontWeight = "normal";
			document.getElementById("Archive").style.display = "none";
			document.getElementById("archive-tab").style.fontWeight = "normal";
		}
		
		function sent() {
			document.getElementById("sent-tab").innerHTML = "Sent (" + sentnum + ")";
			document.getElementById("received-tab").innerHTML = "Received";
			document.getElementById("archive-tab").innerHTML = "Archived";
			document.getElementById("Sent").style.display = "block";
			document.getElementById("sent-tab").style.fontWeight = "500";
			document.getElementById("Received").style.display = "none";
			document.getElementById("received-tab").style.fontWeight = "normal";
			document.getElementById("Archive").style.display = "none";
			document.getElementById("archive-tab").style.fontWeight = "normal";
		}
		
		function archive() {
			document.getElementById("archive-tab").innerHTML = "Archived (" + archivenum + ")";
			document.getElementById("received-tab").innerHTML = "Received";
			document.getElementById("sent-tab").innerHTML = "Sent";
			document.getElementById("Archive").style.display = "block";
			document.getElementById("archive-tab").style.fontWeight = "500";
			document.getElementById("Sent").style.display = "none";
			document.getElementById("sent-tab").style.fontWeight = "normal";
			document.getElementById("Received").style.display = "none";
			document.getElementById("received-tab").style.fontWeight = "normal";
		}
	</script>
</div>
</div>
<? include "../../footer.php"; ?>