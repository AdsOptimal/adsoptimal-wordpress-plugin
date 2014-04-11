<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   AdsOptimal
 * @author    team@adsoptimal.com
 * @license   GPL-2.0+
 * @link      http://www.adsoptimal.com
 * @copyright 2014 Your Name or Company Name
 */
	if (isset($_POST["adsoptimal_access_token"])) update_option('adsoptimal_access_token', $_POST["adsoptimal_access_token"]);
	if (isset($_POST["adsoptimal_email"])) update_option('adsoptimal_email', $_POST["adsoptimal_email"]);
	if (isset($_POST["adsoptimal_publisher_id"])) update_option('adsoptimal_publisher_id', $_POST["adsoptimal_publisher_id"]);
	if (isset($_POST["adsoptimal_ad_format"])) update_option('adsoptimal_ad_format', $_POST["adsoptimal_ad_format"]);
	if (isset($_POST["adsoptimal_ad_timing"])) update_option('adsoptimal_ad_timing', $_POST["adsoptimal_ad_timing"]);
	if (isset($_POST["adsoptimal_ad_delay"])) update_option('adsoptimal_ad_delay', $_POST["adsoptimal_ad_delay"]);
	if (isset($_POST["adsoptimal_ad_scroll"])) update_option('adsoptimal_ad_scroll', $_POST["adsoptimal_ad_scroll"]);
?>
<form method="post" id="myForm">
<input type="hidden" name="adsoptimal_access_token" value="<?php echo get_option('adsoptimal_access_token', '') ?>">
<input type="hidden" name="adsoptimal_email" value="<?php echo get_option('adsoptimal_email', '') ?>">
<input type="hidden" name="adsoptimal_publisher_id" value="<?php echo get_option('adsoptimal_publisher_id', '') ?>">
<input type="hidden" name="_adsoptimal_ad_format" value="<?php echo get_option('adsoptimal_ad_format', 'POSTER') ?>">
<input type="hidden" name="_adsoptimal_ad_timing" value="<?php echo get_option('adsoptimal_ad_timing', 'IMMEDIATE') ?>">
<input type="hidden" name="_adsoptimal_ad_delay" value="<?php echo get_option('adsoptimal_ad_delay', '10') ?>">
<input type="hidden" name="_adsoptimal_ad_scroll" value="<?php echo get_option('adsoptimal_ad_scroll', '60') ?>">
<div class="authenticate" style="display: none;">
	<div style="color: #ffffff; width: 350px; margin: 100px auto 0px; padding: 15px; border: solid 1px #ef4036; text-align: center; background-color: #f05a28; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">
		<h3 style="margin-top: 0px; font-weight: 300;">Connect Your AdsOptimal Account</h3>
		<p style="padding: 50px 0;"><a class="btn btn-default connect" href="javascript:void(0);" style="font-size: 15px; line-height: 40px; padding: 0 30px;">Connect AdsOptimal</a></p>
		<p>Promote mobile apps on your website and get $3 per download, The highest payout you'll find on the web.</p>
	</div>
</div>
<div class="authenticating" style="display: none;">
	<div style="color: #ffffff; width: 350px; margin: 100px auto 0px; padding: 15px; border: solid 1px #ef4036; text-align: center; background-color: #f05a28; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">
		<h3 style="margin-top: 0px; font-weight: 300;">Connect Your AdsOptimal Account</h3>
		<h4 style="padding: 50px 0; line-height: 42px;">Retrieving Your Account..</h4>
		<p>Promote mobile apps on your website and get $3 per download, The highest payout you'll find on the web.</p>
	</div>
