@extends('layouts.mylayout')
      
              @section('content')
      <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
   
    <!-- Section: featured project -->
    <section class="bg-lightest">
      <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-8 wow fadeInRight animation-delay6">
          <h4 class="text-uppercase line-bottom mt-0">Events</h4>
            <div class="bxslider bx-nav-top">
              <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                  <div class="col-md-6">
                  <h4 class="text-uppercase line-bottom mt-0"></h4>
                <div class="featured-project-carousel owl-nav-top">
              <div class="item">
                <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{asset('images/photos/featured1.jpg')}}">
                  </div>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div class="progress-bar" data-percent="85"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{asset('images/photos/featured1.jpg')}}">
                  </div>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div class="progress-bar" data-percent="85"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="{{asset('images/photos/featured1.jpg')}}">
                  </div>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div class="progress-bar" data-percent="85"></div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            </div> 
                <div class="col-xs-6 p-0 pl-15">
                  <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
                     <div class="donate-details">
                       <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                       <ul class="pull-right list-inline mt-15">
                         <li>Raised: $1890</li>
                         <li>Goal: $2500</li>
                       </ul>
                     </div>
                  </div>
                    <div class="event-content">
                      <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                      <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                      </ul>                    
                    </div>                
                  </div>
                  <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                      <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                  <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                      <img alt="..." src="{{asset('images/event/2.jpg')}}" class="media-object">
                    </div>
                  </div>
                  <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                      <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                      <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                      </ul>                    
                    </div>                
                  </div>
                  <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                      <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                  <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                      <img alt="..." src="{{asset('images/event/3.jpg')}}" class="media-object">
                    </div>
                  </div>
                  <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                      <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                      <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                      </ul>                    
                    </div>                
                  </div>
                  <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                      <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                  <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                      <img alt="..." src="{{asset('images/event/1.jpg')}}" class="media-object">
                    </div>
                  </div>
                  <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                      <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                      <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                      </ul>                    
                    </div>                
                  </div>
                  <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                      <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                <div class="row">
                  <div class="col-xs-3 p-0">
                    <div class="thumb pl-15">
                      <img alt="..." src="{{asset('images/event/2.jpg')}}" class="media-object">
                    </div>
                  </div>
                  <div class="col-xs-6 p-0 pl-15">
                    <div class="event-content">
                      <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                      <ul>
                        <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                        <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                      </ul>                    
                    </div>                
                  </div>
                  <div class="col-xs-3 pr-0">
                    <div class="event-date text-center">
                      <ul>
                        <li class="font-36 text-theme-colored font-weight-700">28</li>
                        <li class="font-20 text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        
      
    @include('include/slider')
    </div></div></section>

    <!-- Section: Causes -->
    <section> 
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Our Causes</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="{{asset('images/project/1.jpg')}}">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="84"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                  <li class="pull-left pr-0">Raised: $1890</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="{{asset('images/project/2.jpg')}}">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="85"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                  <li class="pull-left pr-0">Raised: $1890</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="{{asset('images/project/3.jpg')}}">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="86"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                  <li class="pull-left pr-0">Raised: $1890</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="{{asset('images/project/4.jpg')}}">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="87"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                  <li class="pull-left pr-0">Raised: $1890</li>
                  <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Donors</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Donate Now -->
    <section id="donate-now" class="divider"  data-bg-img="{{asset('images/bg/bg7.jpg')}}">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-7">
            <div class="bg-light-transparent p-40">
              <h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>
              
              <!-- Paypal Both Onetime/Recurring Form Starts -->
              <form id="paypal_donate_form_onetime_recurring">
                <div class="row">


                  <div class="col-md-12">
                    <div class="form-group mb-20">
                      <label><strong>Payment Type</strong></label> <br>
                      <label class="radio-inline">
                        <input type="radio" checked="" value="one_time" name="payment_type"> 
                        One Time
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="recurring" name="payment_type"> 
                        Recurring
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-12" id="donation_type_choice">
                    <div class="form-group mb-20">
                      <label><strong>Donation Type</strong></label>
                      <div class="radio mt-5">
                        <label class="radio-inline">
                          <input type="radio" value="D" name="t3" checked="">
                          Daily</label>
                        <label class="radio-inline">
                          <input type="radio" value="W" name="t3">
                          Weekly</label>
                        <label class="radio-inline">
                          <input type="radio" value="M" name="t3">
                          Monthly</label>
                        <label class="radio-inline">
                          <input type="radio" value="Y" name="t3">
                          Yearly</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <label><strong>I Want to Donate for</strong></label>
                      <select name="item_name" class="form-control">
                        <option value="Educate Children">Educate Children</option>
                        <option value="Child Camps">Child Camps</option>
                        <option value="Clean Water for Life">Clean Water for Life</option>
                        <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <label><strong>Currency</strong></label>
                      <select name="currency_code" class="form-control">
                        <option value="">Select Currency</option>
                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                        <option value="AUD">AUD - Australian Dollars</option>
                        <option value="BRL">BRL - Brazilian Reais</option>
                        <option value="GBP">GBP - British Pounds</option>
                        <option value="HKD">HKD - Hong Kong Dollars</option>
                        <option value="HUF">HUF - Hungarian Forints</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="ILS">ILS - Israeli New Shekels</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="MXN">MXN - Mexican Pesos</option>
                        <option value="TWD">TWD - New Taiwan Dollars</option>
                        <option value="NZD">NZD - New Zealand Dollars</option>
                        <option value="NOK">NOK - Norwegian Kroner</option>
                        <option value="PHP">PHP - Philippine Pesos</option>
                        <option value="PLN">PLN - Polish Zlotys</option>
                        <option value="RUB">RUB - Russian Rubles</option>
                        <option value="SGD">SGD - Singapore Dollars</option>
                        <option value="SEK">SEK - Swedish Kronor</option>
                        <option value="CHF">CHF - Swiss Francs</option>
                        <option value="THB">THB - Thai Baht</option>
                        <option value="TRY">TRY - Turkish Liras</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <label><strong>How much do you want to donate?</strong></label>
                      <select name="amount" class="form-control">
                          <option value="20">20</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="other">Other Amount</option>
                      </select>
                      <div id="custom_other_amount">
                        <label><strong>Custom Amount:</strong></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                    </div>
                  </div>
                </div>
              </form>
              
              <!-- Script for Donation Form Custom Amount -->
              <script type="text/javascript">
                $(document).ready(function(e) {
                  var $donation_form = $("#paypal_donate_form_onetime_recurring");
                  //toggle custom amount
                  var $custom_other_amount = $donation_form.find("#custom_other_amount");
                  $custom_other_amount.hide();
                  $donation_form.find("select[name='amount']").change(function() {
                      var $this = $(this);
                      if ($this.val() == 'other') {
                        $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                      }
                      else{
                        $custom_other_amount.children( ".input-group" ).remove();
                        $custom_other_amount.hide();
                      }
                  });

                  //toggle donation_type_choice
                  var $donation_type_choice = $donation_form.find("#donation_type_choice");
                  $donation_type_choice.hide();
                  $("input[name='payment_type']").change(function() {
                      if (this.value == 'recurring') {
                          $donation_type_choice.show();
                      }
                      else {
                          $donation_type_choice.hide();
                      }
                  });


                  // submit form on click
                  $donation_form.on('submit', function(e){
                          $( "#paypal_donate_form-onetime" ).submit();
                      var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                      var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                      var amount = $donation_form.find("select[name='amount'] option:selected").val();
                      var t3 = $donation_form.find("input[name='t3']:checked").val();

                      if ( amount == 'other') {
                        amount = $donation_form.find("#input_other_amount").val();
                      }

                      // submit proper form now
                      if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                          var recurring_form = $('#paypal_donate_form-recurring');

                          recurring_form.find("input[name='item_name']").val(item_name);
                          recurring_form.find("input[name='currency_code']").val(currency_code);
                          recurring_form.find("input[name='a3']").val(amount);
                          recurring_form.find("input[name='t3']").val(t3);

                          recurring_form.find("input[type='submit']").trigger('click');

                      } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                          var onetime_form = $('#paypal_donate_form-onetime');

                          onetime_form.find("input[name='item_name']").val(item_name);
                          onetime_form.find("input[name='currency_code']").val(currency_code);
                          onetime_form.find("input[name='amount']").val(amount);

                          onetime_form.find("input[type='submit']").trigger('click');
                      }
                      return false;
                  });

                });
              </script>



              <!-- Paypal Onetime Form -->
              <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="cn" value="Comments...">
                <input type="hidden" name="tax" value="0">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
              </form>
              
              <!-- Paypal Recurring Form -->
              <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
                <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


                <input type="hidden" name="p3" value="1">
                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="src" value="1">
                <input type="hidden" name="sra" value="1">
                <input type="hidden" name="no_shipping" value="0">
                <input type="hidden" name="no_note" value="1">                     
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
              </form>
              <!-- Paypal Both Onetime/Recurring Form Ends -->

            </div>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Gallery -->
    <section class="divider bg-lighter">
      <div class="container-fluid">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Gallery</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-isotope grid-5 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md1.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg1.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md2.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg2.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md3.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg3.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md4.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg4.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md5.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg5.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md6.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg6.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md7.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg7.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md8.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg8.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md9.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg9.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md10.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg10.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md11.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg11.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md12.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg12.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md13.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg13.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md14.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg14.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="{{asset('images/gallery/gallery-md15.jpg')}}" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="{{asset('images/gallery/gallery-lg15.jpg')}}"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Testimonials and Logo -->
    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.2" data-bg-img="{{asset('images/bg/bg4.jpg')}}">
      <div class="container pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-md-7">
            <div class="display-table-parent pr-90 pl-90">
              <div class="display-table">
                <div class="display-table-cell">
                  <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="{{asset('images/clients/1.png')}}" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="{{asset('images/clients/2.png')}}" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="{{asset('images/clients/3.png')}}" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="{{asset('images/clients/4.png')}}" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="{{asset('images/clients/5.png')}}" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="{{asset('images/clients/6.png')}}" alt="" width="100" class="mb-10">
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>                  
                  <div class="mt-30">
                    <h4 class="text-uppercase mb-5">Subscribe to our newsletter</h4>
                    <!-- Mailchimp Subscription Form-->
                    <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                      <label class="display-block" for="mce-EMAIL"></label>
                      <div class="input-group">
                        <input type="email" id="mce-EMAIL" data-height="43px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-flat btn-lg btn-colored btn-theme-colored m-0" data-height="43px">Subscribe</button>
                        </span>
                      </div>
                    </form>

                    <!-- Mailchimp Subscription Form Validation-->
                    <script type="text/javascript">
                      $('#mailchimp-subscription-form').ajaxChimp({
                          callback: mailChimpCallBack,
                          url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                      });

                      function mailChimpCallBack(resp) {
                          // Hide any previous response text
                          var $mailchimpform = $('#mailchimp-subscription-form'),
                              $response = '';
                          $mailchimpform.children(".alert").remove();
                          if (resp.result === 'success') {
                              $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          } else if (resp.result === 'error') {
                              $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          }
                          $mailchimpform.prepend($response);
                      }
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-light-transparent">
            <div class="pt-50 pb-50 pl-20 pr-20">
              <h4 class="text-uppercase line-bottom mt-0">Our Donors Say</h4>
              <div class="testimonial-carousel owl-nav-top">
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="{{asset('images/testimonials/1.jpg')}}"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="{{asset('images/testimonials/2.jpg')}}"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="{{asset('images/testimonials/3.jpg')}}"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: News -->
    <section>
      <div class="container pt-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Recent News</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="news-carousel owl-nav-top mb-sm-80" data-dots="true">
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{asset('images/blog/1.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{asset('images/blog/2.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{asset('images/blog/3.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{asset('images/blog/2.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="{{asset('images/blog/3.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
               
           <div class="col-md-12  row">

          <table class="table listingdata" >
  <tr >
    <th>id</th>
    <th>Name</th>
    <th>Title</th>
    <th>Type</th>
    <th>Description</th>
    <th>Video</th>
    <th>Images</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Pincode</th>
    <th>Account</th>
    <th>User Id</th>
    <th>Status</th>
         <th colspan="2"><center>Action</center></th>
   
   
  </tr>
  <tbody>
  @foreach($data as $key => $val)

    <tr >
      <td>{{$val['id']}}</td>
      <td>{{$val['name']}}</td>
      <td>{{$val['title']}}</td>
      <td>
      {{$val['event_type_rel']['type']}}</td>
      <td>{{$val['description']}}</td>
      <td>{{$val['video']}}</td>
      <td>{{$val['images']}}</td>
      <td>{{$val['phone']}}</td>
      <td>{{$val['address']}}</td>
      <td>{{$val['pin_code']}}</td>
      <td>{{$val['account']}}</td>
      <td>{{$val['user_id']}}</td>
      <td>{{$val['status']}}</td>
      <td>
      
      <a href="{{route('edit',['id'=>$val['id']])}}"> Edit</a><a href="{{route('delete',['id'=>$val['id']])}}"> Delete</a></td>
      
      
      <td>
       @if($val['status']==0)
       <a href="{{route('event.enable',['id'=>$val['id']])}}"><button class="btn btn-info"> Enable</button></a>
        @elseif($val['status']==1)
      <a href="{{route('event.disable',['id'=>$val['id']])}}"><button class="btn btn-danger"> Disable</button></a></td>
      
     

 @endif     

    </tr>
  @endforeach
  </tbody>
</table>
                 
           </div>  
                      





@stop