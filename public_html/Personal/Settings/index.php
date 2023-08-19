<? include "../../header.php"; if ($user){ ?>
<body>

<div class="entire-page-wrapper">

<script>
		$(".button-collapse").sideNav();
		$(".dropdown-button1").dropdown({belowOrigin: true});
		</script>


&nbsp;
<div class="row" style="margin-bottom:0;">

<div class="container" style="width:100%;">
<style>td,th{padding:0;padding:10px 0!important;}</style>
<script>
		$(document).ready(function() {
			$("input[type=text], textarea").characterCounter();
			blockedUsers();
		});
		
		function processAccount() {
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open( "POST", "#", true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send(
			"username=" + document.getElementById("username").value + 
			"&email=" + document.getElementById("email").value + 
			"&gender=" + document.getElementById("gender").value + 
			"&birthdate_month=" + document.getElementById("birthdate_month").value + 
			"&birthdate_day=" + document.getElementById("birthdate_day").value + 
			"&birthdate_year=" + document.getElementById("birthdate_year").value + 
			"&country=" + document.getElementById("country").value + 
			"&blurb=" + encodeURIComponent(document.getElementById("blurb").value) + 
			"&forumsignature=" + encodeURIComponent(document.getElementById("forumsignature").value)
			);
			xmlHttp.onload = function(e) {
				if (xmlHttp.readyState == 4) {
					var response = xmlHttp.responseText;
					response = JSON.parse(response);
					response.forEach(function(response) {
						Materialize.toast(response, 4000);
					});
				}
			}
		}
		
		function processPrivacy() {
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open( "POST", "#", true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send(
			"messages_privacy=" + document.getElementById("messages_privacy").value + 
			"&friends_privacy=" + document.getElementById("friends_privacy").value + 
			"&trade_privacy=" + document.getElementById("trade_privacy").value
			);
			xmlHttp.onload = function(e) {
				if (xmlHttp.readyState == 4) {
					var response = xmlHttp.responseText;
					response = JSON.parse(response);
					response.forEach(function(response) {
						Materialize.toast(response, 4000);
					});
				}
			}
		}
		
		var vsearch;
		
		function blockedUsers(search) {
			if (search) {
				vsearch = search;
			}
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open( "GET", "#", true);
			xmlHttp.send(null);
			xmlHttp.onload = function(e) {
				if (xmlHttp.readyState == 4) {
					document.getElementById("blocked-users").innerHTML = xmlHttp.responseText;
				}
			}
		}
		
		function unblockUser(userID) {
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open( "POST", "#", true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send(
			"unblock_userid=" + userID
			);
			xmlHttp.onload = function(e) {
				if (xmlHttp.readyState == 4) {
					var response = xmlHttp.responseText;
					response = JSON.parse(response);
					response.forEach(function(response) {
						Materialize.toast(response, 4000);
					});
					blockedUsers(vsearch);
				}
			}
		}
		
		function processPassword() {
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open( "POST", "#", true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlHttp.send(
			"current_password=" + encodeURIComponent(document.getElementById("current_password").value) + 
			"&new_password=" + encodeURIComponent(document.getElementById("new_password").value) + 
			"&confirm_new_password=" + encodeURIComponent(document.getElementById("confirm_new_password").value)
			);
			xmlHttp.onload = function(e) {
				if (xmlHttp.readyState == 4) {
					var response = xmlHttp.responseText;
					response = JSON.parse(response);
					response.forEach(function(response) {
						Materialize.toast(response, 4000);
					});
				}
			}
		}
		
	</script>
<div class="row" style="margin-bottom:0;width:75%;margin:0 auto;">
<div class="col s12">
<ul class="tabs" style="width: 100%;">
<li class="tab col s3"><a class="active" href="#account">Account</a></li>
<li class="tab col s3"><a href="#privacy" class="">Privacy &amp; Blocked</a></li>
<li class="tab col s3"><a href="#password" class="">Password</a></li>
<li class="tab col s3"><a href="#billing" class="">Billing</a></li>
<div class="indicator" style="right: 385.5px; left: 0px;"></div></ul>
</div>
<div id="account" class="col s12" style="display: block;">
<form action="" method="POST">
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Account</div>
<div class="content-box">
<table width="100%">
<tbody><tr>
<td width="35%" style="text-align:right;">
Username
</td>
<td style="padding-left:25px !important;">
<input type="text" id="username" class="general-textarea" style="width:200px;" value="" disabled="">
<div style="font-size:11px;color:#999;">Changing your username costs <font style="color:#15BF6B;">$250 Cash</font>.</div>
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
Email
</td>
<td style="padding-left:25px !important;">
<input type="text" id="email" class="general-textarea" style="width:200px;" placeholder="">
<div style="font-size:11px;color:#999;">Your email helps keep your account secure.</div>
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
Gender
</td>
<td style="padding-left:25px !important;">
<select id="gender" class="browser-default general-textarea" style="width:200px;">
<option value="0" selected="">Male</option>
<option value="1">Female</option>
</select>
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
Birth Date
</td>
<td style="padding-left:25px !important;">
<select id="birthdate_month" class="browser-default general-textarea" style="display:inline-block;width:108px;">
<option value="0" selected="">Select...</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select id="birthdate_day" class="browser-default general-textarea" style="display:inline-block;width:88px;">
<option value="0" selected="">Select...</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
<div style="height:10px;"></div>
<select id="birthdate_year" class="browser-default general-textarea" style="width:98px;">
<option value="0" selected="">Select...</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option>
</select>
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
Country
</td>
<td style="padding-left:25px !important;">
<select id="country" class="browser-default general-textarea" style="width:200px;">
<option value="AF">Afghanistan</option>
<option value="AX">Aland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AG">Antigua And Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia And Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, Democratic Republic</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Cote D'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island &amp; Mcdonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic Of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle Of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KR">Korea</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libyan Arab Jamahiriya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States Of</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthelemy</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts And Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>
<option value="PM">Saint Pierre And Miquelon</option>
<option value="VC">Saint Vincent And Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome And Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia And Sandwich Isl.</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard And Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad And Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks And Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US" selected="">United States</option>
<option value="UM">United States Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis And Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
</td>
</tr>
</tbody></table>
</div>
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Blurb <font style="color:#999;font-size:12px;">(1,000 characters maximum)</font></div>
<div class="input-field" style="margin:0;padding:0;">
<textarea id="blurb" class="general-textarea" style="height:125px !important;" length="1000"></textarea>
<span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Forum Signature <font style="color:#999;font-size:12px;">(100 characters maximum)</font></div>
<div class="input-field" style="margin:0;padding:0;">
<input type="text" id="forumsignature" class="general-textarea" value="" length="100">
<span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
<div style="height:25px;"></div>
<input type="button" class="groups-blue-button" style="padding:0;padding:4px 8px;float:right;" value="Save Settings" onclick="processAccount()">
</form>
</div>
<div id="privacy" class="col s12" style="display: none;">
<form action="" method="POST">
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Privacy</div>
<div class="content-box">
<table width="100%">
<tbody><tr>
<td width="35%" style="text-align:right;">
Who can send me messages?
</td>
<td style="padding-left:25px !important;">
<select id="messages_privacy" class="browser-default general-textarea" style="width:200px;">
<option value="0" selected="">Everyone</option>
<option value="1">Friends Only</option>
<option value="2">No One</option>
</select>
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
Who can add me as a friend?
</td>
<td style="padding-left:25px !important;">
<select id="friends_privacy" class="browser-default general-textarea" style="width:200px;">
<option value="0" selected="">Everyone</option>
<option value="1">No One</option>
</select>
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
Who can send me trades?
</td>
<td style="padding-left:25px !important;">
<select id="trade_privacy" class="browser-default general-textarea" style="width:200px;">
<option value="0" selected="">Everyone</option>
<option value="1">Friends Only</option>
<option value="2">No One</option>
</select>
</td>
</tr>
</tbody></table>
</div>
</form>
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Blocked Users</div>
<div class="content-box">
<div id="blocked-users">No results found.</div>
</div>
<div style="height:25px;"></div>
<input type="button" class="groups-blue-button" style="padding:0;padding:4px 8px;float:right;" value="Save Settings" onclick="processPrivacy()">
</div>
<div id="password" class="col s12" style="display: none;">
<form action="/user/account.php" method="POST">
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Password</div>
<div class="content-box">
<table width="100%">
<tbody><tr>
<td width="35%" style="text-align:right;">
Current Password
</td>
<td style="padding-left:25px !important;">
<input type="password" id="current_password" class="general-textarea" style="width:200px;">
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
New Password
</td>
<td style="padding-left:25px !important;">
<input type="password" id="password" class="general-textarea" style="width:200px;">
</td>
</tr>
<tr>
<td width="35%" style="text-align:right;">
New Password (Again)
</td>
<td style="padding-left:25px !important;">
<input type="password" id="new_password_again" class="general-textarea" style="width:200px;">
</td>
</tr>
</tbody></table>
</div>
<div style="height:25px;"></div>
<input type="submit" class="groups-blue-button" style="padding:0;padding:4px 8px;float:right;" value="Update Password">
</form>
</div>
<div id="billing" class="col s12" style="display: none;">
<form action="" method="POST">
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Billing</div>
<div class="content-box">
You have no active VIP subscriptions. <a href="#" target="_blank">Click here</a> to upgrade!
</div>
</form>
</div>
</div>
</div>
</body>
<? } include "../../footer.php"; ?>