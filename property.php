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
    <style>
        .header {
            position: inherit;
        }

        .headerBtn {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
        }

        .headerBtn:after {
            border-color: var(--primary-color);
        }

        .headerBtn:hover {
            background: var(--primary-color);
            color: #fff;
        }

        .rightMenu ul li a {
            color: #444;
        }
    </style>
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <!-- <section class="bgSearch py-4 border-top border-top">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 ">
                        <div class="formInline border">
                            <div class="locationFeild">
                                <div class="tagLocation">
                                    Mumbai
                                </div>
                                <input type="text" name="city" placeholder="Add location...">
                            </div>
                            <div class="propertyType">
                                <p>Flat +1</p>
                                <i class="fa fa-chevron-down"></i>
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
        </section> -->
        <section class="bgGrey">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebarProprty bg-white p-3">
                        <div class="propertyHeader p-3 border-bottom">
                                <h3 class="fontHeading text_primary small_heading">Search Property</h3>
                            </div>
                            <div class="formInline border">
                                <div class="locationFeild ">
                                    <i class="fa-solid fa-location-dot"></i>

                                    <!-- <div class="tagLocation">
                                            Mumbai
                                        </div> -->
                                    <input type="text" name="city" placeholder="Add location...">
                                </div>
                                <div class="propertyType">
                                    <p><i class="fa-solid fa-house"></i> Flat +1</p>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                                <div class="budgetFeild">

                                    <p><i class="fa-solid fa-indian-rupee-sign"></i> Budget </p>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                                <div class="formBtn w-100 mt-2">
                                    <button class="btnTheme w-100"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                            <div class="propertyHeader p-3 border-bottom">
                                <h3 class="fontHeading text_primary small_heading">Filter</h3>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">BHK Type</h5>
                                    <button class="iconBtn"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                                </div>

                                <div class="listBhk mt-4">
                                    <div class="checkBox" id="resetInput">
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="" id="1rk">
                                                <label for="1rk">1 RK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="1bhk">
                                                <label for="1bhk">1 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="2bhk">
                                                <label for="2bhk">2 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="3bhk">
                                                <label for="3bhk">3 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="4bhk">
                                                <label for="4bhk">4 BHK</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="4bhk+">
                                                <label for="4bhk+">4 BHK+</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3 mb-4">
                                <div class="filterHeader mb-4 d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Price Range </h5>
                                    <div class="price-input">
                                        <div class="field position-relative">
                                            <label>₹
                                                <input type="number" disabled class="input-min" value="2500">
                                            </label>
                                            <div class="separator">-</div>
                                            <label>₹
                                                <input type="number" disabled class="input-max" value="7500">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Availability</h5>
                                </div>
                                <div class="listBhk mt-3">
                                    <div class="radioList">
                                        <ul>
                                            <li>
                                                <input type="radio" name="availability" id="immediate" />
                                                <label for="immediate">Immediate</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="availability" id="15days" />
                                                <label for="15days">Within 15 Days</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="availability" id="30days" />
                                                <label for="30days">Within 30 Days</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="availability" id="after30days" />
                                                <label for="after30days">After 30 Days</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Preferred Tenants</h5>
                                </div>
                                <div class="listBhk mt-3">
                                    <div class="checkListIcon">
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="" id="family">
                                                <label for="family">Family</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="company">
                                                <label for="company">Company</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="male">
                                                <label for="male">Bachelor Male</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="female">
                                                <label for="female">Bachelor Female</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filterItem mt-lg-4 mt-3">
                                <div class="filterHeader d-flex align-items-center justify-content-between">
                                    <h5 class="title fontHeading">Property Type</h5>
                                </div>
                                <div class="listBhk mt-3">
                                    <div class="checkListIcon">
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="" id="apartment">
                                                <label for="apartment">Apartment</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="villa">
                                                <label for="villa">Independent House/Villa</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" name="" id="gated">
                                                <label for="gated">Gated Community Villa</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="rightProperty">
                            <div class="propertItem">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="propertyImg">
                                                <img src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h4 class="title fontHeading fontWeight500 text-black">Studio Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <div class="propertyInfo">
                                                <div class="itmeInfo area">
                                                    <p class="small text-uppercase">Carpet Area</p>
                                                    <p>250 sqft</p>
                                                </div>
                                                <div class="itmeInfo bedroom">
                                                    <p class="small text-uppercase">Bedroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bathroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo">
                                                    <p class="small text-uppercase">Furnishing</p>
                                                    <p>Unfurnished</p>
                                                </div>
                                                <div class="itmeInfo lift">
                                                    <p class="small text-uppercase">Lift</p>
                                                    <p>Yes</p>
                                                </div>
                                                <div class="itmeInfo parking">
                                                    <p class="small text-uppercase">Parking</p>
                                                    <p>Yes</p>
                                                </div>
                                                <!-- <div class="itmeInfo tenant">
                                                    <p class="small text-uppercase">Tenant Preferred</p>
                                                    <p>Bachelor/Family</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo availability">
                                                    <p class="small text-uppercase">Availability</p>
                                                    <p>Immediatley</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo floor">
                                                    <p class="small text-uppercase">Floor</p>
                                                    <p>3 Out of 7</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="rightBtn">
                                                <div class="text-center">
                                                    <h4 class="small_heading text-black fontWeight600">₹7,800</h4>
                                                    <p class="textGrey">Security Deposit</p>
                                                </div>
                                                <div class="btnColor">Contact Agent</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <hr />
                                <p class="mt-2"><small>For rent 1 room set in rwa Munirka in 3rd floor 1 bedroom 1
                                        bathroom with 1 kitchen separate newly renovated and area 250sq ft. gated
                                        society and valiance free environment site available in good location.Contact
                                        Munirka properties pvt. ltd. </small></p>
                            </div>
                            <div class="propertItem">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="propertyImg">
                                                <img src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h4 class="title fontHeading fontWeight500 text-black">Studio Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <div class="propertyInfo">
                                                <div class="itmeInfo area">
                                                    <p class="small text-uppercase">Carpet Area</p>
                                                    <p>250 sqft</p>
                                                </div>
                                                <div class="itmeInfo bedroom">
                                                    <p class="small text-uppercase">Bedroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bathroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo">
                                                    <p class="small text-uppercase">Furnishing</p>
                                                    <p>Unfurnished</p>
                                                </div>
                                                <div class="itmeInfo lift">
                                                    <p class="small text-uppercase">Lift</p>
                                                    <p>Yes</p>
                                                </div>
                                                <div class="itmeInfo parking">
                                                    <p class="small text-uppercase">Parking</p>
                                                    <p>Yes</p>
                                                </div>
                                                <!-- <div class="itmeInfo tenant">
                                                    <p class="small text-uppercase">Tenant Preferred</p>
                                                    <p>Bachelor/Family</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo availability">
                                                    <p class="small text-uppercase">Availability</p>
                                                    <p>Immediatley</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo floor">
                                                    <p class="small text-uppercase">Floor</p>
                                                    <p>3 Out of 7</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="rightBtn">
                                                <div class="text-center">
                                                    <h4 class="small_heading text-black fontWeight600">₹7,800</h4>
                                                    <p class="textGrey">Security Deposit</p>
                                                </div>
                                                <div class="btnColor">Contact Agent</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <hr />
                                <p class="mt-2"><small>For rent 1 room set in rwa Munirka in 3rd floor 1 bedroom 1
                                        bathroom with 1 kitchen separate newly renovated and area 250sq ft. gated
                                        society and valiance free environment site available in good location.Contact
                                        Munirka properties pvt. ltd. </small></p>
                            </div>
                            <div class="propertItem">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="propertyImg">
                                                <img src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h4 class="title fontHeading fontWeight500 text-black">Studio Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <div class="propertyInfo">
                                                <div class="itmeInfo area">
                                                    <p class="small text-uppercase">Carpet Area</p>
                                                    <p>250 sqft</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bedroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bathroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo">
                                                    <p class="small text-uppercase">Furnishing</p>
                                                    <p>Unfurnished</p>
                                                </div>
                                                <div class="itmeInfo lift">
                                                    <p class="small text-uppercase">Lift</p>
                                                    <p>Yes</p>
                                                </div>
                                                <div class="itmeInfo parking">
                                                    <p class="small text-uppercase">Parking</p>
                                                    <p>Yes</p>
                                                </div>
                                                <!-- <div class="itmeInfo tenant">
                                                    <p class="small text-uppercase">Tenant Preferred</p>
                                                    <p>Bachelor/Family</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo availability">
                                                    <p class="small text-uppercase">Availability</p>
                                                    <p>Immediatley</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo floor">
                                                    <p class="small text-uppercase">Floor</p>
                                                    <p>3 Out of 7</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="rightBtn">
                                                <div class="text-center">
                                                    <h4 class="small_heading text-black fontWeight600">₹7,800</h4>
                                                    <p class="textGrey">Security Deposit</p>
                                                </div>
                                                <div class="btnColor">Contact Agent</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <hr />
                                <p class="mt-2"><small>For rent 1 room set in rwa Munirka in 3rd floor 1 bedroom 1
                                        bathroom with 1 kitchen separate newly renovated and area 250sq ft. gated
                                        society and valiance free environment site available in good location.Contact
                                        Munirka properties pvt. ltd. </small></p>
                            </div>
                            <div class="propertItem">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="propertyImg">
                                                <img src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h4 class="title fontHeading fontWeight500 text-black">Studio Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <div class="propertyInfo">
                                                <div class="itmeInfo area">
                                                    <p class="small text-uppercase">Carpet Area</p>
                                                    <p>250 sqft</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bedroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bathroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo">
                                                    <p class="small text-uppercase">Furnishing</p>
                                                    <p>Unfurnished</p>
                                                </div>
                                                <div class="itmeInfo lift">
                                                    <p class="small text-uppercase">Lift</p>
                                                    <p>Yes</p>
                                                </div>
                                                <div class="itmeInfo parking">
                                                    <p class="small text-uppercase">Parking</p>
                                                    <p>Yes</p>
                                                </div>
                                                <!-- <div class="itmeInfo tenant">
                                                    <p class="small text-uppercase">Tenant Preferred</p>
                                                    <p>Bachelor/Family</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo availability">
                                                    <p class="small text-uppercase">Availability</p>
                                                    <p>Immediatley</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo floor">
                                                    <p class="small text-uppercase">Floor</p>
                                                    <p>3 Out of 7</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="rightBtn">
                                                <div class="text-center">
                                                    <h4 class="small_heading text-black fontWeight600">₹7,800</h4>
                                                    <p class="textGrey">Security Deposit</p>
                                                </div>
                                                <div class="btnColor">Contact Agent</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <hr />
                                <p class="mt-2"><small>For rent 1 room set in rwa Munirka in 3rd floor 1 bedroom 1
                                        bathroom with 1 kitchen separate newly renovated and area 250sq ft. gated
                                        society and valiance free environment site available in good location.Contact
                                        Munirka properties pvt. ltd. </small></p>
                            </div>
                            <div class="propertItem">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="propertyImg">
                                                <img src="images/property/property.jpg">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h4 class="title fontHeading fontWeight500 text-black">Studio Apartment for
                                                Rent in Munirka Mumbai</h4>
                                            <div class="propertyInfo">
                                                <div class="itmeInfo area">
                                                    <p class="small text-uppercase">Carpet Area</p>
                                                    <p>250 sqft</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bedroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo bathroom">
                                                    <p class="small text-uppercase">Bathroom</p>
                                                    <p>2</p>
                                                </div>
                                                <div class="itmeInfo">
                                                    <p class="small text-uppercase">Furnishing</p>
                                                    <p>Unfurnished</p>
                                                </div>
                                                <div class="itmeInfo lift">
                                                    <p class="small text-uppercase">Lift</p>
                                                    <p>Yes</p>
                                                </div>
                                                <div class="itmeInfo parking">
                                                    <p class="small text-uppercase">Parking</p>
                                                    <p>Yes</p>
                                                </div>
                                                <!-- <div class="itmeInfo tenant">
                                                    <p class="small text-uppercase">Tenant Preferred</p>
                                                    <p>Bachelor/Family</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo availability">
                                                    <p class="small text-uppercase">Availability</p>
                                                    <p>Immediatley</p>
                                                </div> -->
                                                <!-- <div class="itmeInfo floor">
                                                    <p class="small text-uppercase">Floor</p>
                                                    <p>3 Out of 7</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="rightBtn">
                                                <div class="text-center">
                                                    <h4 class="small_heading text-black fontWeight600">₹7,800</h4>
                                                    <p class="textGrey">Security Deposit</p>
                                                </div>
                                                <div class="btnColor">Contact Agent</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <hr />
                                <p class="mt-2"><small>For rent 1 room set in rwa Munirka in 3rd floor 1 bedroom 1
                                        bathroom with 1 kitchen separate newly renovated and area 250sq ft. gated
                                        society and valiance free environment site available in good location.Contact
                                        Munirka properties pvt. ltd. </small></p>
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