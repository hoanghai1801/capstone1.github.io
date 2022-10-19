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
    <link rel="stylesheet" href="./assets/css/payment.css">
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

        <div class="container">
          <div class="row">
            <div class="col-md-12 mt-5">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./assets/img/sandip-roy-KPgzTgfdaAc-unsplash.jpg" class="img-fluid rounded-start" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title card-title-heading">HÀ NỘI - ĐÀ NẴNG - BÀ NÀ HILL - PHỐ CỔ HỘI AN</h5>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="overview-content mt-3">
                            <i class="fa-solid fa-location-dot overview-content-icon"></i>
                            <span class="overview-content-title">
                              Điểm khởi hành:
                            </span>
                            <span class="overview-content-address">Hà Nội</span>
                          </div>
                          <div class="overview-content mt-3">
                            <i class="fa-solid fa-location-dot overview-content-icon"></i>
                            <span class="overview-content-title">
                              Điểm đến:
                            </span>
                            <span class="overview-content-address">Đà Nẵng</span>
                          </div>
                          <div class="overview-content mt-3">
                            <i class="fa-regular fa-calendar-days overview-content-icon"></i>
                            <span class="overview-content-title">
                              Ngày khởi hành:
                            </span>
                            <span class="overview-content-address">2022</span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="overview-content mt-3">
                            <i class="fa-solid fa-clock overview-content-icon"></i>
                            <span class="overview-content-title">
                              Thời gian:
                            </span>
                            <span class="overview-content-address">4 ngày / 3 đêm</span>
                          </div>
                          <div class="overview-content mt-3">
                            <i class="fa-solid fa-person-walking-luggage overview-content-icon"></i>
                            <span class="overview-content-title">
                              Phương tiện:
                            </span>
                            <span class="overview-content-address">Máy Bay & Ô Tô</span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                          <div class="money">
                            <h1 class="money-heading">Thành tiền:</h1>
                            <h1 class="money-price">$100</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <form action="">
              <div class="info">
                <h1 class="info-heading-title">THÔNG TIN LIÊN HỆ</h1>
                <div class="row mt-3">
                  <div class="col-md-3">
                    <h1 class="info-heading">Họ và tên</h1>
                  </div>
                  <div class="col-md-4">
                    <input type="text" required class="info-input">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-3">
                    <h1 class="info-heading">Địa chỉ</h1>
                  </div>
                  <div class="col-md-4">
                    <input type="text" required class="info-input">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-3">
                    <h1 class="info-heading">Số điện thoại</h1>
                  </div>
                  <div class="col-md-4">
                    <input type="tel" required class="info-input">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-3">
                    <h1 class="info-heading">Email</h1>
                  </div>
                  <div class="col-md-4">
                    <input type="email" required class="info-input">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-3">
                    <h1 class="info-heading">Nội dung yêu cầu</h1>
                  </div>
                  <div class="col-md-4">
                    <textarea type="text" class="info-textarea"></textarea>
                  </div>
                </div>
              </div>
              <div class="payment mt-5">
                <h1 class="type-payment">LOẠI HÌNH THANH TOÁN</h1>
                <div class="form-check-payment">
                  <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Thanh toán toàn bộ (100% giá trị tour)
                    </label>
                  </div>
                  <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Đặt cọc trước (20% giá trị tour)
                    </label>
                  </div>
                </div>
              </div>
              <div class="banking mt-5">
                <h1 class="method-payment">PHƯƠNG THỨC THANH TOÁN</h1>
                <div class="form-check-payment">
                  <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                    <input class="form-check-input" type="radio" name="flexRadioDefaultMethodPayment" id="flexRadioDefaultMethodPayment1">
                    <label class="form-check-label" for="flexRadioDefaultMethodPayment1">
                      Thanh toán trực tuyến bằng thẻ ngân hàng
                    </label>
                  </div>

                  <div class="info-banking">
                    <h1 class="banking-title">Tài khoản ngân hàng của OBTS:</h1>
                    <div class="card mb-3" style="max-width: 600px; background-color: #d5d5d5; border: none;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="https://inkythuatso.com/uploads/images/2021/11/mb-bank-logo-inkythuatso-01-10-09-01-10.jpg" class="img-fluid rounded-start banking-img" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title card-title-info">Ngân hàng TMCP Quân Đội - CN Đà Nẵng</h5>
                              <h5 class="card-title card-title-info">STK: 0123456789</h5>
                              <h5 class="card-title card-title-info">CTK: OBTSystem</h5>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="info-banking">
                    <h1 class="banking-title">Nội dung chuyển khoản:</h1>
                    <div class="card mb-3" style="max-width: 600px; background-color: #d5d5d5; border: none;">
                        <div class="row g-0">
                          <div class="col-md-12">
                            <div class="card-body">
                              <h5 class="card-title card-title-info">Họ và tên + tên tour</h5>
                              <h5 class="card-title card-title-info">Ví dụ: Nguyen Van A, Ha Noi - Da Nang - Hoi An</h5>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                    <input class="form-check-input" type="radio" name="flexRadioDefaultMethodPayment" id="flexRadioDefaultMethodPayment2" checked>
                    <label class="form-check-label" for="flexRadioDefaultMethodPayment2">
                      Thanh toán trực tiếp tại OBTS
                    </label>
                  </div>
                </div>
              </div>
              <input type="submit" value="THANH TOÁN" class="submit-input">
            </form>
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
