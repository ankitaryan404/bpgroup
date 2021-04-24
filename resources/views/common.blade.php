<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>BP Groups</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- style CSS -->
     <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/style.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/owl.carousel.css') }}" />
     <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/owl.theme.green.css') }}" />
 
     <!--js links of carousel-->
     <script src="{{ asset('front_assets/js/jquery.min.js') }}" type="text/javascript"></script>
     <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
 
     <!--customisation js links of carousel-->
     <script src="{{ asset('front_assets/js/custom.js') }}" type="text/javascript"></script>
 
     <script src="https://use.fontawesome.com/3470e9a1a6.js"></script>
     <script
       src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
     ></script>
  </head>
  <body>	
    <!-- nav-bar code starts -->
    <nav>
      <div class="wrapper">
        <div class="logo_newdelhi_parentdiv">
          <div class="hamburger_div">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>

          <div class="logo">
            <p><a href="/">BP Group</a></p>
          </div>
        </div>
        <div class="logIn_btn_parentdiv">
          {{-- <div class="logindiv">
            <a href="#"
              >LogIn<span
                ><i class="fa fa-caret-down" aria-hidden="true"></i></span
            ></a>
            <div class="logIn_menu_box">
              <div class="logIn_content">
                <p>My activity</p>
                <div class="login_links">
                  <a href="#"><b>New to BP Group</b></a>
      
                  <hr />
                  <a href="login.html" class="button">LogIn</a>
                  <p>
                    New to BP Group?<a href="#" class="signuptext">SignUp</a>
                  </p>
                </div>
              </div>
            </div>
          </div> --}}

          <div class="btndiv">
            <div class="parentbtn">
              <a href="{{url('post-property')}}">Post Property</a>
              <div class="subbtn">
                <p>free</p>
              </div>
            </div>
            <!-- <span class="nav_parent_span">
        <p class="btntext">Post Property</p> 
        <span><p>free</p></span>
        </span> -->
          </div>
        </div>
      </div>
    </nav>
    <!-- nav-bar code ends -->
    <div id="main_blur_div">
<!-- nav-bar code ends -->
{{-- Content of the page starts  --}}

    @yield('content')

    {{-- Content of the page ends --}}
    </div>
    <x-contact_modal />

      <!-- footer code starts -->
      <footer>
        <div class="main_container">
          <div class="footertopcontent">
            <div class="left_sub_container">
              <div class="uppercontent">
                <p class="heading">Real Estate In India</p>
                <p>
                  <a href="#">Property in Delhi NCR</a> |
                  <a href="#">property in Mumbai</a> |
                  <a href="#">Property in Chennai</a> |
                  <a href="#">Property in Pune </a> |
                  <a href="#">Property in Noida</a> |
                  <a href="#">Property in Gurgaon</a> |
                  <a href="#"> Property in Bangalore | Property in Ahmedabad</a>
                </p>
              </div>
              <div class="bottomcontent">
                <p class="heading">New Projects In India</p>
                <p>
                  Property in Delhi NCR | property in Mumbai |Property in Chennai
                  | Property in Pune | Property in Noida |Property in Gurgaon |
                  Property in Bangalore | Property in Ahmedabad
                </p>
              </div>
            </div>
            <div class="right_sub_container">
              <div class="descriptionof_company">
                <p class="heading">About BP Group</p>
                <p>
                  Launched in 2021, BP Groups is India's No.1 online Property
                  marketplace to buy, sell, and rent residential and commercial
                  properties. Adjudged as the most preferred real estate portal in
                  India by various independent surveys.
                </p>
              </div>
              <div class="socialmediaicon_div">
                <a href="#"
                  ><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-instagram fa-2x" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i
                ></a>
                <a href="#"
                  ><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="bottomlinks">
            <ul>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
              <li class="links"><a href="#">sitemap</a></li>
            </ul>
          </div>
          <div class="disclaimer">
            <p>
              Disclaimer: BP Groups Private Services Limited is only an
              intermediary offering its platform to advertise properties of Seller
              for a Customer/Buyer/User coming on its Website and is not and
              cannot be a party to or privy to or control in any manner any
              transactions between the Seller and the Customer/Buyer/User. All the
              offers and discounts on this Website have been extended by Read more
            </p>
          </div>
        </div>
        <div class="allrightsreserved_div">
          <center>
            <p>
              All trademarks, logos and names are properties of their respective
              owners. All Rights Reserved. © Copyright 2021 BP Groups Private
              Services Limited.
            </p>
          </center>
        </div>
      </footer>
      <!-- footer code ends -->
  
      <!------ mobile view footer starts -------->
      <div class="mobile_footer_div">
        <div class="footer_links">
          <a href="#">About</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms</a>
          <a href="#">Site</a>
        </div>
      </div>
      <!------ mobile view footer ends ---------->
  
    
    </body>
  </html>

