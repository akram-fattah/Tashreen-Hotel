<?php

// Home page SEO & Details 

$title = "Tashreen Hotel | HOME";

$meta = [
    ['name' => 'author', 'content' => 'Akram Fattah'],
    ['name' => 'keywords', 'content' => 'hotel, tashreen, booking, rooms'],
    ['name' => 'description', 'content' => 'Tashreen Hotel offers comfortable rooms and luxury services'],
    ['name' => 'robots', 'content' => 'index, follow'],
];

$linksCss = [
    CSS.'home.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css'
];

$fonts = [
    'https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap',
];
require 'basicHead.php';
basicHead($title, $meta, $linksCss, $fonts);

// End Home page SEO & Details 

?>

<body>
    <div class="overlay"></div>
    <header>
        <h2>
            Tashreen
        </h2>
        <nav id="nav">
            <ul>
                <li>
                    <a href="">الرئيسية</a>
                </li>
                <li>
                    <a href="">الغرف والاجنحة</a>
                </li>
                <li>
                    <a href="">اراء النزلاء</a>
                </li>
                <li>
                    <a href="">تواصل معنا</a>
                </li>
                <li>
                    <a href="">عن الفندق</a>
                </li>
            </ul>
        </nav>
        <div class="booking-url-head">
            <a href="">
                احجز الان
            </a>
        </div>
        <div class="menu">
            <div>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <div class="landing">
        <div class="title">
            <h2 class="name animation">
                فندق تشرين السياحي
            </h2>
            <div class="disc">
                <p class="description animation">
                    كل قطعة هنا تم طلبها بعناية لاجل راحتك ... فندق تشرين صمم خصيصا لأجل راحتك! ... باختصار نحن نبحث عن راحتك!
                </p>
            </div>

            <a href="" class="booking animation">
                احجز الان
                &puncsp;
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div class="social animation">
                <a href="">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
    <section class="some_info">
        <div class="container">
            <div class="details">
                <div class="head">
                    <h4>اهلا بك في فندق تشرين</h4>
                    <h2>
                        حيث الاناقة والهدوء
                    </h2>
                </div>
                <div class="paragraph">
                    <p>
                        فندق تشرين هو فندق تأسس في تشرين 2025 ويعد فندق سياحي ملكي مصمم بأفخم طرق الهندسة المعمارية, رؤيتنا هي توفير الراحة والهدوء لك أيها النزيل
                    </p>
                </div>
                <div class="statics">
                    <div>
                        <h2>3262+</h2>
                        <p>نزيل</p>
                    </div>
                    <div>
                        <h2>187+</h2>
                        <p>غرفة</p>
                    </div>
                    <div>
                        <h2>89+</h2>
                        <p>جناح</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="rooms">
    <div class="container">

        <div class="head-section">
            <h5>أماكن الاقامة</h5>
            <h3>غرف وأجنحة تشرين</h3>
            <p>
                الغرف والاجنحة المتزفرة في هذا الاوتيل مجهزة بالكامل لاجل راحتك!!
            </p>
        </div>

        <div class="cards-wrapper">

            <!-- Swiper -->
            <div class="swiper" id="cards">
                <div class="swiper-wrapper">

                    <!-- card -->
                    <div class="swiper-slide card">
                        <img src="<?=IMG?>pexels-asphotography-97083.jpg" alt="">
                        <div class="details">
                            <h4><a href="#">ROOM 1</a></h4>
                            <p class="txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>

                            <div class="more-details">
                                <div class="beds">
                                    <p class="bed">
                                        <i class="fas fa-bed"></i>
                                        <span>King Bed</span>
                                    </p>
                                    <p class="bed">
                                        <i class="fas fa-user"></i>
                                        <span>2 Guests</span>
                                    </p>
                                </div>
                            </div>
                            <div class="foot-card">
                                <div class="price-n">
                                    <span class="num">343</span>
                                    <span>/ليلة</span>
                                </div>
                                <a href="#" class="book">Book Now</a> 
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <img src="<?=IMG?>pexels-fotoaibe-1743231.jpg" alt="">
                        <div class="details">
                            <h4><a href="#">ROOM 1</a></h4>
                            <p class="txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>

                            <div class="more-details">
                                <div class="beds">
                                    <p class="bed">
                                        <i class="fas fa-bed"></i>
                                        <span>King Bed</span>
                                    </p>
                                    <p class="bed">
                                        <i class="fas fa-user"></i>
                                        <span>2 Guests</span>
                                    </p>
                                </div>
                            </div>
                            <div class="foot-card">
                                <div class="price-n">
                                    <span class="num">343</span>
                                    <span>/ليلة</span>
                                </div>
                                <a href="#" class="book">Book Now</a> 
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <img src="<?=IMG?>pexels-pixabay-237371.jpg" alt="">
                        <div class="details">
                            <h4><a href="#">ROOM 1</a></h4>
                            <p class="txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>

                            <div class="more-details">
                                <div class="beds">
                                    <p class="bed">
                                        <i class="fas fa-bed"></i>
                                        <span>King Bed</span>
                                    </p>
                                    <p class="bed">
                                        <i class="fas fa-user"></i>
                                        <span>2 Guests</span>
                                    </p>
                                </div>
                            </div>
                            <div class="foot-card">
                                <div class="price-n">
                                    <span class="num">343</span>
                                    <span>/ليلة</span>
                                </div>
                                <a href="#" class="book">Book Now</a> 
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <img src="<?=IMG?>pexels-karlsolano-2883048.jpg" alt="">
                        <div class="details">
                            <h4><a href="#">ROOM 1</a></h4>
                            <p class="txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>

                            <div class="more-details">
                                <div class="beds">
                                    <p class="bed">
                                        <i class="fas fa-bed"></i>
                                        <span>King Bed</span>
                                    </p>
                                    <p class="bed">
                                        <i class="fas fa-user"></i>
                                        <span>2 Guests</span>
                                    </p>
                                </div>
                            </div>
                            <div class="foot-card">
                                <div class="price-n">
                                    <span class="num">343</span>
                                    <span>/ليلة</span>
                                </div>
                                <a href="#" class="book">Book Now</a> 
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <img src="<?=IMG?>pexels-pixabay-164595 (1).jpg" alt="">
                        <div class="details">
                            <h4><a href="#">ROOM 1</a></h4>
                            <p class="txt">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>

                            <div class="more-details">
                                <div class="beds">
                                    <p class="bed">
                                        <i class="fas fa-bed"></i>
                                        <span>King Bed</span>
                                    </p>
                                    <p class="bed">
                                        <i class="fas fa-user"></i>
                                        <span>2 Guests</span>
                                    </p>
                                </div>
                            </div>
                            <div class="foot-card">
                                <div class="price-n">
                                    <span class="num">343</span>
                                    <span>/ليلة</span>
                                </div>
                                <a href="#" class="book">Book Now</a> 
                            </div>

                        </div>
                    </div>
                    <!-- انسخ swiper-slide لبقية الغرف -->

                </div>
            </div>

            <!-- Arrows -->
            <div class="arrows">
                <div class="arrow right swiper-button-next" id="right">
                </div>
                <div class="arrow left swiper-button-prev" id="left">
                </div>
            </div>

        </div>
    </div>
