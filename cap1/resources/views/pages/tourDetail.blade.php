@extends('share.master_page')

@section('slider')
    <div class="slider-tour-detail">
    </div>
@endsection

@section('content')
    <div class="container">
    <div class="row mt-3">
      <div class="col-md-8">
        <ul class="list-menu">
          <li class="list-menu-item">
            <a class="list-menu-item-link" href="#overview">Overview</a>
          </li>
          <li class="list-menu-item">
            <a class="list-menu-item-link" href="#photos">Photos</a>
          </li>
          <li class="list-menu-item">
            <a class="list-menu-item-link" href="#itinerary">Itinerary</a>
          </li>
          <li class="list-menu-item">
            <a class="list-menu-item-link" href="#location">Location</a>
          </li>
          <li class="list-menu-item">
            <a class="list-menu-item-link" href="#reviews">Reviews</a>
          </li>
        </ul>
        <div id="overview" class="content-section">
          <h1 class="content-section-heading">
            HÀ NỘI - ĐÀ NẴNG - PHỐ CỔ HỘI AN - BÀ NÀ HILL
          </h1>
          <div class="rating">
            <i class="fa-solid fa-star rating-btn"></i>
            <i class="fa-solid fa-star rating-btn"></i>
            <i class="fa-solid fa-star rating-btn"></i>
            <i class="fa-solid fa-star rating-btn"></i>
            <i class="fa-solid fa-star rating-btn"></i>
            <span class="rating-sum">
               (2 reviewer)
            </span>
          </div>
          <div class="row mb-5 border-bot">
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
        </div>
        <div id="photos" class="content-section mt-5 border-bot">
          <h1 class="content-section-heading">
            PHOTOS
          </h1>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./assets/img/kh-i-d-ng-xVS6EuFGxJg-unsplash.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/sandip-roy-KPgzTgfdaAc-unsplash.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/sandip-roy-YIAYBZBB1xQ-unsplash.jpg" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div id="itinerary" class="content-section mt-5 border-bot">
          <h1 class="content-section-heading">
            ITINERARY
          </h1>
          <h4 class="content-section-day">
            NGÀY 01: NỘI BÀI - ĐÀ NẴNG
          </h4>
          <p class="content-section-text">Sáng: Xe và HDV của Văn Hóa & DL Hà Nội đón quý khách tại điểm hẹn, khởi hành ra sân bay nội bài, làm thủ tục trên chuyến bay của hang hàng không VN Airlines / VJ… đi Đà Nẵng. Tới Đà Nẵng xe đón quý khách khởi hành về khách sạn nhận phòng nghỉ ngơi.
            <br>
            Trưa 12h00: Quý khách dùng cơm trưa tại nhà hàng. Sau bữa trưa đoàn nghỉ ngơi tại khách sạn.
            <br>
            Chiều: Quý khách tự do tham quan tắm biển, tham gia các hoạt động vui chơi tại bãi biển như: cano lướt sóng, bóng đá bãi biển, bóng chuyền bãi biển…
            <br>
            Tối 19h00: Quý khách dùng cơm tối tại nhà hàng. Sau bữa tối đoàn tự do tham quan khám phá thành phố Đà Nẵng về đêm.
          </p>
          <h4 class="content-section-day">
            NGÀY 02: BÁN ĐẢO SƠN TRÀ - NGŨ HÀNH SƠN - HỘI AN
          </h4>
          <p class="content-section-text">Sáng: Quý khách dậy sớm ngắm cảnh bình minh trên biển, hòa bình vào làn nước biển trong xanh của bãi biển Mỹ Khê, một trong 6 bãi biển đẹp nhất hành tinh do tạp chí Fobes bình chọn.
            <br>
            07h00 - 08h00: Quý khách dùng điểm tâm Buffet tại khách sạn.
            <br>
            08h05 - 08h30: Xe và HDV đón quý khách khởi hành tham quan Bán Đảo Sơn Trà thưởng ngoạn toàn cảnh phố biển Đà Nẵng trên cao. Xe đưa quý khách dọc theo triền núi Đông Nam để chiêm ngưỡng vẻ đẹp tuyệt mỹ của biển Đà Nẵng, viếng chùa Linh Ứng Tự - nơi có tượng Phật Bà 67m cao nhất Việt Nam.
            <br>
            09h00: Tiếp tục hành trình, xe đưa quý khách thăm quan danh thắng Ngũ Hành Sơn (khám phá các hang động, vãn cảnh đẹp non nước trời mây, viếng những ngôi chùa thiêng), Làng Nghề Điêu Khắc Đá Non Nước, tận mắt chiêm ngưỡng những tác phẩm độc đáo bằng đá được tạc bởi bàn tay của những người thợ tài hoa.
            <br>
            Trưa 11h30: Kết thúc chương trình tham quan, xe đón quý khách về nhà hàng dùng cơm trưa, sau bữa cơm trưa đoàn nghỉ ngơi tại khách sạn.
            <br>
            Chiều: Quý khách tự do tham quan tăm biển Đà Nẵng.
            <br>
            18h00: Xe đón quý khách khởi hành đi Hội An.
            <br>
            Tối 19h30:  Qúy khách ăn tối tại nhà hàng, thưởng thức đặc sản Hội An. Sau bữa tối Qúy khách bách bộ tham quan mua sắm tại Phố Cổ Hội An - Nơi được UNESCO công nhận là Di sản văn hóa thế giới, với các điểm tham quan: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ…Tự do mua sắm các mặt hàng lưu niệm phong phú nơi đây..
            <br>
            Tối 21h00: Xe đưa quý khách về lại Đà Nẵng dọc đường biển để ngắm thành phố Đà Nẵng tuyệt đẹp về đêm với hàng loạt khu nghỉ dưỡng và Resort cao cấp. Ngủ đêm tại khách sạn tại Đà Nẵng.
          </p>
          <h4 class="content-section-day">
            NGÀY 03: BÀ NÀ HILLS - CHỐN BỒNG LAI TIÊN CẢNH
          </h4>
          <p class="content-section-text">Sáng 05h00: Quý khách dậy sớm ngắm cảnh bình minh trên biển, tắm biển và tham gia các hoạt động vui chơi trên biển như: bóng đá bãi biển, bóng chuyền bãi biển…
            <br>
            07h00 - 08h00: Quý khách dùng điểm tâm Buffet sáng tại khách sạn.
            <br>
            08h05: Xe đưa quý khách khởi hành đi khu du lịch Bà Nà - Núi Chúa, nơi mà quý khách khám phá những khoảnh khắc giao mùa bất ngờ Xuân - Hạ - Thu - Đông trong 1 ngày.
            <br>
            09h00: Đến ga Đến ga cáp treo Suối Mơ, lên tuyến cáp treo đạt 2 kỷ lục thế giới, (dài gần 6.000m), quý khách tham quan Khu Le Jardin, tham quan Hầm Rượu Debay của Pháp (chi phí tự túc). Viếng Chùa Linh Ứng Bà Nà, chiêm ngưỡng tượng Phật Thích Ca cao 27m, Vườn Lộc Uyển, Quan Âm Các. Tiếp tục đến Gare Debay đi tuyến cáp thứ 2 lên đỉnh Bà Nà.
            <br>
            Trưa 11h30: Quý khách dùng bữa trưa Buffet tại nhà hàng. Tự do nghỉ ngơi, ngắm cảnh Bà Nà Hill.
            <br>
            Chiều: Qúy khách tiếp tục phục đỉnh Núi Chúa ở độ cao 1.487m so với mực nước biển để thưởng thức quang cảnh núi rừng Bà Nà và toàn cảnh Đà Nẵng và Quảng Nam trên cao.
            <br>
            Tiếp đó HDV đưa quý khách tham quan khu vui chơi Fantasy Park, quý khách tự do tham gia các trò chơi phiêu lưu mới lạ, hấp dẫn, hiện đại như vòng quay tình yêu, phi công Skiver, đường đua lửa, xe điện đụng, ngôi nhà ma…
            <br>
            Chiều 15h00: Qúy khách xuống cáp treo về lại Đà Nẵng. Xe đưa quý khách về khách sạn, quý khách tự do nghỉ ngơi, tắm biển.
            <br>
            Tối 18h30: Đoàn ăn tối tại nhà hàng, sau đó là thời gian tự do khám phá thành phố Đà Nẵng về đêm, tản bộ dọc 2 bờ sông Hàn thơ mộng ngắm Cầu Quay sông Hàn, thưởng thức café, nét văn hóa người dân Đà Nẵng. Ngủ đêm tại Khách sạn ở Đà Nẵng.
          </p>
          <h4 class="content-section-day">
            NGÀY 04:  ĐÀ NẴNG - BẢO TÀNG CHĂM - CHỢ HÀN
          </h4>
          <p class="content-section-text">Sáng: Qúy khách dậy sớm ngắm cảnh bình minh trên biển, tham gia các hoạt động vui chơi tại bãi biển Mỹ Khê xinh đẹp. Dùng điểm tâm sáng tại khách sạn.
            <br>
            08h30: Xe đón quý khách khởi hành tham quan bảo tàng Champa, một trong những bảo tàng Chăm lớn nhất cả nước với hơn 400 tác phẩm hiện đang trưng bày tại các phòng và gần 2000 hiện vật đang lưu giữ trong kho, Bảo tàng Điêu khắc Chăm giới thiệu đến du khách bộ sưu tập đầy đủ và đặc sắc các hiện vật đại diện cho hầu hết các phong cách nghệ thuật điêu khắc đã hình thành trong lịch sử phát triển rực rỡ của vương quốc Champa. Các hiện vật bằng nhiều chất liệu khác nhau gồm sa thạch, đồng, đất nung được sắp xếp theo các phòng trưng bày và các bộ sưu tập mang tên địa điểm phát hiện hoặc khai quật như Trà Kiệu, Mỹ Sơn, Đồng Dương, Tháp Mẫm..
            <br>
            09h30: Kết thúc chương trình tham quan xe đón quý khách tới chợ Hàn - Đà Nẵng, nằm ở vị trí trung tâm thành phố, chợ Hàn là một trong những khu chợ lớn nhất ở Đà Nẵng. Nơi đây tập trung đầy đủ tất cả những mặt hàng phục vụ cho người dân lẫn khách du lịch. Hàng hóa ở đây luôn tươi ngon và hấp dẫn.
            <br>
            Chợ Hàn bày bán khá đa dạng và phong phú với các chủng loại hàng hóa, giày dép, quần áo, vải vóc, túi xách, các đồ lưu niệm… đặc biệt chợ Hàn nổi tiếng với các thực phẩm hải sản tươi sống, trái cây và các đặc sản của Đà Nẵng như những gian hàng mắm, hàng khô du khách thường thích mua về làm quà.
            <br>
            Trưa 11h30: Quý khách làm thủ tục trả phòng khách sạn.  Ăn trưa tại nhà hàng.
            <br>
            12h30: Xe và HDV đón quý khách khởi hành ra sân bay Đà Nẵng. Làm thủ tục trên chuyến bay của hãng hàng không VN Airline / VJ … khởi hành về Hà Nội. Tới sân bay Nội Bài xe đón quý khách khởi hành về điểm đón ban đầu. HDV chia tay đoàn và hẹn gặp lại đoàn trong những chuyến đi sau.
          </p>
        </div>
        <div id="location" class="content-section mt-5 border-bot">
          <h1 class="content-section-heading">
            LOCATION
          </h1>
          <iframe src="https://www.google.com/maps/d/embed?mid=1mGgtylMQHGAKR6HR8r8YLe5W4LU" width="100%" height="480" style="pointer-events: none;"></iframe>
        </div>
        <div id="reviews" class="content-section mt-5">
          <h1 class="content-section-heading">
            Reviews
          </h1>
          <div class="row reviews-header border-bot">
            <div class="col-md-6">
              <div class="rating">
                <span class="reviews-rating-sum">
                  2 reviewer
               </span>
                <i class="fa-solid fa-star reviews-header-btn"></i>
                <i class="fa-solid fa-star reviews-header-btn"></i>
                <i class="fa-solid fa-star reviews-header-btn"></i>
                <i class="fa-solid fa-star reviews-header-btn"></i>
                <i class="fa-solid fa-star reviews-header-btn"></i>

              </div>
            </div>
            <div class="col-md-6">
              <div class="sort">
                <h1 class="reviews-sort-heading">
                  Sort By:

                  <span class="reviews-sort-title">
                    <select class="select-sort" name="select-sort" id="select-sort">
                      <option value="rating">Rating</option>
                      <option value="date">Date</option>>
                    </select>
                  </span>
                </h1>

              </div>

            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-2">
                <div class="reviews-body">
                <i class="fa-solid fa-user-tie user-icon"></i>
              </div>
            </div>
            <div class="col-md-10">
              <h2 class="reviews-rating">
                Rating:
                <i class="fa-regular fa-star reviews-rating-btn"></i>
                <i class="fa-regular fa-star reviews-rating-btn"></i>
                <i class="fa-regular fa-star reviews-rating-btn"></i>
                <i class="fa-regular fa-star reviews-rating-btn"></i>
                <i class="fa-regular fa-star reviews-rating-btn"></i>
              </h2>
              <textarea type="text" placeholder="Comment..." class="reviews-cmt"></textarea>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-2">
                <div class="reviews-body">
                <i class="fa-solid fa-user-tie user-icon"></i>
              </div>
            </div>
            <div class="col-md-10">
              <div class="reviews-feedback">
                <div class="reviews-feedback-name">Le Hoang Hai</div>
                <div class="reviews-feedback-time">May 27, 2022 at 08:20 am</div>
              </div>
              <div class="rate">
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
              </div>
              <div class="h3">Very good</div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-2">
                <div class="reviews-body">
                <i class="fa-solid fa-user-tie user-icon"></i>
              </div>
            </div>
            <div class="col-md-10">
              <div class="reviews-feedback">
                <div class="reviews-feedback-name">Nguyen Anh Quoc</div>
                <div class="reviews-feedback-time">April 18, 2022 at 10:35 pm</div>
              </div>
              <div class="rate">
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
                <i class="fa-solid fa-star reviews-rating-btn"></i>
              </div>
              <div class="h3">Very good</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="book-tour">
          <h1 class="book-tour-heading">BOOK THIS TOUR</h1>
          <div class="book-tour-body">
            <i class="fa-regular fa-calendar-days calendar-btn"></i>
            <span class="book-tour-title">When (Date)</span>
            <i class="fa-solid fa-caret-down book-tour-down-btn"></i>
          </div>
          <div class="book-tour-tickets">
            <h1 class="book-tour-tickets-heading">Tickets</h1>
            <div class="book-tour-tickets-body">
              <div class="book-tour-tickets-title">Adult (18+ years)
                <span class="price">$100</span>
              </div>
              <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
            </div>
            <div class="book-tour-tickets-body">
              <div class="book-tour-tickets-title">Youth (13-17 years)
                <span class="price">$70</span>
              </div>
              <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
            </div>
            <div class="book-tour-tickets-body">
              <div class="book-tour-tickets-title">Chirldren (0-12 years)
                <span class="price">$30</span>
              </div>
              <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
            </div>
          </div>
          <div class="book-tour-total">
            <div class="book-tour-total-heading">Total</div>
            <div class="book-tour-total-price">$100</div>
          </div>
          <a href="/payment">
            <button button class="book-now-btn">BOOK NOW</button>
          </a>



        </div>
      </div>
    </div>
    </div>
@endsection
