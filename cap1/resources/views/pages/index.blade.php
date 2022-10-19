<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBTS Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


</head>
<body>
    <div class="OBTS">
        <header class="header">
            <div class="header__navbar">
                <div class="header__logo">
                    <img src="./assets/img/logo1.jpg" alt="" class="header__logo-img">
                </div>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="#" class="header__navbar-link">HOME</a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="#" class="header__navbar-link">ABOUT US</a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="#" class="header__navbar-link">CONTACT</a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="#" class="header__navbar-link">TYPOGRAPHY</a>
                    </li>
                </ul>
                <div class="header__navbar-book">
                    <button class="header__navbar-book-btn">
                        BOOK A TOUR NOW
                    </button>
                </div>
            </div>
        </header>
        <div class="slider">
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
        <div class="container">
            <div class="row">
                <div class="container-tour-title">
                    <h1 class="container-tour-heading">POPULAR TOUR</h1>
                    <a href="view-tour.html" class="tour-view-all-link">
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
                            <a href="tour-detail.html" class="btn btn-primary card-btn">Learn More</a>
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
                            <a href="tour-detail.html" class="btn btn-primary card-btn">Learn More</a>
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
                            <a href="tour-detail.html" class="btn btn-primary card-btn">Learn More</a>
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
                            <a href="tour-detail.html" class="btn btn-primary card-btn">Learn More</a>
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
                            <a href="tour-detail.html" class="btn btn-primary card-btn">Learn More</a>
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
                            <a href="tour-detail.html" class="btn btn-primary card-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-5">
            <footer class="text-center text-white" style="background-color: #63b0eb;">
                <!-- Grid container -->
                <div class="container p-4">
                  <!-- Section: Images -->
                  <section class="">
                    <div class="row">
                      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div
                          class="bg-image hover-overlay ripple shadow-1-strong rounded"
                          data-ripple-color="light"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp"
                            class="w-100"
                          />
                          <a href="#!">
                            <div
                              class="mask"
                              style="background-color: rgba(251, 251, 251, 0.2);"
                            ></div>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div
                          class="bg-image hover-overlay ripple shadow-1-strong rounded"
                          data-ripple-color="light"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp"
                            class="w-100"
                          />
                          <a href="#!">
                            <div
                              class="mask"
                              style="background-color: rgba(251, 251, 251, 0.2);"
                            ></div>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div
                          class="bg-image hover-overlay ripple shadow-1-strong rounded"
                          data-ripple-color="light"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp"
                            class="w-100"
                          />
                          <a href="#!">
                            <div
                              class="mask"
                              style="background-color: rgba(251, 251, 251, 0.2);"
                            ></div>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div
                          class="bg-image hover-overlay ripple shadow-1-strong rounded"
                          data-ripple-color="light"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp"
                            class="w-100"
                          />
                          <a href="#!">
                            <div
                              class="mask"
                              style="background-color: rgba(251, 251, 251, 0.2);"
                            ></div>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div
                          class="bg-image hover-overlay ripple shadow-1-strong rounded"
                          data-ripple-color="light"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp"
                            class="w-100"
                          />
                          <a href="#!">
                            <div
                              class="mask"
                              style="background-color: rgba(251, 251, 251, 0.2);"
                            ></div>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div
                          class="bg-image hover-overlay ripple shadow-1-strong rounded"
                          data-ripple-color="light"
                        >
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp"
                            class="w-100"
                          />
                          <a href="#!">
                            <div
                              class="mask"
                              style="background-color: rgba(251, 251, 251, 0.2);"
                            ></div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- Section: Images -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2022 Copyright:
                  <a class="text-white" href="https://mdbootstrap.com/">OBTSystem.com</a>
                </div>
                <!-- Copyright -->
              </footer>
        </footer>
    </div>
</body>
</html>
