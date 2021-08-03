<?php
$FirstRange = $POST['FirstRange']
$SecondRange = $POST['SecondRange']
$ThirdRange = $POST['ThirdRange']
$FourthRange = $POST['FourthRange']
$FifthRange = $POST['FifthRange']
$LastRange = $POST['LastRange']

$conn = new mysqli('localhost','root','','data')
if($conn->connect_error){
die('connection failed : ' .$conn->connect_error);

}else{
    $stmt = $conn-prepare("insert into eng(FirstRange,SecondRange,ThirdRange,FourthRange,FifthRange,LastRange
    ) values(?,?,?,?,?,?)");
    $stmt->bind_param("iiiiii",$FirstRange ,$SecondRange,$ThirdRange,$FourthRange,$FifthRange,$LastRange) 
    $stmt->execute();
    $stmt->close();
    $conn->close(); 

}
?>
