<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/CSSfront.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Project</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" >
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <?php @include 'header.php'; ?>  
       
        <div class="container-fluid ">
            <div class="sidenav" style="margin-top:3%;">
                <a href="#start">Beauty Services</a>
                
                <a href="#1st">Sephora Makeup Services</a>
                <a href="#2nd">Benefit Brow Bar</a>
                <a href="#3rd">The BLOW On-The-Glow</a>
                <a href="#4rth">Sephora Skincare Services</a>
            </div>
            <div class="main " >
                <div class="row" id="beauty_Services">
                    <img  id="1st" style="width: 90%; margin-left: 5%; margin-top: 12%;" src="image/image1.jpg">
                </div>
                    <div   style="margin-left:5%; margin-top: 55%;">
                        <div class="row col-md-11 mt-5">
                            <div class="wrapper ">
                                <div class="card" style="margin-bottom:38%; ">
                                    <div class="content"  >
                                        <div class="card_image row col-md-4" id="left"><img  src="image/image2.jpg"></div>
                                        
                                        <div class="row col-8">
                                            <span class="card_head mx-4 mt-4" id="left" style="color: #dc143c; font-size:170%;font: bold;">Sephora Makeup Services</span>
                                            <p class="mx-4 mt-3">From touch up to glow up, do beauty services your way at Sephora. Whether you want to focus on one main feature, step out of your everyday with a Natural Glam or go all out with the Full Glam our team of Beauty Studio Artists are here to help. Book your service online and then visit us in-store to discover new looks, tips & tricks and redeem the cost of your service on new products to love.</p>
                                        </div>
                                        <div class="row col-md-2 mt-4" id="2nd"  >
                                           <button  class="btn btn-primary " style="margin-left:20%; " id="card_button" data-bs-toggle="modal" data-bs-target="#exampleModal1">More Details</button>
                                           <div class="modal fade" id="exampleModal1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1 "  style="color: #dc143c; font-size:170%;font: bold;">Sephora Makeup Services</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div><p>From touch up to glow up, do beauty services your way at Sephora. Whether you want to focus on one main feature, step out of your everyday with a Natural Glam or go all out with the Full Glam our team of Beauty Studio Artists are here to help. Book your service online and then visit us in-store to discover new looks, tips & tricks and redeem the cost of your service on new products to love.</p></div><br>
                                                            <div class="row" >
                                                                <div class="col-md-4"><img src="image/image3.jpg"></div>
                                                                <div class="col-md-7" >
                                                                    <h6 style="color: #dc143c;font: bold;">FOCUS FEATURE</h6>
                                                                    <p>$60 - 30 minutes</p>
                                                                    <p>An elevated makeup application that dedicates 30 minutes to focus on one feature. Book in for a standout smokey eye or winged liner, or take your complexion to the next level with a perfectly concealed, contoured and highlighted base.</p>
                                                                    <p>Terms & Conditions:</p>
                                                                    <p>Enjoy a makeover from our available selection (the “Makeover”) for a stipulated booking fee. Customers may redeem products equivalent to the value of the booking fee (after the application of all discounts and offers) at the time of the appointment only. Makeover and redemption are subject to availability. Prior booking for the Makeover must be made. Customer must submit a valid email address at the time of booking to receive a booking confirmation email, and must show the booking confirmation email to an in-store Beauty Advisor before the Makeover. Customers should be aware that if they are more than 15 minutes late for an appointment, Sephora may ask for the appointment to be rescheduled. Booking fee may not be used to redeem any other exclusions mentioned in-store and/or on Sephora.com.au. Product(s) redeemed is/are non-refundable and non-exchangeable.</p>
                                                                    
                                                                </div>
                                                            </div><br><hr>
                                                            <div class="row" >
                                                                <div class="col-md-4"><img src="image/image4.jpg"></div>
                                                                <div class="col-md-7" >
                                                                    <h6 style="color: #dc143c;font: bold;">NATURAL GLAM</h6>
                                                                    <p>$115 - 60 Minutes</p>
                                                                    <p>A step up from your everyday makeup, the Natural Glam is a full-face application for those who prefer a flawless with a lighter touch.</p>
                                                                    <p>Terms & Conditions:</p>
                                                                    <p>Enjoy a makeover from our available selection (the “Makeover”) for a stipulated booking fee. Customers may redeem products equivalent to the value of the booking fee (after the application of all discounts and offers) at the time of the appointment only. Makeover and redemption are subject to availability. Prior booking for the Makeover must be made. Customer must submit a valid email address at the time of booking to receive a booking confirmation email, and must show the booking confirmation email to an in-store Beauty Advisor before the Makeover. Customers should be aware that if they are more than 15 minutes late for an appointment, Sephora may ask for the appointment to be rescheduled. Booking fee may not be used to redeem any other exclusions mentioned in-store and/or on Sephora.com.au. Product(s) redeemed is/are non-refundable and non-exchangeable.</p>
                                                                    
                                                                </div>
                                                            </div><br><hr>
                                                            <div class="row" >
                                                                <div class="col-md-4"><img src="image/image5.jpg"></div>
                                                                <div class="col-md-7" >
                                                                    <h6 style="color: #dc143c;font: bold;">FULL GLAM</h6>
                                                                    <p>$140 - 90 minutes</p>
                                                                    <p>The ultimate service for makeup lovers, the Full Glam is perfect for your next big event. From a classic beauty look to a full Insta-glam this is the application with all the extra touches.</p>
                                                                    <p>Terms & Conditions:</p>
                                                                    <p>Enjoy a makeover from our available selection (the “Makeover”) for a stipulated booking fee. Customers may redeem products equivalent to the value of the booking fee (after the application of all discounts and offers) at the time of the appointment only. Makeover and redemption are subject to availability. Prior booking for the Makeover must be made. Customer must submit a valid email address at the time of booking to receive a booking confirmation email, and must show the booking confirmation email to an in-store Beauty Advisor before the Makeover. Customers should be aware that if they are more than 15 minutes late for an appointment, Sephora may ask for the appointment to be rescheduled. Booking fee may not be used to redeem any other exclusions mentioned in-store and/or on Sephora.com.au. Product(s) redeemed is/are non-refundable and non-exchangeable.</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div><br><hr><br>
                                    <div class="content" >
                                        <div class="card_image row col-md-4" id="left"><img  src="image/image6.jpg"></div>
                                        <div class="row col-8">
                                            <span class="card_head mx-4 mt-4" id="left" style="color: #dc143c; font-size:170%;font: bold;">BENEFIT BROW BAR</span>
                                            <p class="mx-4 mt-3">Treat yourself to one of our signature Benefit services. Our beloved beauty experts will wow your brows, get you glowin’ and so much more. You’ll leave looking and feeling more gorgeous than ever before.</p>

                                        </div>
                                        <div class="row col-md-2 mt-4" >
                                           <button  class="btn btn-primary " style="margin-left:20%; " id="card_button " data-bs-toggle="modal" data-bs-target="#exampleModal2">More Details</button><br><br><br><br><br><br>
                                           <p id="3rd" style="color:white;">jdcnsjkdcnksjdbckjwdnvckjedbvckefbfvjkjefbvkjfdbkjs</p> 

                                           <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel2 "  style="color: #dc143c; font-size:170%;font: bold;">BENEFIT BROW BAR</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div><p>Treat yourself to one of our signature Benefit services. Our beloved beauty experts will wow your brows, get you glowin’ and so much more. You’ll leave looking and feeling more gorgeous than ever before.</p></div><br>
                                                            <div class="row" style="font-size:80%">
                                                                <div class="col-md-4"><img src="image/image6.jpg"></div>
                                                                <div class="col-md-7" >
                                                                    <h6 style="color: #dc143c;font: bold;">BENEFIT BROW SERVICES</h6>
                                                                    <p>Start with a service, leave with a style. Benefit Brow services include a personalised consultation and brow mapping to help you discover the best brow shape to accentuate your features. Finish your look by selecting one of four Brow Styles. See it come to life and learn techniques from our Brow Experts to easily recreate at home. Get your most beautiful brows… it's a transformative experience, the ultimate NOW to WOW!</p><br>
                                                                    <h6 style="color: #dc143c;font: bold;">NEW SERVICES</h6>
                                                                    <p>Brow Lamination (including shaping) - $60</p>
                                                                    <p>Brow Lamination, Shaping and Tint - $77</p><br>
                                                                    <h6 style="color: #dc143c;font: bold;">MOST POPULAR</h6>
                                                                    <p>Brow Wax & Tint - $45</p>
                                                                    <p>Brow Wax, Tint & Lip Wax - $55</p>
                                                                    <p>Brow Wax, Tint, Lip Wax & Eye Mask - $60</p><br>
                                                                    <h6 style="color: #dc143c;font: bold;">BROW SERVICES</h6>
                                                                    <p>Brow Wax or Tweeze - $34</p>
                                                                    <p>Brow Wax & Eye Mask - $39</p>
                                                                    <p>Brow & Lip Wax - $44</p>
                                                                    <p>Brow Wax, Tint & Eye Mask - $50</p>
                                                                    <p>Brow, Lip, Chin & Sides Wax - $59</p><br>
                                                                    <h6 style="color: #dc143c;font: bold;">OTHER SERVICES</h6>
                                                                    <p>Brow Tint - $20</p>
                                                                    <p>Lip Wax - $17</p>
                                                                    <p>Chin or Sides Wax - $16</p>
                                                                    <p>Eye Mask - $8</p>
                                                                    <p>Lash tint - $30</p>
                                                                    <p>Brow and lash tint - $45</p>
                                                                    <p>Brow and lash tint with shape - $70</p><br>
                                                                    <p>Terms & Conditions:</p>
                                                                    <p>• Customers under the age of 18 must be accompanied by a legal guardian.</p>
                                                                    <p>• Customers should NOT be using: Accutane, Retin A, Retinol, any form of vitamin A, Antibiotics -Benzoyl Peroxide (clinical grade) or Laser peel, Phenol peel, Microdermabrasion (professional grade) and/or any other kind of peel within the last 6 months.</p><br>
                                                                    <p>I acknowledge that Benefit has made no particular representation or guarantee about the Services to me. I understand it is my responsibility to follow the advice and direction of my service professional during the Services and after-care advice (if any) provided to me.</p>
                                                                    
                                                                </div>
                                                            </div><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    <hr><br>
                                    <div class="content "  >
                                        <div class="card_image row col-md-4" id="left"><img  src="image/image7.jpg"></div>
                                        <div class="row col-8">
                                            <span class="card_head mx-4 mt-4" id="left" style="color: #dc143c; font-size:170%;font: bold;">THE BLOW ON-THE-GO</span>
                                            <p  class="mx-4 mt-3">Sephora's exclusive dry styling hair service, The BLOW On-The-Go is available at Sephora Chadstone.We know that life isn’t effortless, but your hair can be.</p>
                                        </div>
                                        <div class="row col-md-2 mt-4" >
                                           <button  class="btn btn-primary " style="margin-left:20%; " id="card_button" data-bs-toggle="modal" data-bs-target="#exampleModal3">More Details</button>
                                           <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel3 "  style="color: #dc143c; font-size:170%;font: bold;">THE BLOW ON-THE-GO</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div><p>Sephora's exclusive dry styling hair service, The BLOW On-The-Go is available at Sephora Chadstone.We know that life isn’t effortless, but your hair can be.</p></div><br>
                                                            <div class="row" >
                                                                <div class="col-md-4"><img src="image/image7.jpg"></div>
                                                                <div class="col-md-7"  >
                                                                    <h6 style="color: #dc143c;font: bold;">SEPHORA X THE BLOW ON-THE-GO</h6>
                                                                    <p>The BLOW On-The-Go is a fast and effortless dry style service, perfect for when you need style in a flash. Our team will use tongs or irons to create your desired look (think waves, bends or curls).</p><br>
                                                                    <p>With 7 head-turning styles to choose from, just arrive with clean, dry hair and we’ll serve you up a look in under 30 minutes, leaving you feeling polished, pronto.</p><br>
                                                                    <p>Services:</p>
                                                                    <p>Dry Style Short, $35, 20 mins</p>
                                                                   <p> Dry Style Long, $45, 30 mins</p>
                                                                   <p>Dry Style Extra Long: $55, 45 mins</p>
                                                                   <p>Hair Braiding: $15, 15 mins</p><br>
                                                                   <p>*Long hair relates to any length beyond the collarbone.</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    <hr><br>
                                    <div class="content" id="4rth">
                                        <div class="card_image row col-md-4" id="left"><img  src="image/image8.jpg"></div>
                                        <div class="row col-8">
                                            <span class="card_head mx-4 mt-4" id="left" style="color: #dc143c; font-size:170%;font: bold;">SEPHORA SKINCARE SERVICES</span>
                                            <p class="mx-4 mt-3">Hoping to get to know your skin better, want to learn which products work best for you or are simply in need of a quick skincare pick-me-up? Our Beauty Advisors are ready to help. Discover more about how you can book our skincare services or a consultation in stores.</p>
                                        </div>
                                        <div class="row col-md-2 mt-4" >
                                           <button  class="btn btn-primary " style="margin-left:20%; " id="card_button" data-bs-toggle="modal" data-bs-target="#exampleModal4">More Details</button>
                                           <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel4 "  style="color: #dc143c; font-size:170%;font: bold;">SEPHORA SKINCARE SERVICES</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" style="font-size:80%;">
                                                            <div><p>Hoping to get to know your skin better, want to learn which products work best for you or are simply in need of a quick skincare pick-me-up? Our Beauty Advisors are ready to help. Discover more about how you can book our skincare services or a consultation in stores.</p></div><br>
                                                            <div class="row" >
                                                                <div class="col-md-4"><img src="image/image9.jpg"></div>
                                                                <div class="col-md-7"  >
                                                                    <h6 style="color: #dc143c;font: bold;">SKINCREDIBLE SKIN CONSULTATION</h6>
                                                                    <p>Get to know your skin better in a free 15-minute consultation with a Beauty Advisor. Obtain your skin score and skincare recommendations with Skincredible, a dermatologist-grade skin analysis app. Walk-in welcome, no booking required. .</p><br>
                                                                    <p>What can you expect at a Skincredible skin consultation?</p>
                                                                    <p>Skincredible skin consultation is a quick and hassle-free service that starts with an in-app questionnaire to understand your lifestyle and product preferences. Our Beauty Advisor will then scan your skin using a dermatologist-grade skin analysis device. The consultation ends with our beauty advisor sharing skin scores and designing a customised skincare regime with product recommendations. Try out the products, ask questions and learn more about your skin.</p><br>
                                                                    <p>How does Skincredible work?</p>
                                                                    <p>Skincredible, By Sephora, is a breakthrough skin analysis app. This derma-grade precision device has 8 high-powered LED lights to create a precise lighting environment. A 30X zoom lens dramatically magnifies and measures pores and fine lines and a highly accurate moisture sensor scans the skin’s surface.</p><br>
                                                                    <p>If you’d like to know exactly what your skin needs—this is it.</p><br>
                                                                    <p>Identify your top skin concern and receive customized advice and skincare tips</p>
                                                                    <p>Your skin has special needs. Know if your skin is dehydrated or pores are clogged or if it is at risk of losing its firmness and elasticity. With Skincredible consultation, our beauty advisors will recommend the most relevant range of products that will address your skin’s top concerns. Feel free to try out these products at the store or track your skin’s progress every 3 weeks and see your scores improve! </p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>

        <section id = end class="end_wrapper">

    <?php @include 'footer.php'; ?> 
 
  
  
</section>   
<script src="js/admin_script.js"></script>

    <script>
     // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });


    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click",function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        // body...
    });
    
    </script>
      <script src="js/admin_script.js"></script>
</body>
</html>