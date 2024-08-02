<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Real State Broker</title>
   <meta name="description" content="" />
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

<body>
   <div class="wrapper">
      <?php include 'include/header.php'; ?>

      <div class="hero-banner">
         <div class="banner-video">
            <video src="./images/herobanner.mp4" autoplay loop muted></video>
         </div>
         <div class="banner-content">


            <div class="large_heading text-center fontWeight700 banner_heading">
               <div class="typing-container">
                  <div class="typing-effect" id="typing-text"></div>
               </div>

            </div>



         </div>
      </div>




      <section class="features">
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-3">
                  <div class="featureAnimation">
                     <div class="featureBox shadow">

                        <div class="icontbox"><i class="fa-solid fa-house-user"></i></div>

                        <h4 class="featureCounting"><span></span>+</h4>
                        <p class="title">Years of House</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="featureAnimation">
                     <div class="featureBox shadow">
                        <div class="icontbox"><i class="fa-solid fa-sheet-plastic"></i></div>

                        <h4 class="featureCounting"><span></span>+</h4>
                        <p class="title">Projects Delivered</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="featureAnimation">
                     <div class="featureBox shadow">
                        <div class="icontbox"><i class="fa-solid fa-user-plus"></i></div>

                        <h4 class="featureCounting"><span></span>+</h4>
                        <p class="title">Satisfied Customers</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="featureAnimation">
                     <div class="featureBox shadow">
                        <div class="icontbox"><i class="fa-solid fa-coins"></i></div>

                        <h4 class="featureCounting"><span></span>+</h4>
                        <p class="title">Cheap Rates</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>






      <section class="my-xl-9 sevicesPages newbg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="text-center mb-5 pb-4" data-cue="fadeIn" data-show="true">
                     <h2 class="mb-3 large_heading fontWeight600">
                        An Unbiased
                        <span class="text-primary">Broken House.</span>
                     </h2>
                     <p>Enim sed parturient sem enim nunc sit erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat nunc nisl pellentesque diam neque.</p>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-xl-5 col-md-6 col-12">
                  <div class="nav flex-column nav-pills mb-5 mb-lg-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a href="#" class="nav-link d-flex text-start align-items-center align-items-lg-start p-xl-4 p-3 active  text-primary" id="v-pills-small-business-tab" data-bs-toggle="pill" data-bs-target="#v-pills-small-business" role="tab" aria-controls="v-pills-small-business" aria-selected="true">
                        <div class="d-flex">
                           <div class="px-md-4 p-2 py-md-3 sub_heading bg-white rounded-2 shadow-sm">
                              <i class="fa-solid fa-building" class="heading"></i>

                           </div>
                        </div>
                        <div class="ms-4">
                           <h4 class="mb-0">Clear Title</h4>
                           <p class="mt-1 d-none d-lg-block">We have a large number of properties with clear titles that we have verified</p>
                        </div>
                     </a>
                     <a href="#" class="nav-link d-flex text-start align-items-center align-items-lg-start p-xl-4 p-3 text-primary" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                        <div class="d-flex">
                           <div class="px-md-4 p-2 py-md-3 sub_heading bg-white rounded-2 shadow-sm">

                              <i class="fa-solid fa-file-lines" class="heading"></i>
                           </div>
                        </div>
                        <div class="ms-4">
                           <h4 class="mb-0">Total Transparency</h4>
                           <p class="mt-1 d-none d-lg-block">To make your property journey stress-free, we keep our process transparent</p>
                        </div>
                     </a>
                     <a href="#" class="nav-link d-flex text-start p-xl-4 p-3 align-items-center align-items-lg-start  text-primary" id="v-pills-enterprises-tab" data-bs-toggle="pill" data-bs-target="#v-pills-enterprises" role="tab" aria-controls="v-pills-enterprises" aria-selected="false" tabindex="-1">
                        <div class="d-flex">
                           <div class="px-md-4 p-2 py-md-3 sub_heading bg-white rounded-2 shadow-sm">
                              <i class="fa-solid fa-face-smile" class="heading"></i>
                           </div>
                        </div>
                        <div class="ms-4">
                           <h4 class="mb-0">Yes Brokerage</h4>
                           <p class="mt-1 d-none d-lg-block">
                              You deserve the best service while buying a property and we deserve our fees
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-xl-6 offset-xl-1 col-md-6 col-12">
                  <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane active show" id="v-pills-small-business" role="tabpanel" aria-labelledby="v-pills-small-business-tab" tabindex="0">
                        <div class="serviceNew" data-relative-input="true">
                           <picture>
                              <source srcset="images/service-1.webp" type="image/webp" />
                              <img src="images/service-1.jpg" alt="" />
                           </picture>

                        </div>
                     </div>
                     <div class="tab-pane" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="serviceNew" data-relative-input="true">
                           <picture>
                              <source srcset="images/service-2.webp" type="image/webp" />
                              <img src="images/service-2.png" alt="" />
                           </picture>
                        </div>
                     </div>

                     <div class="tab-pane" id="v-pills-enterprises" role="tabpanel" aria-labelledby="v-pills-enterprises-tab" tabindex="0">
                        <div class="serviceNew" data-relative-input="true">
                           <picture>
                              <source srcset="images/services-3.webp" type="image/webp" />
                              <img src="images/services-3.jpg" alt="" />
                           </picture>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>







      <section class="fProjects">
         <div class="containerFull">

            <h2 class="large_heading fontWeight700 mb-md-4">Featured Projects</h2>


            <div class="fProjectSlider mt-3">
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature1.webp" type="image/webp" />
                           <img src="images/feature1.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h5 class="title projectArea">3 BHK Flat</h5>
                        <div class="projectRupees mt-2">
                           <span><i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; 40 LAC</span>
                           <span><i class="fa-solid fa-building"></i> &nbsp; 100 sqft</span>
                        </div>

                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature2.webp" type="image/webp" />
                           <img src="images/feature2.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h5 class="title projectArea">3 BHK Flat</h5>
                        <div class="projectRupees mt-2">
                           <span><i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; 40 LAC</span>
                           <span><i class="fa-solid fa-building"></i> &nbsp; 100 sqft</span>
                        </div>

                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature3.webp" type="image/webp" />
                           <img src="images/feature3.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h5 class="title projectArea">3 BHK Flat</h5>
                        <div class="projectRupees mt-2">
                           <span><i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; 40 LAC</span>
                           <span><i class="fa-solid fa-building"></i> &nbsp; 100 sqft</span>
                        </div>

                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature4.webp" type="image/webp" />
                           <img src="images/feature4.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h5 class="title projectArea">3 BHK Flat</h5>
                        <div class="projectRupees mt-2">
                           <span><i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; 40 LAC</span>
                           <span><i class="fa-solid fa-building"></i> &nbsp; 100 sqft</span>
                        </div>

                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature5.webp" type="image/webp" />
                           <img src="images/feature5.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h5 class="title projectArea">3 BHK Flat</h5>
                        <div class="projectRupees mt-2">
                           <span><i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; 40 LAC</span>
                           <span><i class="fa-solid fa-building"></i> &nbsp; 100 sqft</span>
                        </div>

                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature6.webp" type="image/webp" />
                           <img src="images/feature6.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h5 class="title projectArea">3 BHK Flat</h5>
                        <div class="projectRupees mt-2">
                           <span><i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; 40 LAC</span>
                           <span><i class="fa-solid fa-building"></i> &nbsp; 100 sqft</span>
                        </div>

                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>

            </div>


         </div>
      </section>



      <section class="cities newbg">
         <div class="containerFull">
            <div class="row">
               <div class="col-lg-3 px-3">


                  <div class="citiesHeading">
                     <h2 class="large_heading fontWeight800">Explore</h2>
                     <h4 class="sub_heading mt-2">Popular Localities <br/> in India</h4>
                     <a href="#" class="mt-2">Know more &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>

                  </div>

               </div>
               <div class="col-lg-9">

                  <div class="citySlider">
                     <div class="itemslider">
                        <div class="cityMainBox">
                           <div class="cityBgImg">
                              <picture>
                                 <source srcset="images/cities/ahmedabad.webp" type="image/webp" />
                                 <img src="images/cities/ahmedabad.jpg" alt="" />
                              </picture>
                           </div>
                           <div class="citiesBox">
                              <div class="cityImgBox">

                                 <div class="cityImg newnani">
                                    <picture>
                                       <source srcset="images/cities/ahmedabad.webp" type="image/webp" />
                                       <img src="images/cities/ahmedabad.jpg" alt="" />
                                    </picture>
                                 </div>
                                 <h3 class="cityName mt-2 small_heading fontWeight700">Ahmedabad</h3>
                                 <h5 class="text newani mt-2">&#8377; 9,000 - &#8377; 64,000 per sqft</h5>
                                 <div class="reviewBox newani my-3">
                                    <h5>4.8 <span><i class="fa-solid fa-star"></i></span></h5>
                                    <h6>160 reviews</h6>
                                 </div>
                                 <a href="#">362 Properties for sale <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="itemslider">
                        <div class="cityMainBox">
                           <div class="cityBgImg">
                              <picture>
                                 <source srcset="images/cities/mumbai.webp" type="image/webp" />
                                 <img src="images/cities/mumbai.jpg" alt="" />
                              </picture>
                           </div>
                           <div class="citiesBox">
                              <div class="cityImgBox">

                                 <div class="cityImg newnani">
                                    <picture>
                                       <source srcset="images/cities/mumbai.webp" type="image/webp" />
                                       <img src="images/cities/mumbai.jpg" alt="" />
                                    </picture>
                                 </div>
                                 <h3 class="cityName mt-2 small_heading fontWeight700">Mumbai</h3>
                                 <h5 class="text newani mt-2">&#8377; 9,000 - &#8377; 64,000 per sqft</h5>
                                 <div class="reviewBox newani my-3">
                                    <h5>4.8 <span><i class="fa-solid fa-star"></i></span></h5>
                                    <h6>160 reviews</h6>
                                 </div>
                                 <a href="#">362 Properties for sale <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="itemslider">
                        <div class="cityMainBox">
                           <div class="cityBgImg">
                              <picture>
                                 <source srcset="images/cities/navi-mumbai.webp" type="image/webp" />
                                 <img src="images/cities/navi-mumbai.jpg" alt="" />
                              </picture>
                           </div>
                           <div class="citiesBox">
                              <div class="cityImgBox">

                                 <div class="cityImg newnani">
                                    <picture>
                                       <source srcset="images/cities/navi-mumbai.webp" type="image/webp" />
                                       <img src="images/cities/navi-mumbai.jpg" alt="" />
                                    </picture>
                                 </div>
                                 <h3 class="cityName mt-2 small_heading fontWeight700">Navi Mumbai</h3>
                                 <h5 class="text newani mt-2">&#8377; 9,000 - &#8377; 64,000 per sqft</h5>
                                 <div class="reviewBox newani my-3">
                                    <h5>4.8 <span><i class="fa-solid fa-star"></i></span></h5>
                                    <h6>160 reviews</h6>
                                 </div>
                                 <a href="#">362 Properties for sale <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="itemslider">
                        <div class="cityMainBox">
                           <div class="cityBgImg">
                              <picture>
                                 <source srcset="images/cities/pune.webp" type="image/webp" />
                                 <img src="images/cities/pune.jpeg" alt="" />
                              </picture>
                           </div>
                           <div class="citiesBox">
                              <div class="cityImgBox">

                                 <div class="cityImg newnani">
                                    <picture>
                                       <source srcset="images/cities/pune.webp" type="image/webp" />
                                       <img src="images/cities/pune.jpeg" alt="" />
                                    </picture>
                                 </div>
                                 <h3 class="cityName mt-2 small_heading fontWeight700">Pune</h3>
                                 <h5 class="text newani mt-2">&#8377; 9,000 - &#8377; 64,000 per sqft</h5>
                                 <div class="reviewBox newani my-3">
                                    <h5>4.8 <span><i class="fa-solid fa-star"></i></span></h5>
                                    <h6>160 reviews</h6>
                                 </div>
                                 <a href="#">362 Properties for sale <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="itemslider">
                        <div class="cityMainBox">
                           <div class="cityBgImg">
                              <picture>
                                 <source srcset="images/cities/thane.webp" type="image/webp" />
                                 <img src="images/cities/thane.jpg" alt="" />
                              </picture>
                           </div>
                           <div class="citiesBox">
                              <div class="cityImgBox">

                                 <div class="cityImg newnani">
                                    <picture>
                                       <source srcset="images/cities/thane.webp" type="image/webp" />
                                       <img src="images/cities/thane.jpg" alt="" />
                                    </picture>
                                 </div>
                                 <h3 class="cityName mt-2 small_heading fontWeight700">Thane</h3>
                                 <h5 class="text newani mt-2">&#8377; 9,000 - &#8377; 64,000 per sqft</h5>
                                 <div class="reviewBox newani my-3">
                                    <h5>4.8 <span><i class="fa-solid fa-star"></i></span></h5>
                                    <h6>160 reviews</h6>
                                 </div>
                                 <a href="#">362 Properties for sale <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </section>




      <section class="fProjects">
         <div class="containerFull">

            <h2 class="large_heading fontWeight700 mb-md-4">Mandate Projects</h2>


            <div class="fProjectSlider mt-3">
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature1.webp" type="image/webp" />
                           <img src="images/feature1.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h4 class="projectName fontWeight700">Lorem, ipsum dolor.</h4>


                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature2.webp" type="image/webp" />
                           <img src="images/feature2.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h4 class="projectName fontWeight700">Lorem, ipsum dolor.</h4>


                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature3.webp" type="image/webp" />
                           <img src="images/feature3.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h4 class="projectName fontWeight700">Lorem, ipsum dolor.</h4>


                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature4.webp" type="image/webp" />
                           <img src="images/feature4.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h4 class="projectName fontWeight700">Lorem, ipsum dolor.</h4>


                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature5.webp" type="image/webp" />
                           <img src="images/feature5.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h4 class="projectName fontWeight700">Lorem, ipsum dolor.</h4>


                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>
               <div class="fpojectItems">
                  <div class="fprojectItemBox">
                     <div class="fprojectImg">
                        <picture>
                           <source srcset="images/feature6.webp" type="image/webp" />
                           <img src="images/feature6.jpg" alt="" />
                        </picture>
                     </div>
                     <div class="fprojectContent">

                        <h4 class="projectName fontWeight700">Lorem, ipsum dolor.</h4>


                        <h5 class="projectLocation mt-2"><span><i class="fa-solid fa-location-dot"></i></span> location</h5>


                     </div>
                  </div>

               </div>

            </div>


         </div>
      </section>









      <section>
         <div class="containerFull">
            <div class="row">
               <div class="col-md-6" data-aos="zoom-in-up">
                  <div class="leftHomeContact pt-3 px-4">
                     <h3 class="heading text-center text_secondary fontWeight700">Contact Us</h3>
                     <div class="contactHomeeForm mt-4">
                        <form id="enquiryForm2" method="post" action="">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="formItem">
                                    <div class="form-floating">
                                       <input type="hidden" name="hidden">
                                       <input type="text" required="" class="form-control" id="name" name="name" placeholder="name">
                                       <label for="name">Name</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="formItem">
                                    <div class="form-floating">
                                       <input type="tel" required="" class="form-control" id="phone" name="phone" placeholder="phone">
                                       <label for="phone">Phone</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="formItem">
                                    <div class="form-floating mb-2">
                                       <input type="email" required="" class="form-control" id="email" name="email" placeholder="email">
                                       <label for="email">Email Address</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="formItem">
                                    <div class="form-floating mb-2">
                                       <input type="text" required="" class="form-control" id="subject" name="subject" placeholder="subject">
                                       <label for="subject">Subject</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="formItem">
                                    <div class="form-floating">
                                       <textarea class="form-control textHeight" required="" name="message" placeholder="Leave a comment here" id="floatingTextarea" spellcheck="false"></textarea>
                                       <label for="floatingTextarea">Write Message</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">

                                 <button type="submit" class="button mt-2">Submit Now</button>

                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-6" data-aos="zoom-in-up">
                  <div class="stickyItem">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d476558.9162119931!2d71.3974170734375!3d21.0680074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xac35445f4b2f2081%3A0x79f0297183786cb6!2sFast%20Track%20degree%20Course!5e0!3m2!1sen!2sin!4v1716033927431!5m2!1sen!2sin" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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