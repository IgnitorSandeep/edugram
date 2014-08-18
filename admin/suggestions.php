<?php
	$link = mysql_connect ("204.11.58.166:3306", "dbadmin","dbpass")  or die (mysql_error());
	mysql_select_db ("edugrmq5_db",$link);
	$result = mysql_query("select * from suggestion order by time desc",$link);
	?>
	<table class="table table-condensed success">
		<tr>
			<th>Name</th><th>Email</th><th>Suggestions</th><th>Time</th>
		</tr>
			<?php
			while ($row = mysql_fetch_array($result)){
				?>
				<tr>
					<td>
						<?php echo $row['fname']." ".$row['lname'];?>
					</td>
					<td>
						<?php echo $row['email'];?>
					</td>
					<td>
						<?php echo $row['suggestion'];?>
					</td>
					<td>
						<?php echo $row['time'];?>
					</td>
				</tr>
				<?php
			}
			?>
	</table>
