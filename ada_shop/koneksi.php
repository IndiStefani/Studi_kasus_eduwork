<?php
$hostName="localhost"; //silahkan ganti jika error (sesuaikan dengan nama host yang ada di local)
$username="root"; //silahkan ganti jika error (sesuaikan dengan nama username yang ada di local)
$password=""; //silahkan ganti jika error (sesuaikan dengan nama password yang ada di local)
$dbName ="ada_shop"; //silahkan ganti jika error (sesuaikan dengan nama database yang ada di local)
$conn = new mysqli($hostName,$username,$password,$dbName);

if($conn){
    echo "";
}else{
    echo "not connected";
}

?>