<?php include_once 'connectSql.php';?>

<?php 
  $query = "SELECT `idSoc` FROM society";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("Database Query Failed!");
  }
?>

<?php include_once 'masthead.php';?>
    
    <!-- Title of the page-->
    <title>Campus Beats</title>

    <!-- Page styles -->
    <?php
      include_once 'linkStyles.php';
      echo '<link rel="stylesheet" type="text/css" href="../styles/society.css">';
    ?>  
  </head>
    <body>
     
      <!-- The Main Body Container-->
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <?php include_once 'header.php';?>

        <?php include_once 'sidebar.php';?>

        <!--The Grid Container-->
        <div class="android-content mdl-layout__content">          
          <div class="android-more-section">
            <div class="android-card-container mdl-grid">
            
              <?php
                while($row = mysqli_fetch_row($result)){
                  $idSoc = $row[0];

                    //Each small element in the Grid

                    echo'<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">';
                    echo'<a href="societypage.php?soc='.$idSoc.'"><div class="mdl-card__media"><img src="../images/logoSoc/'.$idSoc.'.jpg"></div></a>';
                    echo'</div>';
                }  
              ?>
            
            </div>
          </div>
          
          <?php include_once 'footer.php';?>
        </div>

      </div>
      
      <!-- The Plus Button-->
      <a href="" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"><i class="material-icons">add</i></a>
      
      <?php include_once 'linkScripts.php';?>

    </body>
</html>
<?php include_once 'disconnectSql.php';?>
