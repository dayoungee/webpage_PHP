<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>공주</title>
  <style>
	td{
	font-size : 9pt;
	}
	a:link{
	font : 9pt;
	color : black;
	text-decoration : none;
	font-family : 굴림;
	}
  </style>
 </head>
 <body>
  <center>
		<BR>
		<?$id = $_GET['id']; 
		?>
		<form action=pb_delete.php method = "post">
		<table width = 300 border =0 cellpadding=2 cellspacting = 1 bgcolor = #777777>
		<tr>
		<td height =20 align = center bgcolor = #999999>
		<font color = white><B>비 밀 번 호 확 인</B></font>
		</td>
		</tr>
		<tr>
		<td align = center>
		<font color = white><B>비밀번호 : </B>
	    <input type = password name = pw size = 8 maxlength=8>
		<input type = text name = a value = <?echo $id?> style = "display : none;">
		<input type = submit value = "확인">
		<input type = button value = "취소" onclick = "history.back(-1)">
		</td>
		</tr>
		</table>
  </center>
 </body>
</html>
