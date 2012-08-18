Tags:<br>
<input type="text" name="tags" size="50" <?php if($type == 'edit') echo ' value="%'.(implode(" %", $post['tags'])).'"';?>><br>
<small>Start the line and separate tags with <code>%</code>. Tags may have special characters and spaces.</small><br><br>