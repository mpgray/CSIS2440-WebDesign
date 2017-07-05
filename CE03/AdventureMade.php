<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>A made Adventurer</title>
        <link href="css/view.css" rel="stylesheet" type="text/css">
        <style>
            img {
                height: 250px;
                padding: 3pt;
                float: right;
            }
        </style>
    </head>
    <body>
        <div id="form_container">
            <h1 class="Content">The Brave Adventurer</h1>
            <div class="CharacterSheet">
        <?php
        function imageChoice($key){
            return substr(htmlentities($_POST[$key]),0,2);
        }
        
        echo "\n<img src ='media/HeroImages/";
        echo imageChoice('Race') . imageChoice('Class') . imageChoice('gender');
        echo ".jpg'>\n";
                
        
        foreach($_POST as $key => $value){
          if($key != "Create"){  
            echo "<b><h3>" . $key . ":</h3></b>  ";
            echo htmlentities($value) . " <br />";
          }
        }
        

            
        ?>
            </div>
        </div>
    </body>
</html>