</div>
<div class="authenticated" style="display: none;">
	<div style="background-color: #f05a28; min-width: 800px;">
		<img src="../wp-content/plugins/adsoptimal/admin/assets/white-logo.png" style="width: 170px; height: 50px; float: left;">
		<div class="btn-group pull-right" style="margin: 8px 10px 0 0;">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="background: transparent; border-color: #ffffff; color: #ffffff; ">
				<span class="email-address" style="text-shadow: none;"></span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a class="change-account" href="#">Change Account</a></li>
			</ul>
		</div>
		<div class="btn-group pull-right" style="margin: 8px 10px 0 0;">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="background: transparent; border-color: #ffffff; color: #ffffff; ">
				<span class="earning" style="text-shadow: none;">$0.00</span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="http://www.adsoptimal.com/customer/insights" target="_blank">Insights</a></li>
				<li><a href="http://www.adsoptimal.com/customer/payout" target="_blank">Payout</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
	<table cellpadding="0" cellspacing="0" border="0" style="min-width: 800px;">
		<tr>
			<td style="vertical-align: top;">
				<div style="float: left; width: 300px; height: 550px; background: url(../wp-content/plugins/adsoptimal/admin/assets/iphone_5_black.png) no-repeat center bottom; background-size: 300px 601px;">
					<img id="preview" style="position: relative; left: 35px; top: 93px; width: 229px; height: 327px;" src="../wp-content/plugins/adsoptimal/admin/assets/template-poster.jpg">
				</div>
			</td>
			<td style="vertical-align: top; text-align: center;">
				<div style="padding: 15px; margin: 10px 0; background-color: #f6f6f6;">
					<h4 style="margin-top: 0px; text-transform: uppercase;">Choose Ad Format</h4>
					<div class="btn-group" data-toggle="buttons" style="display: block;">
						<label class="btn template">
							<input type="radio" name="adsoptimal_ad_format" value="POSTER"><img src="../wp-content/plugins/adsoptimal/admin/assets/template-poster.jpg">
						</label>
						<label class="btn template">
							<input type="radio" name="adsoptimal_ad_format" value="BOTTOMBAR"><img src="../wp-content/plugins/adsoptimal/admin/assets/template-banner.jpg">
						</label>
						<label class="btn template">
							<input type="radio" name="adsoptimal_ad_format" value="BASIC"><img src="../wp-content/plugins/adsoptimal/admin/assets/template-simple.jpg">
						</label>
						<label class="btn template">
							<input type="radio" name="adsoptimal_ad_format" value="DETAIL"><img src="../wp-content/plugins/adsoptimal/admin/assets/template-detailed.jpg">
						</label>
						<label class="btn template">
							<input type="radio" name="adsoptimal_ad_format" value="ALERT"><img src="../wp-content/plugins/adsoptimal/admin/assets/template-alert.jpg">
						</label>
					</div>
					<div style="clear: both;"></div>
				</div>
				<div style="padding: 15px; margin: 10px 0 0; background-color: #f6f6f6;">
					<h4 style="margin: 0px; text-transform: uppercase;">Choose Display Ad Timing</h4>
					<div style="padding: 20px 0 10px; text-align: center;">
						<div class="btn-group" data-toggle="buttons">
							<label class="btn btn-warning" onclick="$('.config-plane').hide();">
								<input type="radio" name="adsoptimal_ad_timing" value="IMMEDIATE"><div style="font-weight:400; width:120px; line-height: 18px;">Immediately<br/>after page loaded</div>
							</label>
							<label class="btn btn-warning" onclick="$('.config-plane').hide(); $('.config-delay').show();">
								<input type="radio" name="adsoptimal_ad_timing" value="DELAY"><div style="font-weight:400; width:120px; line-height: 18px;">Wait for seconds<br/>after page loaded</div>
							</label>
							<label class="btn btn-warning" onclick="$('.config-plane').hide(); $('.config-scroll').show();">
								<input type="radio" name="adsoptimal_ad_timing" value="SCROLL"><div style="font-weight:400; width:150px; line-height: 18px;">After scroll to<br/>the bottom of the page</div>
							</label>
						</div>
					</div>
				</div>
				<div class="config-delay config-plane" style="padding: 0 15px 15px; margin: 0; display: none; background-color: #f6f6f6;">
					<h4 style="margin: 0px; text-transform: uppercase;">Timing Option</h4>
					<div style="padding: 13px;" class="row-fluid">
						<div style="display:inline-block; line-height: 28px;">Delay ad for &nbsp;</div>
						<select style="vertical-align:middle" class="span4 config-delay-timing" name="adsoptimal_ad_delay">
							<option value="1">1 second</option>
							<option value="2">2 seconds</option>
							<option value="3">3 seconds</option>
							<option value="4">4 seconds</option>
							<option value="5">5 seconds</option>
							<option value="6">6 seconds</option>
							<option value="7">7 seconds</option>
							<option value="8">8 seconds</option>
							<option value="9">9 seconds</option>
							<option value="10">10 seconds</option>
							<option value="11">11 seconds</option>
							<option value="12">12 seconds</option>
							<option value="13">13 seconds</option>
							<option value="14">14 seconds</option>
							<option value="15">15 seconds</option>
							<option value="16">16 seconds</option>
							<option value="17">17 seconds</option>
							<option value="18">18 seconds</option>
							<option value="19">19 seconds</option>
							<option value="20">20 seconds</option>
						</select>
					</div>
				</div>
				<div class="config-scroll config-plane" style="padding: 0 15px 15px; margin: 0; display: none; background-color: #f6f6f6;">
					<h4 style="margin: 0px; text-transform: uppercase;">Scroll Option</h4>
					<div style="padding: 13px;" class="row-fluid">
						<div style="display:inline-block; line-height: 28px;">Show ad after scrolling &nbsp;</div>
						<select style="vertical-align:middle" class="span4 config-scroll-threshold" name="adsoptimal_ad_scroll">
							<option value="10">10%</option>
							<option value="20">20%</option>
							<option value="30">30%</option>
							<option value="40">40%</option>
							<option value="50">50%</option>
							<option value="60">60%</option>
							<option value="70">70%</option>
							<option value="80">80%</option>
							<option value="90">90%</option>
						</select>
					</div>
				</div>
				<div style="text-align: center; padding-top: 10px;"><button type="submit" class="btn btn-lg btn-danger">&nbsp; &nbsp; &nbsp; &nbsp; Save&nbsp; &nbsp; &nbsp; &nbsp; </button></div>
			</td>
		</tr>
	</table>
