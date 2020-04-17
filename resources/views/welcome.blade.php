
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/../frontend/img//apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/../frontend/img//favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Anema Mart
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/paper-kit.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
    <div class="header-2">
            <nav class="navbar navbar-expand-lg text-red bg-dark">
                <div class="container">
                    <a class="navbar-brand white">
                        <i class="fa icon1 mr-3 fa-envelope"></i>
                        service@anemacitymall.com
                    </a>
                    <a class="navbar-brand white">7 days delivery, 10am - 5pm</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a target="_blank" class="btn btn-link btn-neutral">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-instagram"></i>
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg pt-0 bg-success">
                <div class="container">
                    <a class="navbar-brand mb-0">
                        <img src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <form class="form-inline ml-auto">
                                    <input class="form-control mr-sm-2 no-border" type="text" placeholder="Search">
                                    <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></button>
                                </form>
                            </li>
                            <a class="btn btn-link btn-neutral">
                                <i class="icon fa fa-shopping-cart mr-2"></i>
                                <span class="nav-text">My Basket</span>
                            </a>
                            <a type="button" class="btn btn-link btn-neutral" data-toggle="modal" data-target="#loginModal">
                                <i class="icon mr-1 fa fa-user"></i>
                                <span class="nav-text">Login /Register</span>
                            </a>
                        </ul>
                        <!-- login modal -->
                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-register">
                                <div class="modal-content bg-success">
                                    <div class="modal-header no-border-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h5 class="black">Welcome</h5>
                                        <img class="pb-1 text-center" src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                                        <p class="black">Log in to your account</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pb-3 text-center">
                                            <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                              <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                              <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" value="" placeholder="Email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" value="" placeholder="Password" class="form-control" />
                                        </div>
                                        <button class="btn btn-block btn-round"> Log in</button>
                                    </div>
                                    <div class="modal-footer no-border-footer">
                                        <span class="text-center">Looking to
                                            <a data-toggle="modal" href="#myModal2" class="text-white">create an account</a> 
                                            ?
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- register modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-register">
                                <div class="modal-content bg-success">
                                    <div class="modal-header no-border-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h6 class="black">Register</h6>
                                        <img class="pb-1 text-center" src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                                        <p>Create your account free and secure</p>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pb-3 text-center">
                                            <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                              <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                              <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" value="" placeholder="Email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" value="" placeholder="Password" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" value="" placeholder="Confirm Password" class="form-control" />
                                        </div>
                                        <button class="btn btn-block btn-round">Register</button>
                                    </div>
                                    <div class="modal-footer no-border-footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="section pt-0">
               
                <div class="container-fluid bg-page px-lg-5">
                    <div class="row p-lg-4">
                        <div class="col">
                            <h5 class="black font-weight-bold">
                                Home / Shop
                            </h5>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-2  col-6">
                                    <div class="card card-refine">
                                        <div class="panel-group" id="accordion" aria-expanded="true">
                                            <div class="card-header card-collapse" role="tab" data-toggle="tab"  id="food">
                                                <h6 class="mb-0 panel-title black">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#clothing" aria-expanded="true" aria-controls="collapseOne">
                                                        Food Cupboard
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>

                                            </div>
                                            <div id="clothing" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body" role="tablist">
                                                    <p href="#clothing" role="tab" data-toggle="tab">Breakfast Cereals</p>
                                                    <p>Rice</p>
                                                    <p>Pasta & Noodles</p>
                                                    <p>Swallow</p>
                                                    <p>Salt & Spices</p>
                                                    <p>Sugar & Sweeteners</p>
                                                    <p>Cake</p>
                                                    <p>Pancake</p>
                                                    <p>Custard & Jelly</p>
                                                    <p>Beans Seeds & Grains</p>
                                                    <p>Olives & Pickles</p>
                                                    <p>Soup</p>
                                                </div>
                                            </div>


                                            <div class="card-header card-collapse" role="tab" id="designer">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#refineDesigner" aria-expanded="true" aria-controls="collapseThree">
                                                        Fresh Food
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>

                                            <div id="refineDesigner" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Bread</p>
                                                    <p>Eggs</p>
                                                    <p>Cheese</p>
                                                    <p>Fruits</p>
                                                    <p>Meat & Poultry</p>
                                                    <p>Sugar & Sweeteners</p>
                                                    <p>Sea Food</p>
                                                    <p>Sausages Bacon & Cold...</p>
                                                    <p>Yoghurt & Desserts</p>
                                                    <p>Vegetables</p>
                                                </div>
                                            </div>


                                            <div class="card-header card-collapse" role="tab" id="color">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#colorMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Wineries & Spirit
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="colorMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Alcopops</p>
                                                    <p>Beer</p>
                                                    <p>Stout & Cider</p>
                                                    <p>Red Wine: (All Red Wine ,Shiraz/Syrah)</p>
                                                    <p>White Wine</p>
                                                    <p>Rose Wine</p>
                                                    <p>Sparkling Wine</p>
                                                    <p>Champagne</p>
                                                    <p>Brandy</p>
                                                    <p>Cognac</p>
                                                    <p>Whisky</p>
                                                    <p>Aperitifs & Liqueurs:(All Aperitifs & Liqueurs , Cream Liqueur)</p>
                                                    <p>Gin & Vodka</p>
                                                    <p>Rum:(All Rum , Light Rum)</p>
                                                    <p>Tequila</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="food">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#foodMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Naija Food
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="foodMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Naija Ingredients</p>
                                                    <p>Naija Meat</p>
                                                    <p>Poultry & Sea Food</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="toiletries">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#toiletriesMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Toiletries
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="toiletriesMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Moisturizers & Lotions</p>
                                                    <p>Oral Care</p>
                                                    <p>Facial Care</p>
                                                    <p>Feminine Care</p>
                                                    <p>Women's Shaving & Hair</p>
                                                    <p>Feet Care</p>
                                                    <p>Cotton Wool & Buds</p>
                                                    <p>Deodorant & Body Spray</p>
                                                    <p>Hand Lotion</p>
                                                    <p>Powder</p>
                                                    <p>Men's Shaving</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="oil">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#oilMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Cooking Oil
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="oilMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Palm Oil</p>
                                                    <p>Corn & Canola Oil</p>
                                                    <p>Groundnut & Vegetable Oil</p>
                                                    <p>Soya & Sunflower Oil</p>
                                                    <p>Speciality Oils & Cooking Wine</p>
                                                    <p>Olive Oil</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="household">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#householdMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Household
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="householdMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Air Fresheners & Fragrances</p>
                                                    <p>Insecticides & Rat Traps</p>
                                                    <p>Hand Wash & Sanitizers</p>
                                                    <p>Laundry</p>
                                                    <p>Toilet Tissue</p>
                                                    <p>Facial Tissue</p>
                                                    <p>Waste Bins & Bins Bags</p>
                                                    <p>Shoe Polish</p>
                                                    <p>Pets</p>
                                                    <p>Car Care</p>
                                                    <p>Batteries</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="baby">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#babyMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Baby & Kids
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="babyMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Baby Food</p>
                                                    <p>Baby Wipes</p>
                                                    <p>Diapers</p>
                                                    <p>Kids' Toiletries</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="kitchen">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#kitchenMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Kitchen & Dinning
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="kitchenMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Kitchen Towels & Serviettes</p>
                                                    <p>Freezer & Sandwich Bags</p>
                                                    <p>Foil & Cling Film</p>
                                                    <p>Take Away Packs</p>
                                                    <p>Disposable Plates & Cutlery</p>
                                                    <p>Baking & Wax Paper</p>
                                                    <p>Oven & Roasting Bags</p>
                                                    <p>Nylon Bags & Carry Sacks</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="snack">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#snackMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Snacks
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="snackMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Biscuits & Wafers</p>
                                                    <p>Chocolates</p>
                                                    <p>Potato & Plantain Chips</p>
                                                    <p>Cocktail Snacks</p>
                                                    <p>Popcorn</p>
                                                    <p>Energy & Granola Bars</p>
                                                    <p>Sweets & Chewing Gum</p>
                                                    <p>Nuts & Dried Fruit</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="drink">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#drinkMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Drinks
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="drinkMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Soft Drinks</p>
                                                    <p>Energy Drinks</p>
                                                    <p>Fruit Juice & Flavoured Drinks</p>
                                                    <p>Kids Juice Packs</p>
                                                    <p>Water</p>
                                                    <p>Milk</p>
                                                    <p>Milk & Yoghurt Drinks</p>
                                                    <p>Food Drinks</p>
                                                    <p>Tea</p>
                                                    <p>Coffee</p>
                                                    <p>Non-Alcoholic Wine</p>
                                                    <p>Yoghurt & Desserts</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="frozen">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#frozenMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Frozen
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="frozenMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Butter & Margarine</p>
                                                    <p>Mixed Vegetables</p>
                                                    <p>Assorted Vegetables</p>
                                                    <p>Chips</p>
                                                    <p>Ready Meals</p>
                                                    <p>Sea Food</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="canned">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#cannedMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Canned Goods
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="cannedMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Coconut Milk</p>
                                                    <p>Canned Beans & Peas</p>
                                                    <p>Canned Fish & Meat</p>
                                                    <p>Canned Fruit & Vegetables</p>
                                                </div>
                                            </div>

                                            
                                            <div class="card-header card-collapse" role="tab" id="sauce">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#sauceMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Sauces
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="sauceMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Salad Dressing</p>
                                                    <p>Cooking & Whipping Cream</p>
                                                    <p>Tomato Paste</p>
                                                    <p>Tinned Tomatoes</p>
                                                    <p>Table Sauces</p>
                                                    <p>Cooking Sauces:(All Cooking Sauces ,Cooking & Serving Cutlery)</p>
                                                    <p>Vinegar</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="clean">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#cleanMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Cleaning
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="cleanMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Brushes</p>
                                                    <p>Mops & Buckets</p>
                                                    <p>Bleach</p>
                                                    <p>Bathroom & Toilet Cleaners</p>
                                                    <p>Disinfectants</p>
                                                    <p>Cleaning Cloths</p>
                                                    <p>Dish & Kitchen Cleaners</p>
                                                    <p>Sponges & Scourers</p>
                                                    <p>Surface Cleaners</p>
                                                </div>
                                            </div>

                                            <div class="card-header card-collapse" role="tab" id="health">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#healthMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Health & Beauty
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>

                                            <div id="healthMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Supplement</p>
                                                    <p>Organic & Natural Foods</p>
                                                    <p>Makeup Accessories</p>
                                                </div>
                                            </div>
                                            <div class="card-header card-collapse" role="tab" id="appar">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#apparMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Apparels & Shoes
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>

                                            <div id="apparMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Men</p>
                                                    <p>Women</p>
                                                </div>
                                            </div>
                                            <div class="card-header card-collapse" role="tab" id="ungroup">
                                                <h6 class="mb-0 panel-title">
                                                    <a class="font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#ungroupMaker" aria-expanded="true" aria-controls="collapseTree">
                                                        Ungroup Products
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h6>
                                            </div>

                                            <div id="ungroupMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p>Mega Discount</p>
                                                    <p>New Additions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#info" role="tab" data-toggle="tab">Creams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#description" role="tab" data-toggle="tab">Perfumes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#concept" role="tab" data-toggle="tab">Concept</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#support" role="tab" data-toggle="tab">Support</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#extra" role="tab" data-toggle="tab">Extra</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="col-md-8 col-sm-8 col-lg-10 col-6">
                                    <div class="row pb-5">
                                        <div class="col-lg-6 col-12 pb-2 pb-lg-0">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                    <div class="page-header page-header-xs" style="background-image: url('../frontend/img/bgslide1.jpg');">
                                                        <div class="filter"></div>
                                                        <div class="content-center">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12 text-left">
                                                                        <h3 class="font-weight-bold">We Got Everything You need</h3>
                                                                        <br />
                                                                        <div class="buttons float-right">
                                                                            <a href="#pablo" class="btn btn-danger btn-round btn-lg">
                                                                                Shop Now
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                    <div class="page-header page-header-xs" style="background-image: url('../frontend/img/bgslide1.jpg')">
                                                        <div class="filter"></div>
                                                        <div class="content-center">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12 ml-auto mr-auto text-center">
                                                                        <h1 class="title font-weight-bold">WE'RE OPEN</h1>
                                                                        <h5 class="font-weight-bold">
                                                                            Stay Home, Stay Safe 
                                                                        </h5>
                                                                        <br />
                                                                        <h6 class="font-weight-bold">We'll get all your groceries to you</h6>
                                                                        <div class="buttons float-right">
                                                                            <a href="#pablo" class="btn btn-danger btn-round btn-lg">
                                                                                Shop Now
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                    <div class="page-header page-header-xs" style="background-image: url('../frontend/img/bgslide.jpg')">
                                                        <div class="filter"></div>
                                                        <div class="content-center">
                                                        <div class="container">
                                                            <div class="row">
                                                            <div class="col-md-7 ml-auto text-right">
                                                                <h2 class="title">Premium Offers for Venice</h2>
                                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                                <br />
                                                                <div class="buttons">
                                                                <a href="#pablo" class="btn btn-neutral btn-link btn-lg">
                                                                    <i class="fa fa-share-alt"></i> Share Offer
                                                                </a>
                                                                <a href="#pablo" class="btn btn-success btn-round btn-lg">
                                                                    <i class="fa fa-shopping-cart"></i> Shop Now
                                                                </a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="fa fa-angle-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="fa fa-angle-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-12 pt-2 pt-lg-0 pb-lg-0">
                                            <div class="card card-raised page-carousel">
                                                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExample" data-slide-to="1"></li>
                                                        <li data-target="#carouselExample" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="carousel-item active">
                                                            <div class="page-header page-header-xs">
                                                                <img class="d-block img-fluid" src="../frontend/img/banner2.jpg" alt="First slide">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <p>Somewhere</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="page-header page-header-xs">
                                                                <img class="d-block img-fluid" src="../frontend/img/banner.png" alt="Second slide">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <p>Somewhere</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="page-header page-header-xs">
                                                                <img class="d-block img-fluid" src="../frontend/img/banner2.png" alt="Second slide">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <p>Somewhere</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="left carousel-control carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                                        <span class="fa fa-angle-left"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                                        <span class="fa fa-angle-right"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Tab panes -->
                                    <div class="container-fluid">
                                        <div class="row" href="#food">
                                            <h5 class="col-12 bg-success pa5 black pl-2">Food Cupboard</h5>
                                            <div class="products">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream11.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream11.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5 class="col-12 bg-success pa5 black pl-2">Fresh Food</h5>
                                            <div class="products">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream12.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream13.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream4.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream12.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream13.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream4.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5 class="col-12 bg-success pa5 black pl-2">Wineries & Sprits </h5>
                                            <div class="products">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream11.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">One Shoulder Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>2.900 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream11.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Stretch-Knit Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.700 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="card card-product card-plain">
                                                            <div class="card-image">
                                                                <a href="">
                                                                    <img src="../frontend/img/cream2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                                                </a>
                                                                <div class="card-body">
                                                                    <div class="card-description">
                                                                        <h6 class="font-weight-bold">Chrystal Sheer Dress</h6>
                                                                        <p class="card-description">Dresses & Skirts</p>
                                                                    </div>
                                                                    <div class="price">
                                                                        <h6>1.500 &euro;</h6>
                                                                    </div>
                                                                    <div class="col-12 text-center">
                                                                        <button type="button" class="btn btn-sm btn-outline-success btn-round">Add to Cart</button>
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

            <div class="section pt-0 mt-0">
                <div class="container">
                    <h4 class="font-weight-bold title-uppercase pb-2">Introduction</h4>
                    <p class="text-dark">
                        Anema City Center : is an Online and Offline departmental store in Uyo ,Akwa Ibom State<br/>
                        Anamacitymall.com, is the leading online supermarket and grocery delivery service in Akwa Ibom State and Niger Delta Region. 
                        Order online from over 40,000 products and receive same-day delivery. Visit your favorite online store, Anemacitymall.com, 
                        for the best online same day delivery shopping in Uyo and her environs. On Anemacitymall.com, you can buy groceries online 
                        and get the best food shopping offers compared to any other online supermarket in Akwa Ibom State. This online grocery store 
                        in Akwa Ibom State is great for all kind of supermarket shopping and home delivery service. Online supermarket shopping should 
                        be easy and that’s what we do best at Anemacitymall.com– we ensure that in our online supermarket, you not only get great food 
                        shopping online offers, super market delivery but also the kind of excellent service you expect in an online shopping store. 
                        Shop here to get the best prices and discounts on toiletries , food cupboard, beverages , drinks and household products 
                        when you do your online shopping in Akwa Ibom State or from anywhere in Nigeria.
                    </p>
                    
                    <h5 class="font-weight-bold pt-2 title-uppercase">We <i class="fa fa-heart heart"></i>&nbsp; what we do.</h5>
                    <p class="text-dark">
                        Our wide selection of products includes product categories like fruits, vegetables, meat, chicken, fish, toiletries, beauty products, 
                        cosmetics, cleaning products, snacks, drinks, alcohol, canned goods,books, office supplies and lots more. Because we have the largest 
                        assortment of groceries in Nigeria, you'll be sure to find everyday essentials like bread, eggs, tea, cooking oil, sardines, garri, yam, 
                        carrots, apples, avocado, cornflakes, noodles, tea, coffee, soft drinks, juice, soap, deodorants, toothpaste, bleach, air fresheners, diapers, 
                        hand wash, toilet tissue, pens, printing paper and so much more. Anemacitymall.com is the only grocery supermarket where you can fulfill your 
                        entire shopping basket without having to drive to various stores and that's because we have all the leading brands like Coke, Fanta, Nescafe, 
                        Indomie, Power Oil, Ola Ola, Honeywell, Indomie, Peak, Golden Morn, Heinz, Milo, Lipton, Jik, Hypo, Ariel, Kellogg's, Nutzy, De Rica, Mamador, 
                        Gulder, Heineken, Orijin, Chivita, Dano, Oldenburger, Hollandia, Boulos, Nivea, Vaseline, Colgate, Pringles, McVities, Air Wick, Dettol. 
                        We're a one-stop shop near you either Online/Offline. it doesn't matter what part of your home you're thinking of, we've got the products for your kitchen, 
                        living room, bathroom, bedroom and even the office.
                    </p>
                    
                    <div class="row pt-3 coloured-cards">
                        <div class="col-md-4 col-sm-6">
                            <div class="card-big-shadow">
                                <div class="card" data-background="color" data-color="blue" data-radius="none">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold card-category">MISSION</h6>
                                        <!-- <h4 class="card-title">
                                            <a href="#paper-kit">Blue Card</a>
                                        </h4> -->
                                        <p class="card-description">
                                            Being the best at delivering fresh, affordable, 
                                            high quality and well packaged farm produce in a hygienic 
                                            environment to our customers through world class retail outlets.
                                        </p>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card-big-shadow">
                                <div class="card" data-background="color" data-color="green" data-radius="none">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold card-category">Vision</h6>
                                        
                                        <p class="card-description">
                                        Providing easy access to quality food in major cities in Nigeria by 2025.
                                        </p>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="card-big-shadow">
                                <div class="card" data-background="color" data-color="yellow" data-radius="none">
                                    <div class="card-body">
                                        <h6 class="font-weight-bold card-category">CORE VALUES</h6>
                                        <p class="card-description">Customer satisfaction ,Sustainable partnership with our suppliers ,Integrity ,Hygiene </p>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>

                    <p class="text-dark">
                        Anemacitymall.com has all the groceries you’ll find in supermarkets and retailers like Park N Shop, Spar, Hubmart, Shoprite and other big Online stores in Nigeria.
                        Why going to the supermarkets when Anemacitymall.com or visit Anema City Center? can come to you?
                    </p>
                </div>
            </div>
        </div>

        <div class="separator"></div>
        <footer class="footer footer-black footer-big">
            <div class="container px-5">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="links">
                                    <img src="../frontend/img/logo.jpg" alt="" style="width: 150px;">
                                    <p class="white text-left pt-3">
                                        Contact: 08126432202, 08061347511, 08032461836
                                    </p>
                                    <p class="white px-0">
                                        <i class="fa icon1 fa-map-marker"></i>
                                        <span class="font-weight-bold">Our Outlets,</span>
                                        <br/>
                                        29 NEPA Line, Uyo Akwa Ibom State / Anema City Mart, 
                                        <br/>
                                        5 Osongama Road Behind Emerald Event Center , Osongama Estate , Uyo
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 pl-lg-5">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a href="#paper-kit">
                                            Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Discover
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Live Support
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#paper-kit">
                                            Money Back
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="links">
                                    <ul class="uppercase-links stacked-links">
                                        <li>
                                            <a href="#paper-kit" class="col-12">
                                                <h4>Contact Us</h4>
                                                <div class="separator"></div>
                                                <div class="subscribe-line subscribe-line-black">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <form class="">
                                                                    <div class="form-group">
                                                                        <input type="text" value="" class="form-control" placeholder="Enter your email...">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-neutral btn-block btn-lg">Join Newsletter</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="copyright">
                            <div class="pull-left">
                                &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Anema City Center. All rights reserved.
                            </div>
                            <div class="links pull-right">
                                <ul>
                                    <li>
                                        <a href="#paper-kit">
                                            Company Policy
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#paper-kit">
                                            Terms
                                        </a>
                                    </li>
                                    |
                                    <li>
                                        <a href="#paper-kit">
                                            Privacy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-switch.js') }}"></script>
        <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>
        <script src="{{ asset('frontend/js/moment.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-tagsinput.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-selectpicker.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-datetimepicker.js') }}"></script>
        <script src="{{ asset('frontend/js/photoswipe.min.js') }}"></script>
        <script src="{{ asset('frontend/js/photoswipe-ui-default.min.js') }}"></script>
        <script src="{{ asset('frontend/js/init-gallery.js') }}"></script>
        <script src="{{ asset('frontend/js/asny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/paper-kit.js') }}"></script>
    </body>
</html>
