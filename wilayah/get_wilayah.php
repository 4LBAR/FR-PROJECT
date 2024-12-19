<?php header('Content-Type: application/json; charset=utf-8');

if ($_POST) {
    include('db.php');

    $code =  @$_POST['code'] ? $_POST['code']: null;

    $mapping = [
        2 => 5,
        5 => 8,
        8 => 13,
    ];

    if ($code == null){
    $sql = "SElECT kode, nama FROM wilayah WHERE CHAR_LENGTH(kode) = 2";
   } else{
    $key =strlen($code);
    $len = $mapping[$key] ? $mapping[$key] : null;
    if($len){
        $sql = "SElECT * FROM wilayah c WHERE LEFT(c.kode, $key) = '$code' AND CHAR_LENGTH(c.kode) = $len";
    }
   }

   if(@$sql){
        $row = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
   }
 
}