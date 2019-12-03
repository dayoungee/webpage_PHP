<?
$conn=mysqli_connect("localhost","root","autoset","db",3306);
mysqli_select_db($conn,"db");

$query = "SELECT pw,name FROM user where id = '{$_POST['id']}'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
mysqli_set_charset($conn,'utf-8');

if($_POST['id'] == NULL ||$_POST['pw'] ==NULL){
	echo  "<script>alert(\"아이디와 비밀번호를 입력해주세요.\");</script>";
	echo  "<script>location.href=\"login.html\"</script>";
    exit();
}

if($_POST['pw']==$row['pw']){
session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['name'] = $row['name'];
echo  "<script>location.href=\"main2.php\"</script>";
}else{
 echo  "<script>alert(\"아이디 비밀번호를 확인해주세요.\");</script>";
	echo  "<script>location.href=\"login.html\"</script>";
}
?>