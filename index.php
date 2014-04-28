<?php include ( "./inc/header.inc.php" ); ?>	
<?php include ("./inc/connect.inc.php"); ?>

<?php

$reg = @$_POST['reg'];

$un = "";
$em = "";
$pswd = "";
$d = "";

//Register Form

$un = strip_tags(@$_POST['username']);
$em = strip_tags(@$_POST['email']);
$pswd = strip_tags(@$_POST['password']);
$d = date("Y-m-d");

if ($reg) {


if ($em==$em) {


$u_check = mysql_query("SELECT username FROM users WHERE username='$un'");

$check = mysql_num_rows($u_check);

if ($check == 0) {

if ($un&&$em&&$pswd) {

if ($pswd==$pswd) {

if (strlen($un)>25) {
echo "The maximum limit for Username is 25 characters";

}
else
{

if (strlen($pswd)>30||strlen($pswd)<5) {
echo "Your password must be between 5 and 30 characters long";
}
else
{

$pswd = md5($pswd);
$query = mysql_query("INSERT INTO users VALUES ('','$un','$em','$pswd','$d','0')");

die("<h2>Welcome to iMath</h2>Login to your account to get started...");

}
}
}

else {
 echo "Your passwords don't match ";
}
}
else {
echo "Please fill in all of the fields";
}
}
else
{
 echo "Username already taken...";
}
}
else {
echo "Your E-Mails don't match";
}
}
?>



<div id="webs-wrapper">
	<section class="banner-image banner-ready">
	<h1>Set Up Your Account</h1>
	<h3>Follow our easy steps to set up your account in no time.</h3>
	<div class="cover"></div>
</section>




<form id="createWebsID" name="createWebsID" autocomplete="off" method="POST" action="#">

<div class="signup-body">


<div class="step" id="step1" method="POST" action="#">

	<h3><span>1</span>The Basics</h3>



<label class="upper" for="emailAddress">

<p>Enter your Username</p>
<input name="username" placeholder="Username" type="text" required="true" value="">

</label>



<label class="upper" for="password">

	<p>Enter your email address.</p>
	<input name="email" placeholder="Email address" type="email" required="true" value="">

</label>

<label class="bump-right" for="siteTitle">

	<p>Enter a password. Must be at least 5 characters.</p>
	<input name="password" placeholder="Password" value="" type="password" required="true" >

</label>

<label for="vertical">

	<p>Grade Level</p>
	<input id="siteTitle" placeholder="Grade Level" type="text" name="siteTitle" value="">

</label>
</div>


	<div class="dark-section">
	<div class="step" id="step2">

<h3>
<span>2</span>Choose from our selection of areas which use math<small>you can change anytime</small></h3>
<div class="themepicker-container">
	<div class="themepicker clearfix signup">
		<ul class="themes" style="width: 900px;">

<div data-slug="woodplanks" class="theme">

<div class="theme-thumb" data-style="brown">
<div class="theme-thumb-holder">

<img class="previewImg" src="/s/themes/woodplanks/v1.18/screenshots/thumb-brown.png" alt="" data-style="brown" style="height: 276px;"></div></div>


<ul class="swatches">

	<li class="swatch-wrap selected ">
		<a class="swatch" data-slug="brown" style="background-color: #643c1d" title="Brown Wood Planks">Brown Wood Planks</a></li>
	<li class="swatch-wrap  ">
		<a class="swatch" data-slug="black" style="background-color: #343434" title="Black Wood Planks">Black Wood Planks</a></li>

</ul>

