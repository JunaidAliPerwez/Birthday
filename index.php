<!DOCTYPE html>
<html>
   <head>
      <title>Birthday Party</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
      <!-- <main class="main">Main</main>
         <aside class="sidebar">Sidebar</aside> -->
      <section class="bdy-sec">
      	<form method="POST" action="sendmail.php" id="inquiry-form">
	        <div class="container">
	            <div class="bday" id="bouncy-one">
	               <div class="bouncy">
	                  <h4><span>Bouncy House</span></h4>
	                  <input type="checkbox" name="bouncy_house" class="touching" value="Bouncy House-1 hr Rental" data-price="125" data-desc="1 hour Rental $125">
	                  <label for="">1 hr Rental</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="bouncy-two">
	               <div class="bouncy">
	                  <h4><span>Characters</span></h4>
	                  <input type="radio" name="characters" class="touching" value="Characters-1 hr Rental" data-price="125" data-desc="1 hour Rental $125">
	                  <label for="">1 hr Rental</label>
	                  <br>
	                  <input type="radio" name="characters" class="touching" value="Characters-2 hr Rental" data-price="225" data-desc="2 hour Rental $225">
	                  <label for="">2 hr Rental</label>
	                  <p>Skits 15 min, photos, Happy<br>
	                     Birthday Songs
	                  </p>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="bouncy-three">
	               <div class="bouncy">
	                  <h4><span>Scooters</span></h4>
	                     <input type="checkbox" name="scooters" class="touching" value="Scooters-1 hr Rental" data-price="150" data-desc="1 hour Rental $150">
	                     <label for="">1 hr Rental</label>
	                  <p>$ 35 x 1   or    5 for $ 150.00</p>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="bouncy-four">
	               <div class="bouncy">
	                  <h4><span>Ballon Arches</span></h4>
	                  <input type="radio" name="ballon_arches" class="touching" value="Ballon Arches-1 hr Rental" data-price="100" data-desc="1 hour Rental $100">
	                  <label for="">1 hr Rental</label>
	                  <br>
	                  <input type="radio" name="ballon_arches" class="touching" value="Ballon Arches-2 hr Rental" data-price="175" data-desc="2 hour Rental $175">
	                  <label for="">2 hr Rental</label>
	                  <br>
	                  <input type="radio" name="ballon_arches" class="touching" value="Ballon Arches-3 sets of 12/w picture Frame" data-price="250" data-desc="3 sets of 12/w picture Frame $250">
	                  <label for="">3 sets of 12/w picture Frame $250</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="bouncy-five">
	               <div class="bouncy">
	                  <h4><span>Back Drops</span></h4>
	                  <input type="radio" name="back_drops" class="touching" value="Back Drops-2 hr Rental" data-price="100" data-desc="1 hour Rental $100">
	                  <label for="">1 hr Rental</label>
	                  <br>
	                  <input type="radio" name="back_drops" class="touching" value="Back Drops-2 hr Rental" data-price="175" data-desc="2 hour Rental $175">
	                  <label for="">2 hr Rental</label>
	                  <br>
	                  <input type="radio" name="back_drops" class="touching" value="Back Drops-3 sets of 12/w picture Frame" data-price="250" data-desc="3 sets of 12/w picture Frame $250">
	                  <label for="">3 sets of 12/w picture Frame $250</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="bouncy-six">
	               <div class="bouncy">
	                  <h4><span>Candy Table</span></h4>
	                  <div class="bouncy">
	                     <div class="standard">
	                     	<input type="radio" name="candy_table" class="touching" value="Candy Table-All services" id="all_service" data-price="250" data-desc="All services $250">
	                  		<label for="">All services $250</label>
	                        <ul>
	                           <li>Incudes: backdrop with stand and table cloth,</li>
	                           <li>Incudes: backdrop with stand and table cloth,</li>
	                           <li>Incudes: backdrop with stand and table cloth,</li>
	                        </ul>
	                     </div>
	                     <div class="standard">
	                        <ul>
	                           <li>Incudes: backdrop with stand and table cloth,</li>
	                           <li>Incudes: backdrop with stand and table cloth,</li>
	                           <li>Incudes: backdrop with stand and table cloth,</li>
	                        </ul>
	                     </div>
	                    <div class="customize">
		                  <input type="checkbox" name="candy_table" class="touching" value="Candy Table_Customized" id="custom_option" data-price="0.00" data-desc="Customized Table">
		                  <label for="">Customized Table</label>
		               </div>
	                    <a href=""><span class="show_amount_all" >$00.00</span></a>
	                    <a href=""><span class="show_amount" data-here="1">$00.00</span></a>

	                  </div>
	               </div>
	            </div>





