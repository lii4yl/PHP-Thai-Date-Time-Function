
# ตัวอย่างการใช้งาน Function เปลี่ยนวันที่และเวลาเป็นภาษาไทย

ตัวอย่างการใช้งานแปลงวันที่และเวลาในเป็นภาษาไทย เหมาะสำหรับผู้เริ่มต้นศึกษา PHP

## Features

- ตัวย่อ เดือน ในภาษาไทย
- เวลาในหน่วย ชั่วโมงและนาที

## การนำไปใช้งาน

ประกาศ Time Zone ของประเทศไทยที่ด้านบนสุดของไฟล์ก่อน

```bash
  date_default_timezone_set("Asia/Bangkok");
```
สร้าง Function เพื่อไว้เรียกใช้งาน

```bash
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
```

วิธีเรียกใช้

```bash
ครอบ funtion บนคำสั่งแสดงวันที่และเวลา
DateThai(date("Y-m-d G:i:s"))
```

## ภาพตัวอย่างหน้าจอ

![หน้า index](https://i.imgur.com/TTeUWTx.png)


## License

ผู้จัดทำอนุญาตให้นำไปใช้งาน และแจกจ่ายได้โดยคงไว้ซึ่งที่มาของเนื้อหา ห้ามมิให้นำไปใช้งานในเชิงพาณีย์โดยตรง เช่น การนำไปจำหน่าย
