<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
}
</style>

<form  action="search_c2.php" name="form" method="post" style="margin-top:10px;">
        <fieldset>
            <legend>고객용 조회</legend>
            <center>
            <table width="430" height="480">
                <tr> 
                    <td><b>예약자 성함 </b></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><b>예약자 전화번호 </b></td>
                    <td><input type="text" name="telephone_number"></td>
                </tr>
                <tr>
					<td><b>예약날짜</b></td>
					<td><input type="date" name="date"></td>
				</tr>
                <!-- submit button -->
                <tr><td colspan="2"><center><img src="img/confirm.png" width="200" height="50" onclick="document.form.submit();"></center></td></tr>
            </table>
            </center>
        </fieldset>
    </form>