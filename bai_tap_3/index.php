<?php
function checkClassName($string){
    $pattern = '/^[APC]{1}+[0-9]{4}[G-M]$/';
    if (preg_match($pattern,$string)){
        echo "ban da nhap thanh cong";
    }else {
        echo "ten class khong hop le";
    }
}