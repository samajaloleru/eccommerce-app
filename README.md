
<div class="row">
    <div class="col-12 bg-orange">
        <a class="pl-0 header-white py-2">Best Selling</a>
    </div>
    <div class="products pt-3">
        <div class="row">
        <?php 
            $product=DB::table('product')
            ->where('best_status',1)
            ->limit('12')
            ->get();
        foreach($product as $v_product){?>   
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card">
                    <div class="card-image">
                        <a href="">
                            <img src="{{$v_product->image}}" href="{{URL::to('/view_product/'.$v_product->product_id)}}" style="height:200px; width:100%" class="img-rounded img-responsive">
                        </a>
                        <div class="card-body">
                            <div class="card-description text-height">
                                <h6 class="float-left font-weight-bold">{{$v_product->product_name}}</h6>

                                <h6 class="float-right">₦ {{$v_product->price}}</h6>
                            </div>
                            <div class="col-12 pt-4 text-center px-0">
                                <a href="{{URL::to('/view_product/'.$v_product->product_id)}}" class="btn product-text btn-product btn-block">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </div>
</div>

<div class="row py-5">
    <div class="col-12 col-lg-11 ml-auto mr-auto px-0 pt-2 pt-lg-0 pb-lg-0 px-lg-0">
        <div class="card mb-0 card-raised page-carousel">
            <div id="carouselExampleIndicator" class="carousel slide" data-interval="3000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicator" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="3" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="4" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="5" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="6" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="7" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="8" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="9" class=""></li>
                    <li data-target="#carouselExampleIndicator" data-slide-to="10" class=""></li>
                </ol>
                
                    <div class="carousel-inner" role="listbox">
                    <?php
                        $all_published_advert=DB::table('advert_slider')
                                        ->where('status',1)
                                        ->get();
                        foreach($all_published_advert as $key => $v_slider){?>
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <div class="page-header page-header-xs" style="background-image: url('{{$v_slider->advert_image}}');">
                                <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-left">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>