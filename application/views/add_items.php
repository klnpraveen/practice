<?php
	echo form_open('items/disp'); 
	echo 'this is the items page';
	foreach($item as $row)
	{
		echo br(1).$row->item_id;
	}
	echo br(1).form_dropdown('dp1',$gt,0,"id='dp1'");
	echo br(1).form_submit('Submit','get');
	for($i=1;$i<=$cnt;$i++)
	{
		foreach($upc as $row)
		{
			echo br(1).$row->item_number;
			echo form_input('username',$row->item_number);
		}
	}
	echo br(1).$cnt;

?>