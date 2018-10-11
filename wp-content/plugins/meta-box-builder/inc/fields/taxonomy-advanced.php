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
	<label for="{{field.id}}_taxonomy">Taxonomy</label>
	<select ng-model="field.options.taxonomy" class="form-control" id="{{field.id}}_taxonomy">
		<?php foreach ( mbb_get_taxonomies() as $taxonomy ) : ?>
		<option value="<?php echo $taxonomy ?>"><?php echo $taxonomy ?></option>
		<?php endforeach; ?>
	</select>
</p>

<p class="description description-thin">
	<label for="{{field.id}}_type">Field Type <br />
		<select ng-model="field.options.type" class="form-control" id="{{field.id}}_type">
			<option value="select">Select</option>
			<option value="select_tree">Select Tree</option>
			<option value="select_advanced">Select Advanced</option>
			<option value="checkbox_list">Checkbox List</option>
			<option value="checkbox_tree">Checkbox Tree</option>
		</select>
	</label>
</p>

<div class="clear"></div>

<p class="description description-wide">
	<?php echo Meta_Box_Attribute::checkbox( 'clone' ); ?>
</p>

<p class="description description-thin">
	<?php echo Meta_Box_Attribute::checkbox( 'parent' ); ?>
</p>

<a role="button" class="show-advanced" href="#">Show Advanced</a>
<div class="field-advanced hidden">
	<a role="button" class="hide-advanced" href="#">Hide Advanced</a>
	<p class="description description-wide">
		<?php echo Meta_Box_Attribute::get_attribute_content( 'key_value', 'options.args' ); ?>
	</p>
	<hr />
	<p class="description description-wide">
		<?php echo Meta_Box_Attribute::get_attribute_content( 'key_value', 'attrs' ); ?>
	</p>
	<hr />
	<p class="description description-wide">
		<?php echo Meta_Box_Attribute::text( 'class' ); ?>
	</p>
</div>