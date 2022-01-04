<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
	<title>Find yourself with us!</title>
	<link rel="icon" type="image/png" href="/assets/images/ico.png"/>
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
		  rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/glyphs/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
</head>
<body>
<div class="header sticky">
	<div class="header-container clearfix">
		<div class="logo">
			<a href="<?php echo base_url(); ?>">
				<span class="helper"></span>
				<img class="logo-img" src="/assets/images/logo-b.png" height=80 alt="vladrosca">
				<span class="site-name"></span>
			</a>
		</div>
		<div class="login">
			<span class="helper"></span>
			<a href="<?php echo base_url(); ?>about">
				About Me
			</a>
			<a href="<?php echo base_url(); ?>services">
				Services
			</a>
			<a href="<?php echo base_url(); ?>seminars">
				Seminars
			</a>
			<a href="<?php echo base_url(); ?>Contact">
				Contact
			</a>
		</div>
		<div class="language">
			<a href='<?php echo base_url(); ?>langswitch/switchLanguage/english'><img src="/assets/images/gb.svg"></a>
			<a href='<?php echo base_url(); ?>langswitch/switchLanguage/romana'><img src="/assets/images/ro.svg"></a>
		</div>
	</div>
</div>
<div class="section section-1">
	<div class="section-container">
		<div class="content-box">
			<h1 class="s1-h">
				<?php echo $this->lang->line('title-1') ?>
			</h1>
			<h2 class="s1-h2">
				<?php echo $this->lang->line('title-2') ?>
			</h2>
			<p class="pricing">
				JOURNEY WITH US!
			</p>
			<a class="offer-link" href="<?php echo base_url(); ?>contact">
				START NOW
			</a>
		</div>
	</div>
	<div class="scroll-div">
		<img src="/assets/images/scroll.png">
	</div>
</div>
<div class="section section-2">
	<h2 class="about-title">
		What can we help you with?
	</h2>
<!--	<p class="about-desc">-->

<!--	</p>-->
	<div class="about-list">
		<ul>
			<li class="about-item">
				<img src="/assets/images/s2-4.png">
				<p class="item-desc">
					Physical Aches and Pain
				</p>
			</li>
			<li class="about-item">
				<img src="/assets/images/s2-1.png">
				<p class="item-desc">
					Reduce Stress and Anxiety
				</p>
			</li>
			<li class="about-item">
				<img src="/assets/images/s2-6.png">
				<p class="item-desc">
					Phobias and Fears
				</p>
			</li>
			<li class="about-item">
				<img src="/assets/images/s2-2.png">
				<p class="item-desc">
					Confidence
				</p>
			</li>
			<li class="about-item">
				<img src="/assets/images/s2-3.png">
				<p class="item-desc">
					Addiction
				</p>
			</li>
			<li class="about-item">
				<img src="/assets/images/s2-5.png">
				<p class="item-desc">
					Relationships
				</p>
			</li>
		</ul>
	</div>
	<div class="learn-more">
		<a href="services">Learn More</a>
	</div>
</div>
<div class="section section-3">
	<div class="about-list-2">
		<ul>
			<li class="about-item-2">
				<img src="/assets/images/s3-1.png">
				<p class="item-desc-2">
					I'm Here to
				</p>
				<p class="item-text-2">
					Supporting your mental, emotional, spiritual, and physical health.
				</p>
			</li>
			<li class="about-item-2">
				<img src="/assets/images/s3-2.png">
				<p class="item-desc-2">
					My Aim
				</p>
				<p class="item-text-2">
					Is to work with you to help support your own personal journey.
				</p>
			</li>
			<li class="about-item-2">
				<img src="/assets/images/s3-3.png">
				<p class="item-desc-2">
					My Promise
				</p>
				<p class="item-text-2">
					I will provide you with the guidance, and tools needed to live a more abundant lifestyle.
				</p>
			</li>
		</ul>
	</div>
</div>
<div class="footer">
	<div class="footer-logo">
		<img src="/assets/images/logo-b.png">
	</div>
	<!--	<h1 class="footer-h1">-->
	<!--		vladvictorrosca.com-->
	<!--	</h1>-->
	<div class="llc-info">
		<ul>
			<li class="address">
				Bulevardul Corneliu Coposu 7, Sectorul 3 Bucuresti, Romania
			</li>
			<li class="v-align">
				+40 (742) 123 123
			</li>
			<li class="v-align">
				support@vladvictorrosca.com
			</li>
		</ul>
	</div>
	<div class="footer-links clearfix">
		<div class="footer-links-left">
			<a href="<?php echo base_url(); ?>/pricing">Pricing</a>
			<a href="<?php echo base_url(); ?>/contact">Contact</a>
			<a href="<?php echo base_url(); ?>/terms">Terms & Conditions</a>
			<a href="<?php echo base_url(); ?>/privacy">Privacy Policy</a>
		</div>
		<div class="footer-links-right">
			<span class="copyright">2021 vladvictorrosca.com All rights reserved</span>
		</div>
	</div>
</div>
<a id="btt"></a>
</body>
<script src="/assets/js/main.js"></script>

</html>








