<?php
include 'invoice_header.php';
?>

<div class="row">
  <div class="col-9">
  	<h2> Create Order: </h2>
  	<hr>
  	<br>

  	<div class="col-6 col-md-4">
  	<lable class="col-sm">Store</lable>
        <div class="col-sm">
  	<select id="considerStatus">
  						<option value="" disabled="true" selected >Store Name</option>
                        <option value="abc">ABC</option>
                        <option value="xyz">XYZ</option>
                        <option value="abc">ABC</option>
                        <option value="xyz">XYZ</option>
    </select>
    </div>
  	</div>

  	<div class="col-6 col-md-4">
  	<lable class="col-sm">Product Type</lable>
        <div class="col-sm">
  	<select id="considerStatus">
  						<option value="" disabled="true" selected >Select Product Catagory</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
    </select>
    </div> 	
  	</div>

  	<div class="col-6 col-md-4">
  	<div class="col-sm-12" >
        <lable class="col-sm">Merchant Order Ref.</lable>
        <div class="col-sm">
     <input type="text" id="carry_fwd_status_edit">
 		</div>
    </div>
  	

  	</div>


  </div>
  
</div>
<br>
<br>
<hr>

<div class="row">

  <div class="col-8 col-sm-6">
  	<div class="row">
  <div class="col-sm-6" >
        <lable class="col-sm">Recipient Name </lable>
        <div class="col-sm">
     <input type="text" id="carry_fwd_status_edit">
 		</div>
 	</div>
    </div>

    <div class="row">
    <div class="col-sm-6" >
        <lable class="col-sm">Recipient Phone </lable>
        <div class="col-sm">
     <input type="text" id="carry_fwd_status_edit">
 		</div>
    </div>
	</div>

	<div class="row">
    <div class="col-sm-6">
    	<label for="consider_Status">Recipient Address </label>
    	<i class="fas fa-pencil-alt prefix"></i>
  					   <textarea id="purpose" name="purpose" class="md-textarea form-control" rows="3"
  					   style="margin: 0px 211px 10px 0px; width: 654px; height: 97px;"></textarea>
    </div>
    </div>

      <div class="row">

  	<div class="col-sm-6" >
        <lable class="col-sm">Recipient City </lable>
        <div class="col-sm">
     <select id="considerStatus">
  						<option value="" disabled="true" selected >Select City </option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
    </select>
 		</div>
    </div>
    
    
    <div class="col-sm-6" >
        <lable class="col-sm">Recipient Zone </lable>
        <div class="col-sm">
     <select id="considerStatus">
  						<option value="" disabled="true" selected >Select Zone </option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
    </select>
 		</div>
    </div>
</div>

	<div class="row">
    <div class="col-sm-6" >
        <lable class="col-sm">Recipient Area </lable>
        <div class="col-sm">
     <select id="considerStatus">
  						<option value="" disabled="true" selected >Select Area </option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
    </select>
 		</div>
    </div>
</div> 

  </div>





  <div class="col-4 col-sm-6" style="margin-left: 0px;left: 20px;"> <!-- right Side -->

  
  	<lable class="col-sm">Delivery Time</lable>
        <div class="col-6">
  	<select id="considerStatus">
  						<option value="" disabled="true" selected >Select Delivery Option </option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
                        <option value="abc">ABC</option>
    </select>	
  	</div>

  	<div class="row">

  	<div class="col-sm-6" >
        <lable class="col-sm">Quantity </lable>
        <div class="col-sm">
     <input type="text" id="carry_fwd_status_edit">
 		</div>
    </div>


 		
    <div class="col-6">
  	 <lable class="col-sm"> Weight(.kg)</lable>
        <div class="col-6">
       
  	<select id="considerStatus">
  						<option value="" disabled="true" selected >Select Weight </option>
                        <option value="abc">1-2kg</option>
                        <option value="abc">3-5kg</option>
                        <option value="abc">6-8kg</option>
                        <option value="abc">9-10kg</option>
    </select>	
  	</div>
  </div>
</div>

<div class="row">
	<div class="col-sm-6" >
        <lable class="col-sm">Amount To Collect  </lable>
        <textarea id="purpose" name="purpose" class="md-textarea form-control"
  					   style="margin: 0px -241.75px 10px 0px; width: 548px; height: 41px;"></textarea>
    </div>
</div>
<div class="row">

    <div class="col-sm-6" >
        <lable class="col-sm">Special Instruction  </lable>
        <textarea id="purpose" name="purpose" class="sm-textarea form-control"
  					   style="margin: 0px -241.75px 10px 0px; width: 548px; height: 41px;"></textarea>
    </div>
</div>
<div class="row">

    <div class="col-sm-6" >
        <lable class="col-sm">Item Description & Price  </lable>
        <textarea id="purpose" name="purpose" class="sm-textarea form-control"
  					   style="margin: 0px -241.75px 10px 0px; width: 548px; height: 41px;"></textarea>
    </div>


	</div>
	<div class="row">
		
    
    <button type="button" class="btn btn-primary btn-lg pull-right" style="
    margin-right: 80px;">Save</button>

	</div>
<div class="row">
	
</div>



  </div>
</div>

	



