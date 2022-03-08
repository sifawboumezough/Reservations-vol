
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<script src="https://kit.fontawesome.com/62a937cd3d.js" crossorigin="anonymous"></script>
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="style.css"> -->
            
          
                <div class="container">
        <div class="row mt-4">
        <div class="card-body bg-dark">
            <div class="col-md-20 mx-auto">   
            <a href="<?php echo BASE_URL; ?>addflight" class="btn btn-sm btn-primary mr-2 mb-2">
                <i class="fa fa-plus mr-4"></i>
            </a>
            <a href="<?php echo BASE_URL; ?>avaibleFlights" class="btn btn-sm btn-primary mr-2 mb-2">
                <i class="fa fa-refresh mr-4"></i>
            </a>
            <form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Search ...">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
			</form>
            <table class="table table-striped table-dark">
            <thead>
                <tr>
                         <th scope="col">
                              Airline
                        </th>

                        <th scope="col">
                             Flight
                        </th>

                        <th scope="col">
                           Date
                        </th>
                        <th scope="col">
                            Departure
                        </th>

                        <th scope="col">
                            Departure Time
                        </th>
                       
                       
                        <th scope="col">
                            Arrival
                        </th>
                        <th scope="col">
                            Arrival Time
                        </th>
                        <!-- <th scope="col">
                            Price
                        </th> -->
                        
                        <!-- <th scope="col">
                            Action
                        </th> -->
                </tr>
            </thead>
             <tbody>
                    <?php foreach($flights as $flight):?>
		<tr>
                        <th><?php echo $flight['airline']; ?> </th>
                        <th><?php echo $flight['flight']; ?> </th>
                        <th><?php echo $flight['flight_date']; ?> </th>
                        <th><?php echo $flight['departure']; ?> </th>
                        <th><?php echo $flight['departure_time']; ?> </th>
                        <th><?php echo $flight['arrival']; ?> </th>
                        <th><?php echo $flight['arrival_time']; ?> </th>
                        <!-- <th><php echo $flight['price']; ?> </th> -->
                        <td>
                        <form method="post" action="reserve"> 
                            <td><input type="hidden" name="id" value="<?php echo $flight['flight_id'] ?>">
                            <button type="submit" name="" class="btn btn-sm btn-success" >Reserve Now</button></td>
                    </form>                                        
                            </td>
		</tr>
                    <?php endforeach; ?>
             </tbody>
            </table>
            </div>
        </div>
    </div>
            

    
                            
                  
                </div>
            </div>
        </div>

    </div>



   

</body>


    