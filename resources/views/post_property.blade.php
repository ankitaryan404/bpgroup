@extends('common')
@section('content')


<!-------------- side navbar coding starts --------------->
<!-------------- side navbar coding starts --------------->

<div class="side_bar">
  <div class="close_btn">
    <i class="fa fa-times" aria-hidden="true"></i>
  </div>
  <div class="login_div">
    <a href="login.html" class="login_btn">LogIn</a>
  </div>
  <div class="menu">
    <div class="item">
      <a href="#" class="sub_btn" >Buy <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Rent <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Sell <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Home Loans <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Property Services <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Resources <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
    <div class="item">
      <a href="#" class="sub_btn" >Help <i class="fa fa-angle-right dropdown" aria-hidden="true"></i></a>
      <div class="sub_menu">
        <a href="#" class="sub_item">sub Item 1</a>
        <a href="#" class="sub_item">sub Item 2</a>
        <a href="#" class="sub_item">sub Item 3</a>
        <a href="#" class="sub_item">sub Item 4</a>
      </div>
    </div>
  </div>
</div>
<!-- side navbar coding ends -->
<!-- side navbar coding ends -->

<div class="body_div">


<!-------------------------------- Basic Detail div code  starts----------------------------------->

<div class="basicdetail_parent_div">
	<div class="basicdetail_div">
		<p class="text">Basic Details(<span id="progress">0%</span>)</p>
	</div>
</div>
<!------------------------------ Basic Detail div code  ends  ---------------------------------->

<div class="postproperty_content_parent_div">

	<div class="pstproperty_leftcontent_div">

		<div class="div_content">

		<div class="pstproperty_content">
			<div class="headingtextdiv">
			<p class="headtext">Sell or Rent your Property</p>
			<p class="subtext">We've over 15 Lac buyers and tenants for you!</p>
			</div>
		</div>

		<div class="freeposting_div">
			<p class="text1">You are posting this property for <del>₹5000</del> <span>FREE</span> </p>
			<div class="textdiv">
				<p class="text2">Free Professional Photoshoot</p>
				<p class="text3">Get Contact Details of upto 5 Responses</p>
			</div>
			<p class="text4">Access to 15 Lac Buyers & Tenants</p>
		</div>

		<div class="personal_detail_parent_div">
			<div class="personaldetail_child_div">
				<p class="text">Personal Details</p>

				<div class="radiobtndiv">
					<P>I am</P>
			       <div class="radiobtndiv1">
				      
				      <label class="lablel1">
				      	<input type="radio" name="rad1">  Owner
				      </label>
			       </div>
					<div class="radiobtndiv2">
						
				      <label class="lablel1">
				      	<input type="radio" name="rad1">  Agent
				      </label>
					</div>
					<div class="radiobtndiv3">
					  
				      <label class="lablel1">
				      	<input type="radio" name="rad1">  Builder
				      </label>
					</div>
				
				</div>

			</div>
		</div>


		<div class="property_detail_parentdiv">
			<div class="propertydetail_child_div">

				<div class="headtext_div">
					<p class="text">Property Details</p>
					
				</div>
				<div class="radioselector_parentdiv">
					<p>For</p>
						<label for="">
							<input type="radio" name="rad1" class=""> Sale
						</label>
						<label for="">
							<input type="radio" name="rad1" class=""> Rent/Lease
						</label>
						<label for="">
							<input type="radio" name="rad1" class=""> PG/Hostel
						</label>
				</div>

				<div class="property_typ_parentdiv">
					<p class="text">Property Type</p>
					<div class="selector_div">
						<select name="" id="" class="property_typ_selector">
                            <option value="">Select Property Type</option>
                            <option value="">All Residential</option>
                            <option value="">Flat/Apartment</option>
                            <option value="">Residential House</option>
                            <option value="">Villa</option>
                            <option value="">Pent House</option>
                            <option value="">Studio Apartment</option>
                        </select>
					</div>
				</div>


				<div class="propertylocation_parentdiv">
					<div class="propertylocation_child_div">
						<div class="textdiv">
							<p class="text">Property Location</p>
						</div>
						<div class="citydiv">
							<label for="" class="city1">City</label><br>
							<input type="text" placeholder="Enter City">
						</div>
						<div class="localitydiv">
							<label for="" class="locality">Locality</label><br>
							<input type="text" placeholder="Enter Locality">
						</div>
					</div>

				</div>

				<div class="pst_login_btndiv">
					<a href="#" class="btn">LogIn & Post Property</a>
				</div>

				<div class="paragraph_parentdiv">
					<div class="headtext">
						<p>Looking to Sell or Rent your Flat?</p>
					</div>
					<div class="paradiv">Do you want to Sell your flat or put your house on rent? Magicbricks has the right solution for you.Your advertisement will be viewed by millions of buyers and tenants in India.Magicbricks provides you the best classified for your requirement. Our website offers one free property ad that you can use for selling or renting . You will be able to sell or rent every real estate property from flat or house to land , even commercial property fast and immediately.
 					</div>
				</div>
			</div>
		</div>

		</div>

	</div>

	<div class="pstproperty_right_content_div"></div>

</div>

	<!-- mobile view code starts -->
	<div class="imge_div">
		<img src="images/house.png" alt="housepic">
	</div>
	<div class="mobile_view_sellor_rentdiv">
		<div class="sellor_rent_contentdiv">
			<div class="div_texthead">
				<p class="heading1text">Sell or Rent your property</p>
				<p class="subheading">We have 15lac tenants and buyers for you</p>
			</div>

			<div class="postingfree_div">
				<p class="postfreetext">You are posting this property for <del>₹5000</del> <span>FREE</span></p>
				<div class="featuresdiv">
					<p class="text1">Free Professional Photoshoot</p>
					<p class="text2">Get Contact Details Upto 5 Responses</p>
					<p class="text3">Access to 15 lac buyers and tenants</p>
				</div>
			</div>

			<div class="continue_btn_div">
				<a href="#">continue</a>
			</div>

		</div>
	</div>
	<!-- mobile view code ends -->


</div>
@endsection