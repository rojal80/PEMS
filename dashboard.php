
    <?php 
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();
        header("Location:login.php");
    }
    if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
    }
    $user=$_SESSION['user'];
    include("layout/header.php");
    ?>
    <?php include("layout/sidepart.php");?>
    <div class="col-9">
               main
               <br><br><br><br><br><br><br><br><br><br><br>
            </div>

        </div>
     
    </div>
    <!--Main part end-->
    <?php include("layout/footer.php");?>
    