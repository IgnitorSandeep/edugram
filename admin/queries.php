<?php
	echo "<h4>Queries</h4>";
	include 'dbsetting.php';
	$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
	@mysql_selectdb($mysql_database,$conn);
	$result = mysql_query("select * from contactus where isreplied=0 order by _id",$conn);
	$count=1;
	?>
	<table class="table table-condensed">
		<thead><tr>
		<th width="10%">Email</th><th width="60%">Query</th><th width="7%">phone</th><th width="7%">Country</th><th width="10%">Time</th><th width="5%">Replied(Y/N)</th>
		</tr></thead>
			
			<?php
			while ($row = mysql_fetch_array($result)){
				
				?>
				<tr>
					<td>
						<?php echo $row['email'];?>
					</td>
					<td>
						<?php echo $row['query'];?>
					</td>
					<td>
						<?php echo $row['phone'];?>
					</td>
					<td>
						<?php echo $row['country'];?>
					</td>
					<td>
						<?php echo $row['time'];?>
					</td>
					<td>
						<?php 
						if($row['isreplied']==0){
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
