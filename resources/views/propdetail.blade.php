@extends('common')
@section('content')
<div class="property_detail_parent_div">
	<div class="propertdetail_content_div">
		<div class="propertydetail_toplinks">

			<div class="links">
			<a href="#">Home ></a><a href="#">Property In New Delhi <i class="fa fa-caret-down" aria-hidden="true"></i> ></a><a href="#">Builder Floor for Sale in New Delhi <i class="fa fa-caret-down" aria-hidden="true"></i> ></a><a href="#">Builder Floor in Preet Vihar <i class="fa fa-caret-down" aria-hidden="true"></i> ></a><a href="#">3 BHK 190 Sq-yrd <i class="fa fa-caret-down" aria-hidden="true"></i></a>
			</div>

			<div class="property_id">
				Property ID:{{$prop_id->id}}
			</div>
		</div>

		
		<div class="content_div">
			<div class="price_and_type_div">

			<div class="price_div">
				<p class="price">
					<b>RS 2.55 cr</b>
				</p>
				<a href="#">see other charges</a>

			</div>
			<div class="type">
				<p class="typeof_property">
					<b> 3 BHK Builder Floor</b>

				</p>
				<p class="sub_text">for sale in <a href="#">
					preet vihar, New Delhi
				</a> </p>
			</div>
			</div>

			<div class="owner_info_div">
				<div class="name">
					<p>owner</p>
					<p><b>Amar Narang</b></p>
				</div>
				<div class="contact">
					<a href="#">Contact Now</a>
				</div>
			</div>

		</div>


		<div class="threelinks_parent_div">
			<div class="links">
			<a href="#" class="link_1">Property Detail</a>
			<a href="#" class="link_2">Locality Detail</a>
			<a href="#" class="link_3">Price Trends</a>
			</div>
			<div class="post_date">
				<p>Posted On: {{date("d-m-Y", strtotime($detail->created_at))}}</p>
			</div>
		</div>


		
		<div class="propertyin_detail">
			<div class="property_img">
			 <a href="#"><img src="images/img1_gallery.jpg"></a>	
			</div>

			<div class="property_detail">
				
				<div class="rooms">
					<div class="bedrooms">
						<p class="head">Bedrooms</p>
						<p>3</p>
					</div>
					<div class="bathroom">
						<p class="head">Bathroom</p>
						<p>3</p>
					</div>
					<div class="balconies">
						<p class="head">Balconies</p>
						<p>2</p>
					</div>
				</div>
				<hr>
				<div class="square_area">
					<div class="super_area">
						<p class="head">super area</p>
						159<select >
							<option>sqyrd</option>
							<option>sqm</option>
							<option>bigha</option>
							<option>hectare</option>
						</select>
						<p>13,450/sqm</p>
					</div>
					<div class="plot_area">
						<p class="head">Plot Area</p>
						190<select>
							<option>sqyrd</option>
							<option>sqm</option>
							<option>bigha</option>
							<option>hectare</option>
						</select>
					</div>
				</div>
				<hr>
				<div class="status_parent_div">
					<div class="column1">
						<p class="head">status</p>
						<p>Ready to move</p>
					</div>
					<div class="column2">
						<p class="head">Transaction Type</p>
						<p>New Property</p>
					</div>
					<div class="column3">
						<p class="head">Floor</p>
						<p>1(out of 4 floors)</p>
					</div>
					<div class="column4">
						<p class="head">Car parking</p>
						<p>None</p>
					</div>

				</div>
				<hr>
				<div class="finishded_div">
					<div class="furnished_div">
						<p class="head">Furnished status</p>
						<p>Furnished</p>
					</div>
					<div class="ownership_typ">
						<p class="head">
							Type of ownership
						</p>
						<p>Free Hold</p>
					</div>
					<div class="facing">
						<p class="head">
							Facing
						</p>
						<p>
							East
						</p>
					</div>
				</div>
				<hr>
				<div class="buttons_parent_div">
					<div class="buttonsdiv">
						<button onclick="open_cont_modal()">contact owner</button>
						<button>save for later</button>

					</div>
					<div class="feedback">
						<a href="#">Share property feedback</a> 
					</div>
				</div>

			</div>
		</div>



    <div class="saveproperty_ownerdetail_megadiv">

      <div class="savepropertydiv">
        <div class="savepropchild_div">
          <div class="imgdiv">
            <img src="images/house.png" alt="housepic">
          </div>
          <div class="textdiv">
            <p class="headtext">Save Property</p>
            <p class="subtext">Don't want to share your details with the agent right now?</p>
          </div>
          <div class="buttndiv">
            <a href="#" class="btn1">Save Property for Later</a>
          </div>
        </div>
      </div>

      <div class="ownerdetaildiv">
        <p class="text1">Owner</p>
        <p class="text2">Sabahat Hamidi</p>
        <p class="text3">+91 9426354879</p>
        <a href="#" class="btn2">Save for Later</a>      
      </div>

    </div>



    <div class="parent_div_description">
      <div class="descriptionchild_div">
        <div class="headtextdiv">
          <p class="text1">Description</p>
        </div>
        <div class="goodqulitytextdiv">
          <p class="text2">Good quality building with lift</p>
        </div>

        <div class="description">

          <div class="row1 rows">
          <div class="textproperty">
            <p>Price BreakUp</p>
          </div>
          <div class="text_value"><p>Rs 1.20 Cr</p></div>
          </div>

          <div class="row2 rows">
          <div class="textproperty">
            <p>Facilities</p>
          </div>
          <div class="text_value"><p>Lift,Reserved Parking</p></div>
          </div>

          <div class="row3 rows">
          <div class="textproperty">
            <p>Address</p>
          </div>
          <div class="text_value"><p>Opposite NIT, Patna</p></div>
          </div>

          <div class="row4 rows">
          <div class="textproperty">
            <p>Landmarks</p>
          </div>
          <div class="text_value"><p>Near NIT College, Bihta Patna</p></div>
          </div>

          <div class="row5 rows">
          <div class="textproperty">
            <p>Flooring</p>
          </div>
          <div class="text_value"><p>Granite, Marble</p></div>
          </div>

          <div class="row6 rows">
          <div class="textproperty">
            <p>Status of Electricity</p>
          </div>
          <div class="text_value"><p>No/Rare Powercut</p></div>
          </div>

          <div class="row7 rows">
          <div class="textproperty">
            <p>Lift</p>
          </div>
          <div class="text_value"><p>1</p></div>
          </div>


          <div class="row8 rows">
          <div class="textproperty">
            <p>Age of construction</p>
          </div>
          <div class="text_value">
            <p>5-10 Years</p>
          </div>
          </div>

          <div class="row9 rows">
          <div class="textproperty">
            <p>Units Available</p>
          </div>
          <div class="text_value"><p>1</p></div>
          </div>

          <div class="row10 rows">
          <div class="textproperty">
            <p>Furnishing</p>
          </div>
          <div class="text_value"><p>Unfurnished</p></div>
          </div>

          <div class="buttondiv">
            <a href="#">Enquiry Now</a>
          </div>

        </div>

      </div>
    </div>






</div>
</div>

@endsection
