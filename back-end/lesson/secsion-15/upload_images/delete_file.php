<?php

;

if(unlink('uploads/soa2.jpg')){
    echo "Xóa file thành công";
} else {
    echo 'ko xoa dc';
}