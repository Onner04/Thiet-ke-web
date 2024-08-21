<?php
         function tinhTong($a, $b) {
            return $a + $b;
        }
        function tinhHieu($a, $b) {
            return $a - $b;
        }
        function tinhTich($a, $b) {
            return $a * $b;
        }
        function tinhThuong($a, $b) {
            if ($b == 0) {
                return "Không thể chia cho 0";
            }
            return $a / $b;
        }
        $result = '';
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];
       
            switch ($operation) {
                case "tong":
                    $result = "" . tinhTong($number1, $number2);
                    break;
                case "hieu":
                    $result = " " . tinhHieu($number1, $number2);
                    break;
                case "tich":
                    $result = "" . tinhTich($number1, $number2);
                    break;
                case "thuong":
                    $result = " " . tinhThuong($number1, $number2);
                    break;
                default:
                    $result = "Phép tính không hợp lệ";
                    break;
            }

    ?>