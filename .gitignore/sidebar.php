<div class="side_dental">
		<script language="javascript" type="text/javascript">
			/* Visit http://www.yaldex.com/ for full source code
			and get more free JavaScript, CSS and DHTML scripts! */
			<!-- Begin
			var timerID = null;
			var timerRunning = false;
			function stopclock (){
			if(timerRunning)
			clearTimeout(timerID);
			timerRunning = false;
			}
			function showtime () {
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds()
			var timeValue = "" + ((hours >12) ? hours -12 :hours)
			if (timeValue == "0") timeValue = 12;
			timeValue += ((minutes < 10) ? ":0" : ":") + minutes
			timeValue += ((seconds < 10) ? ":0" : ":") + seconds
			timeValue += (hours >= 12) ? " P.M." : " A.M."
			document.clock.face.value = timeValue;
			timerID = setTimeout("showtime()",1000);
			timerRunning = true;
			}
			function startclock() {
			stopclock();
			showtime();
			}
			window.onload=startclock;
			// End -->
		</SCRIPT>
<p>
		<form name="clock">
		Time is:&nbsp;<input type="submit" class="trans" name="face" value="">
			</form>
</p>

							  <div class="alert alert-info">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date(' d/m/Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>

								<div class="navbar">
									<div class="navbar-inner">
										<div class="pull-right">
										</div>
									</div>
								</div>
								<ul class="nav nav-tabs nav-stacked">
									<li class="active">
										<a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home<i class="icon-arrow-right icon-large"></i></a>
									</li>
									<li><a href="lesson1.php"><i class="icon-list icon-large"></i>&nbsp;Lesson 1 - Killer T Ndamuda<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="lesson2.php"><i class="icon-list icon-large"></i>&nbsp;Lesson 2 - Guspy Warrior Joze<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="lesson3.php"><i class="icon-list icon-large"></i>&nbsp;Lesson 3 - Freeman Happy time<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="lesson4.php"><i class="icon-list icon-large"></i>&nbsp;Lesson 4 - Brandy Right here<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="lesson5.php"><i class="icon-list icon-large"></i>&nbsp;Lesson 5 - Terminator Rudo<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="lesson6.php"><i class="icon-list icon-large"></i>&nbsp;Lesson 6 - R City Locked Away<i class="icon-arrow-right icon-large"></i></a></li>
								</ul>
							</div>