</section>

    <section class="preimum">
        <div class="container">
            <div class="head-section">
                <h5>خدماتنا</h5>
                <h3>الخدمات المتوفرةللنزلاء</h3>
                <p>
                    كل شيء هنا مخصص لك بارقى وارق التصاميم والطرق الانيقة من شبكات سريعة ومن غرف مكيفة ومن سرر مريحة وتوصيل مجاني
                </p>
            </div>
            <div class="primum-container">
                <div class="primum-element">
                    <div class="icon">
                        <i class="fas fa-store-alt"></i>
                    </div>
                    <h2>سوبر ماركت</h2>
                    <p>يمكنك طلب اي شيء من السوبر الخاص بالفندق والتوصيل للجناح او الغرفة</p>
                </div>
                <div class="primum-element free">
                    <div class="icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h2 class="free">وايفاي مجاني</h2>
                    <p>استمتع بالانترنت السريع الامن والمجاني داخل الفندق</p>
                </div>
                <div class="primum-element free">
                    <div class="icon">
                        <i class="fa-solid fa-soap"></i>
                    </div>
                    <h2>غسيل ملابس</h2>
                    <p>استمتع بالمكوث في الفندق وسلم ملابسك الى خدمة الغرف لغسلها وكيها</p>
                </div>
                <div class="primum-element">
                    <div class="icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h2>وجبات فورية</h2>
                    <p>نوفر لك الاكل والوجبات من المطاعم المجاورة عبر خانة الطلب من موقعنا الرسمي</p>
                </div>
                <div class="primum-element free">
                    <div class="icon">
                        <i class="fas fa-tv"></i>
                    </div>
                    <h2>احدث الشاشات</h2>
                    <p>غرفنا تحتوي احدث واضخم الشاشات باشتراك القنوات الرياضية ونتفليكس</p>
                </div>
                <div class="primum-element">
                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h2>اجتماعات العمل</h2>
                    <p>اجنحة مؤمنة ومغلقة لاجتماعات العمل والشخصيات الهامة</p>
                </div>
            </div>
        </div>
    </section>
    <section class="jim">
        <div class="container">
            <div class="info">
                <div class="info-head">
                    <h4 class="head-one">
                    لأول مرة في بيت الفقيه
                    </h4>
                    <h2 class="head-tow">
                        صالة رياضية مجهزة بالكامل
                    </h2>
                    <p class="description">
                        الرياضة هي القلب النابض للمحافظة على الاجسام ولياقتها, ولاننا نهتم لاجلكم وفرنا لكم صالة رياضية مجهزة بالكامل من اجل ممارسة الرياضة اثناء المكوث في الفندق, فلا تقلق عزيزي النزيل حتى روتينك الرياضي معك في فندق تشرين
                    </p>
                </div>
                <div class="features">
                    <div>
                        <div class="jim-title">
                            <i class="fas fa-check-circle"></i>
                            <h3>معدات رياضية متطورة</h3>
                        </div>
                        <p>لقد اشرفنا شخصيا لجلب احدث المعدات</p>
                    </div>
                    <div>
                        <div class="jim-title">
                            <i class="fas fa-check-circle"></i>
                            <h3>تغذية وبروتينات</h3>
                        </div>
                        <p>الغذا مهم للرياضة, متوفر لاجلك</p>
                    </div>
                    <div>
                        <div class="jim-title">
                            <i class="fas fa-check-circle"></i>
                            <h3>كادر متخصص</h3>
                        </div>
                        <p>خدمات السبا واليوجا والتدريب متوفرة</p>
                    </div>
                </div>
            </div>
            <div class="image">
            </div>
        </div>
    </section>
    <section class="gallary-section">
            <div class="gallary">
                    <div class="head-section">
                        <h5>صور حية</h5>
                        <h3>معرض الصور</h3>
                        <p>
                            مجموعة صور من فندق تشرين السياحي
                        </p>
                    </div>
            </div>
            <div class="container">
                <div class="gallary-img">
                    <img src="<?=IMG?>pexels-pixabay-161758.jpg" alt="">
                    <img src="<?=IMG?>pexels-pixabay-164595 (1).jpg" alt="">
                    <img src="<?=IMG?>pexels-asphotography-97083.jpg" alt="">
                    <img src="<?=IMG?>pexels-karlsolano-2883048.jpg" alt="">
                    <img src="<?=IMG?>pexels-fotoaibe-1743231.jpg" alt="">
                    <img src="<?=IMG?>pexels-francesco-ungaro-96444.jpg" alt="">
                    <img src="<?=IMG?>pexels-pixabay-164595.jpg" alt="">
                    <img src="<?=IMG?>pexels-pixabay-237371.jpg" alt="">
                    <img src="<?=IMG?>pexels-pixabay-258154.jpg" alt="">
                    <img src="<?=IMG?>pexels-pixabay-271619.jpg" alt="">
                    <img src="<?=IMG?>1765961791077.jpg" alt="">
                    <img src="<?=IMG?>1765961791103.jpg" alt="">
                </div>
                <a href="" class="all-img">كل الصور</a>
            </div>
        </section>
