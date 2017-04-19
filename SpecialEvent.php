<?php
require('Model/TicketsModel.php');

?>

<?php

$specialevent ='<div style= "border: 1px solid #e7e7e7;">
		
		

	<!-- Container (TOUR Section) -->
	<div class="bg-1">
		<div class="container id="specialevent0">
			<h1 class="text-center">Special Event</h1>
		   <br>
		   <br>
		  
			<!--<p class="text-center">
				Lorem ipsum we willll play you some music.<br> Remember to book your
				tickets!
			</p>-->

			<div class="row text-center">
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="Images/niangao1.png" alt="Paris" width="400"
							height="300">
						<p>
							<strong>Culture Corner</strong>
						</p>
						<p>10 November 2016</p>
						<button class="btn btn-modal">Buy Tickets</button>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="Images/yezigao1.png" alt="New York" width="400"
							height="300">
						<p>
							<strong>Chinese Dessert Day</strong>
						</p>
						<p>20 November 2016</p>
						<button class="btn btn-modal">Buy Tickets</button>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail">
						<img src="Images/coffeenight1.png" alt="San Francisco" width="400"
							height="300">
						<p>
							<strong>Vegetarian Night</strong>
						</p>
						<p>29 November 2065</p>
						<button class="btn btn-modal">Buy Tickets</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close " data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
						<h4>
							 Special Event
						</h4>
					</div>
					<div class="modal-body">
						<form id = "ticketform" role="form" method="post" action="" style="text-align: left;" >
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span>
									Tickets, $23 per person</label> <input type="text"
									class="form-control" id="psw" name="tickets"
									placeholder="How many?" value=""> <span class="error"
									id="pswerror"> 
              <?php echo $ticketsErr;?></span>
							</div>

							<div class="form-group">
								<label for="booking-gender"><span
									class="glyphicon glyphicon-user"></span> Gender</label>
								<label class="radio-inline">
									<input type="radio"  name="gender" class="gender"
									
									value="nan">Male</label> 
		                       <label class="radio-inline">
									<input type="radio" name="gender" class="gender"
									
									value="nv">Female</label> <span class="error" id="gendererror">
										<?php echo $genderErr;?>
								</span>

							</div>

							<div class="form-group">
								<label for="booking-name"><span
									class="glyphicon glyphicon-user"></span> Name</label>
								<input type="text" class="form-control" id="booking"
									placeholder="Your name" name="name" value=""> <span
									class="error" id="bookingerror"> 
              <?php echo $nameErr;?></span>
							</div>

							<div class="form-group">
								<label for="booking-telep"><span
									class="glyphicon glyphicon-phone"></span> Telephone Number</label>
								<input type="text" class="form-control" id="booking-telep"
									placeholder="Telephone number" name="telep" value=""> <span
									class="error" id="booking-teleperror"> 
              <?php echo $telepErr;?></span>
							</div>

							<div class="form-group">
								<label for="usrname"><span class="glyphicon glyphicon-share-alt"></span>
									Send To</label> <input type="text" class="form-control"
									id="usrname" placeholder="Email address" name="email" value=""> <span
									class="error" id="usrnameerror"> 
              <?php echo $emailErr;?></span>
							</div>


						



							
							
						</form>



					</div>
					<div class="modal-footer">
		                <button type="button" class="btn btn-block submitbutton"
								name="submit" value="Submit">
								Confirm <span class="glyphicon glyphicon-ok"></span>
							</button>
						<button type="button" class="btn btn-block pull-left"
							data-dismiss="modal">
							 Cancel<span class="glyphicon glyphicon-remove"></span>
						</button>
						
					</div>
				</div>
			</div>
		</div>



	</div>	
		
</div>
		';
?>

<style>

</style>

