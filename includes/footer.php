<footer style="background-color: rgb(160,160,160); color: white; width: 100%; text-align: center;">
    <p><h5>trademark of tæknemi hf.
	©
    <?php
	$startYear = 2016;
	$thisYear = date('Y');
		if ($startYear == $thisYear) {
	 	 echo $startYear;
		} else {
		 echo "{$startYear} &ndash; {$thisYear}";
		}
?> tæknemi hf. All rights reserved. <a href=""> hafið samband</a></h5></p>
</footer>