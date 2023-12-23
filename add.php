
                  <?php

                        $sever = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "campusmanage";

                        $con = mysqli_connect($sever, $username, $password, $dbname);

                        if($_SERVER['REQUEST_METHOD'] ==='POST')
                         {
                          $eventname=$_POST['eventname'];
                          $datew=$_POST['datew'];
                          $timew=$_POST['timew'];
                          $venue=$_POST['venue'];

                           $sql = "insert into addeve(eventname,datew,timew,venue) values ('$eventname','$datew','$timew','$venue')";
                          $result=mysqli_query($con,$sql);
                            if($result)
                             {
                             echo "GO back and go to view event section to view your entered events";
                             }
                           else{
                                echo "query failed!";
                            }
                          }

                       else
                         {
                         die(mysqli_error($con));  
                          }

                    ?>


