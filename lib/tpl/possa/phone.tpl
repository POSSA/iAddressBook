<tr>

    <td class="person_left">
        <div class="person_labels">
            <?php echo tpl_label($phone['label']); ?>
        </div>
    </td>
    <td class="person_right">
        <div class="person_text">
 
<style>
  .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
</style>

<iframe name="hiddenFrame" class="hide"></iframe>
 
			<?php
			
			echo "<form action='./possa/dial.php' method='get' target='hiddenFrame'>".  html_numberlayout($phone['phone']) . "  <input type='submit' name='dial' value='Dial'  /><input type='hidden' id='IN' name='IN' value='".$_COOKIE['asteridex']['sipID']."'><input type='hidden' id='OUT' name='OUT' value='".$phone['phone']."'></form>"; 
	?>


		
        </div>
    </td>
</tr>
