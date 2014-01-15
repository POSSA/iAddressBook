<tr>

    <td class="person_left">
        <div class="person_labels">
            <?php echo tpl_label($phone['label']); ?>
        </div>
    </td>
    <td class="person_right">
        <div class="person_text">
            
			<?php echo "<A HREF=\"javascript:void(window.open('./possa/dial.php?IN=103&OUT=" .$phone['phone']. "',%20'Window2',%20config='height=250,width=550'))\" onMouseover=\"window.status='5551212'; return true\" onMouseout=\"window.status=' '; return true\">".  html_numberlayout($phone['phone']) . "</a>"; ?>
        </div>
    </td>
</tr>
