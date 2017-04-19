<!DOCTYPE html>
<!--

  _____  _______  _____  _____           _____            _             
 |  __ \|__   __|/ ____||  __ \         / ____|          | |            
 | |__) |  | |  | |  __ | |  | |  __ _ | |      ___    __| |  ___  _ __ 
 |  _  /   | |  | | |_ || |  | | / _` || |     / _ \  / _` | / _ \| '__|
 | | \ \   | |  | |__| || |__| || (_| || |____| (_) || (_| ||  __/| |   
 |_|  \_\  |_|   \_____||_____/  \__,_| \_____|\___/  \__,_| \___||_|


Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


-->
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Test </title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            
            input {
                text-align: center;
            }
            
        </style>
    </head>
    
    <body>
        
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> RTGNetwork </a>
                    
                </div>
                  
            </div>           

        </nav>
        
        <div class="container-fluid">
            
            <center>
                
                <form method="POST" action="redirect.php">
                    
                    <p> Your Full Name: </p>
                    <input type="text" name="name" placeholder="Input here">
                    
                    <br><br>
                    
                    <p> Your total mass: </p>
                    <input type="text" name="mass" placeholder="Input here">
                    
                    <br><br>
                    
                    <button type="submit" class="btn-default"> Click me </button>
                    
                </form>
                
            </center>
            
        </div>
        
    </body>
</html>
