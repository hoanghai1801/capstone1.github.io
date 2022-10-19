@extends('share.master_page')

@section('slider')
    <div class="slider-home">
        <div class="slider-text">
            <h1 class="text-heading">
                THE TRIP OF YOUR DREAM
            </h1>
            <p class="text-content">Our travel agency is ready to offer you an exciting vacation that is designed to fit your own needs and wishes. Whether it's an exotic cruise or a trip to your favorite resort, you will surely have the best experience.</p>
            <a href="#" class="text-btn">LEARN MORE</a>
        </div>
        <div class="search-tour">
            <h1 class="search-tour-heading">FIND YOUR TOUR</h1>
            <div class="search-tour-from">
                <h4 class="search-tour-from-header">
                    From
                </h4>
                <div class="search-tour-from-body">
                <select class="city" name="city" id="city">
                    <option value="hcm">Hồ Chí Minh</option>
                    <option value="hn">Hà Nội</option>
                    <option value="dn">Đà Nẵng</option>
                    <option value="hue">Huế</option>
                    <option value="bmt">Buôn Ma Thuột</option>
                </select>
                </div>
            </div>
            <div class="search-tour-to">
                <h4 class="search-tour-to-header">
                    To
                </h4>
                <div class="search-tour-to-body">
                <select class="city" name="city" id="city">
                    <option value="hcm">Hồ Chí Minh</option>
                    <option value="hn">Hà Nội</option>
                    <option value="dn">Đà Nẵng</option>
                    <option value="hue">Huế</option>
                    <option value="bmt">Buôn Ma Thuột</option>
                </select>
                </div>
            </div>
            <div class="search-tour-container">
                <div class="search-tour-depart">
                    <h4 class="search-tour-depart-header">
                        Depart Date
                    </h4>
                    <div class="search-tour-depart-body">
                        <input type="text" placeholder="Choose the date" class="search-tour-depart-date">
                    </div>
                </div>
                <div class="search-tour-to">
                    <h4 class="search-tour-depart-header">
                        Duration
                    </h4>
                    <div class="search-tour-depart-body">
                    <select class="duration" name="duration" id="duration">
                        <option value="any">Any length</option>
                        <option value="2days">2 days</option>
                        <option value="3days">3 days</option>
                        <option value="4days">4 days</option>
                    </select>
                    </div>
                </div>
                <div class="search-tour-depart">
                    <h4 class="search-tour-depart-header">
                        Adults
                    </h4>
                    <div class="search-tour-depart-body">
                        <input type="number" min="0" max="200" value="3" class="search-tour-adults-date">
                    </div>
                </div>
                <div class="search-tour-to">
                    <h4 class="search-tour-depart-header">
                        Children
                    </h4>
                    <div class="search-tour-depart-body">
                        <input type="number" min="0" max="200" value="1" class="search-tour-adults-date">
                    </div>
                </div>
            </div>

            <button class="search-light-btn">SEARCH LIGHT</button>


        </div>
    </div>
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="container-tour-title">
            <h1 class="container-tour-heading">POPULAR TOUR</h1>
            <a href="/viewTour" class="tour-view-all-link">
              <button class="container-tour-view-btn">View All Tours</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="card-description">
                        <h2 class="card-title">France, Paris</h2>
                        <h2 class="card-price">$2000</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left card-time-btn">
                        <span class="card-time">3 days</span>
                    </i>
                    <div class="rating">
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)
                    </div>
                    <a href="/tourDetail" class="btn btn-primary card-btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="card-description">
                        <h2 class="card-title">France, Paris</h2>
                        <h2 class="card-price">$2000</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left card-time-btn">
                        <span class="card-time">3 days</span>
                    </i>
                    <div class="rating">
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)
                    </div>
                    <a href="/tourDetail" class="btn btn-primary card-btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="card-description">
                        <h2 class="card-title">France, Paris</h2>
                        <h2 class="card-price">$2000</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left card-time-btn">
                        <span class="card-time">3 days</span>
                    </i>
                    <div class="rating">
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)
                    </div>
                    <a href="/tourDetail" class="btn btn-primary card-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="card-description">
                        <h2 class="card-title">France, Paris</h2>
                        <h2 class="card-price">$2000</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left card-time-btn">
                        <span class="card-time">3 days</span>
                    </i>
                    <div class="rating">
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)
                    </div>
                    <a href="/tourDetail" class="btn btn-primary card-btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="card-description">
                        <h2 class="card-title">France, Paris</h2>
                        <h2 class="card-price">$2000</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left card-time-btn">
                        <span class="card-time">3 days</span>
                    </i>
                    <div class="rating">
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)
                    </div>
                    <a href="/tourDetail" class="btn btn-primary card-btn">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="card-description">
                        <h2 class="card-title">France, Paris</h2>
                        <h2 class="card-price">$2000</h2>
                    </div>
                    <i class="fa-solid fa-clock-rotate-left card-time-btn">
                        <span class="card-time">3 days</span>
                    </i>
                    <div class="rating">
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i>
                      <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)
                    </div>
                    <a href="/tourDetail" class="btn btn-primary card-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
