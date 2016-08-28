<?php include_once 'connectSql.php';?>

<?php 
  $query = "SELECT * ";
  $query .= "FROM `society` ";
  $query .= "WHERE `idSoc` =".$_GET["idSoc"];
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("Database Query Failed!");
  }
?>

<?php include_once 'masthead.php';?>
    
    <title>Campus Beats</title>

   <!-- Page styles -->
    <?php
      include_once 'linkStyles.php';
      echo '<link rel="stylesheet" type="text/css" href="../styles/society.css">';
    ?>  
  </head>
    <body>
      
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <?php include_once 'header.php';?>

        <?php include_once 'sidebar.php';?>
        
        <!--The Main Container-->
      <div class="android-content mdl-layout__content"> 
		    <div class="android-wear-section" >

          <div class="android-wear-band" style="background-color: #037ef3;">
            
            <img src="images/aiesec.png" width="300px" height="300px" style="float:left">
            
            <div class="android-wear-band-text">
              
              <div class="mdl-typography--display-2 mdl-typography--font-thin">
                <span>Society Name</span>
              </div>
                
              <p class="mdl-typography--headline mdl-typography--font-thin">
                <?php 
                  $temp= mysqli_fetch_assoc($result);
                  print_r($temp);

                ?>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere vitae voluptas natus expedita possimus. Accusantium vitae, et quae est beatae distinctio. Sit magni saepe, iure id rerum totam soluta ipsa!
              </p>
              
              <p class="mdl-typography--headline mdl-typography--font-thin">
              	<i class="material-icons">call</i>&nbsp;1234567899
              	<i class="material-icons">place</i>&nbsp;destination
              	<i class="material-icons">web</i>&nbsp;Website
              	<i class="material-icons">email</i>&nbsp;email
              	<i class="material-icons">play_arrow</i>&nbsp;youtube
              </p>
              
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                  follow&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            
            </div>
          </div>
        </div>
 
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Monday</div>
          <div class="android-card-container mdl-grid">
          
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/s720x720/11954766_1384875601819218_8492013685678688266_n.jpg?oh=64921eb44eaf837e6b2d5593dabd5e38&oe=56765015&__gda__=1450003396_360c6ac670461547812f147a26c7fc3d">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Title of event</h4>
                 
                 <i class="material-icons" style="text-align:right">favorite_border</i>
               		 
              </div>
            <a href="#" style="text-decoration: none">&nbsp;&nbsp;&nbsp;&nbsp;Society Name</a>
              <div class="mdl-card__supporting-text">
                
                <span class="mdl-typography--font-light mdl-typography--subhead">13 OCT,  5:30 PM  T-105</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase   " href="">
                   Link
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

             <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/s720x720/11954766_1384875601819218_8492013685678688266_n.jpg?oh=64921eb44eaf837e6b2d5593dabd5e38&oe=56765015&__gda__=1450003396_360c6ac670461547812f147a26c7fc3d">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Title of event</h4>
                 
                 <i class="material-icons" style="text-align:right">favorite_border</i>
               		 
              </div>
            <a href="#" style="text-decoration: none">&nbsp;&nbsp;&nbsp;&nbsp;Society Name</a>
              <div class="mdl-card__supporting-text">
                
                <span class="mdl-typography--font-light mdl-typography--subhead">13 OCT,  5:30 PM  T-105</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase   " href="">
                   Link
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

             <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/s720x720/11954766_1384875601819218_8492013685678688266_n.jpg?oh=64921eb44eaf837e6b2d5593dabd5e38&oe=56765015&__gda__=1450003396_360c6ac670461547812f147a26c7fc3d">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Title of event</h4>
                 
                 <i class="material-icons" style="text-align:right">favorite_border</i>
               		 
              </div>
            <a href="#" style="text-decoration: none">&nbsp;&nbsp;&nbsp;&nbsp;Society Name</a>
              <div class="mdl-card__supporting-text">
                
                <span class="mdl-typography--font-light mdl-typography--subhead">13 OCT,  5:30 PM  T-105</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase   " href="">
                   Link
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

             <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/s720x720/11954766_1384875601819218_8492013685678688266_n.jpg?oh=64921eb44eaf837e6b2d5593dabd5e38&oe=56765015&__gda__=1450003396_360c6ac670461547812f147a26c7fc3d">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Title of event</h4>
                 
                 <i class="material-icons" style="text-align:right">favorite_border</i>
               		 
              </div>
            <a href="#" style="text-decoration: none">&nbsp;&nbsp;&nbsp;&nbsp;Society Name</a>
              <div class="mdl-card__supporting-text">
                
                <span class="mdl-typography--font-light mdl-typography--subhead">13 OCT,  5:30 PM  T-105</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase   " href="">
                   Link
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>
		


        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Campus Beats</p>
            <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
              Versions
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
             
              <li class="mdl-menu__item">beta</li>
            </ul>
            <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
              Developers
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
              <li class="mdl-menu__item">Soumik Praddhan</li>
              <li class="mdl-menu__item">Soham Ghosh</li>

            </ul>
            
            <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
          </div>

        </footer>
      </div>
    </div>
    <a href="" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"><i class="material-icons">add</i></a>
    <script src="../../material.min.js"></script>


  </body>
</html>
