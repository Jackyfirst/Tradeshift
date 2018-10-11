<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'id' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'name' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'desc' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::number( 'max_file_uploads', 'Max File Uploads', array( 'min' => 0, 'max' => 99 ) ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::text( 'mime_type', 'Mime Types', array( 'size' => 100 ) ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::number( 'size' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::checkbox( 'clone' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::checkbox( 'force_delete', 'Force Delete?' ); ?>
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