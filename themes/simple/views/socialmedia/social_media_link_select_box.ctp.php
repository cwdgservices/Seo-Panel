<select name="link_id" id="link_id" style="width:150px;" onchange="<?php echo $onChange?>">
	<?php if($linkNull){ ?>
		<option value="">-- <?php echo $spText['common']['Select']?> --</option>
	<?php } ?>
	<?php foreach($linkList as $linkInfo){?>
		<?php if($linkInfo['id'] == $linkId){?>
			<option value="<?php echo $linkInfo['id']?>" selected><?php echo $linkInfo['url']?></option>
		<?php }else{?>
			<option value="<?php echo $linkInfo['id']?>"><?php echo $linkInfo['url']?></option>
		<?php }?>
	<?php }?>
</select>