</div>


		<div data-slug="menu" class="theme">
			<div class="theme-thumb" data-style="red">
				<div class="theme-thumb-holder">
					<img class="previewImg" src="/s/themes/menu/v1.21/screenshots/thumb-red.png" alt="" data-style="red" style="height: 276px;"></div></div>
					<ul class="swatches">
						<li class="swatch-wrap selected ">
							<a class="swatch" data-slug="red" style="background-color: #6f1a05" title="Red">Red</a></li></ul></div>

	<div data-slug="kinderland" class="theme">
	<div class="theme-thumb" data-style="default">
	<div class="theme-thumb-holder">

	<img class="previewImg" src="/s/themes/kinderland/v1.23/screenshots/thumb-default.png" alt="" data-style="default" style="height: 276px;"></div></div>

						<ul class="swatches">
							<li class="swatch-wrap selected ">
							<a class="swatch" data-slug="default" style="background-color: #d3dc4d" title="Default">Default</a></li>
							<li class="swatch-wrap  ">
								<a class="swatch" data-slug="blocks" style="background-color: #c0d4e9" title="Blocks">Blocks</a></li>

								<li class="swatch-wrap  ">
									<a class="swatch" data-slug="paper" style="background-color: #f4e7b3" title="Paper">Paper</a></li></ul></div>
									

	<div data-slug="classy" class="theme">
	
		<div class="theme-thumb" data-style="paisley">
		<div class="theme-thumb-holder">
				
			<img class="previewImg" src="/s/themes/classy/v1.17/screenshots/thumb-paisley.png" alt="" data-style="paisley" style="height: 276px;"></div></div>

			<ul class="swatches">
				<li class="swatch-wrap selected ">
				<a class="swatch" data-slug="paisley" style="background-color: #2a2a2a" title="Hotel">Hotel</a></li>

				<li class="swatch-wrap  ">
					<a class="swatch" data-slug="wood" style="background-color: #3e2715" title="Ski Chalet">Ski Chalet</a></li>
					<li class="swatch-wrap  ">
					<a class="swatch" data-slug="flare" style="background-color: #C797D5" title="Spa">Spa</a></li></ul></div>
					<div data-slug="vibrant_abstract" class="theme">
					<div class="theme-thumb" data-style="wine">
					<div class="theme-thumb-holder">

		<img class="previewImg" src="/s/themes/vibrant_abstract/v1.17/screenshots/thumb-wine.png" alt="" data-style="wine" style="height: 276px;"></div></div>

		<ul class="swatches">
			<li class="swatch-wrap selected ">
	<a class="swatch" data-slug="wine" style="background-color: #A81742" title="Wine">Wine</a></li>
	<li class="swatch-wrap  "><a class="swatch" data-slug="green" style="background-color: #8da53f" title="Green">Green</a></li><li class="swatch-wrap  "><a class="swatch" data-slug="blue" style="background-color: #1b8bad" title="Blue">Blue</a></li></ul></div><div data-slug="fashion" class="theme"><div class="theme-thumb" data-style="gray"><div class="theme-thumb-holder"><img class="previewImg" src="/s/themes/fashion/v1.17/screenshots/thumb-gray.png" alt="" data-style="gray" style="height: 276px;"></div></div><ul class="swatches"><li class="swatch-wrap selected "><a class="swatch" data-slug="gray" style="background-color: #FFF4A8" title="Beige">Beige</a></li><li class="swatch-wrap  "><a class="swatch" data-slug="green" style="background-color: #A7FFA5" title="Green">Green</a></li><li class="swatch-wrap  "><a class="swatch" data-slug="pink" style="background-color: #FBBBE1" title="Pink">Pink</a></li><li class="swatch-wrap  "><a class="swatch" data-slug="yellow" style="background-color: #FFD012" title="Yellow">Yellow</a></li></ul></div></ul></div></div>
</div>
</div>
<div class="step" id="step3" style="display: none;">
<h3>
<span>3</span>
<small>We have checked the ones we recommend for your site</small>
</h3>



<div id="prefab-container">


</div>
</div>

	<div class="dark-section">
	<div class="step create" id="step4">


	<input type="hidden" id="forceCaptcha" name="forceCaptcha" value="0">
	<div class="terms">
	
	<label>
	
	<span class="invalid">You must agree to the terms of service.</span>
	<span class="checkbox-wrap">

	<input type="checkbox" class="checkbox">
	<span class="control"></span>
	<span class="agreement">I Agree To The <a target="_blank" href="/terms-of-service">Terms of Service</a></span>

</span>
</label>

<input  type="submit" class="webs-ext-btn webs-ext-btn-blue webs-ext-btn-arrow" name="reg" value="Create Account">

