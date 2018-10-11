<?php $menu = mbb_get_builder_menu(); ?>

<script type="text/javascript">
  <?php $attributes = require MBB_INC_DIR . 'define.php'; ?>
  var attrs = <?php echo json_encode( $attributes ) ?>;
  <?php
    // If we're updating metabox, load old data
    if ( isset( $_GET['post'] ) )
    {
      $post = get_post( $_GET['post'] );
      $meta = $post->post_excerpt;
      ?>
      var meta = <?php echo $meta ?>;
      meta.id = '<?php echo $post->post_name ?>';
      <?php
    }
  ?>
</script>

<div class="builder-gui nav-menus-php" ng-app="builder">
	
  <div id="nav-menus-frame" ng-controller="BuilderController" ng-init="init()">
		
    <div id="menu-settings-column" class="metabox-holder">
      <div id="side-sortables" class="accordion-container">
        <ul class="outer-border">
          <?php foreach ( $menu as $block => $fields ): 
          $open = ( $block === 'Text' ) ? 'open' : '';
          ?>
          <li class="control-section accordion-section <?php echo $open ?>">
            <h3 class="accordion-section-title hndle" tabindex="0"><?php echo $block ?></h3>
            <span class="screen-reader-text"><?php _e( 'Press return or enter to expand', 'meta-box' ); ?></span>
          
            <div class="accordion-section-content">
              <div class="inside">
                <?php 
                $i = 1;
                foreach ( $fields as $key => $value ): $i++; ?>
                  <button type="button" class="button-secondary" ng-click="addField('<?php echo $key ?>');"><?php echo $value ?></button>
                <?php 
                if ( $i % 2 ) echo '<p></p>';
              endforeach;  ?>  
              </div>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

  	<div id="menu-management-liquid">
      <div id="menu-management">
        <div class="menu-edit">
          <div id="nav-menu-header">
            <div class="major-publishing-actions">
              <label class="menu-name-label howto open-label" for="menu-name">
                <span><?php _e( 'Meta Box Title', 'meta-box' ); ?></span>
                <input name="post_title" ng-model="meta.title" id="menu-name" type="text" class="menu-name regular-text menu-item-textbox" placeholder="<?php _e( 'Enter name here', 'meta-box' ); ?>">
              </label>
              <div class="publishing-action">
                <input type="submit" id="bind_submit" name="save_metabox" class="button button-primary menu-save" value="<?php _e( 'Save Meta Box', 'meta-box' ); ?>">
              </div><!-- END .publishing-action -->
            </div><!-- END .major-publishing-actions -->
          </div>
          
          <div id="post-body">
            <div id="post-body-content">
              
              <h3><?php _e( 'Meta Box Fields', 'meta-box' ); ?></h3>
              <p ng-show="meta.fields.length == 0">
                <?php _e( 'Add meta box fields from the column on the left.', 'meta-box' ); ?>
              </p>
              <p ng-show="meta.fields.length > 0">
                <?php _e( 'Drag each item into the order you prefer. Click the arrow on the right of the item to reveal additional configuration options.', 'meta-box' ); ?>
              </p>
              <ul class="menu ui-sortable" id="menu-to-edit">
                <li class="menu-item builder-field {{field.id==active.id}}" style="display: list-item" ng-repeat="field in meta.fields track by $index">
                  <dl class="menu-item-bar">
                    <dt class="menu-item-handle">
                      <span class="item-title">
                        <span class="menu-item-title">{{field.name}}</span> 
                      </span>
                      <span class="item-controls">
                        <span class="item-type">{{field.type}}</span>
                        <a class="item-edit" ng-click="toggleEdit(field, $event)">Edit</a>
                      </span>
                    </dt>
                  </dl>
                  <div class="menu-item-settings" ng-show="field==active">
                    <div class="field-edit-content" ng-include src="field.type + '.edit.html'" role="tabpanel"></div>
                    <div class="menu-item-actions description-wide submitbox">
                      <a href="#" role="button" class="submitdelete item-delete deletion" ng-click="removeField($index)">Remove</a>
                      <span class="meta-sep hide-if-no-js"> | </span>
                      <a href="#" role="button" class="submitcancel item-cancel" ng-click="unEdit($event)">Cancel</a>
                      <a href="#" role="button" class="submitduplicate item-cancel" ng-click="cloneField(field)">Duplicate</a>
                    </div>
                  </div>
                </li>
              </ul>

              <div class="menu-settings">
                <h3><?php _e( 'Meta Box Settings', 'meta-box' ); ?></h3>
                <dl class="priority">
                  <dt class="howto"><?php _e( 'Priority', 'meta-box' ); ?></dt>
                  <dd>
                    <ul class="builder-grid">
                      <li class="builder-col">
                        <label>
                          <input type="radio" ng-model="meta.priority" name="priority" value="high"> <?php _e( 'High', 'meta-box' ); ?>    
                        </label>
                      </li>
                      <li class="builder-col">
                        <label>
                          <input type="radio" ng-model="meta.priority" name="priority" value="low"> <?php _e( 'Low', 'meta-box' ); ?>
                        </label>
                      </li>
                    </ul>
                  </dd>
                </dl>

                <dl class="context">
                  <dt class="howto"><?php _e( 'Context', 'meta-box' ); ?></dt>
                  <dd>
                    <ul class="builder-grid">
                      <li class="builder-col">
                        <label>
                          <input type="radio" ng-model="meta.context" name="context" value="normal"> <?php _e( 'Normal', 'meta-box' ); ?>    
                        </label>
                      </li>
                      <li class="builder-col">
                        <label>
                          <input type="radio" ng-model="meta.context" name="context" value="advanced"> <?php _e( 'Advanced', 'meta-box' ); ?>
                        </label>
                      </li>
                      <li class="builder-col">
                        <label>
                        <input type="radio" ng-model="meta.context" name="context" value="side"> <?php _e( 'Side', 'meta-box' ); ?>
                        </label>
                      </li>
                    </ul>
                  </dd>
                </dl>

                <dl>
                  <dt class="howto"><?php _e( 'Post types', 'meta-box' ); ?></dt>
                  <dd>
                    <ul class="builder-grid">
                      <?php foreach ( mbb_get_post_types() as $index => $post_type ): ?>
                        <li class="builder-col"><label><input type="checkbox" ng-model="meta.pages[<?php echo $index ?>]" ng-true-value="'<?php echo $post_type ?>'" ng-false-value="''" /> <?php echo str_title( $post_type ); ?></label></li>
                      <?php endforeach; ?>
                    </ul>
                  </dd>
                </dl>

                <dl>
                  <dt class="howto"><label for="metabox-auto-save"><?php _e( 'Autosave', 'meta-box' ); ?></label></dt>
                  <dd>
                    <input id="metabox-auto-save" type="checkbox" ng-model="meta.autosave" />
                  </dd>
                </dl>
              </div>
            </div><!--#post-body-content-->
          </div><!--#post-body-->

          <div id="nav-menu-footer">
            <div class="major-publishing-actions">
              <span class="delete-action">
                <a class="submitdelete deletion menu-delete" href="<?php echo get_delete_post_link(); ?> "><?php _e( 'Delete Meta Box', 'meta-box' ); ?></a>
              </span><!-- END .delete-action -->
              <div class="publishing-action">
                <input type="submit" id="bind_submit" name="save_metabox" class="button button-primary menu-save" value="<?php _e( 'Save Meta Box', 'meta-box' ); ?>">
              </div><!-- END .publishing-action -->
            </div><!-- END .major-publishing-actions -->
          </div><!--#nav-menu-footer-->

        </div>
      </div>
  	</div>

	<?php 
	// Generate script content for each template
	foreach ( $menu as $block => $fields ):
		foreach ( $fields as $k => $v ) : ?>
    	
	<script type="text/ng-template" id="<?php echo $k ?>.edit.html">
	<?php mbb_get_field_edit_content( $k ); ?>
	</script>
	
	<?php endforeach; endforeach; ?>

  </div><!-- Builder Controller all code should here-->

</div><!--.builder-gui-->

<input type="hidden" name="excerpt" id="bind_excerpt" />