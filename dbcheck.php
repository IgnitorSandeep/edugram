<?php
	$link = mysql_connect ("localhost","sandeeui_edugram","dbpass123")  or die (mysql_error());
	@mysql_select_db ("sandeeui_edugram",$link);
	$result = mysql_query("select * from recents",$link);
	while ($row = mysql_fetch_array($result)){
		if($row['link']!=""){
			echo "<p>";
			?>
			<img src="image/icons/arrow.png" alt="- ">
			<?php
			echo"<a href=".$row[link]." target='_blank'>";
			echo " ".$row['title'];
			echo "</a>";
			echo"</p>";
		}else{
			echo "<p>";
			?>
			<img src="image/icons/arrow.png" alt="- ">
			<?php
			echo " ".$row['title'];
			echo"</p>";
		}
	}
?>				