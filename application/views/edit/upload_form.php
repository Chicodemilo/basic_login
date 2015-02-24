
<div id="wrapper">
	<table>
		<tr class='row1_edit'><td><?php echo $error;?></td></tr>

		<?php echo form_open_multipart('upload/do_upload/'.$id );?>

		<tr class='row1_edit'><td><input  type="file" name="userfile" size="20" /></td></tr>

		<tr class='row1_edit'><td><input   type="submit" value="Upload" /></td></tr>

		</form>
	</table>
</div>