<section class="guests">
    <div class="container">

        <div class="head-section">
            <h5>الاراء</h5>
            <h3>اراء النزلاء</h3>
            <p>
               الثقة لا تبنى بل تكتسب
            </p>
        </div>

        <div class="cards-wrapper">

            <!-- Swiper -->
            <div class="swiper" id="cards">
                <div class="swiper-wrapper">
                    <!-- card -->
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-ahcapture-29560418.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-ron-lach-9604304.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-anthonyshkraba-production-8973506.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-cottonbro-8718350.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-italo-melo-881954-2379005.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-jordan-bergendahl-2628960-10402659.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-moh-adbelghaffar-14267039.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="details">
                                <q class="txt">
                                    <i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, necessitatibus.
                                    </i>
                                </q>

                                <div class="stars-foot-card">
                                    <div>
                                        <img src="<?=IMG?>customers/pexels-ron-lach-10412892.jpg" alt="">
                                    </div>
                                    <div class="names">
                                        <h3>أكرم فتاح</h3>
                                        <span>2026-8-4</span>
                                        <span>-</span>
                                        <span>صنعاء</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <!-- انسخ swiper-slide لبقية الغرف -->
                </div>
            </div>

            <!-- Arrows -->
            <div class="arrows">
                <div class="arrow right swiper-button-next" id="right">
                </div>
                <div class="arrow left swiper-button-prev" id="left">
                </div>
            </div>

        </div>
    </div>
