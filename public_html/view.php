<?
				include 'main.php';
                 $conn = mysqli_connect("localhost","root","autoset","db", 3306);
				  mysqli_select_db($conn, "db");
                $query = "select title, content, date, hit, name from guestbook2 where id ='{$_GET['id']}'";
                 $result = mysqli_query($conn, $query);
                 $row = mysqli_fetch_array($result);
				

        ?>

		<style>
 .view_table {
 border: 1px solid #444444;
 margin-top: 30px;
 }
 .view_title {
 height: 30px;
 text-align: center;
 background-color: #cccccc;
 color: white;
 width: 1000px;
 }
 .view_id {
 text-align: center;
 background-color: #EEEEEE;
 width: 30px;
 }
 .view_id2 {
 background-color: white;
 width: 60px;
 }
 .view_hit {
 background-color: #EEEEEE;
 width: 30px;
 text-align: center;
 }
 .view_hit2 {
 background-color: white;
 width: 60px;
 }
 .view_content {
 padding-top: 20px;
 border-top: 1px solid #444444;
 height: 500px;
 }
 .view_btn {
 text-align: center;
 margin: auto;
 margin-top: 30px;
 }
 .view_comment_input {
 width: 700px;
 height: 500px;
 text-align: center;
 margin: auto;
 }
 .view_text3 {
 font-weight: bold;
 float: left;
 margin-left: 20px;
 }
 .view_com_id {
 width: 100px;
 }
 .view_comment {
 width: 500px;
 }
 .a{
margin-top:-120px;
margin-left:50px;
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


<div class = a >
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><? echo $row['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $row['name']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $row['hit']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <? echo $row['content']?></td>
        </tr>
        </table>
 

        <div class="view_btn">
                <button  onclick="location.href='./board.php'" class = "bnt">목록으로</button>
                <button  class = "bnt" onclick="location.href='./modify_pw.php?id=<?=$_GET['id']?>'">수정</button>
                <button class = "bnt" onclick="location.href='./b_delete.php?id=<?=$_GET['id']?>'">삭제</button>
        </div>
		
		</div>

		<?
		mysqli_query($conn,"update guestbook2 set hit = hit+1 where id ='{$_GET['id']}'");
		?>