<div class="bday show-more" id="bouncy-custom">
	               <div class="bouncy">
	                  <h4><span>Customized Table</span></h4>
	                  <div class="bouncy">
	                     <div class="main-standard">
 <div class="standard">
	                     <input type="checkbox" name="candy_table_custom[]" class="touching custo" value="Candy Table Customized-Hot dog bar includes chips" data-price="5" data-desc="Hot dog bar includes chips $5.00">
	                     <label for="">Hot dog bar includes chips</label>
	                     <br>
	                     <input type="checkbox" name="candy_table_custom[]" class="touching custo" value="Candy Table Customized-Polish bar" data-price="5" data-desc="Polish bar $5.00">
	                     <label for="">Polish bar $5.00</label>
	                     <br>
	                     <input type="checkbox" name="candy_table_custom[]" class="touching custo" value="Candy Table Customized-Chocolate bar" data-price="5" data-desc="Chocolate bar $5.00">
	                     <label for="">Chocolate bar $5.00</label>
	                  </div>
	                  <div class="standard">
	                     <input type="checkbox" name="candy_table_custom[]" class="touching custo" value="Candy Table Customized-Hot Chip bar" data-price="5" data-desc="Hot Chip bar $5.00">
	                     <label for="">Hot Chip bar $5.00</label>
	                     <br>
	                     <input type="checkbox" name="candy_table_custom[]" class="touching custo" value="Candy Table Customized-Sweet bar" data-price="5" data-desc="Sweet bar $5.00">
	                     <label for="">Sweet bar $5.00</label>
	                     <br>
	                     <input type="checkbox" name="candy_table_custom[]" class="touching custo" value="Candy Table Customized-Dipper box" data-price="5" data-desc="Dipper box $5.00">
	                     <label for="">Dipper box $5.00</label>
	                  </div>
	                     </div>

	                    <a href=""><span class="show_amount_all" >$00.00</span></a>
	                    <a href=""><span class="show_amount" data-here="1">$00.00</span></a>

	                  </div>
	               </div>
	            </div>








	            
	            <h3 id="foor">Food Menu</h3>
	            <div class="bday" id="pckg-one">
	               <div class="bouncy">
	                  <h4><span>Package # 1</span></h4>
	                     <input type="radio" name="food_menu[]" class="touching" value="Food Menu - Package 1" data-price="3.50" data-desc="Hot dog bar includes chips & juice $3.50 per kid">
	                     <label for="">Hot dog bar includes chips & juice $3.50 per kid</label>
	                     <br>
	                     <input type="radio" name="food_menu[]" class="touching" value="Food Menu - Package 1" data-price="5" data-desc="Polish bar $5.00">
	                     <label for="">Polish bar $5.00</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="pckg-two">
	               <div class="bouncy">
	                  <h4><span>Package # 2</span></h4>
	                     <input type="checkbox" name="food_menu[]" class="touching" value="Food Menu - Package 2" data-price="5" data-desc="Nacho Bar all Toppings/with meat $5.00">
	                     <label for="">Nacho Bar all Toppings/with meat</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="pckg-three">
	               <div class="bouncy">
	                  <h4><span>Package # 3</span></h4>
	                     <input type="radio" name="food_menu[]" class="touching" value="Food Menu - Package 3" data-price="4.25" data-desc="Nacho Bar all Toppings/with meat $4.25">
	                     <label for="">Pizza Bar your options Cheese $4.25 per person</label>
	                     <br>
	                     <input type="radio" name="food_menu[]" class="touching" value="Food Menu - Package 3" data-price="4.50" data-desc="Veggie - $4.50 per person pick 3 options">
	                     <label for="">Veggie - $4.50 per person pick 3 options</label>
	                     <br>
	                     <input type="radio" name="food_menu[]" class="touching" value="Food Menu - Package 3" data-price="5.00" data-desc="Greenpeppers, Onions, Red peppers, Mus spmanch Pepperoni - $5.00 per person">
	                     <label for="">Greenpeppers, Onions, Red peppers, Mus spmanch Pepperoni<br> - $5.00 per person</label>
	                     <br>
	                     <input type="radio" name="food_menu[]" class="touching" value="Food Menu - Package 3" data-price="5.50" data-desc="Italian Beef $5.50 with/without peppers">
	                     <label for="">Italian Beef $5.50 with/without peppers</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="pckg-four">
	               <div class="bouncy">
	                  <h4><span>Package # 4</span></h4>
	                     <input type="checkbox" name="food_menu[]" class="touching" value="Food Menu - Package 4" data-price="200" data-desc="Chicken & Fries 2slbs > $200">
	                     <label for="">Chicken & Fries 2slbs > $200</label>
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>
	            <div class="bday" id="pckg-five">
	               <div class="bouncy">
	                  <h4><span>Package # 5</span></h4>
	                  	
	                     <input type="checkbox" name="food_menu[]" class="touching" value="Food Menu - Package 5" data-price="5" data-desc="Fish - 12 - 24 - 36 - 48">
	                     <label for="">Fish - 12 - 24 - 36 - 48</label>
	                    
	                     
	                  <a href=""><span class="show_amount">$0.00</span></a>
	               </div>
	            </div>

	            <div class="bday" id="pckg-total">
	               <div class="bouncy">
	                  <h4 class="total"><span>Grand Total</span></h4>
	                    <input type="hidden" name="grand_total" id="grand_total">
	                  <h4><span id="grand_total_label">$0.00</span></h4>
	               </div>
	            </div>

	            <input type="hidden" name="body" id="body_maker">
	            
	            <div class="submit">
	               <a href="javascript:void(0)" id="submit-form">SUBMIT</a>
	            </div>
	        </div>
        </form>
      </section>
      <section class="thumbnail-sec">
         <div class="container">
            <div class="bdday" id="pckg-img">
               <div class="bouncy">
                  <img src="images/party-img-1.jpg">
                  <img src="images/party-img-2.jpg">
                  <img src="images/party-img-3.jpg">
               </div>
            </div>
         </div>
      </section>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="script.js"></script>      
   </body>
</html>