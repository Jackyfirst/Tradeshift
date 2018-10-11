<?php 
$data = '{
	"invite": [
	{
	"id": "1",
	"invite_code": "DXHC",
	"first_name": "Victor",
	"second_name": "Ramayrat"
	},
	{
	"id": "2",
	"invite_code": "COOL",
	"first_name": "Denica",
	"second_name": "Stoyanova"
	},
	{
	"id": "3",
	"invite_code": "PING",
	"first_name": "Dung",
	"second_name": "Nguyen"
	}
	]
}';
$json = json_decode($data);
echo $json->invite;
return;
// foreach($json->invite as $item)
// {
// 	if($item->id == "1")
// 	{
// 	    echo $item->first_name;
// 	}
// };
?>