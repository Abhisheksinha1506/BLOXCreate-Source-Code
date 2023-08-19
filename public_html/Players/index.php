<? include"../header.php"; ?>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div class="content-box">
<table>
<tbody>
<tr>
<td width="80%">
<div class="header-text">Search Users</div>
</td>
<td width="20%" class="right-align">

</td>
</tr>
</tbody>
</table>
<div style="height:15px;"></div>
<form action="" method="get">
<input type="text" name="search" id="string" class="general-textarea" placeholder="Search and press enter">
</form><center>
<?php
$setting = array(
	"perPage" => 50000
);
$perPage = 50000;
$page = $_GET['page'];
if ($page < 1) { $page=1; }
if (!is_numeric($page)) { $page=1; }
$minimum = ($page - 1) * $Setting["perPage"];
$getall = $handler->query("select * from users");
$all = ($getall->rowCount());
$allusers = $handler->query("SELECT * FROM users ORDER BY id");
$num = ($allusers->rowcount());
$i = 0;
$numb = ($Page+8);
$a = 1;
$log = 0;
$amount=ceil($num / $setting["perPage"]);
$getMembers = $handler->query("SELECT * FROM users ORDER BY id ASC LIMIT {$minimum},  ". $setting["perPage"]);
?>
		<div class="membr-hold">
			<?php
while ($gM = $getMembers->fetch(PDO::FETCH_OBJ)) {
$counter++;
echo "<a href='../Profile?id=".$gM->id."' border='0' class='mmbr-usr basic-font'>
<p>" . $gM->username . "</p>
</a>";
}
if ($page > 1) {
echo '<a href="/user/members.php?Page='.($page-1).'">Prev</a> - ';
}
if ($page < ($amount)) {
echo ' - <a href="/user/members.php?Page='.($page+1).'">Next</a>';
}
?>
		</div>
</div>
</div>

</div>

</div></div></center>

</div>


</body></html>
<? include "../footer.php"; ?>