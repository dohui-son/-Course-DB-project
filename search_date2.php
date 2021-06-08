<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
}

</style>

<?

    $date = $_POST['date'];

    //check not empty
    if(!$date){
    	echo "<script>window.alert('날짜를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    include "dbconn.php";



    //get reservation information
    $sql1 = "select D.name as DESIGNER,C.name as CLIENT ,datetime as DATE_TIME,style_menu as STYLE from reservation, designer D, customer C where datetime like '$date%' and cid=C.id and did=D.id  order by datetime";
    $result1 = mysqli_query($connect, $sql1);
    $num1 = mysqli_num_rows($result1);
   

   



    if($num1==0){
        echo "<script>window.alert('예약이 존재하지 않습니다.'); history.go(-1);</script>";
        exit;
    }
    mysqli_data_seek($result1, 0);

    echo "<div style='margin-bottom: 5px;'>$date 의 예약된 결과 입니다.</div>";
    echo "<div style='margin-bottom: 5px;'>$num1 개의 예약 정보가 있습니다.</div>";

    echo "<table border>";

    // 머릿글 출력
    echo "<tr>";
    while($field=mysqli_fetch_field ($result1)){
        echo "<th>";
        //print_r($field);
        echo $field->name;
        echo "</th>";
    }
    echo "</tr>";
    

    // 데이터 출력
    while($row1 = mysqli_fetch_row($result1)){
        echo "<tr>";
        for($i=0;$i<(count($row1));$i++){
            echo "<td>";
            echo $row1[$i];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
