<?php

include_once 'ConNguoi.php';

$connguoi = new Class\ConNguoi\ConNguoi();
echo $connguoi->getName();
//kết quả: Con Người

$nguoilon = new Class\NguoiLon\NguoiLon();
echo $nguoilon->getName();