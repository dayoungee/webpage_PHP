<?
	session_start();
    $conn = mysqli_connect("localhost","root","autoset","db", 3306);
    mysqli_select_db($conn, "db");
 
    $query = "INSERT INTO guestbook (id, content) VALUES ('{$_SESSION['id']}','{$_POST['content']}')";

    $result = mysqli_query($conn, $query);

?>
<script>
       alert("글이 등록되었습니다.");
       location.href="pan.html";
</script>
