<?
/**
 * @package Simple Groupware
 * @link http://www.simple-groupware.de
 * @copyright Simple Groupware Solutions Thomas Bley 2002-2012
 * @license GPLv2
 */
?>
<form id="tree_mountpoint_form" rel="<?= q($this->mountpoint) ?>" onsubmit="ajax('folder_set_mountpoint',[tfolder,mountpoint_build()],locate_folder); return false;">
  <div class="tree_subpane">{t}Mountpoint{/t} <a href="http://www.simple-groupware.de/cms/DataHandlers" target="_blank">({t}Help{/t})</a></div>
  <table class="tree2" border="0" cellpadding="0" cellspacing="2">
	<tr><td>{t}Type{/t}&nbsp;</td><td>
      <select name="first" id="mount_proto" onchange="mountpoint_show(this.value);" style="width:100%;">
		<option value=""> {t}none{/t}
		<? foreach ($this->mountpoints as $key=>$item) { ?>
		  <option value="<?= q(str_replace("sys_nodb_", "", $key)) ?>"><?= q($item) ?>
		<? } ?>
	  </select>
	</td>
	</tr>
	<tbody id="mount_auth" style="display:none;">
	  <tr><td>{t}Username{/t}&nbsp;</td><td><input id="mount_user" type="Text" maxlength="255" style="width:100%;" value="" class="mp"></td></tr>
	  <tr><td>{t}Password{/t}</td><td><input id="mount_pass" type="password" maxlength="255" style="width:100%;" value="" class="mp"><br/>
	  <input id="mount_pass_check" type="checkbox" onclick="getObj('mount_pass').type = this.checked ? 'text':'password';"><label for="mount_pass_check">{t}Show password{/t}</label></td></tr>
	</tbody>
	<tbody id="mount_details" style="display:none;">
	  <tr><td>{t}Host{/t}</td><td><input id="mount_host" type="Text" maxlength="255" style="width:100%;" value="" class="mp"></td></tr>
	  <tr><td>{t}Port{/t}</td><td>
		<input id="mount_port" type="Text" maxlength="255" style="width:50%;" value="" class="mp mp2">&nbsp;
		<select id="mount_enc" style="width:45%;"><option value=""> {t}none{/t} <option value="ssl"> SSL <option value="tls"> TLS</select>
	  </td></tr>
	  <tr><td>{t}Options{/t}</td><td><input id="mount_options" type="Text" maxlength="255" style="width:100%;" value="" class="mp mp2"></td></tr>
	</tbody>
	<tr><td>{t}Path{/t}</td><td><input id="mount_path" type="Text" maxlength="255" style="width:100%;" value=""></td></tr>
	<tr><td></td><td style="padding-top:4px;">
	  <input type="Submit" value="{t}Ok{/t}" style="width:50px;">&nbsp;
	  <input type="button" value="{t}Cancel{/t}" onclick="hide('folder_info');">
	</td></tr>
  </table>
  <div style="border-top: <?= $this->c("border") ?>; margin-top:5px; margin-bottom:5px;"></div>
</form>