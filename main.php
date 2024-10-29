<main>
    <article>
      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">احجز رحلتك لاكتشاف العالم معنا!</h2>

          <p class="hero-text">
            احجز رحلتك لاكتشاف العالم معنا! نحن وكالة سفريات وسياحة نقدم لك أفضل العروض والوجهات السياحية. سواء كنت تبحث عن مغامرة جديدة أو استرخاء على الشواطئ، نحن هنا لنحقق أحلامك. دعنا نساعدك في تخطيط رحلتك المثالية واستمتع بتجربة لا تُنسى.
          </p>

          <div class="btn-group">
            <button class="btn btn-primary">اقرأ المزيد</button>

            <button class="btn btn-secondary">احجز الان</button>
          </div>

        </div>
      </section>





      <!-- 
        - #TOUR SEARCH
      -->

      <!--<section class="tour-search">
        <div class="container">

          <form action="" class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">Search Destination*</label>

              <input type="text" name="destination" id="destination" required placeholder="Enter Destination"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="people" class="input-label">Pax Number*</label>

              <input type="number" name="people" id="people" required placeholder="No.of People" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Checkin Date**</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">Checkout Date*</label>

              <input type="date" name="checkout" id="checkout" required class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">Inquire now</button>

          </form>

        </div>
      </section>

    -->



      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">اماكن للاستكشاف</p>

          <h2 class="h2 section-title">اتجاهات مشهورة</h2>

          <!--<p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>-->

          <ul class="popular-list">

          <?php
$conn = new mysqli('localhost', 'root', '', 'white_city_travel');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM directions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<li>
                <div class="popular-card">
                    <figure class="card-img">
                        <img src="' . $row["image_url"] . '" alt="' . $row["short_text"] . '" loading="lazy">
                    </figure>
                    <div class="card-content">
                        <div class="card-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <p class="card-subtitle">
                            <a href="#">' . $row["short_text"] . '</a>
                        </p>
                        <h3 class="h3 card-title">
                            <a href="#">' . $row["long_text"] . '</a>
                        </h3>
                        <p class="card-text">
                            ' . $row["description"] . '
                        </p>
                    </div>
                </div>
              </li>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>


          <!------------------------------------------------------------------------>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-1.jpg" alt="القاهرة , مصر" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">مصر</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">القاهرة</a>
                  </h3>

                  <p class="card-text">
                    تعرف على افضل واجمل المدن في مصر باسعار مميزة
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">دبي</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">برج خليفة</a>
                  </h3>

                  <p class="card-text">
                    قم بزيارة برج خليفة في الامارات بزيارة سياحية 
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">اليابان</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">كيوتو معبد</a>
                  </h3>

                  <p class="card-text">
                    تعرف على معبد كيوتو في اليابان 
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">مناطق اخرى</button>

        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">العروض</p>

          <h2 class="h2 section-title">اكتشف العروض الموجودة</h2>

          <p class="section-text">
            تعرف على افضل العروض والباقات المتوفرة 
            لدينا واختر وجهتك الان بدون تردد!
            
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">استكشف جزر المالديف الان باحسن العروض
                    
                  </h3>

                  <p class="card-text">
                    اكتشف حزر المالديف وقم بزيارة افضل الاماكن
                    احصل على افضل الاسعار والمميزات
                    
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">عدد: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">المالديف</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 المراجعة)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $750
                    <span>/ للشخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">استكشف جزر المالديف الان باحسن العروض
                    
                  </h3>

                  <p class="card-text">
                    اكتشف حزر المالديف وقم بزيارة افضل الاماكن
                    احصل على افضل الاسعار والمميزات
                    
                  </p>


                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">عدد: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">المالديف</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 المراجعة)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $520
                    <span>/ للشخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-3.jpg" alt="Santorini Island's Weekend Vacation" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">استكشف جزر المالديف الان باحسن العروض
                    
                  </h3>

                  <p class="card-text">
                    اكتشف حزر المالديف وقم بزيارة افضل الاماكن
                    احصل على افضل الاسعار والمميزات
                    
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">عدد: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">المالديف</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 المراجعة)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $660
                    <span>/ للشخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

          </ul>

          <!--<button class="btn btn-primary">عرض كل الباقات</button>-->

        </div>
      </section>





      <!-- 
        - #GALLERY
      -->
<!--
      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>



-->

      <!-- 
        - #CTA
      

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
              laudantium. Sit ornare
              mollitia tenetur, aptent.
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>

    </article>
  </main>
-->