<?=form_open('C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=moblog'.AMP.'method=create_modify', '', $hidden_fields)?>

<table class="mainTable solo" border="0" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th colspan="2"><?=lang('moblog_general_settings')?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 50%;"><?=form_label(lang('moblog_full_name'), 'moblog_full_name')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_full_name','name'=>'moblog_full_name','class'=>'field','value'=>set_value('moblog_full_name', $values['moblog_full_name'])))?>
				<?=form_error('moblog_full_name')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_short_name'), 'moblog_short_name')?><br/> <?=lang('no_spaces')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_short_name','name'=>'moblog_short_name','class'=>'field','value'=>set_value('moblog_short_name', $values['moblog_short_name'])))?>
				<?=form_error('moblog_short_name')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_time_interval'), 'moblog_time_interval')?><br/> <?=lang('interval_subtext').'<br />'.lang('moblog_time_interval_subtext')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_time_interval','name'=>'moblog_time_interval','class'=>'field','value'=>set_value('moblog_time_interval', $values['moblog_time_interval'])))?>
				<?=form_error('moblog_time_interval')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_enabled'), 'moblog_enabled')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_enabled_y').NBS.form_radio(array('name'=>'moblog_enabled', 'id'=>'moblog_enabled_y', 'value'=>'y', 'checked'=>(set_value('moblog_enabled', $values['moblog_enabled']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_enabled_n').NBS.form_radio(array('name'=>'moblog_enabled', 'id'=>'moblog_enabled_n', 'value'=>'n', 'checked'=>(set_value('moblog_enabled', $values['moblog_enabled']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_enabled')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_file_archive'), 'moblog_file_archive')?><br/> <?=lang('file_archive_subtext')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_file_archive_y').NBS.form_radio(array('name'=>'moblog_file_archive', 'id'=>'moblog_file_archive_y', 'value'=>'y', 'checked'=>(set_value('moblog_file_archive', $values['moblog_file_archive']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_file_archive_n').NBS.form_radio(array('name'=>'moblog_file_archive', 'id'=>'moblog_file_archive_n', 'value'=>'n', 'checked'=>(set_value('moblog_file_archive', $values['moblog_file_archive']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_file_archive')?>
			</td>
		</tr>
	</tbody>
</table>
	
	
<table class="mainTable solo channel_fields" border="0" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th colspan="2"><?=lang('moblog_entry_settings')?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 50%;"><?=form_label(lang('channel_id'), 'channel_id')?><br /> <?=lang('channel_id_subtext')?></td>
			<td>
				<?=form_dropdown('channel_id', $values['channel_id'][0], set_value('channel_id', $values['channel_id'][1]))?>
				<?=form_error('channel_id')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('cat_id'), 'cat_id')?></td>
			<td>
				<?=form_multiselect('cat_id[]', $values['cat_id[]'][0], set_value('cat_id[]', $values['cat_id[]'][1]))?>
				<?=form_error('cat_id[]')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('field_id'), 'field_id')?></td>
			<td>
				<?=form_dropdown('field_id', $values['field_id'][0], set_value('field_id', $values['field_id'][1]))?>
				<?=form_error('field_id')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('status'), 'status')?></td>
			<td>
				<?=form_dropdown('status', $values['status'][0], set_value('status', $values['status'][1]))?>
				<?=form_error('status')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('author_id'), 'author_id')?></td>
			<td>
				<?=form_dropdown('author_id', $values['author_id'][0], set_value('author_id', $values['author_id'][1]))?>
				<?=form_error('author_id')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_sticky_entry'), 'moblog_sticky_entry')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_sticky_entry_y').NBS.form_radio(array('name'=>'moblog_sticky_entry', 'id'=>'moblog_sticky_entry_y', 'value'=>'y', 'checked'=>(set_value('moblog_sticky_entry', $values['moblog_sticky_entry']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_sticky_entry_n').NBS.form_radio(array('name'=>'moblog_sticky_entry', 'id'=>'moblog_sticky_entry_n', 'value'=>'n', 'checked'=>(set_value('moblog_sticky_entry', $values['moblog_sticky_entry']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_sticky_entry')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_allow_overrides'), 'moblog_allow_overrides')?><br/> <?=lang('moblog_allow_overrides_subtext')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_allow_overrides_y').NBS.form_radio(array('name'=>'moblog_allow_overrides', 'id'=>'moblog_allow_overrides_y', 'value'=>'y', 'checked'=>(set_value('moblog_allow_overrides', $values['moblog_allow_overrides']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_allow_overrides_n').NBS.form_radio(array('name'=>'moblog_allow_overrides', 'id'=>'moblog_allow_overrides_n', 'value'=>'n', 'checked'=>(set_value('moblog_allow_overrides', $values['moblog_allow_overrides']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_allow_overrides')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_upload_directory'), 'moblog_upload_directory')?></td>
			<td>
				<?=form_dropdown('moblog_upload_directory', $values['moblog_upload_directory'][0], set_value('moblog_upload_directory', $values['moblog_upload_directory'][1]))?>
				<?=form_error('moblog_upload_directory')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_template'), 'moblog_template')?></td>
			<td style='width:50%;'>
				<?=form_textarea('moblog_template', set_value('moblog_template', $values['moblog_template']), "style='width: 100%'")?>
				<?=form_error('moblog_template')?>
			</td>
		</tr>
	</tbody>
</table>

<table class="mainTable solo" border="0" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th colspan="2"><?=lang('moblog_email_settings')?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 50%;"><?=form_label(lang('moblog_email_type'), 'moblog_email_type')?></td>
			<td>
				<?=form_dropdown('moblog_email_type', $values['moblog_email_type'][0], set_value('moblog_email_type', $values['moblog_email_type'][1]))?>
				<?=form_error('moblog_email_type')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_email_address'), 'moblog_email_address')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_email_address','name'=>'moblog_email_address','class'=>'field','value'=>set_value('moblog_email_address', $values['moblog_email_address'])))?>
				<?=form_error('moblog_email_address')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_email_server'), 'moblog_email_server')?><br/> <?=lang('no_spaces')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_email_server','name'=>'moblog_email_server','class'=>'field','value'=>set_value('moblog_email_server', $values['moblog_email_server'])))?>
				<?=form_error('moblog_email_server')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_email_login'), 'moblog_email_login')?><br /> <?=lang('data_encrypted')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_email_login','name'=>'moblog_email_login','class'=>'field','value'=>set_value('moblog_email_login', $values['moblog_email_login'])))?>
				<?=form_error('moblog_email_login')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_email_password'), 'moblog_email_password')?><br /> <?=lang('data_encrypted')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_email_password','name'=>'moblog_email_password','class'=>'field','value'=>set_value('moblog_email_password', $values['moblog_email_password'])))?>
				<?=form_error('moblog_email_password')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_subject_prefix'), 'moblog_subject_prefix')?><br /> <?=lang('subject_prefix_subtext')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_subject_prefix','name'=>'moblog_subject_prefix','class'=>'field','value'=>set_value('moblog_subject_prefix', $values['moblog_subject_prefix'])))?>
				<?=form_error('moblog_subject_prefix')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_auth_required'), 'moblog_auth_required')?><br /> <?=lang('moblog_auth_subtext')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_auth_required_y').NBS.form_radio(array('name'=>'moblog_auth_required', 'id'=>'moblog_auth_required_y', 'value'=>'y', 'checked'=>(set_value('moblog_auth_required', $values['moblog_auth_required']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_auth_required_n').NBS.form_radio(array('name'=>'moblog_auth_required', 'id'=>'moblog_auth_required_n', 'value'=>'n', 'checked'=>(set_value('moblog_auth_required', $values['moblog_auth_required']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_auth_required')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_auth_delete'), 'moblog_auth_delete')?><br /> <?=lang('moblog_auth_delete_subtext')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_auth_delete_y').NBS.form_radio(array('name'=>'moblog_auth_delete', 'id'=>'moblog_auth_delete_y', 'value'=>'y', 'checked'=>(set_value('moblog_auth_delete', $values['moblog_auth_delete']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_auth_delete_n').NBS.form_radio(array('name'=>'moblog_auth_delete', 'id'=>'moblog_auth_delete_n', 'value'=>'n', 'checked'=>(set_value('moblog_auth_delete', $values['moblog_auth_delete']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_auth_delete')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_valid_from'), 'moblog_valid_from')?><br /> <?=lang('valid_from_subtext')?></td>
			<td style='width:50%;'>
				<?=form_textarea('moblog_valid_from', set_value('moblog_valid_from', $values['moblog_valid_from']), "style='width: 100%'")?>
				<?=form_error('moblog_valid_from')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_ignore_text'), 'moblog_ignore_text')?><br /> <?=lang('ignore_text_subtext')?></td>
			<td style='width:50%;'>
				<?=form_textarea('moblog_ignore_text', set_value('moblog_ignore_text', $values['moblog_ignore_text']), "style='width: 100%'")?>
				<?=form_error('moblog_ignore_text')?>
			</td>
		</tr>
	</tbody>
</table>

	
<table class="mainTable solo channel_fields" border="0" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th colspan="2"><?=lang('moblog_image_settings')?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 50%;"><?=form_label(lang('moblog_image_width'), 'moblog_image_width')?><br /> <?=lang('set_to_zero')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_image_width','name'=>'moblog_image_width','class'=>'field','value'=>set_value('moblog_image_width', $values['moblog_image_width'])))?>
				<?=form_error('moblog_image_width')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_image_height'), 'moblog_image_height')?><br /> <?=lang('set_to_zero')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_image_height','name'=>'moblog_image_height','class'=>'field','value'=>set_value('moblog_image_height', $values['moblog_image_height'])))?>
				<?=form_error('moblog_image_height')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_resize_image'), 'moblog_resize_image')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_resize_image_y').NBS.form_radio(array('name'=>'moblog_resize_image', 'id'=>'moblog_resize_image_y', 'value'=>'y', 'checked'=>(set_value('moblog_resize_image', $values['moblog_resize_image']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_resize_image_n').NBS.form_radio(array('name'=>'moblog_resize_image', 'id'=>'moblog_resize_image_n', 'value'=>'n', 'checked'=>(set_value('moblog_resize_image', $values['moblog_resize_image']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_resize_image')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_resize_width'), 'moblog_resize_width')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_resize_width','name'=>'moblog_resize_width','class'=>'field','value'=>set_value('moblog_resize_width', $values['moblog_resize_width'])))?>
				<?=form_error('moblog_resize_width')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_resize_height'), 'moblog_resize_height')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_resize_height','name'=>'moblog_resize_height','class'=>'field','value'=>set_value('moblog_resize_height', $values['moblog_resize_height'])))?>
				<?=form_error('moblog_resize_height')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_create_thumbnail'), 'moblog_create_thumbnail')?></td>
			<td><?php
			$controls = lang('yes', 'moblog_create_thumbnail_y').NBS.form_radio(array('name'=>'moblog_create_thumbnail', 'id'=>'moblog_create_thumbnail_y', 'value'=>'y', 'checked'=>(set_value('moblog_create_thumbnail', $values['moblog_create_thumbnail']) == 'y') ? TRUE : FALSE)).NBS.NBS.NBS.NBS.NBS;
			$controls .= lang('no', 'moblog_create_thumbnail_n').NBS.form_radio(array('name'=>'moblog_create_thumbnail', 'id'=>'moblog_create_thumbnail_n', 'value'=>'n', 'checked'=>(set_value('moblog_create_thumbnail', $values['moblog_create_thumbnail']) == 'n') ? TRUE : FALSE));
			echo $controls;
			?>
			<?=form_error('moblog_create_thumbnail')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_thumbnail_width'), 'moblog_thumbnail_width')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_thumbnail_width','name'=>'moblog_thumbnail_width','class'=>'field','value'=>set_value('moblog_thumbnail_width', $values['moblog_thumbnail_width'])))?>
				<?=form_error('moblog_thumbnail_width')?>
			</td>
		</tr>
		<tr>
			<td><?=form_label(lang('moblog_thumbnail_height'), 'moblog_thumbnail_height')?></td>
			<td>
				<?=form_input(array('id'=>'moblog_thumbnail_height','name'=>'moblog_thumbnail_height','class'=>'field','value'=>set_value('moblog_thumbnail_height', $values['moblog_thumbnail_height'])))?>
				<?=form_error('moblog_thumbnail_height')?>
			</td>
		</tr>
	</tbody>	
</table>

<?php if(isset($ping_servers)): ?>
<table class="mainTable solo channel_fields" border="0" cellspacing="0" cellpadding="0">
	<thead>
		<tr>
			<th colspan="2"><?=lang('ping_servers')?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 50%;"><?=lang('ping_sites')?></td>
			<td>
				<?php foreach($ping_servers as $id => $opts):?>
					<?=form_checkbox('ping[]', $id, set_value('ping['.$id.']', $opts[1])).NBS.NBS.NBS.form_label($opts[0], $id)?><br />
				<?php endforeach;?>
				<?=form_error('ping[]')?>
			</td>
		</tr>
	</tbody>
</table>
<?php endif;?>

<p>
	<?=form_submit(array('name' => 'submit', 'value' => lang($submit_text), 'class' => 'submit'))?>
</p>

<?=form_close()?>