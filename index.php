<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Urbanwal Realty</title>
   <?php include 'include/head-links.php'; ?>
   <meta property="og:url" content="<?php echo $page_url ?>">
   <meta property="og:title" content="">
   <meta property="og:description" content="">
   <meta property="og:image" content="images/logo.png">
   <meta name="twitter:card" content="">
   <meta name="twitter:site" content="<?php echo $page_url ?>">
   <meta name="twitter:title" content="">
   <meta name="twitter:description" content="">
   <meta name="twitter:image" content="images/logo.png">
</head>

<body onload="createCaptcha();">
   <div class="wrapper">
      <?php include 'include/header.php'; ?>
      <div class="heroBanner">
         <div class="bannerContent">
            <h1 class="large_heading text-white letterSpace1 fontHeading fontWeight700">Your Dream Home, Your Dream Life
            </h1>
            <div class="tabForm">
               <ul class="form-tabs">
                  <li class="active" data-target="buy">Buy</li>
                  <li data-target="rent">Rent</li>
                  <li data-target="commercial">Commercial</li>
               </ul>
            </div>
            <div class="formBanner home-page ">
               <div class="formInline home-page">
                  <div id="commercial" class="d-none tab-content">
                     <div class="">
                        <div class="d-flex align-items-center lease-box">
                           <i class="fa-solid fa-house"></i>
                           <select name="" id="" class="border-0">
                              <option value="buy">Lease</option>
                              <option value="buy">Buy</option>
                              <option value="buy">Rent</option>
                           </select>
                        </div>

                     </div>

                  </div>
                  <div class="locationFeild">
                     <div class="tagLocation">
                        Mumbai
                     </div>
                     <input type="text" name="city" placeholder="Add location..." />
                  </div>
                  <div class="propertyType">
                     <!-- <p>Flat +1</p>
                     <i class="fa fa-chevron-down"></i> -->
                     <select name="" id="">
                        <option value="">Property Type</option>
                        <option value="">Property Type</option>
                        <option value="">Property Type</option>
                        <option value="">Property Type</option>
                     </select>
                  </div>
                  <div class="budgetFeild">

                     <p>Budget </p>
                     <i class="fa fa-chevron-down"></i>
                  </div>
                  <div class="formBtn">
                     <button class="btnTheme w-100"><i class="fa fa-search"></i> Search</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section>
         <div class="containerFull">
            <h4 class="heading fontHeading fontWeight600">We've got <span class="text_primary">properties</span> for
               everyone</h4>
            <div class="row mt-lg-4">
               <div class="col-lg-3 px-lg-2">
                  <div class="proprtiesItemHome">
                     <a href="#">
                        <picture>
                           <source srcset="images/property-owner.webp" type="image/webp" />
                           <img src="images/property-owner.jpg">
                        </picture>
                        <div class="descriptionProperty">
                           <h4 class="small_heading fontWeight700 fontHeading">750</h4>
                           <h3 class="small_heading my-2 fontWeight600 fontHeading">Owner Properties</h3>
                           <span>Explore <i class="fa fa-arrow-right"></i></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 px-lg-2">
                  <div class="proprtiesItemHome">
                     <a href="#">
                        <picture>
                           <source srcset="images/project-home.webp" type="image/webp" />
                           <img src="images/project-home.jpg">
                        </picture>
                        <div class="descriptionProperty">
                           <h4 class="small_heading fontWeight700 fontHeading">341</h4>
                           <h3 class="small_heading my-2 fontWeight600 fontHeading">Projects</h3>
                           <span>Explore <i class="fa fa-arrow-right"></i></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 px-lg-2">
                  <div class="proprtiesItemHome">
                     <a href="#">
                        <picture>
                           <source srcset="images/ready-to-move.webp" type="image/webp" />
                           <img src="images/ready-to-move.jpg">
                        </picture>
                        <div class="descriptionProperty">
                           <h4 class="small_heading fontWeight700 fontHeading">24979</h4>
                           <h3 class="small_heading my-2 fontWeight600 fontHeading">Ready to move-in</h3>
                           <span>Explore <i class="fa fa-arrow-right"></i></span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 px-lg-2">
                  <div class="proprtiesItemHome">
                     <a href="#">
                        <picture>
                           <source srcset="images/kitchen.webp" type="image/webp" />
                           <img src="images/kitchen.jpg">
                        </picture>
                        <div class="descriptionProperty">
                           <h4 class="small_heading fontWeight700 fontHeading">3465</h4>
                           <h3 class="small_heading my-2 fontWeight600 fontHeading">Budget Homes</h3>
                           <span>Explore <i class="fa fa-arrow-right"></i></span>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgRed">
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-7">
                  <h4 class="heading fontHeading fontWeight600">Why go with <span class="text_primary">Urbanwalls
                        Reality?</span></h4>
                  <div class="itemBroking mt-lg-5">
                     <div class="iconBroke">
                        <picture>
                           <source srcset="images/icons/human-resources.webp" type="image/webp" />
                           <img src="images/icons/human-resources.png">
                        </picture>
                     </div>
                     <div class="rightBroke">
                        <h4 class="sub_heading my-4 fontHeading fontWeight600">Our Values Trust</h4>
                        <p><strong>Reliable Brokerage Services:</strong> We believe in building up trust with our client
                           through a strengthened relationship based on dependable and reliable brokerage services.</p>
                        <p class="mt-3"><strong>Expert Guidance:</strong> Our clients repose faith in our expertise to
                           guide them at every step of their real estate journey and make the right decisions.</p>
                        <p class="mt-3"><strong>Client-Centric Approach:</strong> We have our clients' needs and
                           aspirations foremost, and thus foster a trustworthy and supportive environment where their
                           interests remain uppermost in our minds. </p>
                     </div>
                  </div>
                  <div class="itemBroking">
                     <div class="iconBroke">
                        <picture>
                           <source srcset="images/icons/transparency.webp" type="image/webp" />
                           <img src="images/icons/transparency.png">
                        </picture>
                     </div>
                     <div class="rightBroke">
                        <h4 class="sub_heading my-4 fontHeading fontWeight600">Transparency</h4>
                        <p><strong>Clear communication:</strong> We update the clients regarding every single update on
                           property listings, market trends, and transaction process in crystal-clear language.</p>
                        <p class="mt-3"><strong>Thorough Documentation:</strong> We believe in transparent documentation
                           and reporting so that our clients should be completely aware of every detail pertaining to
                           their real estate transactions from the first consultation to the close.</p>
                        <p class="mt-3"><strong>Ethical Dealings:</strong> We deal with the best ethical standards to
                           ensure all our dealings with clients are crystal clear, transparent, and rightfully their
                           best interest.</p>
                     </div>
                  </div>
                  <div class="itemBroking">
                     <div class="iconBroke">
                        <picture>
                           <source srcset="images/icons/integration.webp" type="image/webp" />
                           <img src="images/icons/integration.png">
                        </picture>
                     </div>
                     <div class="rightBroke">
                        <h4 class="sub_heading my-4 fontHeading fontWeight600">Integrity</h4>
                        <p><strong>Truthful Representations:</strong> We provide truthful and honest representations of
                           properties so that our clients have realistic expectations of what they are buying or
                           selling.</p>
                        <p class="mt-3"><strong>Fair Negotiations:</strong> Our respect for integrity extends into our
                           negotiations. We encourage fair and ethical negotiation practices while zealously guarding
                           the best interest of our clients without selling our soul for it.</p>
                        <p class="mt-3"><strong>Leadership That Inspires Trust:</strong> The tone of integrity set by
                           our leadership leads by example, thereby creating a culture of ethical behavior throughout
                           the organization.</p>
                     </div>
                  </div>
                  <div class="itemBroking">
                     <div class="iconBroke">
                        <picture>
                           <source srcset="images/icons/accountability.webp" type="image/webp" />
                           <img src="images/icons/accountability.png">
                        </picture>
                     </div>
                     <div class="rightBroke">
                        <h4 class="sub_heading my-4 fontHeading fontWeight600">Accountability</h4>
                        <p><strong>Results Responsibility:</strong> We are responsible for what we do and for the
                           decisions we make; hence, we are fully committed to delivering our promises to all clients
                           and stakeholders.</p>
                        <p class="mt-3"><strong>Transparent Reporting:</strong> It reports transparently on property
                           transactions, market conditions, and performance metrics, thus being accountable to the
                           client.</p>
                        <p class="mt-3"><strong>Continuous Improvement:</strong> We review our performance regularly and
                           actively seek feedback to constantly improve on the processes that will yield exceptional
                           results and client satisfaction.</p>
                        <p class="mt-3">For Urbanwalls Realty, trust, transparency, integrity, and accountability are
                           not values; rather, they represent the very bedrock on which the entire business stands and
                           act as guiding principles that will lead to success in real estate brokerage business.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 offset-lg-1">
                  <div class="rightAds shadow stickyItem">
                     <picture>
                        <source srcset="images/property-ads.webp" type="image/webp" />
                        <img src="images/property-ads.jpg" />
                     </picture>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="d-flex justify-content-between align-items-center">
               <h4 class="heading fontHeading fontWeight600">Popular <span class="text_primary">Owner Properties</span>
               </h4>
               <a href="#" class="linkBtn">See all properties <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="popularSlider">
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="bgGrey">
         <div class="containerFull">
            <h4 class="heading fontWeight600 fontHeading text-center">Featured <span
                  class="text_primary">Projects</span></h4>
            <div class="row mt-lg-4">
               <div class="col-lg-4">
                  <div class="itemFeatured">
                     <a href="#">
                        <div class="featuredImg">
                           <picture>
                              <source srcset="images/rustomjee-crown.webp" type="image/webp" />
                              <img src="images/rustomjee-crown.jpg" />
                           </picture>
                        </div>
                        <div class="projectName text-center">
                           <h4 class="sub_heading fontHeading fontWeight600 text_primary">Rustomjee Crown</h4>
                           <p class="title fontWeight600">Prabhadevi, Dadar</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemFeatured">
                     <a href="#">
                        <div class="featuredImg">
                           <picture>
                              <source srcset="images/25-south.webp" type="image/webp" />
                              <img src="images/25-south.jpg" />
                           </picture>
                        </div>
                        <div class="projectName text-center">
                           <h4 class="sub_heading fontHeading fontWeight600 text_primary">25 South</h4>
                           <p class="title fontWeight600">Prabhadevi, Dadar</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemFeatured">
                     <a href="#">
                        <div class="featuredImg">
                           <picture>
                              <source srcset="images/lodha.webp" type="image/webp" />
                              <img src="images/lodha.jpg" />
                           </picture>
                        </div>
                        <div class="projectName text-center">
                           <h4 class="sub_heading fontHeading fontWeight600 text_primary">Lodha Bellevue</h4>
                           <p class="title fontWeight600">Prabhadevi, Dadar</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="centerBlock">
               <h4 class="heading fontHeading text-center fontWeight600">Urbanwall Realty - <span
                     class="text_primary">India</span></h4>
               <h3 class="title fontHeading fontWeight500 text-center mt-3">Encyclopedia for all New Projects</h3>
               <div class="row mt-lg-4">
                  <div class="col-lg-4">
                     <div class="itemSquare">
                        <div class="iconDirectory">
                           <picture>
                              <source srcset="images/icons/police-file.webp" type="image/webp" />
                              <img src="images/icons/police-file.png" />
                           </picture>
                        </div>
                        <div class="rightDirectory">
                           <h4 class="title fontHeading fontWeight500">Directory for All New Projects</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="itemSquare">
                        <div class="iconDirectory">
                           <picture>
                              <source srcset="images/icons/analytic.webp" type="image/webp" />
                              <img src="images/icons/analytic.png" />
                           </picture>
                        </div>
                        <div class="rightDirectory">
                           <h4 class="title fontHeading fontWeight500">All Reports from RERA</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="itemSquare">
                        <div class="iconDirectory">
                           <picture>
                              <source srcset="images/icons/review.webp" type="image/webp" />
                              <img src="images/icons/review.png" />
                           </picture>
                        </div>
                        <div class="rightDirectory">
                           <h4 class="title fontHeading fontWeight500">Expert Reviews & Advice</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgGrey">
         <div class="containerFull">
            <h4 class="heading fontWeight600 fontHeading text-center">Mandate <span class="text_primary">Projects</span>
            </h4>
            <div class="row mt-lg-4">
               <div class="col-lg-4">
                  <div class="itemFeatured">
                     <a href="#">
                        <div class="featuredImg mandateImg">
                           <picture>
                              <source srcset="images/lodha.webp" type="image/webp" />
                              <img src="images/lodha.jpg" />
                           </picture>
                        </div>
                        <div class="projectName text-center">
                           <h4 class="sub_heading fontHeading fontWeight600 text_primary">Sahakar Avenue</h4>
                           <p class="title fontWeight600">Mumbai, Malad (West)</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemFeatured">
                     <a href="#">
                        <div class="featuredImg mandateImg">
                           <picture>
                              <source srcset="images/rustomjee-crown.webp" type="image/webp" />
                              <img src="images/rustomjee-crown.jpg" />
                           </picture>
                        </div>
                        <div class="projectName text-center">
                           <h4 class="sub_heading fontHeading fontWeight600 text_primary">One Borivali</h4>
                           <p class="title fontWeight600">Mumbai, Borivali</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="itemFeatured">
                     <a href="#">
                        <div class="featuredImg mandateImg">
                           <picture>
                              <source srcset="images/25-south.webp" type="image/webp" />
                              <img src="images/25-south.jpg" />
                           </picture>
                        </div>
                        <div class="projectName text-center">
                           <h4 class="sub_heading fontHeading fontWeight600 text_primary">Atrica</h4>
                           <p class="title fontWeight600">Mumbai, Goregaon (West)</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-3">
                  <div class="itemCity d-flex align-items-center justify-content-center flex-column text-center">
                     <h4 class="sub_heading text_primary fontWeight600 fontHeading">Explore</h4>
                     <p class="text-white mt-3 small_heading fontWeight600">Popular Localities Near by you</p>
                     <a href="#" class="headerBtn mt-4">View all Cities</a>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemCity2">
                     <a href="#">
                        <h4 class="title fontHeading fontWeight600">Mumbai <i
                              class="fas fa-arrow-up-right-from-square"></i></h4>
                        <p class="mt-2">₹9,799 - ₹82,857 per sqft</p>
                        <div class="mt-3 d-flex align-items-center justify-content-between">
                           <p>4.2 <i class="fa fa-star text-warning"></i></p>
                           <p>160 Reviews</p>
                        </div>
                        <div class="cityCircle">
                           <picture>
                              <source srcset="images/mumbai.webp" type="image/webp" />
                              <img src="images/mumbai.jpg" />
                           </picture>
                        </div>
                        <div class="properties">
                           <p class="text fontWeight600 text_primary">230 Properties for Sale</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemCity2">
                     <a href="#">
                        <h4 class="title fontHeading fontWeight600">Navi Mumbai <i
                              class="fas fa-arrow-up-right-from-square"></i></h4>
                        <p class="mt-2">₹12,799 - ₹98,857 per sqft</p>
                        <div class="mt-3 d-flex align-items-center justify-content-between">
                           <p>4.5 <i class="fa fa-star text-warning"></i></p>
                           <p>190 Reviews</p>
                        </div>
                        <div class="cityCircle">
                           <picture>
                              <source srcset="images/navi-mumbai.webp" type="image/webp" />
                              <img src="images/navi-mumbai.jpg" />
                           </picture>
                        </div>
                        <div class="properties">
                           <p class="text fontWeight600 text_primary">385 Properties for Sale</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="itemCity2">
                     <a href="#">
                        <h4 class="title fontHeading fontWeight600">Pune <i
                              class="fas fa-arrow-up-right-from-square"></i></h4>
                        <p class="mt-2">₹12,799 - ₹98,857 per sqft</p>
                        <div class="mt-3 d-flex align-items-center justify-content-between">
                           <p>4.5 <i class="fa fa-star text-warning"></i></p>
                           <p>190 Reviews</p>
                        </div>
                        <div class="cityCircle">
                           <picture>
                              <source srcset="images/pune.webp" type="image/webp" />
                              <img src="images/pune.jpg" />
                           </picture>
                        </div>
                        <div class="properties">
                           <p class="text fontWeight600 text_primary">385 Properties for Sale</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bgGrey">
         <div class="containerFull">
            <div class="d-flex justify-content-between align-items-center">
               <h4 class="heading fontHeading fontWeight600">Fresh Properties in <span
                     class="text_primary">Mumbai</span></h4>
               <a href="#" class="linkBtn">See all properties <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="popularSlider">
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
               <div class="itemPopular">
                  <a href="#">
                     <div class="imgPopular">
                        <picture>
                           <source srcset="images/3bhk-flat.webp" type="image/webp" />
                           <img src="images/3bhk-flat.jpg" />
                        </picture>
                        <div class="numberImg">
                           <i class="far fa-image"></i> 16
                        </div>
                     </div>
                     <div class="propertDetailHome">
                        <p>3 BHK</p>
                        <h4 class="title mt-2 fontHeading fontWeight600">₹40 Lac &nbsp; | &nbsp; 720 sqft</h4>
                        <p class="text mt-3"><i class="fa fa-map-marker-alt text_primary"></i> Kandivali East, Mumabi
                        </p>
                        <span>Explore <i class="fa fa-arrow-right"></i></span>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="containerFull">
            <p class="textSub text-center">From The Blog</p>
            <h3 class="heading text-center text_primary fontHeading fontWeight600">Latest News &<br /> Articles From the
               Blog</h3>
            <div class="blogSlider iconSlider">
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming
                                 Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog2.webp" type="image/webp" />
                           <img src="images/blog/blog2.jpg" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming
                                 Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming
                                 Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="itemBlog">
                  <div class="innerBlog">
                     <div class="imgBlog">
                        <picture>
                           <source srcset="images/blog/blog.webp" type="image/webp" />
                           <img src="images/blog/blog.png" />
                        </picture>
                     </div>
                     <div class="blogDesHome">
                        <div class="innerDes">
                           <div class="descriptionHome">
                              <div class="userIcon">
                                 <i class="fa fa-user"></i>
                              </div>
                              <p>by webdesk</p>
                              <h4 class="small_heading fontHeading mt-3">5 Essential Tips for Managing Over whelming
                                 Situations </h4>
                           </div>
                        </div>
                        <div class="bottomBtn">
                           <p><i class="far fa-calendar"></i> 26-06-2024</p>
                           <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'include/footer.php'; ?>
   </div>
   <?php include 'include/footer-links.php'; ?>
</body>

</html>