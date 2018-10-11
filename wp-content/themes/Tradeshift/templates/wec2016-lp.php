 <?php
/*
Template Name: WEF2016 - Sanctuary
*/
get_header('wec2016'); ?>
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>
	<!-- Main Content Starts -->
	<main id="mainContent" class="main-content wec2016-lp">
		<!-- Hero Section -->
		<div class="hero intro">
			<div class="container">
				<div class="row">
					<div class="contents">
					<?php if ( is_mobile()): ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/wec2016/ts-logo@2x.png" width="145px" />
					<?php elseif (is_tablet()): ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/wec2016/ts-logo@2x.png" width="145px" />
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/wec2016/ts-logo@2x.png" width="291px" />
					<?php endif; ?>
						<h1>You're invited to Tradeshift Sanctuary</h1>
						<h3>a space for visionaries, misfits, and innovators like you</h3>
						<img class="hero-hr" src="<?php echo get_template_directory_uri(); ?>/img/wec2016/wec2016-hero-hr.png" />
						<p class="lead"><a href="https://www.google.com/maps/place/Freie+Evangelische+Gemeinde+Davos/@46.8017811,9.8266858,17z/data=!4m7!1m4!3m3!1s0x4784a6a606d0b899:0xc2e55f54b3460497!2sScalettastrasse+1,+7270+Davos+Platz,+Switzerland!3b1!3m1!1s0x4784a6a60175029f:0x3e8942ed9b4c4fbf" target="_blank">Freie Evangelische Gemeinde Church<br />
						Scalettastrasse 1,<br class="visible-xs" />
						7270 Davos Platz, Switzerland</a><br />
						19 – 23 January 2016</p>
						<div class="vip-party">
							<h5>:: Sanctuary Wrap Party @ Piano Bar ::</h5>
							<p class="party-info"><em>DATE</em> Friday, 22 January, 2016 | <em>Time</em> 10:00pm<br />
							<em>LOCATION</em> <a href="https://goo.gl/maps/BbZUJpS9g462" target="_blank">Piano Bar, Hotel Europe, 63 Promenade, Davos</a></p>
							<p class="get-pass"><strong>Request an invite at the Tradeshift Sanctuary</strong></p>
							<p class="questions">For questions or more information, email: <a href="mailto:taf@tradeshift.com">taf@tradeshift.com</a></p>
						</div>
						<div class="partner-logo">
							<img class="partner-logo-cnbc" src="<?php echo get_template_directory_uri(); ?>/img/wec2016/cnbc-white.png" alt="CNBC" /> &nbsp; <img class="partner-logo-tc" src="<?php echo get_template_directory_uri(); ?>/img/wec2016/techcrunch-white.png" alt="TechCrunch" />
						</div>
					</div>
				</div>
			</div>
			<div class="arrow"></div>
		</div>
		<div class="who-is-tradeshift">
			<div class="container">
				<div class="row">
					<div class="global-startup">
						<h2>Come in and stay awhile.</h2>
						<p>Kick off your snow boots and grab a coffee (or free WiFi). Tradeshift Sanctuary is your hideaway in Davos—a space to relax, connect, and get inspired in the midst of the World Economic Forum.</p>
						<p>Tradeshift, CNBC and TechCrunch have taken over the <a href="https://www.google.com/maps/place/Freie+Evangelische+Gemeinde+Davos/@46.8017811,9.8266858,17z/data=!4m7!1m4!3m3!1s0x4784a6a606d0b899:0xc2e55f54b3460497!2sScalettastrasse+1,+7270+Davos+Platz,+Switzerland!3b1!3m1!1s0x4784a6a60175029f:0x3e8942ed9b4c4fbf" target="_blank">Freie Evangelische Gemeinde Church</a>, just steps from the Congress Center, and turned it into the Sanctuary. Join us for exclusive conversations between tech leaders and WEF attendees, who will be sharing fresh perspectives on how technology is challenging the status quo.</p>
						<p>Drop by <a href="https://www.google.com/maps/place/Freie+Evangelische+Gemeinde+Davos/@46.8017811,9.8266858,17z/data=!4m7!1m4!3m3!1s0x4784a6a606d0b899:0xc2e55f54b3460497!2sScalettastrasse+1,+7270+Davos+Platz,+Switzerland!3b1!3m1!1s0x4784a6a60175029f:0x3e8942ed9b4c4fbf" target="_blank">the Sanctuary</a> and mingle with tech visionaries and innovators from around the world.</p>
						<p><strong>See you there!</strong></p>
					</div>
					<div class="quote hidden-xs">
						<h4>We’re hosting fireside chats and panels all week with tech startup thought leaders, executives, and provocateurs on the front lines of innovation.</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="schedule">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>The Sanctuary Schedule</h2>
						<p>We've made it easy to put the events in your calendar (dates are in Europe/Zurich timezone, please adjust your calendar accordingly).</p>
						<table class="partner-table">
							<tr class="table-header">
								<th width="20%">&nbsp;</th>
								<th width="20%"><strong>Jan 19, 2016</strong><br />Tuesday</th>
								<th width="20%"><strong>Jan 20, 2016</strong><br />Wednesday</th>
								<th width="20%"><strong>Jan 21, 2016</strong><br />Thursday</th>
								<th width="20%"><strong>Jan 22, 2016</strong><br />Friday</th>
							</tr>
							<tr>
								<th><strong>Morning</strong><br />8:00 - 12:00</th>
								<td>Closed</td>
								<td class="event open">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="1">Tradeshift Open Lounge <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										Tradeshift Open Lounge <a class="atcb-link" tabindex="1"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-20 8:00:00</var>
								            <var class="atc_date_end">2016-01-20 12:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: Tradeshift Open Lounge</var>
