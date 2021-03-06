<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>미용실 예약</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?
    include "dbconn.php";
?>
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
 
}
</style>

<script type="text/javascript">
</script>
</head>
<body>
    <!-- for client to make appointment-->
    <form  action="appointment2.php" name="form" method="post" style="margin-top:10px;">
        <fieldset>
            <legend>미용실 예약</legend>
            <center>
            <table width="700" height="700">
                <tr> 
                    <td><b>성함 </b></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><b>전화번호 </b></td>
                    <td><input type="text" name="telephone_number"></td>
                </tr>
                <tr>
					<td><b>예약날짜</b></td>
					<td><input type="date" name="date"></td>
				</tr>
                <tr>
					<td><b>예약시간</b></td>
					<td><input type="time" name="time"></td>
				</tr>
                <tr>
                    <td><b>예약하실 디자이너 </b></td>
                    <td><label><input type="checkbox" name="did" value="1"> 1 김현우</label></td>
                    <td><label><input type="checkbox" name="did" value="2"> 2 조성국</label></td>
                    <td><label><input type="checkbox" name="did" value="3"> 3 박성우</label></td>
                    <td><label><input type="checkbox" name="did" value="4"> 4 이지은</label></td>
                    <td><label><input type="checkbox" name="did" value="5"> 5 고범연</label></td>
                    <td><label><input type="checkbox" name="did" value="6"> 6 심종화</label></td>
                    <td><label><input type="checkbox" name="did" value="7"> 7 김은빈</label></td>
                </tr>
                <tr>
                    <td><b>예약하실 헤어스타일 </b></td>
                    <td><label><input type="checkbox" name="style_menu" value="남성 컷"> 남성 컷</label></td>
                    <td><label><input type="checkbox" name="style_menu" value="여성 컷"> 여성 컷</label></td>
                    <td><label><input type="checkbox" name="style_menu" value="열펌"> 열펌</label></td>
                    <td><label><input type="checkbox" name="style_menu" value="염색"> 염색</label></td>
                    <td><label><input type="checkbox" name="style_menu" value="일반펌"> 일반펌</label></td>
                </tr>
                <!-- submit button -->
                <tr><td colspan="2"><center><img src="img/confirm.png" width="200" height="50" onclick="document.form.submit();"></center></td></tr>
            </table>
            </center>
        </fieldset>
    </form>
</body>
</html>