<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php" ?>
        <?php
            $data = $data[0];
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            $img = $data['img'];
            $img = rtrim($img,';');
            $img  = explode(";",$img);
            // echo "<pre>";
            // print_r($img);
            // echo "</pre>";

            echo "<div class=\"item_house\">";

            // div class img truoc tien
            echo "<img src=\"../public/img/".$img[0]."\">";

            // echo "<div class=\"img\">";
            // echo "<img src=\"../public/img/".$img[0]."\" class=\"main_img\">";
            // echo "</div>";
            unset($img[0]);


            switch ($data['type']) {
                case "chung cu mini":
                    $data_house = "Chung cư mini";
                    break;
                case "phong tro":
                    $data_house = "Phòng trọ";
                    break;
                case "nha nguyen can":
                    $data_house = "Nhà nguyên căn";
                    break;
            }

            switch ($data['site']) {
                case "hoang mai":
                    $quan = "Hoàng Mai";
                    break;
                case "hai ba trung":
                    $quan = "Hai Bà Trưng";
                    break;
                case "hoan kiem":
                    $quan = "Hoàn Kiếm";
                    break;
                case "dong da":
                    $quan = "Đống Đa";
                    break;
                case "thanh xuan":
                    $quan = "Thanh Xuân";
                    break;
            }

            echo "<div class=\"item_info\">";
                echo "<span class='gia-dtich'>" .$data['cost']." ₫	- " .$data['s']. " <span>&#13217;</span>  </span>";
                echo "<p style='color:rgb(50, 129, 168)'> Quận: ". $quan. "</p>".
                    "<span class='breaker'></span>";
                echo "<p> Địa chỉ: ".$data['addr']."<br>".
                        "Loại nhà: ".$data_house."<br>".
                        "Số phòng ngủ: ".$data['bedroom']."<br>".
                        "Số phòng tắm: ".$data['bathroom']."<br>".
                        "Thông tin thêm: ".$data['scribble'] . "</p>";
                echo "<p> </p>";
            echo "</div>";
            if(isset($_SESSION['username']))
            echo "<a href=\"http://localhost:8088/public/?url=saves/save/".$data['id']."\"><i class='far fa-heart'></i></a>";
            echo "</div><br>";
        ?>
</body>
</html>