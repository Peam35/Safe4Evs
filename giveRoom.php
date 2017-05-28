<!DOCTYPE html>
<html>
    <head>
        <title>Room4</title>
        <meta charset="utf-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0, user-scalable=true;">
        <link href="global.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    
    </head>
    
    <body>
        <header>
            
            <nav>
                
                <!--<div class="logo">-->
                <!--  <img src="Room4.jpg"/>-->
                <!--</div>  -->
                
                <div class="roomfor">#room4</div>
                
                <ul>
                    <!-- <li> <a href="#Room4"> </a> </li> -->
                    <li> <a href="index.html"> Home </a> </li>
                    <li> <a href="about.html"> About </a> </li>
                    <li> <a href="findRoom.html"> Find Room</a> </li>
                    <li> <a href="giveRoom.html"> Give Room</a> </li>
                </ul>
            
            </nav>
        </header>
        
        <section>
            <?php 
                if(!isset($_POST['submit']))
                {
                    //This page should not be accessed directly. Need to submit the form.
                    echo "error; you need to submit the form!";
                }
            ?>    
        </section>
        
        <footer>
		    <p>&copy; 2017 Room4 Team</p>
    	</footer>
        
    </body>
</html>