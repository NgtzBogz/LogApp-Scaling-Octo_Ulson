<?php
require('config/config.php');
require('config/db.php');
$sql = "SELECT person_id,lastName, firstName,Address,logDate from person";
$result = mysqli_query($connect,$sql);
?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($result as $Dabs) : ?>
                    <tr>
                    <th scope="row"><?php echo $Dabs['person_id'];?></th>
                    <td><?php echo $Dabs['lastName'];?></td>
                    <td><?php echo $Dabs['firstName'];?></td>
                    <td><?php echo $Dabs['Address'];?></td>
                    <td><?php echo $Dabs['logDate'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>