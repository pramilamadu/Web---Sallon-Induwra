<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Salon Induwara</title>

	<link rel="stylesheet" type="text/css" href="Book.css">

</head>
<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="booking-form-box">
			<div class="text-center">
				<br>
				<h3>BOOK AN APPOINTMENT</h3>
			</div>
			<br>


			<div class="booking-form">
				<form action="connect.php" method="post">
					<div class="input-grp">
				<label><h6>Name:</h6></label>
				<input type="text" placeholder="" class="form-control" id="name" name="name">

				<label><h6>Phone Number:</h6></label>
				<input type="text" class="form-control" id="phonenumber" name="phonenumber">
				<br>
				</div>
				
				<div class="input-grp">
				<label><h6>Select a Branch:</h6> </label>
				<select name="sbranch" class="Branch">
					<option value="sbranch" id="Anuradapura"  value="A">Anuradapura</option>
					<option value="sbranch" id="Medawachchiya" value="B">Medawachchiya</option>
				</select>
			    </div>

			    <div class="input-grp">
			    <label><h6>Date:</h6></label>
				<input type="date" class="form-control select-Date" id="date" name="date">
			    </div>
				

				<div class="input-grp">
				<label><h6>Email:</h6>  </label>
				<input type="text" class="form-control" id="email" name="email">
				<br>
				</div>

				<div class="input-grp">
				<label><h6>Select a Time:</h6> </label>
				<select name="time" class="Branch">
					<option value="time">9.00 AM</option>
					<option value="time">10.00 AM</option>
					<option value="time">11.00 AM</option>
					<option value="time">12.00 AM</option>
					<option value="time">2.00 PM</option>
					<option value="time">3.00 PM</option>
					<option value="time">4.00 PM</option>
					<option value="time">5.00 PM</option>
					<option value="time">6.00 PM</option>
					<option value="time">7.00 PM</option>
				</select>
				</div>

				<div class="input-grp">
				<label><h6>What Services Are You Looking For?</h6></label>
				<textarea name="message" value="message" class="Branch" rows="10" cols="45"></textarea>
				<br>
				</div>

				<div class="input-grp">
					<input type="submit" class="form-control" placeholder="submit">
				</div>


			</div>
				</form>
				
		</div>
				</div>
			</div>
		</div>
		


	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>


</body>
</html>