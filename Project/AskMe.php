<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../css/normalize.css" type="text/css" rel="stylesheet"/>
      <link href="../css/styleTravel.css" type="text/css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
      <title>Travel Mood Is ON</title>
    </head>

    <body>
        
        <div id="project">
            <div class="header">
                <h1>Travel Mood Is <span style="font-family:'Caveat', cursive;">ON</span> &#9992;</h1>
            </div>
            
            <div class="row">
                <div class="navbar">
                    <a href="TravelMood.php">HOME</a>
                    <a href="destinations.php">DESTINATIONS</a>
                    <a href="#">BLOG</a>
                    <a href="AskMe.php">ASK ME</a>
                </div>
            </div>
            
            <div class="askMeMain">
                <h2>Contact us:</h2>
                <form class="askMeForm" method="post" action="http://localhost:8888/ProjectTravel/app/views/travelaskme.php">
                        <table>
                            <tr>
                                <td><label for="Name">First name:</label></td>
                                <td><input type="text" placeholder="Name" name="Name" required></td>
                            </tr>
                   
                            <tr>
                                <td><label for="Surname">Last name:</label></td>
                                <td><input type="text" placeholder="Last name" name="Surname" required></td>
                            </tr>
                 
                            <tr>
                                <td><label for="Email">Email:</label></td>
                                <td><input type="text" placeholder="Email" name="Email" required></td>
                            </tr>
                    
                            <tr>
                                <td><label for="Country">My dream destination is:</label></td>
                                <td><select name="Country" required>
                                    <option value="Australia">Australia</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="India">India</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Sri_Lanka">Sri Lanka</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Vietnam">Vietnam</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    
                    <div>
                        <label for="Message">Please enter Your Question:</label> 
                        <br>
                        <textarea name="Message" placeholder="I want to know more about..." required></textarea>
                    </div>
                    
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
            
            <div class="footer">
                <form class="subscribe" method="post" action="subscribe.php">
                  <input type="text" placeholder="Name" name="name" required>
                  <input type="text" placeholder="Email" name="email" required>
                  <input type="submit" value="Subscribe" name="subscribe">
                </form>
            
                <div class="socialMedia">
                    <span>Follow us on social media</span>
                    <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://www.twitter.com/"><i class="fa fa-twitter-square"></i></a>
                </div>
                
                <div class="copyright">&copy; <?php echo date('Y')?>. All Rights Reserved.</div>
            </div>
            
        </div>
    </body>
</html>