</div>
</div>
</div>
</div>
</form>

	<script type="text/javascript">
		var google_conversion_id = 1068291996;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "6LyGCNSKwAIQnK-z_QM";
		var google_conversion_value = 0;
	</script>




<img src="https://ad.yieldmanager.com/pixel?id=1681342&amp;t=2" width="1" height="1" style="position:absolute">


</div>

<?php include ( "./inc/footer.inc.php" ); ?>	

<div class="brand-footer">
<h3>
<p>Webs makes small business marketing simple.</p>&nbsp; <p>Explore the Webs online marketing platform below.</p></h3>
<div class="brand webs">
<img class="brand-logo" src="http://static.websimages.com/v7296ec2/active-static/target/external/images/brands/webs.png" alt="Webs ��� Better Websites Made Simple.">
<p class="tagline">
Better Websites Made Simple.</p>
<a href="/Signup?referer=wftr-global_footer" class="webs-ext-btn webs-ext-btn-medgrey webs-ext-btn-flat">
<span>
Sign Up Free</span>
</a>
</div>
<div class="brand pagemodo">
<img class="brand-logo" src="http://static.websimages.com/v7296ec2/active-static/target/external/images/brands/pagemodo.png" alt="Pagemodo ��� Social Marketing Made Simple.
">
<p class="tagline">
Social Marketing Made Simple.</p>
<a href="http://www.pagemodo.com?r=house_webs_global_footer" target="_blank" class="webs-ext-btn webs-ext-btn-medgrey webs-ext-btn-flat">
<span>
Learn More</span>
</a>
</div>
<div class="brand contactme">
<img class="brand-logo" src="http://static.websimages.com/v7296ec2/active-static/target/external/images/brands/contactme.png" alt="ContactMe ���&nbsp;Contact Management Made Simple.">
<p class="tagline">
Contact Management Made Simple.</p>
<a href="http://www.contactme.com?r=house_webs_global_footer" target="_blank" class="webs-ext-btn webs-ext-btn-medgrey webs-ext-btn-flat">
<span>
Learn More</span>
</a>
</div>
</div>

<script type="text/javascript" src="http://static.websimages.com/v7296ec2/active-static/lib/require-2.1.js"></script>
<script type="text/javascript" src="http://static.websimages.com/v7296ec2/active-static/target/apps/bootstrap.js"></script>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<!--[if gt IE 8]><!--> <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script><!--<![endif]-->





<div class="loadingSpinner" style="width: 1px; height: 1px; position: absolute; left: -10px; top: -10px; overflow: hidden;"></div><script type="text/javascript" id="" src="//cdn.optimizely.com/js/621373388.js"></script>


<div style="display: none; visibility: hidden;"><script type="text/javascript">var cache_buster=parseInt(99999999*Math.random());document.write("\x3cimg src\x3d'http://p.rfihub.com/ca.gif?rb\x3d9093\x26ca\x3d20556619\x26ra\x3d"+cache_buster+"' height\x3d0 width\x3d0 style\x3d'display:none' alt\x3d'Rocket Fuel'/\x3e");</script><img src="http://p.rfihub.com/ca.gif?rb=9093&amp;ca=20556619&amp;ra=27080698" height="0" width="0" style="display:none" alt="Rocket Fuel"><img src="http://p.rfihub.com/ca.gif?rb=9093&amp;ca=20556619&amp;ra=59993311" height="0" width="0" style="display:none" alt="Rocket Fuel">

</div>
<script type="text/javascript" id="">var _mTrack=_mTrack||[];_mTrack.push(["trackPage"]);(function(){var a="https:"==document.location.protocol?"https://":"http://",b=document.createElement("script");b.type="text/javascript";b.async=!0;b.src=a+"tracker.marinsm.com/tracker/async/2932in917575.js";a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>
<noscript>
&amp;lt;img width="1" height="1" src="https://tracker.marinsm.com/tp?act=1&amp;amp;amp;cid=2932in917575&amp;amp;amp;script=no"&amp;gt;
</noscript>
<script type="text/javascript" id="" src="http://static.websimages.com/static/projects/public/js/referrer.js"></script><div class="prefab-option" style="display: none;"><span class="icon"></span></div>
</body></html>
