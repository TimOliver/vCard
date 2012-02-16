<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="<?php echo $languageStringMetaDescription; ?>" />
		<meta name="keywords" content="<?php echo $languageStringMetaKeywords; ?>" />
		<meta name="author" content="<?php echo $languageStringMetaAuthor; ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<?php if( $isMobile == false ): ?><link rel="stylesheet" type="text/css" href="css/site.css?refresh=<?php echo time(); ?>" />
		<?php else: ?><link rel="stylesheet" type="text/css" href="css/mobile.css?refresh=<?php echo time(); ?>" /><?php endif; ?>

		<?php if( $isMobile ): ?><meta id="viewport" name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /><?php endif; ?>

		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		
		<?php if( $isMobile == false ): ?>
		<script type="text/javascript" src="js/jquery.tweet.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

		        $("#twitter").tweet({
		          join_text: "auto",
		          username: "<?php echo $languageStringTwitter; ?>",
		          count: 1,
		          auto_join_text_default: null,
		          auto_join_text_ed: null,
		          auto_join_text_ing: null,
		          auto_join_text_reply: null,
		          auto_join_text_url: null,
		          language: "<?php echo $langCode; ?>",
		          template: "<div class=\"header\"><span class=\"social_icons twitter_icon_small\">&nbsp;</span> @{user} - {time}</div><p>{text}</p>"
		        });

			});
		</script>
		<?php endif; ?>

		<?php if( $isMobile ): ?>
		<script type="text/javascript">
			$(document).ready( function() { 
				$('#navbar ul li a').click( function() { 
					$('html, body').animate({ scrollTop: 0 }, 0);
					
					$('#navbar ul li a').each( function() { 
						$(this).removeClass('selected');
					} );

					$(this).addClass('selected');

					$('.column').each( function() { 
						$(this).hide();
					} );

					$('#'+$(this).attr('data-target')).show();
					return false;
				} );
			} );
		</script>
		<?php endif; ?>

		<title><?php echo $languageStringTitle; ?></title>
	</head>
	<body data-lang="<?php echo $langCode; ?>">

		<div id="vertical_container"></div>
		<div id="horizontal_container">

			<?php if( $isMobile == false ): ?>
			<div id="highlight">&nbsp;</div>
			<?php endif; ?>

			<div id="content_container">
				<div id="content">
					<?php if( $isMobile == false): ?>
						<?php if( $langCode != 'ja'): ?>
						<a href="/jp" id="language_icon"><img src="img/jp.png" title="Japanese" alt="JP"/></a>
						<?php else: ?>
						<a href="/" id="language_icon"><img src="img/en.png" title="English" alt="JP"/></a>
						<?php endif; ?>
					<?php endif; ?>

					<?php if( $isMobile ): ?>
					<div id="navbar">
						<ul>
							<li><a href="#" class="selected" data-target="column_1"><?php echo $languageStringAbout; ?></a></li>
							<li><a href="#" data-target="column_2"><?php echo $languageStringActivities; ?></a></li>
							<li><a href="#" data-target="column_3"><?php echo $languageStringContact; ?></a></li>
						</ul>

						<?php if( $langCode != 'ja'): ?>
						<a href="/jp" id="language_icon"><img src="img/jp.png" title="Japanese" alt="JP"/></a>
						<?php else: ?>
						<a href="/" id="language_icon"><img src="img/en.png" title="English" alt="JP"/></a>
						<?php endif; ?>
					</div>
					<?php endif; ?>

					<div class="column first_column" id="column_1">
						<img src="img/tim_profile.png" width="116" height="116" alt="Tim Profile" id="profile_pic" />

						<div class="profile_name_container">
							<h1 data-lang="<?php echo $langCode; ?>"><?php echo $languageStringName; ?></h1>
							<h4 data-lang="<?php echo $langCode; ?>"><?php echo $languageStringCaption; ?></h4>
						</div>

						<div class="blurb" data-lang="<?php echo $langCode; ?>">
							<?php echo $languageStringBlurb; ?>
						</div>
						
						<a href="<?php echo $languageStringCardFile; ?>" id="vcard_button" data-lang="<?php echo $langCode; ?>">
							<?php echo $languageStringDownloadCard; ?>
						</a>
					</div>
					<div class="column" id="column_2" style="<?php if( $isMobile ): ?>display: none;<?php endif; ?>" >
						<h2 data-lang="<?php echo $langCode; ?>"><?php echo $languageStringActivities; ?></h2>

						<ul class="activities_list" data-lang="<?php echo $langCode; ?>">
							<li><img src="img/activity_icomics.png" alt="iComics" /> <?php echo $languageStringActivity1; ?></li>
							<li><img src="img/activity_ipokedex.png" alt="iPokédex" /> <?php echo $languageStringActivity2; ?></li>
							<li><img src="img/activity_ugs.png" alt="UberGames" /> <?php echo $languageStringActivity3; ?></li>
							<li><img src="img/activity_rflan.png" alt="RFLAN" /> <?php echo $languageStringActivity4; ?></li>
							<li><img src="img/activity_ios5.png" alt="iOS" /> <?php echo $languageStringActivity5; ?></li>
							<li><img src="img/activity_cosmos.png" alt="WTTC" /> <?php echo $languageStringActivity6; ?></li>
						</ul>
					</div>
					<div class="column last_column" id="column_3" style="<?php if( $isMobile ): ?>display: none;<?php endif; ?>" >
						<?php if( $isMobile == false ): ?>
						<div id="twitter" data-lang="<?php echo $langCode; ?>"><img src="img/ajax_loader_twitter.gif" alt="Loading" id="twitter_loader" /></div>
						<?php endif; ?>

						<h2 data-lang="<?php echo $langCode; ?>"><?php echo $languageStringContact; ?></h2>
						<ul id="contact_list" data-lang="<?php echo $langCode; ?>">
							<li><span class="social_icons contact_icon mail_icon">&nbsp;</span> <a href="mailto:info@timoliver.com.au">info@timoliver.com.au</a></li>
							<li><span class="social_icons contact_icon skype_icon">&nbsp;</span> <a href="skype:timoliver.au">timoliver.au</a></li>
							<li><span class="social_icons contact_icon site_icon">&nbsp;</span> <a href="http://www.tim-oliver.com/">http://www.tim-oliver.com/</a></li>
						</ul>

						<h2 data-lang="<?php echo $langCode; ?>"><?php echo $languageStringNetworks; ?></h2>
						<ul id="networks_list" data-lang="<?php echo $langCode; ?>">
							<li><a href="http://www.twitter.com/<?php echo $languageStringTwitter; ?>" title="Twitter" target="_blank" class="social_icons network_icon twitter_icon"><span>Twitter</span></a></li>
							<li><a href="http://au.linkedin.com/in/tim0liver" title="LinkedIn" target="_blank" class="social_icons network_icon linkedin_icon"><span>LinkedIn</span></a></li>
							<li><a href="http://www.github.com/timoliver" title="GitHub" target="_blank" class="social_icons network_icon github_icon"><span>GitHub</span></a></li>
							<li><a href="http://stackoverflow.com/users/599344/tim" title="Stack Overflow" target="_blank" class="social_icons network_icon stackoverflow_icon"><span>Stack Overflow</span></a></li>
							<li><a href="http://foursquare.com/tim0liver" title="foursquare" target="_blank" class="social_icons network_icon foursquare_icon"><span>foursquare</span></a></li>
							<li><a href="http://www.facebook.com/timothy.oliver" title="Facebook" target="_blank" class="social_icons network_icon facebook_icon"><span>Facebook</span></a></li>
							<li><a href="http://www.youtube.com/tim0liver" title="YouTube" target="_blank" class="social_icons network_icon youtube_icon"><span>YouTube</span></a></li>
							<li><a href="http://www.flickr.com/photos/timoliver" title="Flickr" target="_blank" class="social_icons network_icon flickr_icon"><span>Flickr</span></a></li>
							<li><a href="http://live.xbox.com/en-US/Profile?Gamertag=Kulhane" title="Xbox LIVE" target="_blank" class="social_icons network_icon xboxlive_icon"><span>Xbox LIVE</span></a></li>
							<li><a href="http://steamcommunity.com/id/-TiM-" title="Steam" target="_blank" class="social_icons network_icon steam_icon"><span>Steam</span></a></li>
						</ul>
					</div>
				</div>

				<div id="footer" data-lang="<?php echo $langCode; ?>">
					Copyright Tim Oliver, 2012. <?php if( $isMobile == false ): ?>Social media icons by <a href="http://paulrobertlloyd.com/2009/06/social_media_icons/" target="_blank">Paul Robert Lloyd</a>. Photography by <a href="http://nickhallam.com" target="_blank">Nick Hallam</a>. Site powered by <a href="http://ennoverse.com" target="_blank">Ennoverse</a>.<?php endif; ?>
				</div>
			</div>
		</div>
		

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-5643664-14']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>

	</body>
</html>