</div>
</form>
<script type="text/javascript" charset="utf-8">
	var $ = jQuery;
	$(function () {
		var settings =
			{
				'host':     "www.adsoptimal.com"
			, 'clientId': "8d1ccad0433322bed59691fb0d6367a1f4846da1b70ce114cacc7202478e6cd9"
			};

		var authHost     = "https://" + settings.host;
		var resourceHost = "https://" + settings.host;
		
		// OAuth 2.0 Popup
		//
		var popupWindow=null;
		function openPopup(url)
		{
			if(popupWindow && !popupWindow.closed) popupWindow.focus();
			else popupWindow = window.open(url,"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=515, height=330,top=" + (screen.height - 330)/2 + ",left=" + (screen.width - 515)/2);
		}
		function parent_disable() {
			if(popupWindow && !popupWindow.closed) popupWindow.focus();
		}
		
		$("a.connect").click(function() {
			var url = authHost + '/oauth/authorize?client_id=' + settings.clientId + '&redirect_uri=' + encodeURIComponent(location.href.replace('#' + location.hash,"")) + '&response_type=token';
			openPopup(url);
			$(document.body).bind('focus', parent_disable);
			$(document.body).bind('click', parent_disable);
		});
		$(".change-account").click(function() {
			var url = authHost + '/oauth/authorize?client_id=' + settings.clientId + '&redirect_uri=' + encodeURIComponent(location.href.replace('#' + location.hash,"")) + '&response_type=token';
			var logout = authHost + '/oauth/logout?redirect=' + encodeURIComponent(url);
			openPopup(logout);
			$(document.body).bind('focus', parent_disable);
			$(document.body).bind('click', parent_disable);
		});
		
		// User Interface
		//
		$('.template').click(function() {
			$('#preview').attr('src', $(this).find('img').attr('src'));
		});
		
		// Manage OAuth 2.0 Redirect
		//
		var extractToken = function(hash) {
			var match = hash.match(/access_token=(\w+)/);
			return !!match && match[1];
		};
		var extractError = function(hash) {
			var match = hash.match(/error=(\w+)/);
			return !!match && match[1];
		};
		
		var token = extractToken(window.location.hash);
		if (extractError(window.location.hash) == 'access_denied') {
			window.close();
		}
		else if(token) {
			try { window.opener.setAccessToken(token); }
			catch(ex) { }
			window.close();
		}
		else {
			$('div.authenticate').show();
			
			if ($('[name="adsoptimal_access_token"]').val()) {
				$('div.authenticate').hide();
				$('div.authenticating').hide();
				$('div.authenticated').show();
				
				$('.email-address').text($('[name="adsoptimal_email"]').val());
				
				$('[name="adsoptimal_ad_format"][value="' + $('[name="_adsoptimal_ad_format"]').val() + '"]').parent().click();
				$('[name="adsoptimal_ad_timing"][value="' + $('[name="_adsoptimal_ad_timing"]').val() + '"]').parent().click();
				
				$('[name="adsoptimal_ad_delay"]').val($('[name="_adsoptimal_ad_delay"]').val());
				$('[name="adsoptimal_ad_scroll"]').val($('[name="_adsoptimal_ad_scroll"]').val());
				
				$('.earning').text('...');
				if ($('[name="adsoptimal_access_token"]').val()) {
					$.ajax({
							url: resourceHost + '/api/v1/insight_info'
						, beforeSend: function (xhr) {
								xhr.setRequestHeader('Authorization', "Bearer " + $('[name="adsoptimal_access_token"]').val());
								xhr.setRequestHeader('Accept',        "application/json");
							}
						, success: function (response) {
								if (response.data) {
									$('.earning').text('$' + response.data.pending_payout.toFixed(2));
								} else {
									$('.earning').text('Insight');
								}
							}
					});
				}
			}
		}
		
		// Manage OAuth 2.0 Results
		//
		window.setAccessToken = function(token) {
			$('div.authenticate').hide();
			$('div.authenticating').show();
			$('div.authenticated').hide();
			
			$.ajax({
					url: resourceHost + '/api/v1/publisher_info'
				, beforeSend: function (xhr) {
						xhr.setRequestHeader('Authorization', "Bearer " + token);
						xhr.setRequestHeader('Accept',        "application/json");
					}
				, success: function (response) {
						$('div.authenticating').hide();
						if (response.data) {
							$('[name="adsoptimal_access_token"]').val(token);
							$('[name="adsoptimal_email"]').val(response.data.email);
							$('[name="adsoptimal_publisher_id"]').val(response.data.publisher_id);
							$('#myForm')[0].submit();
						} else {
							$('div.authenticate').show();
						}
					}
			});
		}
	});
</script>