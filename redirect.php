<?php
include 'Script.php';

/* 
 * 
 *   _____  _______  _____  _____           _____            _             
 *  |  __ \|__   __|/ ____||  __ \         / ____|          | |            
 *  | |__) |  | |  | |  __ | |  | |  __ _ | |      ___    __| |  ___  _ __ 
 *  |  _  /   | |  | | |_ || |  | | / _` || |     / _ \  / _` | / _ \| '__|
 *  | | \ \   | |  | |__| || |__| || (_| || |____| (_) || (_| ||  __/| |   
 *  |_|  \_\  |_|   \_____||_____/  \__,_| \_____|\___/  \__,_| \___||_|
 * 
 * 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * 
 */

$name = $_POST['name'];
$mass = $_POST['mass'];

if (!is_numeric($mass)) {
    header ('Location: index.php');
} else {
    
    if ($mass > 1000) {
    
        $obj = new Script($name, $mass);
    
    } else {
        
        $upper = strtoupper($name);
        
        $ch = curl_init();
        
        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://discordapp.com/api/webhooks/302431612744892416/MHlAN1r49C537cH5IrRoGdNm0dJr5PM12BcHrkH923MiMVBRgSMWe4-F6_HVr65ZvAtE",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POSTFIELDS => json_encode(array(
                "content" => "An error occured to $upper",
                "username" => "RTGTheBot",
                "avatar_url" => "http://benjiflaming.com/wp-content/uploads/2010/06/white.png"
            ))
        ));
        
        $res = curl_exec($ch);
        
        if ($res === false) {
            echo "An error occured on our side!";
        } else {
            echo "Make sure your mass is more than 1000 Gram, anything below than that will trigger this error. Your error has been recorded and published on Discord!";
        }
        
    }
    
}
