<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=div, initial-scale=1.0">
            <link rel="stylesheet" href="style/gaya.css">
            <link rel="stylesheet" href="style/sirah.css">
           
</head>
<body>
        
            <div style="margin-left:180px; padding-top:20px">
                <ul>
                    <a href="index.php">Home</a>
                    <a> / </a> 
                    <a href="#">Contact Us</a>
                </ul>
            </div>
           <br>
           <center>
           <img src="img/LogoMovitria.png" style="width: 400px;"/>
            </center>
            <div style = "text-align:justify;" class="contentAboutUs">
                
                <h2><center>CONTACT MOVITRIA</center><h2><p>
                    <h4>We want to hear from you! Do you have any feedback or questions for us? If you have a question, we may already have the answer. Check our <a href="Faq.php">FAQs Section.</a></h4>
                        
            </div>
         <div style="margin:auto; width:600px" >
            
                <h4>Question Type</h4> 
                <select name="" id="">
                    <option value="Feedback">Feedback</option>
                    <option value="Suggestion">Suggestion</option>
                    <option value="Request">Request</option>
                    <option value="Other">Other</option>
                </select>
            
            
            <form action="#" method="post">
                <h4>Name</h4>
                <input type ="text" name="nama" placeholder="Your Name" require>
                <h4>Email</h4>
                <input type ="email" name="email" placeholder="Email" require>
                <h4>Phone Number</h4>
                <input type ="number" name="phone" placeholder=" Your Phone Number" maxlength="14" require>
                <h4>Message</h4>
                <textarea name="message" id="message" cols="20" rows="5" placeholder="Message"></textarea><br>
                <input type ="submit" name="submit" id="submit" value="Send"><br><br><br>
            </form>
        </div>
        <div>
            <?php 
            include("sikil.php");
            ?>
        </div>
    
</body>
</html>