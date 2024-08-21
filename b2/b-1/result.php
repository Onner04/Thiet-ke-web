<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        @include('function.php');
    ?>

<style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .app {
            height: 100vh;
            align-items: center;
            text-align: center;
            display: flex;
            justify-content: center;
            background-color: #dbdbdb;
        }
        .calculate {
            background-color: #fff;
            padding: 5% 3%;
            border-radius: 3px;
            box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.1);
        }
        .calculate-title {
            margin-top: -30px;
            padding-bottom: 20px;
        }
        .calculate-item {
            display: flex;
           
        }
        .calulate-input {
            padding: 10px 0;
        }
        .btn-item {
            margin-top: 10px;
            padding: 3px 20px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>

        <div class="result">
        <div class="app">
        <div class="calculate">
            <h2 class="calculate-title">kết quả</h2>
            <form method="post" action="index.php">
                <div class="calculate-item">
                    <span class="calculate-item__note">Chọn phép tính: </span>
                    <p class="calculate-item__list" > <?php echo $operation ?> </p>
                </div>

                <div class="calulate-input">
                    <span class="calulate-input__note">Số thứ nhất:</span>
                    <input type="text" class="calulate-input__item" name="number1" placeholder="<?php echo $number1 ?>" >
                </div>
                <div class="calulate-input">
                    <span class="calulate-input__note">Số thứ hai:</span>
                    <input type="text" class="calulate-input__item" name="number2" placeholder="<?php echo $number2 ?>" >
                </div>
                <div class="calulate-input">
                    <span class="calulate-input__note">kết quả:</span>
                    <input type="text" class="calulate-input__item" placeholder="<?php echo $result ?>">
                </div>

                <div class="calulate-btn">
                    <button type="submit" class="btn-item">quay về trang chủ </button>
                </div>
            </form>
        </div>
    </div>
        </div>

</body>
</html>