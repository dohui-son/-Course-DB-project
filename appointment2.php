<?
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $telephone_number = $_POST['telephone_number'];
    $did = $_POST['did'];
    $style_menu = $_POST['style_menu'];

    //check not empty
    if(!$name){
    	echo "<script>window.alert('예약하실 분의 성함을 입력하세요.'); history.go(-1);</script>";
    	exit;
    }
   if(!$telephone_number){
    	echo "<script>window.alert('예약하실 분의 전화번호를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }
    if(!$date){
    	echo "<script>window.alert('날짜를 입력하세요.'); history.go(-1);</script>";
    	exit;
    }

    if(!$did){
        echo "<script>window.alert('디자이너를 골라주세요.'); history.go(-1);</script>";
        exit;
    }

	if(!$style_menu){
        echo "<script>window.alert('예약할 헤어스타일을 고르세요.'); history.go(-1);</script>";
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
    //check duplication
    $sql0 = "select * from reservation where did='$did' and datetime like '%$time'";
    $result0 = mysqli_query($connect,$sql0);
    $num0 = mysqli_num_rows($result0);

    
	

    
    $sql2 = "insert into reservation(cid, did, datetime,style_menu) values('$row[0]', '$did', '$date.$time','$style_menu')";
    $result = mysqli_query($connect,$sql2);

    if($result === false){
        echo "<script>window.alert('예약이 제대로 이루어지지 않았습니다. 미용실에 문의해주세요.'); history.go(-1);</script>";
    
        exit;
    }

    mysqli_close();

	

    echo "<script>alert('$name님 예약이 완료되었습니다.'); window.close();</script>";
?>