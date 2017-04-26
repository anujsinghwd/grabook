<?php 
$conn = new mysqli('localhost', 'root', '', 'db_grabook');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT adv_title,adv_book_author,adv_desc,adv_price,img_path1 FROM sell_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        	$data = array('title'=>$row['adv_title'] ,'author' => $row['adv_book_author'], 'description' => $row['adv_desc'], 'price' => $row['adv_price'], 'imgurl' => $row['img_path1']);
			$we[] = $data;
			$results=json_encode($we);
    }
} 
echo $results;
$conn->close();
?>