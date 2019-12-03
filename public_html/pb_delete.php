<?
			$conn = mysqli_connect("localhost","root","autoset","db", 3306);
		    mysqli_select_db($conn, "db");
 
			$query ="select pw from guestbook2 where id = '{$_POST['a']}' ";
                $result = mysqli_query($conn, $query);
			    $row = mysqli_fetch_array($result);
				
				if($_POST['pw']==$row['pw']){
					$delete = "delete from guestbook2 where id ='{$_POST['a']}'";
					$result = mysqli_query($conn, $delete);
					echo  "<script>alert(\"삭제되었습니다..\");</script>";
					echo  "<script>location.href=\"board.php\"</script>";
				}
				else
				{
					 echo  "<script>alert(\"비밀번호가 다릅니다.\");</script>";
					 echo  "<script>location.href=history.back();</script>";
				}
				

?>
