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
          <a href="#" class="sub_btn"
            >Buy <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
          <div class="sub_menu">
            <a href="{{url('property-list/retail')}}" class="sub_item">Retail</a>
            <a href="{{url('property-list/officespace')}}" class="sub_item">Officespace</a>
            <a href="{{url('property-list/warehouse')}}" class="sub_item">Warehouse</a>
            <a href="{{url('property-list/residential')}}" class="sub_item">Residential</a>
            <a href="{{url('property-list/plot')}}" class="sub_item">Plot</a>
          </div>
        </div>
        <div class="item">
          <a href="#" class="sub_btn"
            >Rent <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
          <div class="sub_menu">
            <a href="#" class="sub_item">sub Item 1</a>
            <a href="#" class="sub_item">sub Item 2</a>
            <a href="#" class="sub_item">sub Item 3</a>
            <a href="#" class="sub_item">sub Item 4</a>
          </div>
        </div>
        <div class="item">
          <a href="#" class="sub_btn"
            >Sell <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
          <div class="sub_menu">
            <a href="#" class="sub_item">sub Item 1</a>
            <a href="#" class="sub_item">sub Item 2</a>
            <a href="#" class="sub_item">sub Item 3</a>
            <a href="#" class="sub_item">sub Item 4</a>
          </div>
        </div>
        <div class="item">
          <a href="#" class="sub_btn"
            >Home Loans
            <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
          <div class="sub_menu">
            <a href="#" class="sub_item">sub Item 1</a>
            <a href="#" class="sub_item">sub Item 2</a>
            <a href="#" class="sub_item">sub Item 3</a>
            <a href="#" class="sub_item">sub Item 4</a>
          </div>
        </div>
        <div class="item">
          <a href="#" class="sub_btn"
            >Property Services
            <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
          <div class="sub_menu">
            <a href="#" class="sub_item">sub Item 1</a>
            <a href="#" class="sub_item">sub Item 2</a>
            <a href="#" class="sub_item">sub Item 3</a>
            <a href="#" class="sub_item">sub Item 4</a>
          </div>
        </div>
        <div class="item">
          <a href="#" class="sub_btn"
            >Resources
            <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
          <div class="sub_menu">
            <a href="#" class="sub_item">sub Item 1</a>
            <a href="#" class="sub_item">sub Item 2</a>
            <a href="#" class="sub_item">sub Item 3</a>
            <a href="#" class="sub_item">sub Item 4</a>
          </div>
        </div>
        <div class="item">
          <a href="#" class="sub_btn"
            >Help <i class="fa fa-angle-right dropdown" aria-hidden="true"></i
          ></a>
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

    <!-- navbar links code starts -->
    <div class="navlinks_parent_div">
      <ul class="navlinks">
        <li>
          <!-- buy links code starts -->

          <div class="buy_btn_div">
            <a href="#" class="buy_btn">Buy</a>
            <span> <i class="fa fa-caret-down" aria-hidden="true"></i></span>

            <div class="mega_box">
              <div class="content">
                <div class="row">
                  <header>Popular Choices</header>
                  <ul class="mega_links">
                  <li>  <a href="{{url('property-list/retail')}}" >Retail</a></li>
                    <li>  <a href="{{url('property-list/officespace')}}" >Officespace</a></li>
                      <li>  <a href="{{url('property-list/warehouse')}}" >Warehouse</a></li>
                        
                  </ul>
                </div>

                <div class="row">
                  <header>Property Types</header>
                  <ul class="mega_links">
                    <li>    <a href="{{url('property-list/residential')}}" >Residence in Bihar</a></li>
                    <li>   <a href="{{url('property-list/plot')}}" >Plot in Bihar</a></li>
                    <li><a href="{{url('property-list/commercial')}}">Commercial Place in Bihar</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <!-- buy links code ends ---->
        </li>
        <li>
          <!-- Rent links code starts ---->
          <div class="rent_link_div">
            <a href="#" class="rent_link">Rent</a>
            <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <input type="checkbox" id="showmega" name="" />
            <label for="showmega" class="mobile_item">Mega Menu</label>
            <div class="mega_box1">
              <div class="content">
                <div class="row">
                  <header>Popular Choices</header>
                  <ul class="mega_links">
                    <li><a href="#">Owner Properties</a></li>
                    <li><a href="#">Verified Properties</a></li>
                    <li><a href="#">Furnished Homes</a></li>
                    <li><a href="#">Immediately Available</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>Property Type</header>
                  <ul class="mega_links">
                    <li><a href="#">Flats in Bihar</a></li>
                    <li><a href="#">House/villa in Bihar</a></li>
                    <li><a href="#">Office Space in Bihar</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <!-- Rent links code ends ---->
        </li>
        <li>
          <!-- sell links code starts ---->
          <div class="sell_link_div">
            <a href="#" class="sell_link">Sell</a>
            <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <input type="checkbox" id="showmega" name="" />
            <label for="showmega" class="mobile_item">Mega Menu</label>
            <div class="mega_box2">
              <div class="content">
                <div class="row">
                  <header>For Owner</header>
                  <ul class="mega_links">
                    <li><a href="#">Post Property </a></li>
                    <li><a href="#">My Dashboard</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>For Agent & Builder</header>
                  <ul class="mega_links">
                    <li><a href="#">My Dashboard</a></li>
                    <li><a href="#">Ad Packages</a></li>
                    <li><a href="#">iAdvantages</a></li>
                    <li><a href="#">Sales Enquiry</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>Selling Tools</header>
                  <ul class="mega_links">
                    <li><a href="#">Property Valuation</a></li>
                    <li><a href="#">Find an Agent</a></li>
                    <li><a href="#">Rates and Trends</a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Rent links code ends ---->
        </li>
      <li>
          <!-- Property Services links code starts ---->
          <div class="property_link_div">
            <a href="#" class="propertyservice_link">Property Services</a>
            <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <input type="checkbox" id="showmega" name="" />
            {{-- <label for="showmega" class="mobile_item">Mega Menu</label> --}}
            {{-- <div class="mega_box4">
              <div class="content">
                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- Property Services links code ends ---->
        </li>
        <li>
          <!-- Resources links code starts ---->
          <div class="resources_link_div">
            <a href="#" class="resources_link">Resources</a>
            <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <input type="checkbox" id="showmega" name="" />
            {{-- <label for="showmega" class="mobile_item">Mega Menu</label> --}}
            {{-- <div class="mega_box5">
              <div class="content">
                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- Resources links code ends ---->
        </li>
        <li>
          <!-- help links code starts ---->
          <div class="help_link_div">
            <a href="#" class="help_link">Help</a>
            <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            <input type="checkbox" id="showmega" name="" />
            {{-- <label for="showmega" class="mobile_item">Mega Menu</label>
            <div class="mega_box6">
              <div class="content">
                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>

                <div class="row">
                  <header>services</header>
                  <ul class="mega_links">
                    <li><a href="#">graphics</a></li>
                    <li><a href="#">vectors</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">customs</a></li>
                  </ul>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- Help links code ends ---->
        </li>
      </ul>
    </div>
    <!-- navbar links code ends -->

    <!-------------------------- search box section starts -------------------------->
    <!-------------------------- search box section starts -------------------------->
    <!-------------------------- search box section starts -------------------------->

    <div class="searchbox_parentdiv">
      <center>
        <p class="heading">Tagline of the BP Group</p>
      </center>
      <div class="search_category_div">
        <span class="category1"
          ><a href="#"><b>Buy</b></a>
        </span>
        <span class="category2"
          ><a href="#"><b>Rent</b></a>
        </span>
        <span class="category3"
          ><a href="#"><b>Sell</b></a>
        </span>
       
        <span class="category4"
          ><a href="#"><b>Plot</b></a>
        </span>
        <span class="category5"
          ><a href="#"><b>Commercial</b></a>
        </span>
        {{-- <span class="category6"
          ><a href="#"><b>Post Free AD</b></a>
        </span> --}}
      </div>
      <div class="serachbox_div">
        <form action="" method="">
          <input type="text" placeholder="Enter Location" />
          <select name="" id="">
            <option value="">Property Type</option>
            <option value="retail">Retail</option>
            <option value="officesapce">Officespace</option>
            <option value="warehouse">Warehouse</option>
            <option value="residential">Residence</option>
          </select>

          <select name="" id="">
            <option value="">Budget</option>
            <option value="">Rs 2 Lac</option>
            <option value="">Rs 5 Lac</option>
            <option value="">Rs 10 Lac</option>
            <option value="">more than 15 Lac</option>
          </select>
          <input type="submit" value="search" />
        </form>
      </div>

      <div class="mobile_searchbox_div">
        <form action="" method="">
          <input type="text" placeholder="Search By City,Locality ,Project" />
          <div class="btn">
            <a href="#"><i class="fa fa-search" aria-hidden="true"></i> </a>
          </div>
        </form>
      </div>
    </div>
    <!---------------------- search box section ends --------------------------->
    <!---------------------- search box section ends --------------------------->
    <!---------------------- search box section ends --------------------------->

    <!-- Because you search Bihar starts  -->
    <div id="bczyousearch_Parent_div">
      <div class="slider_heading">
        <p class="heading">Properties you may interested in</p>
        <!-- <p class="see_all_link">See all Properties</p> -->
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="property_detail">
            <p>10+ <b>Retail Properties Listed for you</b></p>
            <br />
            <a href="{{url('property-list/retail')}}"
              >Click to continue
              <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <div class="item">
          <div class="property_detail">
            <p><b>Top Commercial projects for you</b></p>
            <br />
            <a href="{{url('property-list/commercial')}}"
              >See all <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <div class="item">
          <div class="property_detail">
            <p><b>Top warehouses properties for you</b></p>
            <br />
            <a href="{{url('property-list/warehouse')}}"
              >See all <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <div class="item">
          <div class="property_detail">
            <p><b>Top plots for you</b></p>
            <br />
            <a href="{{url('property-list/plot')}}"
              >See all <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Because you search Bihar ends  -->

    <!-- Popular Owner Properties section item slider starts -->

    <div id="popularowner_Parent_div">
      <div class="slider_heading">
        <p class="heading">Retail Property</p>
        <!-- <p class="see_all_link">See all Properties</p> -->
        <a href="{{url('property-list/retail')}}" class="seeall_link"
          >See all Properties
          <i class="fa fa-arrow-right" aria-hidden="true"></i
        ></a>
      </div>

      <div class="owl-carousel owl-theme">
        @foreach($retail as $retail)
      
        <div class="item">
          <a href="detail/retail/{{$retail->slug}}">
          <div class="img">
            <img
              src="{{ asset('storage/media/'.$retail->banner_pic) }}"
              alt="flat_pic"
            />
          </div>
          <div class="property_detail">
            <p>2,BHK Flat</p>
            <p><b>Rs 20 Lac | Rs 450 sqft</b></p>
            <p>Rama park, Nawada , Bihar</p>
            <p>Ready to Move</p>
            <div class="overlay">
              <a href="javascript:void(0)" class="buttn" onclick="open_cont_modal()">Contact Owner</a>
            </div>
          </div>
        </a>
        </div>
       
        @endforeach
      </div>
    </div>
    <!-- Popular Owner Properties section item slider ends -->

    <!---- property services item slider starts ---->

    <div id="propertyservices_Parent_div">
      <div class="slider_heading">
        <p class="heading">Commercial Property</p>
        <!-- <p class="see_all_link">See all Properties</p> -->
        <a href="{{url('property-list/commercial')}}" class="seeall_link"
          >See all Properties
          <i class="fa fa-arrow-right" aria-hidden="true"></i
        ></a>
      </div>

      <div class="owl-carousel owl-theme">
        @foreach($officespace as $officespace)
        <div class="item">
          <a href="detail/officespace/{{$officespace->slug}}">
          <div class="img">
             <img  src="{{ asset('storage/media/'.$officespace->banner_pic) }}" alt="flat_pic" />
          </div>
          <div class="property_detail">
            <p><b>Home Decor</b></p>
            <p>
              Transform your space with our<br />
              trusted decor partners
            </p>
            <div class="overlay">
              <a href="javascript:void(0)" class="buttn" onclick="open_cont_modal()">Contact Owner</a>
            </div>
          </div>
          </a>
        </div>
        @endforeach
       
      </div>
    </div>
    <!-- Popular Owner Properties section item slider ends -->

    <!-- Top Projects item slider starts -->
    <div id="top_projects_Parent_div">
      <div class="slider_heading">
        <p class="heading">Warehouse</p>
        <!-- <p class="see_all_link">See all Properties</p> -->
        <a href="{{url('property-list/warehouse')}}" class="seeall_link"
          >See all Properties
          <i class="fa fa-arrow-right" aria-hidden="true"></i
        ></a>
      </div>

      <div class="owl-carousel owl-theme">
        @foreach($warehouse as $warehouse)
        <div class="item">
          <a href="detail/warehouse/{{$warehouse->slug}}">
          <div class="img">
            <img
              src="{{ asset('storage/media/'.$warehouse->banner_pic) }}"
              alt="flat_pic"
            />
          </div>
          <div class="property_detail">
            <p><b>Home Decor</b></p>
            <p>
              Transform your space with our<br />
              trusted decor partners
            </p>
            <div class="overlay">
              <a href="javascript:void(0)" class="buttn" onclick="open_cont_modal()">Contact Owner</a>
            </div>
          </div>
          </a>
        </div>
        @endforeach

        
      </div>
    </div>
    <!-- top projects section item slider ends -->

    <!-- Trending in Bihar item slider starts -->
    <div id="trendingindelhi_Parent_div">
      <div class="slider_heading">
        <p class="heading">Residential</p>

        <a href="{{url('property-list/residential')}}" class="seeall_link"
          >See all Properties
          <i class="fa fa-arrow-right" aria-hidden="true"></i
        ></a>
      </div>

      <div class="owl-carousel owl-theme">
        @foreach($residential as $residential)
        <div class="item">
          <a href="detail/residential/{{$residential->slug}}">
          <div class="img">
            <img
              src="{{ asset('storage/media/'.$residential->banner_pic) }}"
              alt="flat_pic"
            />
          </div>
          <div class="property_detail">
            <p>2 BHK Multistorey Apartment</p>
            <p><b>Rs 21 Lac</b></p>
            <p>Chajjupur, Baburpur , Bihar<br />Ready To Move</p>
            <div class="overlay">
              <a href="javascript:void(0)" class="buttn" onclick="open_cont_modal()">Contact Owner</a>
            </div>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
    <!-- trending in Bihar item slider ends -->
    <!-- Trending in Bihar item slider starts -->
    <div id="trendingindelhi_Parent_div">
      <div class="slider_heading">
        <p class="heading">Plot</p>

        <a href="{{url('property-list/plot')}}" class="seeall_link"
          >See all Properties
          <i class="fa fa-arrow-right" aria-hidden="true"></i
        ></a>
      </div>

      <div class="owl-carousel owl-theme">
        @foreach($plot as $plot)
        <div class="item">
          <a href="detail/plot/{{$plot->slug}}">
          <div class="img">
            <img
              src="{{ asset('storage/media/'.$plot->banner_pic) }}"
              alt="flat_pic"
            />
          </div>
          <div class="property_detail">
            <p>2 BHK Multistorey Apartment</p>
            <p><b>Rs 21 Lac</b></p>
            <p>Chajjupur, Baburpur , Bihar<br />Ready To Move</p>
            <div class="overlay">
              <a href="javascript:void(0)" class="buttn" onclick="open_cont_modal()">Contact Owner</a>
            </div>
          </div>
          </a>
        </div>
       @endforeach
      </div>
    </div>
    <!-- trending in Bihar item slider ends -->

    <!-- tools and advice item slider starts -->
    <div id="toolsand_advice_parentdiv">
      <div class="heading_div">
        <p class="heading">Tools and Advice</p>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="rates_and_trends">
            <center>
              <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
            </center>
            <center><p class="text1">Rates and Trends</p></center>
            <p>Know all about property rates and trends in your city</p>
            <a href="#"
              >view now <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <div class="item">
          <div class="Research_Inside">
            <center><i class="fa fa-inr fa-2x" aria-hidden="true"></i></center>
            <center><p class="text1">Investment Hotspot</p></center>
            <p>Discover the top localities in your city for investment</p>
            <a href="#"
              >view now <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <div class="item">
          <div class="Investment_Hotspot">
            <center>
              <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
            </center>
            <center><p class="text1">Research Insite</p></center>
            <p>Get Experts Insights and research reports on real estate</p>
            <a href="#"
              >view now <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <div class="item">
          <div class="Emi_Calculator">
            <center>
              <i class="fa fa-calculator fa-2x" aria-hidden="true"></i>
            </center>
            <center><p class="text1">EMI Calculator</p></center>
            <p>Know how much you have to pay every month on your loan</p>
            <a href="#"
              >view now <i class="fa fa-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- tools and advice item slider ends -->

    <!-- Bihar Property Sanpshot code starts -->
    <div class="newdelhisnapshot_parent_div">
      <div class="heading">
        <p>Bihar Property Snapshot</p>
      </div>
      <div class="newdelhidanpshot_child_div">
        <div class="snapshot_description_div">
          <p class="description_text">
            Bihar is the most populous city in India. Being the capital city
            of India, Bihar is a suburb of Delhi, situated on the banks of
            Yamuna. The city is known for its developing real estate market that
            is growing everyday due to huge number of migrants. Bihar is the
            Northern Indian state, which is known for its modern and rich
            infrastructure and contemporary architecture. Along with all the
            aforementioned attraction Bihar is a stunning...<a href="#"
              >Read More</a
            >
          </p>
        </div>
        <div class="propertiesInnumber_parent_div">
          <div class="properties1">
            <center>
              <b>6425+</b>
              <p>Low Budgets Flats In Bihar</p>
            </center>
          </div>
          <div class="properties2">
            <center>
              <b>21473+</b>
              <p>Low Budgets Flats In Bihar</p>
            </center>
          </div>
          <div class="properties3">
            <center>
              <b>172+</b>
              <p>Low Budgets Flats In Bihar</p>
            </center>
          </div>
          <div class="properties4">
            <center>
              <b>12011+</b>
              <p>Low Budgets Flats In Bihar</p>
            </center>
          </div>
        </div>
      </div>
    </div>
    <!-- Bihar Property Sanpshot code ends -->

    <!-- post your property for free section starts -->
    <div class="postfree_parent_div">
      <div class="postfree_child_div">
        <div class="text">
          <p>Post Your Property For Free</p>
          <p>List It On BP Group and get genuine leads</p>
        </div>
        <div class="button">
          <span class="parent_span">
            <p><b>Post Property</b></p>
            <span><p>free</p></span>
          </span>
        </div>
      </div>
    </div>
    <!-- post your property for free section ends -->

    @endsection
