<?php
function checkNumberPhone($string)
{
    $pattern = '/^\([0-9]{2}\)+-\([0]{1}[0-9]{9}\)$/';
    if (preg_match($pattern, $string)) {
        echo "ban da nhap thanh cong";
    } else {
        echo "ban da nhap sai dinh dang sdt";
    }
}
checkNumberPhone("(84)-(0987654321)");