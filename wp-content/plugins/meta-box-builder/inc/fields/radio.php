<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'id' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'name' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'desc' ); ?>
</p>

<p class="description description-thin">&nbsp;</p>

<p class="description description-wide">
	<?php echo Meta_Box_Attribute::get_attribute_content( 'options' ); ?>
</p>

<p class="description description-wide">
	<?php echo Meta_Box_Attribute::checkbox( 'clone', 'Clone?' ); ?>
</p>

<a role="button" class="show-advanced" href="#">Show Advanced</a>
<div class="field-advanced hidden">
	<a role="button" class="hide-advanced" href="#">Hide Advanced</a>
	<p class="description description-wide">
		<?php echo Meta_Box_Attribute::get_attribute_content( 'key_value', 'attrs' ); ?>
	</p>
	<hr />
	<p class="description description-wide">
		<?php echo Meta_Box_Attribute::text( 'class' ); ?>
	</p>
</div>