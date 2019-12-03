<? include 'main.php';?>
 
<html>
<head>
</head>
<style>
        .a{
	margin-top:-150px;
	margin-left:0px;
		}
       
         .b{
                border-bottom: 1px solid #efefef;
                padding: 10px;
		  }
        
        .text{
                text-align:center;
                padding-top:20px;
              
        }
      
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body>
<?
                $conn = mysqli_connect("localhost","root","autoset","db", 3306);
				 mysqli_select_db($conn, "db");
                $query ="select * from guestbook2 order by id desc";
                $result = mysqli_query($conn, $query);
               $total = mysqli_affected_rows($conn);
			      
   session_start();
if(!isset($_SESSION['id'])) //세션이 존재하지 않을 때
{
    header ('Location:login.html');
}

 
        ?>
		<div class = a>
        <h2 align=center>익명 게시판</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "50" align="center" class = b>번호</td>
        <td width = "500" align = "center"  class = b>제목</td>
        <td width = "100" align = "center"  class = b>작성자</td>
        <td width = "200" align = "center"  class = b>날짜</td>
        <td width = "50" align = "center"  class = b>조회수</td>
        </tr>
        </thead>
 
        <tbody>
        <?
                while($row = mysqli_fetch_array($result)){
                        ?>
                <td width = "50" align = "center"  class = b><? echo $total?></td>
                <td width = "500" align = "center"  class = b>
                <a href = "view.php?id=<? echo $row['id']?>">
                <? echo $row['title']?></td>
                  <td width = "100" align = "center"  class = b><? echo $row['name']?></td>
                <td width = "200" align = "center"  class = b><? echo $row['date']?></td>
                <td width = "50" align = "center"  class = b><? echo $row['hit']?></td>
                </tr>
        <?
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
        </div>
		</div>
 
 
 
 
 
 
</body>
</html>
