<?
session_start();
 $conn = mysqli_connect("localhost","root","autoset","db", 3306);
            mysqli_select_db($conn, "db");
			session_start();
			$query = "delete from user where id = '{$_SESSION['id']}'";
			mysqli_query($conn,$query);
			session_destroy();

?>
<script> alert("탈퇴되었습니다."); location.href="main.php"; </script>
