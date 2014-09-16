<?php
	include 'dbsetting.php';
	$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
	@mysql_selectdb($mysql_database,$conn);
	$result = mysql_query("select * from suggestion order by time desc",$conn);
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
