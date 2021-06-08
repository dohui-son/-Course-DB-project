<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
}
</style>

<form  action="search_date2.php" name="form" method="post" style="margin-top:10px;">
        <fieldset>
            <legend>날짜별 예약 조회</legend>
            <center>
            <table width="430" height="480">
                <tr>
					<td><b>어느 날짜를 조회하시겠습니까?</b></td>
					<td><input type="date" name="date"></td>
				</tr>
                <!-- submit button -->
                <tr><td colspan="2"><center><img src="img/confirm.png" width="200" height="50" onclick="document.form.submit();"></center></td></tr>
            </table>
            </center>
        </fieldset>
    </form>