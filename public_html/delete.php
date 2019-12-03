<?
	     if ($_GET['mode']!="delete")
         {
     ?>
     <HTML>
     <FORM METHOD="POST" ACTION="<?=$_SERVER['PHP_SELF']?>?id=<?=$_GET['id']?>&num=<?=$_GET['num']?>&mode=delete">
	   <? 
		 session_start();
	     if($_SESSION['id'] == $_GET['id']){
	        $conn = mysqli_connect("localhost","root","autoset","db", 3306);
            mysqli_select_db($conn, "db");

	       $query = "delete from guestbook where num = '{$_GET['num']}'";
           $result = mysqli_query($conn,$query);
		   ?>
  			    <script> alert("삭제되었습니다."); location.href="pan.html"; </script>
			<?
		 }else{
		 ?>
			    <script> alert("본인 글이 아닙니다."); location.href="pan.html"; </script>
		<?
		 }
		?>
	<?
       exit;
       }
   ?>
