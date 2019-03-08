<!DOCTYPE html>
<html>
    <head>
    <h1 style="text-align: center">Order Summary</h1>
    </head>
    
    <hr>
    <br></br>
    
    <body style="font-size: 25px">
        <!-- //Starting the session to get the session variable from last page-->
        <?php
        
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo "The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value-is : &euro;".$totalValue.".";
        ?>
        
        <br></br>
        <hr>
        <br></br>
        
        <div>
            <center>
                <form name="Finish" method="post" action="Homepage.html">
                    <input type="submit" name="btnFinish" id="btnReturn" onclick="" value="Finish" style="background-color: black; color: white; font-size: 40px">
                </form>
            </center>
        </div>
    </body>
</html>


