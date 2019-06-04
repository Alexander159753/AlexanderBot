<?php

include "vk_api.php"; 


const VK_KEY = "16f7e4b749b850b71ae85226a10e64f0d8e54c579ed18c78be09888e2bde17313db0a670a18defccc66ac";  // Токен сообщества
const ACCESS_KEY = "73896752";  // Тот самый ключ из сообщества 
const VERSION = "5.81"; // Версия API VK


$vk = new vk_api(VK_KEY, VERSION); 
$data = json_decode(file_get_contents('php://input')); 

if ($data->type == 'confirmation') { 
    exit(ACCESS_KEY); 
}
$vk->sendOK(); 
// ====== Наши переменные ============
$id = $data->object->from_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя
// ====== *************** ============

if ($data->type == 'message_new') {

    if ($message == '!вызвать такси') {

            $vk->sendMessage($id, "Выберите тариф");
			
        }


	}
	