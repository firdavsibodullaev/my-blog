<?php

require __DIR__ . "/../config/helpers.php";
require __DIR__ . "/../config/db.php";

session_start();

if(is_method('post')) {

    require __DIR__ . "/../controllers/admin/news_update.controller.php";

} elseif (is_method('get')) {

    require __DIR__ . "/../controllers/admin/news_edit.controller.php";

}


// bazadan yangilikni olamiz
// formaga quyamiz
// formada o'zgarishlar qilamiz
// bazaga qaytadan yozib quyamiz