<var class="atc_description">Tradeshift Open Lounge. For more information visit http://tradeshift.com/sanctuary/ </var>
								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
						        </td>
								<td class="event open">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="2">CNBC Tech Transformers (07.00-12.00)<i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										CNBC Tech Transformers (07.00-12.00)<a class="atcb-link" tabindex="2"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-21 8:00:00</var>
								            <var class="atc_date_end">2016-01-21 12:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: CNBC Tech Transformers</var>
	<var class="atc_description">CNBC Tech Transformers. For more information visit http://tradeshift.com/sanctuary/ </var>
							            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift/CNBC</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
						        </td>
								<td class="event open">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="3">Tradeshift Open Lounge (Breakfast 9:00-11:00) <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										Tradeshift Open Lounge with Breakfast (9:00-11:00) <a class="atcb-link" tabindex="3"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-22 8:00:00</var>
								            <var class="atc_date_end">2016-01-22 12:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: Tradeshift Open Lounge</var>
	<var class="atc_description">Tradeshift Open Lounge with Breakfast from 9am - 10am. For more information visit http://tradeshift.com/sanctuary/ </var>
								            <var class="atc_description"></var>
								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
								</td>
							</tr>
							<tr>
								<th><strong>Afternoon</strong><br />12:00 - 18:00</th>
								<td>Closed</td>
								<td>Closed</td>
								<td class="event open">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="4">CNBC Tech Transformers <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										CNBC Tech Transformers <a class="atcb-link" tabindex="4"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-21 12:00:00</var>
								            <var class="atc_date_end">2016-01-21 18:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: CNBC Tech Transformers</var>
								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift/CNBC</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
								</td>
								<td class="event open">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="5">Tradeshift Open Lounge <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										Tradeshift Open Lounge <a class="atcb-link" tabindex="5"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-22 12:00:00</var>
								            <var class="atc_date_end">2016-01-22 18:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: Tradeshift Open Lounge</var>
								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
						        </td>
							</tr>
							<tr>
								<th><strong>Evening</strong><br />18:00 - 20:00</th>
								<td class="event private">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="6">Standup Dinner/Artist Performances<br />19:00-21:00 <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										Standup Dinner/Artist Performances <br />19:00-21:00<a class="atcb-link" tabindex="6"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
									    <var class="atc_event">
								            <var class="atc_date_start">2016-01-19 19:00:00</var>
								            <var class="atc_date_end">2016-01-19 21:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: Standup Dinner/Artist Performances</var>
								            <var class="atc_description">Standup Dinner/Artist Performances For more information visit http://tradeshift.com/sanctuary/ </var>
								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div></td>
								<td class="event private">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
											<a href="https://www.universe.com/events/techcrunch-davos-live-presented-by-tradeshift-tickets-davos-platz-KXFR13?ref=Tradeshift" target="_blank">TechCrunch Meetup (RSVP)</a> <a class="atcb-link" tabindex="7"><i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										<a href="https://www.universe.com/events/techcrunch-davos-live-presented-by-tradeshift-tickets-davos-platz-KXFR13?ref=Tradeshift" target="_blank">TechCrunch Meetup<br />(Click to RSVP)</a> <a class="atcb-link" tabindex="7"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-20 18:00:00</var>
								            <var class="atc_date_end">2016-01-20 20:00:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: Tradeshift Sanctuary: TechCrunch Meetup</var>
