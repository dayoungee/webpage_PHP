<? include 'main.php';?>
<html>
<head>
 <meta charset = 'utf-8'>
</head>
<body>
<style>
.a{
margin-top:-180px;
margin-left:550px;
}
table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
		 table.table2 tr {
                
                padding: 10px;
                font-weight: bold;
                
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
             
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
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

        <form method = "post" action = "p_write.php">
        <table  style="padding-top:50px" align = center width=780 border=0 cellpadding=2 class = "a">


                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = text name = "name" size=20> </td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = "title" size=60></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = "content" cols=85 rows=15></textarea></td>
                        </tr>
 
                        <tr>
                        <td>비밀번호</td>
                        <td><input type = password name = "pw" size=10 maxlength=10></td>
                        </tr>
                        </table>
 
                        <center>
                        <input type = "submit" value="작성" class = "bnt">
                        </center>
                </td>
                </tr>
        </table>
        </form>
</body>
</html>

