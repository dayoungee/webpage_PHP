<?
$date = date('Y-m-d H:i:s');            

 $conn = mysqli_connect("localhost","root","autoset","db", 3306);
            mysqli_select_db($conn, "db");
$query = "INSERT INTO guestbook2 (name, pw, content,title,date) VALUES ('{$_POST['name']}','{$_POST['pw']}','{$_POST['content']}','{$_POST['title']}','$date')";

   mysqli_query($conn, $query);

?>
<script>
       alert("글이 등록되었습니다.");
       location.href="board.php";
</script>