<var class="atc_description">TechCrunch Meetup For more information visit http://tradeshift.com/sanctuary/ </var>
								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift/TechCrunch</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
								</td>
								<td>Closed</td>
								<td>Closed</td>
							</tr>
							<tr>
								<th><strong>Night</strong><br />20:00 to ?</th>
								<td>Closed</td>
								<td class="event private">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="8">TechCrunch Meetup <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										TechCrunch Meetup <a class="atcb-link" tabindex="8"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-20 20:00:00</var>
								            <var class="atc_date_end">2016-01-20 23:59:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: TechCrunch Meetup</var>
<var class="atc_description">TechCrunch Meetup For more information visit http://tradeshift.com/sanctuary/ </var>

								            <var class="atc_location">Freie Evangelische Gemeinde Davos</var>
								            <var class="atc_organizer">Tradeshift/TechCrunch</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
								</td>
								<td>Closed</td>
								<td class="event private">
									<div class="addtocalendar atc-style-button-icon">
										<?php if ( is_mobile()): ?>
										<a class="atcb-link" tabindex="8">Wrap Party at <a href="https://goo.gl/maps/BbZUJpS9g462" target="_blank">Piano Bar</a> <i class="fa fa-calendar-plus-o"></i></a>
										<?php else: ?>
										Sanctuary Wrap Party at <a href="https://goo.gl/maps/BbZUJpS9g462" target="_blank">Piano Bar, Hotel Europe</a> <a class="atcb-link" tabindex="8"><i class="fa fa-calendar-plus-o"></i></a>
										<?php endif; ?>
										<var class="atc_event">
								            <var class="atc_date_start">2016-01-22 20:00:00</var>
								            <var class="atc_date_end">2016-01-22 23:59:00</var>
								            <var class="atc_timezone">Europe/Zurich</var>
								            <var class="atc_title">Tradeshift Sanctuary: Sanctuary Wrap Party @ Piano Bar</var>
<var class="atc_description">Sanctuary Wrap Party @ Piano Bar. For more information visit http://tradeshift.com/sanctuary/ </var>
								            <var class="atc_location">Piano Bar, Hotel Europe 63 Promenade, Davos</var>
								            <var class="atc_organizer">Tradeshift</var>
								            <var class="atc_organizer_email">eng@tradeshift.com</var>
						        		</var>
						        	</div>
						        </td>
							</tr>
						</table>
						<div class="schedule-legend">
							<ul>
								<li class="open-to-wef">Open to all WEF participants</li>
								<li class="private-event">Private Event/Invite Only</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="church">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>A church? <br class="visible-xs" />Tell me more.</h2>
						<p>See the beautiful old Evangelist church on the main strip converted into a luxurious, modern sanctuary, across from the Davos Congress Centre. Come work, network, and make yourself cozy.</p>
					</div>
				</div>
			</div>
			<div class="arrow"></div>
		</div> -->
		<div class="venue">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Where is the venue?</h2>
						<?php if ( is_mobile()): ?>
							<a href="https://goo.gl/maps/NcWPmuuun8D2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/wec2016/map-xs-min.png" width="320px" /></a>
						<?php elseif ( is_tablet()): ?>
							<iframe id="wefMap" src="http://www.google.com/maps/d/u/0/embed?mid=zdEicf0qa8V4.kRuE6ikd4-p0" width="720" height="380"></iframe>
						<?php else: ?>
							<iframe id="wefMap" style="border:none" src="http://www.google.com/maps/d/u/0/embed?mid=zdEicf0qa8V4.kRuE6ikd4-p0" width="945" height="480"></iframe>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
			<div class="arrow"></div>
		</div>
		<div class="learn-more">
			<div class="container">
				<div class="row">
					<div class="contents">
						<h2>Stay in the know</h2>
						<p>Get the latest news from Davos and watch the livestream from Tradeshift Sanctuary.</p>
						<a href="http://twitter.com/tradeshift" target="_blank" class="btn btn-primary-cta">Follow us on Twitter</a>
						<h4>For questions or more information, email: <a href="mailto:taf@tradeshift.com">taf@tradeshift.com</a></h4>
					</div>
				</div>
			</div>
			<!-- <div class="arrow"></div>-->
		</div>
	</main>
	<!-- Modal View of Contact Form 7 for Invite Only -->
	<div class="modal fade" id="wpcf7Modal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 id="myModalLabel">Invitation Form</h3>
	        <p class="lead">Sign up to get exclusive access to this invite-only event.</p>
	      </div>
	      <div class="modal-body">
	       	<?php the_content(); ?>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Page specific JS -->
	<script>
		$('td.invite-only').click(function() {
			$('#wpcf7Modal').modal('show');
		});
	</script>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer('wec2016'); ?>