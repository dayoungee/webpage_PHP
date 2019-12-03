
<?
    
$conn = mysqli_connect("localhost","root","autoset","db", 3306);
 mysqli_select_db($conn, "db");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $query = "update guestbook2 set title='{$_POST['title']}', content='{$_POST['content']}' where id='{$_POST['id']}'";
    $result = mysqli_query($conn, $query);
	?>
	<script>alert(\"수정되었습니다.\");</script>";
    <script> location.replace("./view.php?id=<?=$_POST['id']?>");</script>"; 

