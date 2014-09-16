<?php
	echo "<h4>New Members</h4>";
	include 'dbsetting.php';
	$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
	@mysql_selectdb($mysql_database,$conn);
	$result = mysql_query("select * from volunteers where isverified=0 order by time",$conn);
	?>
	<table class="table table-condensed" >
		<thead><tr>
			<th width="25%">Name </th> <th width="30%">Email</th> <th width="20%">Phone</th> <th width="15%">Time</th> <th 1width="10%">Verified(Y/N)</th>
		</tr></thead>
			
			<?php
			while ($row = mysql_fetch_array($result)){
				
				?>
				<tr>
					<td>
						<?php echo $row['email'];?>
					</td>
					<td>
						<?php echo $row['fname']." ".$row['lname'];?>
					</td>
					<td>
						<?php echo $row['phone'];?>
					</td>
					<td>
						<?php echo $row['time'];?>
					</td>
					<td>
						<?php 
						if($row['isverified']==0){
							echo "N";
						}else{
							echo "Y";
						}
						?>
					</td>
				</tr>
				<?php
			}
			
			?>
	</table>
