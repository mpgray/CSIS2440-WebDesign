<html>
    <head>
        <meta charset="UTF-8">
         <title>Story Idea Generator</title>
        <style>
            body {
                font-family: "Trebuchet MS", Verdana, sans-serif;
                font-size: 16px;
                background-color: dimgrey; 
                color: #696969;
                padding: 3px;
            }

            #main {
                padding: 5px;
                padding-left:  15px;
                padding-right: 15px;
                background-color: #ffffff;
                border-radius: 0 0 5px 5px;
            }

            h1 {
                font-family: Georgia, serif;
                border-bottom: 3px solid #cc9900;
                color: #996600;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
    <h1>Story Idea Generator</h1>
    <div id="main">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <?php
        //get post data
        extract($_POST);
        //if something has been submitted, create a setting randomly
        if($sneaky == 1){
            if($Gender == 'F'){
                $sex = "Lady";
            }
            elseif($Gender == 'M'){
                $sex = "Man";
            }
            echo "This is a story about a " . $sex . " named " . $Name . "\n<br>";
            echo "at only the age of " . $Age . " is a " . $Class . "\n<br>";
            echo "This is the start of the story....<br>\n<ul><li>";
            //create an array of txt file pointers
            function RandomLine($filename) {
                  $lines = file($filename) ;
                  return $lines[array_rand($lines)] ;
            }
            $settings = RandomLine("media/settings.txt");
            echo $settings;  
            echo "</li><li>\n";  
            
            $complications = RandomLine("media/complications.txt");
            echo $complications;  
            echo "</li><li>\n";
            
            $objectives = RandomLine("media/objectives.txt");
            echo $objectives;  
            echo "</li><li>\n";
            
            $antagonists = RandomLine("media/antagonists.txt");
            echo $antagonists;  
            echo "</li>\n"; 
            
            echo "</ul><br><input type='submit' value='Try Again' name='Create'><br><input type='hidden' value ='0' name='sneaky'>";
                                                                
        }
        //if sneaky is no 1. Meaning our information has not posted
        else{
    ?>
        
        
                 Please Create a Character to put into the story.<br>
                    Name: <input type="text" name="Name"><br>
                Age: <input type="number" name="Age"><br>
                Gender: F<input type="radio" value="F" name="Gender" checked="true">  M<input type="radio" value="M" name="Gender"><br>
                Class: <select name="Class">
                    <option value="Detective">Detective</option>
                    <option value="Scientist">Scientist</option>
                    <option value="Soldier">Soldier</option>
                    <option value="Doctor">Doctor</option>
                </select><br>
                <input type="submit" value="Show Me" name="Create"><br>
                <input type="hidden" value ="1" name="sneaky">                                 
        
    <?php } ?>
            </form>
    </div>
    </body>
</html>
