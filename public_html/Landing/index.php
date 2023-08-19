<? include "../header.php"; ?>
<div class="entire-page-wrapper">

<script>
		$(".button-collapse").sideNav();
		$(".dropdown-button1").dropdown({belowOrigin: true});
		</script>
<style>@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300");body{background:url(http://i.imgur.com/O4OXRfZ.png) no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;height:100%;position:relative;}.light-blue.darken-2,.nav-wrapper,nav{background:transparent!important;}.welcome-registration{font-family:"Source Sans Pro",sans-serif;font-weight:300;font-size:18px;color:#f1f1f1;padding-bottom:5px;}.registration-box{width:75%;}.general-textarea{border:0!important;}@media only screen and (min-width: 993px) {.welcome-header{font-family:"Source Sans Pro",sans-serif;font-weight:300;font-size:45px;color:white;}.major-push{position:absolute;top:50%;transform:translateY(-50%);}}@media only screen and (max-width: 993px) {.welcome-header{font-family:"Source Sans Pro",sans-serif;font-weight:300;font-size:24px;color:white;}.major-push{position:absolute;top:15%;transform:translateY(-15%);text-align:center;margin:0 auto;}.registration-box{margin:0 auto;}}</style>
<div class="row">
<div class="col s12 l4 offset-l8 major-push">
<div class="welcome-header">Sign Up</div>
<div class="welcome-registration">Register an account for free.</div>
<div class="registration-box">
<form action="/user/register.php" method="POST">
<input type="text" name="username" class="general-textarea" placeholder="Choose a username">
<div style="height:10px;"></div>
<input type="email" name="email" class="general-textarea" placeholder="Enter Email">
<div style="height:10px;"></div>
<input type="password" name="password" class="general-textarea" placeholder="Create a password">
<div style="height:10px;"></div>
<input type="password" name="confirmpassword" class="general-textarea" placeholder="Type password again">
<div style="height:10px;"></div>
<input type="submit" name="submit" class="market-yellow-button" value="Register" style="width:100%;font-size:16px;">
</form>
</div>
</div>
</div>
<div class="row" style="margin-bottom:0;">
<div class="col s12 m3 l2 hide-on-med-and-down" style="text-align: right;">&nbsp;</div>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
</div></div></div></div>