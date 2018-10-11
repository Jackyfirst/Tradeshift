<?php
/**
 * This component is a template part used on the Home Page: powered by D3.js visualization
 *
 * @package wpbc_s
 */
?>

<div id="ts-networked-platform" class="networked-graph" > </div>
<div id="nodetip1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h5>Tradeshift Risk</h5>
				<a id="home-modal-ts-risk-link" href="/solutions/risk">Rethink Supplier Management. All your supplier master data, compliance, risk, and performance in one place.<br />
				<span class="learn-more">Learn more</span>  &raquo;</a>
			</div>
			<div class="modal-control hidden-xs"><i class="fa fa-times" data-dismiss="modal"></i></div>
		</div>
	</div>
</div>
<div id="nodetip2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h5>Tradeshift Apps</h5>
				<a id="home-modal-ts-apps-link" href="/solutions/apps">Our app ecosystem extends the value you get from Tradeshift as your business needs change.<br />
				<span class="learn-more">Learn more</span>  &raquo;</a>
			</div>
			<div class="modal-control hidden-xs"><i class="fa fa-times" data-dismiss="modal"></i></div>
		</div>
	</div>
</div>
<div id="nodetip3" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h5>Tradeshift Pay</h5>
				<a id="home-modal-ts-pay-link" href="/solutions/pay">Rethink AP Automation. Transact with all your suppliers for 100% of your invoice volume.<br />
				<span class="learn-more">Learn more</span>  &raquo;</a>`
			</div>
			<div class="modal-control hidden-xs"><i class="fa fa-times" data-dismiss="modal"></i></div>
		</div>
	</div>
</div>
<div id="nodetip4" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h5>Tradeshift Buy</h5>
				<a id="home-modal-ts-buy-link" href="/solutions/buy">Rethink eProcurement. Buy everything you need from one place, where any online purchase can be in policy.<br />
				<span class="learn-more">Learn more</span>  &raquo;</a>
			</div>
			<div class="modal-control hidden-xs"><i class="fa fa-times" data-dismiss="modal"></i></div>
		</div>
	</div>
</div>
<script>
	$('.modal-control').modal('hide');
</script>

<!-- Establish width and height d3JS -->
<!-- Refer to the script src for each viewport if you want to edit each node -->

<?php if (is_mobile()): ?>
	<script>
		var w = 320,
			h = 440;
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/datavis-networked-xs.js" type="text/javascript"></script>
<?php elseif (is_tablet()): ?>
	<script>
		var w = 768,
			h = 550;
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/datavis-networked-sm.js" type="text/javascript"></script>
<?php else: ?>
	<script>
		var w = 768,
			h = 720;
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/datavis-networked-md.js" type="text/javascript"></script>
<?php endif; ?>




