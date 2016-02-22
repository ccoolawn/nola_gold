<?php session_start( );

//  set the total gold if it doesn't exist
if ( !isset($_SESSION['total_benjis'])){
    $_SESSION['total_benjis'] = 0;
}


// $_SESSION = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Making Benji's</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Yo Beniji's Player!!! Make it Rain!!!!! : <?php echo $_SESSION['total_benjis'] ?></h1>

   <div class='container'>
        <form class='boxes' action="process.php" method="post">
            <h4>Farm</h4>
            <p>(earns 10-20 benji's)</p>
            <input type="hidden" name="building" value="farm" />
            <!-- When button is clicked rand(10,20) is added to counter -->
            <input class='btn' type="submit" value="All About the Beniji's Baby!"/>
        </form>
        <form class='boxes' action="process.php" method="post">
            <h4>Cave</h4>
            <p>(earns 5-10 benji's)</p>
            <input type="hidden" name="building" value="cave" />
            <!-- When button is clicked rand(5,10) is added to counter -->
            <input class='btn' type="submit" value="All About the Beniji's Baby!"/>
        </form>
        <form class='boxes' action="process.php" method="post">
            <h4>House</h4>
            <p>(earns 2-5 benji's)</p>
            <input type="hidden" name="building" value="house" />
            <!-- When button is clicked rand(2,5) is added to counter -->
            <input class='btn' type="submit" value="All About the Beniji's Baby!"/>
        </form>
        <form class='boxes' action="process.php" method="post">
            <h4>Casino!</h4>
            <p>(earns/takes 0-550 benji's)</p>
            <input type="hidden" name="building" value="casino" />
            <!-- When button is clicked rand(-50,50) is added to counter -->
            <input class='btn' type="submit" value="All About the Beniji's Baby!"/>
        </form>
   </div>
        <h3>Activities:</h3><br>
   <div class="actbox">
        <?php
        if(isset($_SESSION['activities'])){
            foreach (array_reverse($_SESSION['activities']) as $activity){
                echo $activity;
            }
        } ?>
  </div>
<form class="resetbtn"action="process.php" method="post">
    <input name='reset' type='hidden' value='true'><br>
    <input class ='btn' type='submit' value='You want to take another ride in the 64?'>
</form>

</body>
</html>
