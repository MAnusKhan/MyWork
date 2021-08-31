<?php
     global $wpdb;
	 global $table_prefix;
	 $table=$table_prefix.'form_data'; 
	 $sql="select * from $table";
	 $result=$wpdb->get_results($sql);
	 print_r($result);
?>
<table border="1">
	<tr>
		<td>ID</td>
		<td>Name</td>
	</tr>
	<?php
	foreach($result as $list){
	?>
	ble>
	<tr>
		<td><?php echo $list->id?></td>
		<td><?php echo $list->name?></td>
	</tr>
	<?php
     }
     ?>     
</table>