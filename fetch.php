<?php
	include('conn.php');
	if(isset($_POST['fetch'])){
		?>
		<table class="table table-bordered table-striped">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Username</th>
				<th>Password</th>
				<th>Address</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<?php
					$query=mysqli_query($conn,"select * from user order by userid desc");
					while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><a href="delete.php?userid=<?php echo md5($row['userid']);?>"><button type="button" class="btn btn-danger">Delete</button>
						</a>
						</td>
					</tr>
					<?php
					}
				?>
			</tbody>
		</table>
		<?php	
	}
?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-danger').click(function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to delete this Member?")) {
                $.ajax({
                    type: "POST",
                    url: "delete_member.php",
                    data: ({
                        id: id
                    }),
                    cache: false,
                    success: function(html) {
                        $(".delete_mem" + id).fadeOut('slow');
                    }
                });
            } else {
                return false;
            }
        });
    });
</script>