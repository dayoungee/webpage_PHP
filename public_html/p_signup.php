<?
$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
 
if($_POST['id'] == NULL ||$_POST['pw'] ==NULL || $_POST['name']==NULL){
	echo  "<script>alert(\"입력해주세요.\");</script>";
	echo  "<script>location.href=\"signup.html\"</script>";
    exit();
}

 $conn=mysqli_connect("localhost","root","autoset","db",3306);
 mysqli_select_db($conn,"db");

 $query1 = "select count(*) from user where id = '{$_POST['id']}'";
 $result1 = mysqli_query($conn,$query1);
 $row = mysqli_fetch_array($result1);
 if($row[0] == 1){
    echo  "<script>alert(\"중복된 id 입니다.\");</script>";
	echo  "<script>location.href=\"signup.html\"</script>";
    exit();
}

$query2 ="insert into user(id, pw, name) values ('{$_POST['id']}','{$_POST['pw']}','{$_POST['name']}')";
$result2 = mysqli_query($conn,$query2);

if($query2){
   echo  "<script>alert(\"회원가입 성공.\");</script>";
   echo  "<script>location.href=\"login.html\"</script>";
   
}

?>