
<?php include('header.php'); ?>
<div class="container">
  <div class="row">
    <div class="span3">
      <?php include('sidebar.php'); ?>
    </div>
    <div class="span9">
      <?php include('navbar.php') ?>
      <div class="alert alert-info">
        <strong><i class="icon-user icon-large"></i>&nbsp;Lesson 5</strong>
      </div>
      <video id="video1" width="650">
        <source src="videos\VID-20150310-WA0027.mp4" type="video/mp4" />
        Your browser does not support HTML5 video.
      </video><br></p>
      <div class="playpause">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="btn" class="btn btn-success" type="submit" name="Play" value="Play/Pause"/>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  var myVideo=document.getElementById("video1");
  var playButton=document.getElementById("btn");
  playButton.addEventListener("click",PlayPause,true)
  function Pause(){
    myVideo.pause();
  }
  function Play(){
    if (myVideo.paused)
      myVideo.play();
  }
  function PlayPause(){
    if(myVideo.paused===true){
      myVideo.play();
    }
    else{
      myVideo.pause();
      playButton.innerHTML = "<img src='' alt='playButton'>";
    }
  }
  </script>
<?php include('footer.php') ?>
