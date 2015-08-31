<?php
  session_start();
$username =  $_SESSION['username'];
include('DBConnection.php');

//if the form has been submitted
if(isset($_POST['add_task']))
{
$task_date = $_POST['day'].' '.$_POST['month'].' '.$_POST['year'];
$task = $_POST['task'];

	
	$query = "INSERT INTO tasktbl (user, task, task_date, date_reg) VALUES ('$username', '$task','$task_date', NOW())";
	$result = mysql_query($query) or die ("Error in query: " . mysql_error());

	//if a result is returned
	if ($result)
	{
		echo"<script language='javascript'>alert('Task Successfully Added');window.location.href='mytask.php'</script> ";
		
		
		}
		else{
			echo "Oops! Try Again";
			}
	}?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager | New Task</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content" >
        <div class="demo-blog__posts mdl-grid">
          <div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col" >
            <div class="mdl-card__media mdl-color-text--grey-50">
<!--              <h3><a href="entry.html">Task Manager</a></h3>
-->            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
              <h5><a href="#">New Task </a></h5>
                <!--<strong>The Newist</strong>
                <span>2 days ago</span>-->
              </div>
            </div>
          </div>
         <div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
        <!--     <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent">
              <i class="material-icons mdl-color-text--white" role="presentation">add</i>
              <span class="visuallyhidden">add</span>
            </button>--> 
         <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
              <div>
                <strong>Manage That Task</strong>
              </div>
              <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
                <a href="new_task.php"><li class="mdl-menu__item mdl-js-ripple-effect">New Task</li></a>
               
                <a href="view_task.php"><li class="mdl-menu__item mdl-js-ripple-effect">View Task</li></a>
                <a href="logout.php"><li class="mdl-menu__item mdl-js-ripple-effect">Logout</li></a>
              
              </ul>
              <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">more_vert</i>
                <span class="visuallyhidden">show menu</span>
              </button>
            </div>
            <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
              <img src="images/logo1.jpg">
              
            </div>
           <h6>Welcome <?php echo $fname; ?></h6>
          </div>
        
          
          
        <!--  <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">New Task</a></h3>
            </div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div> -->
          <div class="mdl-card amazing mdl-cell mdl-cell--12-col">
            <!--<div class="mdl-card__title mdl-color-text--grey-50">
              <h3 class="quote"><a href="entry.html">Register an Account</a></h3>
            </div>-->
           
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
        <center>    <form method="post" action="">
        
  <br> 
  
  <select name="day" id="day">
  <?php for($day=1; $day<=31;$day++){ echo "<option value=$day>$day </option>" ;}?>  
    </select>
    <select name="month" id="month">
    <option value="Jan"> January</option>
    <option value="Feb"> Febuary</option>
    <option value="Mar"> March</option>
    <option value="Apr"> April</option>
    <option value="May"> May</option>
    <option value="Jun">June</option>
    <option value="Jul"> July</option>
    <option value="Aug">August</option>
    <option value="Sep"> September</option>
    <option value="Oct"> October</option>
    <option value="Nov"> November</option>
    <option value="Dec"> December</option>

    </select>
     <select name="year" id="year">
      <?php for($year=date("Y"); $year<=2020;$year++){ echo "<option value=$year>$year </option>" ;}?>  

    </select>

  <br> 
  <div class="mdl-textfield mdl-js-textfield">
  <textarea class="mdl-textfield__input" type="text" rows="3" maxrows="6"
   id="task" name="task"></textarea>
  <label class="mdl-textfield__label" for="task">New Task</label>
</div>
<br>

<!-- Colored raised button -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="add_task">
 New Task
</button>

</form></center>
            </div>
           <!-- <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>-->
          </div>
          <!--   <div class="mdl-card shopping mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="entry.html">Shopping</a></h3>
            </div>
           <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo"></div>
              <div>
                <strong>The Newist</strong>
                <span>2 days ago</span>
              </div>
            </div>
          </div>-->
         <!-- <nav class="demo-nav mdl-cell mdl-cell--12-col">
            <div class="section-spacer"></div>
            <a href="entry.html" class="demo-nav__button" title="show more">
              More
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_forward</i>
              </button>
            </a>
          </nav>-->
        </div>
        <footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
              <span class="visuallyhidden">Twitter</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
              <span class="visuallyhidden">Facebook</span>
            </button>
            <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
              <span class="visuallyhidden">Google Plus</span>
            </button>
          </div>
          <div class="mdl-mini-footer--right-section">
            <button class="mdl-mini-footer--social-btn social-btn__share">
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </button>
          </div> 
          <div class="mdl-mini-footer__left-section">
  <ul class="mdl-mini-footer__link-list">  <li>&copy;Task Manager App. Developed By Folaranmi Oluwatosin </li>
    
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
        </footer>
        
        
      </main>
      <div class="mdl-layout__obfuscator"></div>
      
    </div>
   <!-- <a href="https://github.com/google/material-design-lite/blob/master/templates/blog/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>
    -->
    
   
    
    
    
    <script src="material.min.js"></script>
  </body>
  <script>
    Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
      var link = el.querySelector('a');
      if(!link) {
        return;
      }
      var target = link.getAttribute('href');
      if(!target) {
        return;
      }
      el.addEventListener('click', function() {
        location.href = target;
      });
    });
  </script>
</html>
