
<html>
<head>
	<title>공주</title>
</head>
<body>
<style>
.a{
margin-top:-87px;
margin-left:450px;
}
.bnt {
    color: #444444;
    background: #F3F3F3;
    border: 1px #DADADA solid;
    padding: 5px 10px;
    border-radius: 2px;
    font-weight: bold;
    font-size: 9pt;
    outline: none;
}

.bnt:hover {
    border: 1px #C6C6C6 solid;
    box-shadow: 1px 1px 1px #EAEAEA;
    color: #333333;
    background: #F7F7F7;
}

.bnt:active {
    box-shadow: inset 1px 1px 1px #DFDFDF;   
}
</style>




	<form method="post" action="p_signup.php">
		   <center><a href="main2.php" "><img src="title.png" width = "400" height = "100"></a></center>
		<?
session_start();
if(!isset($_SESSION['id'])) //세션이 존재하지 않을 때
{
	echo "로그인해주세요.";
	?>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" value = "login" onclick="login();" class = "bnt">
				 <fieldset style="width : 250">
				<legend>메뉴</legend>
					<table>
						<tr>
							<td><a href="http://slit.bitplay.co/sl1/" target = "_blank" style="text-decoration: none; color : black;">게임하기</a></td>
						</tr>
						<tr>
							<td>
							<a href="pan.html" style="text-decoration: none; color : black;">게시판</a>
							</td>
							
						</tr>
						<tr>
                            <td>
							<a href="board.php" style="text-decoration: none; color : black;">익명 게시판</a>
							</td>
						</tr>
					</table>
		<?
}else{
	echo "{$_SESSION['name']}";
	echo " 님 어서오세요!";?>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "button" value = "로그아웃" onclick="b();" class = "bnt">
		 <input type = "button" value = "회원탈퇴" onclick="deleteuser_(); " class = "bnt">
		 <fieldset style="width : 250">
				<legend>메뉴</legend>
					<table>
						<tr>
							<td><a href="http://slit.bitplay.co/sl1/" target = "_blank" style="text-decoration: none; color : black;">게임하기</a></td>
						</tr>
						<tr>
							<td>
							<a href="pan.html" style="text-decoration: none; color : black;">게시판</a>
							</td>
							
						</tr>
						<tr>
                            <td>
							<a href="board.php" style="text-decoration: none; color : black;">익명 게시판</a>
							</td>
						</tr>
					</table>
			
		</fieldset>
		 <?
}
 ?>

			
			
		</fieldset>
	</form>
</body>
<script>
function a(){
	window.open('http://slit.bitplay.co/sl1/','_blank');
	}
	function b(){
	location.href="logout.php";
	}
	function c(){
	location.href="pan.html";
	}
	function login(){
	location.href="login.html";
	}
	function deleteuser_(){
	location.href="deleteuser.php";
	}
</script>
</html>