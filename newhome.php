<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nhome.css">
    <title>Cmapus Event Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="navbar">
        <div class="logo">cems</div>
        <div class="menus">
           <div class="ithov"> <a class="items" href="#lori1">Home</a></div>
           <div class="ithov"><a class="items" href="#lori2">Add Events</a></div>
           <div class="ithov"><a class="items" href="#lori3">View Events</a> </div>
           <div class="ithov"><a class="items" href="Loggin.php">Log Out</a></div>
        </div>
        
    </header>         

    
        <section id="lori1">
           <p class="homepara" >Welcome <br>To Our<br> College Campus<br> Event<br> Management<br> System</p>
        </section>
        <section id="lori2">
            <div class="events">
                <form class="forms" action="add.php" method="post">
                    <div class="eves">Event:<input class="boxy" type="text" name="eventname" placeholder="event name"></div>
                    <div class="eves">Date:<input class="boxy" type="date" name="datew"></div>
                    <div class="eves">Time:<input class="boxy" type="time" name="timew"></div>
                    <div class="eves">Venue:<input class="boxy" type="text" name="venue" placeholder="enter venue"></div>
                    <div class="eves">Click on the buttoon to add</div>
                    <div class="Addwale"><button class="addbut" type="submit">Add Event</button></div>
                </form> 
                
            </div>
           
        </section>
        <section id="lori3">
        <table border="1" >
           <tr>
              <th>Event</th>
              <th>Date</th>
              <th>Time</th>
              <th>Venue</th>
              
              
           </tr>
          <?php
              $sever = "localhost";
              $username = "root";
              $password = "";
              $dbname = "campusmanage";

              $con = mysqli_connect($sever, $username, $password, $dbname);

              $sql = "select * from addeve";
              $result=mysqli_query($con,$sql);

                if ($result->num_rows > 0) 
                  {
                    while ($row = $result-> fetch_assoc()) 
                      {
                         echo "<tr><td>" . $row["eventname"] . "</td><td>" . $row["datew"] . "</td><td>" . $row["timew"] . "</td><td>" . $row["venue"] . "</td><td>" ;
                      }
                  }
                else
                 {
                 echo "No Results";
                }
                $con->close();
           ?>
         </table>

        </section>
    
    <footer class="footers">
        Thank You
    </footer>
</body>
</html>