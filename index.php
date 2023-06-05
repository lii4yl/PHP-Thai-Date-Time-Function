<?php date_default_timezone_set("Asia/Bangkok"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="pb-4">PHP - วันที่และเวลา</h1>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                ตัวอย่าง
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="h1"><?= DateThai(date("Y-m-d G:i:s")) ?></p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-10">
                            <a href="https://www.buymeacoffee.com/Lazycat"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=Lazycat&button_colour=FFDD00&font_colour=000000&font_family=Cookie&outline_colour=000000&coffee_colour=ffffff" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <p class="fw-bolder text-secondary text-center">Powered by Bootstrap &#128156;</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- function แสดงวันที่และเวลาเป็นภาษาไทย -->
<?php
function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear, $strHour:$strMinute น.";
}
?>

</html>