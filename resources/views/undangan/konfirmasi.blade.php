<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3 style="margin-left:112px;"><b>KONFIRMASI UNDANGAN</b></h3>
	<div style="margin-left:150px;">
	<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(170)->generate(route('konfirmasi',['client_id' => $client_id , 'ip' => $ip])))!!} ">
	</div>
	<p style="margin-left: 160px;"><i><b>UNDANGAN DIGITAL</b></i></p>
</body>
</html>