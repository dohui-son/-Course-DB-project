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

    //check not empty
    if(!$name){
    	echo "<script>window.alert('예약하실 분의 성함을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }
   if(!$telephone_number){
    	echo "<script>window.alert('예약하실 분의 전화번호를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    include "dbconn.php";

    //get customer information and check telephone_number
    $sql1 = "select * from customer where name='$name' and telephone_number='$telephone_number'";
    $result1 = mysqli_query($connect, $sql1);
    $num1 = mysqli_num_rows($result1);
    if($num1==0){
        echo "<script>window.alert('회원정보가 존재하지 않습니다. 회원등록을 먼저 해주세요'); history.go(-1);</script>";
        exit;
    }
    // mysqli_data_seek($result1, 0);
    // $row1 = mysqli_fetch_array($result1);

    // //get designer reservation information 
    // $sql2 = "select distinct datetime, C.name, style_menu,C.telephone_number from reservation R, designer D, customer C where D.name='$name'and cid=C.id and did=D.id" ;
    // $result2 = mysqli_query($connect,$sql2);
    // $num2 = mysqli_num_rows($result2);
    // $total_count = 0;

    echo "<div style='margin-bottom: 5px;'>$name 님 데베 미용실을 또 방문해주셔서 감사합니다.</div>";
    echo "<div style='margin-bottom: 5px;'>세부 예약 정보를 입력한 후 예약이 완료됩니다.</div>";

    echo "<table border>";

    echo "<button style=\"margin-top:10px;\" onClick=\"location.href='appointment3.php'\">
    예약하기
    </button>";

    // 머릿글 출력
    // echo "<tr>";
    // while($field=mysqli_fetch_field ($result2)){
    //     echo "<th>";
    //     //print_r($field);
    //     echo $field->name;
    //     echo "</th>";
    // }
    // echo "</tr>";

    // 데이터 출력
    // while($data=mysqli_fetch_row($result2)){
    //     echo "<tr>";
    //     for($i=0;$i<(count($data));$i++){
    //         echo "<td>";
    //         echo $data[$i];
    //         echo "</td>";
    //     }
    //     echo "</tr>";
    // }

    // 테이블 끝
    echo "</table>";
    

?>
