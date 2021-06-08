<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
body{
    font-size: 15px;
    font-family: 'Nanum Gothic';
}
</style>

<?

    $name = $_POST['name'];
    $telephone_number = $_POST['telephone_number'];
    $date = $_POST['date'];

    //check not empty
    if(!$name){
    	echo "<script>window.alert('이름을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }
   if(!$telephone_number){
    	echo "<script>window.alert('전화번호를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }
    if(!$date){
    	echo "<script>window.alert('날짜를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    include "dbconn.php";

    $sql0 = "select id from customer where name='$name' and telephone_number='$telephone_number'";
    $result0 = mysqli_query($connect,$sql0);
    $cid = mysqli_fetch_row($result0);

    //get reservation information
    $sql1 = "select datetime,style_menu from reservation where cid='$cid[0]' and datetime like '$date%'  order by datetime";
    $result1 = mysqli_query($connect, $sql1);
    $num1 = mysqli_num_rows($result1);
   


    if($num1==0){
        echo "<script>window.alert('예약이 존재하지 않습니다.'); history.go(-1);</script>";
        exit;
    }
    mysqli_data_seek($result1, 0);

    echo "<div style='margin-bottom: 5px;'>$name 고객님의 예약된 결과 입니다.</div>";
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
