    <div id="navigation"> 
     <ul> 
       <li <?php if($page == "home"){ echo 'class="current"'; } ?>><a href="index.php">Home</a></li>
       <li <?php if($page == "about"){ echo 'class="current"'; } ?>><a href="about.php">About</a></li> 
<!--       <li <?php if($page == "news"){ echo 'class="current"'; } ?>><a href="news.php">News</a></li> 
-->       <li <?php if($page == "shows"){ echo 'class="current"'; } ?>><a href="shows.php">Shows</a></li>
       <li><a href="http://highhearts.bandcamp.com">Music</a></li>
       <li><a href="http://songs.highhearts.com">Lyrics &amp; Chords</a></li> 
       <li <?php if($page == "photos"){ echo 'class="current"'; } ?>><a href="photos.php">Photos</a></li>
      <!-- <li <?php if($page == "video"){ echo 'class="current"'; } ?>><a href="video.php">Video</a></li>  
    --> </ul> 
   </div>
   <!-- embed mailinglist -->
   <?php
   if($page != "photos"){
   	include("mailinglist.php"); 
   }
   ?>