</section>

    <section class="about">
        <div class="container">
            <div class="about-info">
                <div class="head">
                    <h4>عن الفندق</h4>
                    <h2>فندق تشرين السياحي</h2>
                    <p>نظرا لعدم وجود اماكن راقية تليق بزوار مديرية بيت الفقيه قمنا بتصميم هذا النزل الراقي والانيق حسب ارقى المواصفات الفندقية ووفرنا اقوى الخدمات للنزلاء . رؤيتنا هي توفير الراحة والهدوء والخدمات المتكاملة للجميع </p>
                </div>
                <div class="info">
                    <div class="address">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="details">
                            <h4>14.525623,43.315000</h4>
                            <p>
                               <small> الحديدة بيت الفقيه - خط الحديدة تعز - الشارع العام </small><a href="https://maps.app.goo.gl/CHZbqJ5RW3CJ83dCA" target="_blank" class="map">اظهار على الخريطة</a>
                            </p>
                        </div>
                    </div>
                    <div class="phone">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <h4>الهاتف</h4>
                            <p style="direction: ltr;">+967 712 328 019</p>
                        </div>
                    </div>
                    <div class="email">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <h4>البريد الالكتروني</h4>
                            <p>akramfattah88@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form">
                <form action="" method="post">
                    <div class="form-container">
                        <div class="first-last-name">
                            <div>
                                <label for="">الاسم الاول</label>
                                <input type="text" name="" id="" placeholder="الاسم">
                            </div>
                            <div>
                                <label for="">اللقب</label>
                                <input type="text" name="" id="" placeholder="اللقب">
                            </div>
                        </div>
                        <div class="email">
                            <label for="">البريد الاكتروني</label>
                            <input type="email" name="" id="" placeholder="البريد الالكتروني">
                        </div>
                        <div class="phone">
                            <label for="">رقم هاتفك</label>
                            <input type="phone" name="" id="" placeholder="رقم الموبايل">
                        </div>
                        <div class="message">
                            <label for="">الرسالة</label>
                            <textarea name="" id="" placeholder="اكتب رسالة"></textarea>
                        </div>
                        <div class="btn">
                            <input type="submit" value="ارسال الرسالة">
                        </div>
                    </div>
                </form>
            </div>
            <div>

            </div>
        </div>
    </section>
    <footer>
    <div class="container">
        <div>
            <h2>فندق تشرين السياحي</h2>
            <div class="footer-info">
                <p>
                    يوفر لك ارقى الخدمات باحدث وسائل الراحة والهدوء.. ماذا تنتظر احجز غرفتك , جناحك الان ولا تتردد.
                </p>
            </div>
        </div>
        <div>
            <h2>روابط سريعة</h2>
            <div class="footer-info">
                <ul class="links">
                    <li class="link"><a href="">الرئيسية</a></li>
                    <li class="link"><a href="">الغرف والاجنحة</a></li>
                    <li class="link"><a href="">اراء النزلاء</a></li>
                    <li class="link"><a href="">تواصل معنا</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h2>الخدمات</h2>
            <div class="footer-info">
                <ul class="links">
                    <p>تغذية</p>
                    <p>انترنت مجاني</p>
                    <p>الرياضة والسبا</p>
                    <p>غسيل ملابس</p>
                </ul>
            </div>
        </div>
        <div>
            <h2>النشرة الاخبارية</h2>
            <div class="footer-info">
                <p>ضع بريدك الالكتروني هنا واستلم منا اخر الاخبار </p>
                <form action="">
                    <input type="email" name="" id="" placeholder="بريجك الاكتروني">
                    <button class="icon-newsletter" type="submit">
                        <i class="fa-solid fa-paper-plane">
                        </i>
                    </button>
                </form>
                <div class="social">
                    <a href="">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
        <p class="copyright">
            جميع الحقوق محفوظة لدى فندق تشرين 2025 &copy; م.أكرم فتاح
        </p>
    </footer>

    <script src="<?=JS?>home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>