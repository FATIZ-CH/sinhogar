
<?php 
session_start();

$id_user = $_GET["param1"];
$id_order = $_GET["param2"];

$_SESSION["id_user"] = $id_user;
$_SESSION["id_order"] = $id_order;
  ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SIN HOGER</title>
  <meta name="description" content="admin">
  <meta name="author" content="F.CHAOUFI">
  <link rel="stylesheet" href="../CSS/passercommande.css" >
  </head>

<body>

<div class="navbar">

<ul>
     <li><a href="../index.php">Home</a></li>
	 <li><a href="about.php">About</a></li> 
	 <li><a href="login.php">login</a></li>
	 <li><a href="inscription.php">Inscription</a></li>
	 <li><a href="donate.php">Donation</a></li>
	 <li><a href="product.php" class="active">Products</a></li>
	 <li><a href="contact.php">Contact</a></li>
</ul>

</div>



<section class="sec2">
<img position="center" src="../img/coc.PNG">

<form class="box" action="passercommande2.php" method="post">
  <h1>Info USER</h1>
  <input type="text" name="first_name" placeholder="Firstname" required>
  <input type="text" name="last_name" placeholder="Lastname" required>
  <input type="gmail" name="gmail" placeholder="Gmail" required>
  
                                                            <div class="col-md-4">
											<select id="countryCode" name="country" class="form-control" required>
												<option value=""> Select Country...</option>
													
														<option value="AF"> Afghanistan</option>
														<option value="AL"> Albania</option>
														<option value="DZ"> Algeria</option>
														<option value="AS"> American Samoa</option>
														<option value="AD"> Andorra</option>
														<option value="AO"> Angola</option>
														<option value="AG"> Antigua And Barbuda</option>
														<option value="AR"> Argentina</option>
														<option value="AM"> Armenia</option>
														<option value="AW"> Aruba</option>
														<option value="AU"> Australia</option>
														<option value="AT"> Austria</option>
														<option value="AZ"> Azerbaijan</option>
														<option value="BS"> Bahamas</option>
														<option value="BH"> Bahrain</option>
														<option value="BD"> Bangladesh</option>
														<option value="BB"> Barbados</option>
														<option value="BY"> Belarus</option>
														<option value="BE"> Belgium</option>
														<option value="BZ"> Belize</option>
														<option value="BJ"> Benin</option>
														<option value="BM"> Bermuda</option>
														<option value="BT"> Bhutan</option>
														<option value="BO"> Bolivia (Plurinational State of)</option>
														<option value="BA"> Bosnia And Herzegovina</option>
														<option value="BW"> Botswana</option>
														<option value="BR"> Brazil</option>
														<option value="BN"> Brunei Darussalam</option>
														<option value="BG"> Bulgaria</option>
														<option value="BF"> Burkina Faso</option>
														<option value="BI"> Burundi</option>
														<option value="KH"> Cambodia</option>
														<option value="CM"> Cameroon</option>
														<option value="CA"> Canada</option>
														<option value="CV"> Cabo Verde</option>
														<option value="CF"> Central African Republic</option>
														<option value="TD"> Chad</option>
														<option value="CL"> Chile</option>
														<option value="CN"> China</option>
														<option value="CO"> Colombia</option>
														<option value="KM"> Comoros</option>
														<option value="CG"> Congo</option>
														<option value="CD"> Congo (Democratic Republic of the)</option>
														<option value="CR"> Costa Rica</option>
														<option value="CI"> Cote d'Invoire</option>
														<option value="HR"> Croatia</option>
														<option value="CU"> Cuba</option>
														<option value="CY"> Cyprus</option>
														<option value="CZ"> Czechia</option>
														<option value="DK"> Denmark</option>
														<option value="DJ"> Djibouti</option>
														<option value="DM"> Dominica</option>
														<option value="DO"> Dominican Republic</option>
														<option value="EC"> Ecuador</option>
														<option value="EG"> Egypt</option>
														<option value="SV"> El Salvador</option>
														<option value="GQ"> Equatorial Guinea</option>
														<option value="ER"> Eritrea</option>
														<option value="EE"> Estonia</option>
														<option value="ET"> Ethiopia</option>
														<option value="FO"> Faroe Islands</option>
														<option value="FJ"> Fiji</option>
														<option value="FI"> Finland</option>
														<option value="FR"> France</option>
														<option value="GF"> French Guiana</option>
														<option value="PF"> French Polynesia</option>
														<option value="TF"> French Southern Territories</option>
														<option value="GA"> Gabon</option>
														<option value="GM"> Gambia</option>
														<option value="GE"> Georgia</option>
														<option value="DE"> Germany</option>
														<option value="GH"> Ghana</option>
														<option value="GR"> Greece</option>
														<option value="GL"> Greenland</option>
														<option value="GD"> Grenada</option>
														<option value="GP"> Guadeloupe</option>
														<option value="GU"> Guam</option>
														<option value="GT"> Guatemala</option>
														<option value="GN"> Guinea</option>
														<option value="GW"> Guinea-Bissau</option>
														<option value="GY"> Guyana</option>
														<option value="HT"> Haiti</option>
														<option value="HN"> Honduras</option>
														<option value="HK"> Hong Kong</option>
														<option value="HU"> Hungary</option>
														<option value="IS"> Iceland</option>
														<option value="IN"> India</option>
														<option value="ID"> Indonesia</option>
														<option value="IR"> Iran (Islamic Republic of)</option>
														<option value="IQ"> Iraq</option>
														<option value="IE"> Ireland</option>
														<option value="IL"> Israel</option>
														<option value="IT"> Italy</option>
														<option value="JM"> Jamaica</option>
														<option value="JP"> Japan</option>
														<option value="JO"> Jordan</option>
														<option value="KZ"> Kazakhstan</option>
														<option value="KE"> Kenya</option>
														<option value="KI"> Kiribati</option>
														<option value="KP"> Korea (Democratic People's Republic of)</option>
														<option value="KR"> Korea (Republic of)</option>
														<option value="XK"> Kosovo</option>
														<option value="KW"> Kuwait</option>
														<option value="KG"> Kyrgyzstan</option>
														<option value="LA"> Lao People's Democratic Republic</option>
														<option value="LV"> Latvia</option>
														<option value="LB"> Lebanon</option>
														<option value="LS"> Lesotho</option>
														<option value="LR"> Liberia</option>
														<option value="LY"> Libyan Arab Jamahiriya</option>
														<option value="LI"> Liechtenstein</option>
														<option value="LT"> Lithuania</option>
														<option value="LU"> Luxembourg</option>
														<option value="MO"> Macao</option>
														<option value="MK"> Macedonia, The Former Yugoslav Republic Of</option>
														<option value="MW"> Malawi</option>
														<option value="MY"> Malaysia</option>
														<option value="MV"> Maldives</option>
														<option value="ML"> Mali</option>
														<option value="MH"> Marshall Islands</option>
														<option value="MQ"> Martinique</option>
														<option value="MR"> Mauritania</option>
														<option value="MU"> Mauritius</option>
														<option value="MX"> Mexico</option>
														<option value="FM"> Micronesia (Federated States of)</option>
														<option value="MD"> Moldova (Republic of)</option>
														<option value="MC"> Monaco</option>
														<option value="MN"> Mongolia</option>
														<option value="ME"> Montenegro</option>
														<option value="MS"> Montserrat</option>
														<option value="MA"> Morocco</option>
														<option value="MZ"> Mozambique</option>
														<option value="MM"> Myanmar</option>
														<option value="NA"> Namibia</option>
														<option value="NP"> Nepal</option>
														<option value="NL"> Netherlands</option>
														<option value="NC"> New Caledonia</option>
														<option value="NZ"> New Zealand</option>
														<option value="NI"> Nicaragua</option>
														<option value="NE"> Niger</option>
														<option value="NG"> Nigeria</option>
														<option value="MP"> Northern Mariana Islands</option>
														<option value="NO"> Norway</option>
														<option value="OM"> Oman</option>
														<option value="PK"> Pakistan</option>
														<option value="PW"> Palau</option>
														<option value="PS"> Palestine, State Of</option>
														<option value="PA"> Panama</option>
														<option value="PG"> Papua New Guinea</option>
														<option value="PY"> Paraguay</option>
														<option value="PE"> Peru</option>
														<option value="PH"> Philippines</option>
														<option value="PL"> Poland</option>
														<option value="PT"> Portugal</option>
														<option value="PR"> Puerto Rico</option>
														<option value="QA"> Qatar</option>
														<option value="RE"> Reunion</option>
														<option value="RO"> Romania</option>
														<option value="RU"> Russian Federation</option>
														<option value="RW"> Rwanda</option>
														<option value="SH"> Saint Helena</option>
														<option value="KN"> Saint Kitts And Nevis</option>
														<option value="LC"> Saint Lucia</option>
														<option value="VC"> Saint Vincent And The Grenadines</option>
														<option value="WS"> Samoa</option>
														<option value="SM"> San Marino</option>
														<option value="ST"> Sao Tome And Principe</option>
														<option value="SA"> Saudi Arabia</option>
														<option value="SN"> Senegal</option>
														<option value="RS"> Serbia</option>
														<option value="SC"> Seychelles</option>
														<option value="SL"> Sierra Leone</option>
														<option value="SG"> Singapore</option>
														<option value="SK"> Slovakia</option>
														<option value="SI"> Slovenia</option>
														<option value="SB"> Solomon Islands</option>
														<option value="SO"> Somalia</option>
														<option value="ZA"> South Africa</option>
														<option value="ES"> Spain</option>
														<option value="LK"> Sri Lanka</option>
														<option value="SD"> Sudan</option>
														<option value="SR"> Suriname</option>
														<option value="SJ"> Svalbard And Jan Mayen</option>
														<option value="SZ"> Eswatini</option>
														<option value="SE"> Sweden</option>
														<option value="CH"> Switzerland</option>
														<option value="SY"> Syrian Arab Republic</option>
														<option value="TW"> Taiwan (Province of China)</option>
														<option value="TJ"> Tajikistan</option>
														<option value="TZ"> Tanzania, United Republic Of</option>
														<option value="TH"> Thailand</option>
														<option value="TL"> Timor-Leste</option>
														<option value="TG"> Togo</option>
														<option value="TO"> Tonga</option>
														<option value="TT"> Trinidad And Tobago</option>
														<option value="TN"> Tunisia</option>
														<option value="TR"> Turkey</option>
														<option value="TM"> Turkmenistan</option>
														<option value="TV"> Tuvalu</option>
														<option value="UA"> Ukraine</option>
														<option value="AE"> United Arab Emirates</option>
														<option value="GB"> United Kingdom of Great Britain and Northern Ireland</option>
														<option value="US"> United States of America</option>
														<option value="UY"> Uruguay</option>
														<option value="UZ"> Uzbekistan</option>
														<option value="VU"> Vanuatu</option>
														<option value="VE"> Venezuela (Bolivarian Republic of)</option>
														<option value="VN"> Viet Nam</option>
														<option value="VI"> Virgin Islands (U.S.)</option>
														<option value="EH"> Western Sahara</option>
														<option value="YE"> Yemen</option>
														<option value="ZM"> Zambia</option>
														<option value="ZW"> Zimbabwe</option>											</select>
										</div>
  <input type="text" name="city" placeholder="City"required>
  <select name="gender" required><option value=""> Gender...</option>
  <option name="female"value="female">Female</option>
  <option name="male"value="male">Male</option>
  </select>
  <input type="phone" name="phone_number" placeholder="Numberphone" required>

  <input type="submit" name="" value="passercommande">
</form>



<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<a href="https://www.twitter.com" target="_self"><img src="../img/twitter_online_social_media-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
				    <a href="https://www.facebook.com" target="_self"><img src="../img/online_social_media_facebook-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.gmail.com" target="_self"><img src="../img/online_social_media_google_plus-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a> 
					<a href="https://www.Instagram.com" target="_self"><img src="../img/instagram_online_social_media_photo-128.webp" alt="Image introuvable" height="50" width="50" style="float:center-left"/></a>
<i class="fa fa-facebook-square" style="font-size:48px;color:red"></i>

				<div class="copyright">
					&copy; 
				</div>
			</footer>
 </body>


</html>