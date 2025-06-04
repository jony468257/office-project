@extends('layouts.frontend')

@section("title","Home")

@section("content")




<main>
      <section class="bd-hero__area">
         <div class="hero__active swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slider as $slide)
                    <div class="swiper-slide">
                        <div class="bd-singel__hero">
                            <div class="hero__height d-flex align-items-center p-relative">
                                <div class="bd-hero__banner hero__overlay include__bg" data-background="{{ asset('storage/' . $slide->image)}}"></div>
                                <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-12">
                                        <div class="bd-hero__content z-index-11 p-relative">
                                            <span class="animated fadeInUp">{{ $slide->title_bn }}</span>
                                        
                                            <p class="animated fadeInUp"> {{ $slide->description_en}}</p>
                                        <div class="bd-hero__btn-wrapper animated fadeInDown">
                                            <a class="bd-hero__btn-1" href="about.html"> Our Products</a>
                                            <a class="bd-hero__btn-2" href="about.html"> about us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
         </div>
      </section>
        
      <!-- Features area start -->
      <section class="bd-features__area" data-background="frontend/assets/image/gallery/section-bg.jpg">
         <div class="bd-features__wrapper">
            <div class="bd-features__top">
               <span>farming since 1956</span>
               <img class="bd-features__top-icon" src={{ asset('frontend/assets/image/gallery/features-cow.png') }} alt="features-cow-icon">
            </div>
            <div class="container">
               <div class="bd-features__item-wrapper pt-80 pb-10">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="bd-features__item text-center mb-60">
                           <div class="bd-features__icon">
                              <img src="https://mimba.xyz/storage/mission/mission_image_1726305264.webp" alt="features-icon">
                           </div>
                           <div class="bd-features__content">
                              <h3><a href="about.html">Mission</a></h3>
                              <p>MIMBA's mission is to revolutionize the dairy farming industry in Bangladesh by providing innovative technological solutions that empower farmers, increase productivity and modernize farming practices. Our mission is to create a sustainable and prosperous future for dairy farmers</p>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="bd-features__item text-center mb-60">
                           <div class="bd-features__icon">
                              <img src=" https://mimba.xyz/storage/mission/mission_image_1726305386.webp" alt="features-icon">
                           </div>
                           <div class="bd-features__content">
                              <h3><a href="about.html">Values</a></h3>
                              <p>MIMBA ensures that our mission to revolutionize the dairy farming industry in Bangladesh is pursued with dedication, integrity, and a focus on long-term positive impact. These values guide our actions and decisions, driving us to create a sustainable, prosperous, and modern agricultural sector.</p>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="bd-features__item text-center mb-60">
                           <div class="bd-features__icon">
                              <img src=https://mimba.xyz/storage/mission/mission_image_1726305429.webp alt="features-icon">
                           </div>
                           <div class="bd-features__content">
                              <h3><a href="about.html">Target Customer</a></h3>
                              <p>MIMBA aims to drive widespread adoption and achieve significant positive impacts across the dairy farming sector in Bangladesh. Whether through simple, cost-effective tools for smallholders or comprehensive management systems for large-scale farms, MIMBA’s solutions are designed to enhance productivity, improve animal welfare, and support sustainable agricultural practices.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Features area start -->

      <!-- About area start -->
      <section class="bd-about__area pt-120 pb-120" data-background="frontend/assets/image/gallery/section-bg.jpg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="bd-about__image-wrapper p-relative mb-60">
                     <img class="bd-about__image-1" src="{{ asset('storage/' . $about->image) }}" alt="about-img">
                     {{-- <div class="bd-about__image-2 text-sm-end"> 
                        <img src="{{ asset('storage/' . $about->image) }}" alt="about-img">
                     </div> --}}
                     {{-- <div class="bd-about__shape">
                        <img src="frontend/assets/image/about/about-cow.png" alt="about-cow-icon">
                        <img class="bd-about__dashed-icon" src="frontend/assets/image/about/about-dashed.png" alt="about-dashed">
                     </div>    --}}
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bd-about__content-wrapper mb-60">
                     <div class="bd-section__title-wrapper mb-40">
                        <span class="bd-sub__title">About Mimba</span>
                        <p class="bd-section__paragraph">
                            {{  $about->description }}
                        </p>
                     </div>
                     <div class="bd-about__features-wrapper mb-25">
                        <div class="bd-about__features">
                           <div class="bd-about__features-title">
                              <h4>Our Mission</h4>
                           </div>
                           <div class="bd-about__features-list">
                              <ul>
                                 <li>
                                    <div class="features__icon">
                                       <i class="fa-regular fa-check"></i>
                                    </div>
                                    <div class="features__list-title">
                                       High-quality work
                                    </div>
                                 </li>
                                 <li>
                                    <div class="features__icon">
                                       <i class="fa-regular fa-check"></i>
                                    </div>
                                    <div class="features__list-title">
                                       Straightforward pricing
                                    </div>
                                 </li>
                                 <li>
                                    <div class="features__icon">
                                       <i class="fa-regular fa-check"></i>
                                    </div>
                                    <div class="features__list-title">
                                       Rapid response times
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="bd-about__experience text-center">
                           <span class="number counter">80</span><span class="plus" >+</span>
                           <p>Years experience</p>
                        </div>
                     </div>
                     <a class="bd-theme__btn-1" href="./">get in touch</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About area end -->

      <!-- Product cta area start -->
      <section class="bd-product__cta-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="bd-product__cta-item mb-30">
                     <div class="bd-product__cta-inner">
                        <div class="bd-product__cta-icon">
                           <img src="frontend/assets/image/about/product-icon-01.png" alt="product-icon">
                        </div>
                        <div class="bd-product__cta-title">
                           <h3>WE SALE BEST AGRICULTURE <br>
                              PRODUCTS</h3>
                        </div>
                     </div>
                     <a class="bd-product__cta-btn" href="product-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bd-product__cta-item mb-30">
                     <div class="bd-product__cta-inner">
                        <div class="bd-product__cta-icon">
                           <img src="frontend/assets/image/about/product-icon-02.png" alt="product-icon">
                        </div>
                        <div class="bd-product__cta-title">
                           <h3>worldwide fresh mild <br>
                              delivery</h3>
                        </div>
                     </div>
                     <a class="bd-product__cta-btn" href="product-details.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Product cta area end -->

      <!-- Service area start -->
      <section class="bd-service__area pt-30 pb-55">
         <div class="container">
            <div class="row">
               <div class="bd-section__title-wrapper text-center mb-50">
                  <span class="bd-sub__title">Mimba Services</span>
                  <h2 class="bd-section__title">what we provide</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726358478.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>01</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">Digital Data REcord Keeping</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726305925.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>02</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">Vaccine and Deworming</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726306077.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>03</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">organic product</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726306274.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>04</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">dairy products</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Service area 2 start-->
      <section class="bd-service__area pt-30 pb-55">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726306406.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>05</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">IoT Based Cow Monitoring</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726307575.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>06</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">Cattle Insurance Service</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="bd-service__item text-center mb-60">
                     <div class="bd-service__thumb">
                        <img src="https://mimba.xyz/storage/services/services_image_1726310158.webp" alt="service-thumb">
                        <div class="bd-service__number">
                           <span>07</span>
                        </div>
                        <div class="bd-service__arrow">
                           <a href="service-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                     </div>
                     <div class="bd-service__content">
                        <h3><a href="service-details.html">Fodder & Forage Consultancy</a></h3>
                     </div>
                    <!-- <a class="bd-link__btn" href="service-details.html">Read More</a>-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service area end -->

      <!-- Service cta area start -->
      <section class="bd-service__cta-area pb-95">
         <div class="container">
            <div class="bd-service__cta-border"></div>
            <div class="row">
               <div class="col-xl-9 col-lg-12">
                  <div class="bd-service__cta-wrapper">
                     <div class="bd-service__cta-content">
                        <img src="frontend/assets/image/about/cta-icon-01.png" alt="cta-icon">
                        <h3>WE’RE CARING ABOUT OUR <br>
                           farm GROWTH</h3>
                     </div>
                     <div class="bd-service__cta-paragraph">
                        <p>We have been working in this industry for more than
                           30 years with trust and honesty. All hands must
                           be on deck if we are to achieve</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 text-end mb-30">
                  <div class="bd-service__cta-btn mt-5 text-xl-end text-start">
                     <a class="bd-theme__btn-1" href="about.html">get a quote</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service cta area end -->

      <!-- Gallery area start -->
      <section class="bd-gallery__area gallery__overlay fix pt-120 pb-120">
         <div class="bd-gallery__bg">
            <img src="frontend/assets/image/gallery/gallery-bg.png" alt="gallery-bg">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="bd-gallery__inner p-relative">
                     <div class="bd-section__title-wrapper mb-45">
                        <span class="bd-sub__title">Farm Overview</span>
                        <h2 class="bd-section__title">farm gallary</h2>
                     </div> 
                     <!-- If we need navigation buttons -->
                     <div class="bd-gallery__navigatin">
                        <button  class="gallery-button-prev"><i class="far fa-long-arrow-left"></i></button>
                        <button  class="gallery-button-next"><i class="far fa-long-arrow-right"></i></button>
                     </div>
                  </div>          
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="bd-gallery__wrapper">
                     <div class="bd-gallery-active swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="bd-gallery__item">
                                 <div class="bd-gallery__image w-img">
                                    <img src="frontend/assets/image/gallery/about.webp" alt="gallery-image">
                                 </div>
                                 <div class="bd-gallery__content">
                                    <h3><a href="gallery.html">farm house look</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                 </div>
                              </div> 
                           </div>
                           <div class="swiper-slide">
                              <div class="bd-gallery__item">
                                 <div class="bd-gallery__image w-img">
                                    <img src="frontend/assets/image/gallery/big.webp" alt="gallery-image">
                                 </div>
                                 <div class="bd-gallery__content">
                                    <h3><a href="gallery.html">farm house look</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                 </div>
                              </div> 
                           </div>
                           <div class="swiper-slide">
                              <div class="bd-gallery__item">
                                 <div class="bd-gallery__image w-img">
                                    <img src="frontend/assets/image/gallery/award.webp" alt="gallery-image">
                                 </div>
                                 <div class="bd-gallery__content">
                                    <h3><a href="gallery.html">farm house look</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                 </div>
                              </div> 
                           </div>
                           <div class="swiper-slide">
                              <div class="bd-gallery__item">
                                 <div class="bd-gallery__image w-img">
                                    <img src="frontend/assets/image/gallery/award2.webp" alt="gallery-image">
                                 </div>
                                 <div class="bd-gallery__content">
                                    <h3><a href="gallery.html">farm house look</a></h3>
                                    <p>A content farm is a company that employs large numbers.</p>
                                 </div>
                              </div> 
                           </div>
                        </div>
                     </div>
                  </div> 
               </div>
            </div>
         </div>
      </section>
      <!-- Gallery area end -->

      <!-- Video area start -->
      <Section class="bd-video__area pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12">
                  <div class="bd-video__wrapper text-center">
                     <div class="bd-video__btn d-flex justify-content-center mb-50">
                        <a class="bd-play__btn  popup-video" href="https://www.youtube.com/watch?v=awKCfkT96pg"><i class="fa-solid fa-play"></i></a>
                     </div>
                     <div class="bd-section__title-wrapper mb-45">
                        <span class="bd-sub__title">Intro Video</span>
                        <h2 class="bd-section__title">ready to experience & <br>
                        work difference</h2>
                     </div>
                     <div class="bd-video__btn-wrapper">
                        <a class="bd-theme__btn-2" href="contact.html">make appointment</a>
                        <a class="bd-theme__btn-1" href="contact.html">get a quote</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </Section>
      <!-- Video area end -->

      <!-- Brand area start -->
      <div class="bd-brand__area pb-120">
         <div class="container">
            <div class="bd-brand__dashed">
               <div class="bd-dashed__line"></div>
            </div>
            <div class="row align-items-center justify-content-between">
               <div class="col-12">
                  <div class="bd-brand-active swiper-container">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="bd-single__brand">
                              <a href="#">
                                 <img src="frontend/assets/image/brand/brand-1.png" alt="brand-img">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-single__brand">
                              <a href="#">
                                 <img src="frontend/assets/image/brand/brand-2.png" alt="brand-img">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-single__brand">
                              <a href="#">
                                 <img src="frontend/assets/image/brand/brand-3.png" alt="brand-img">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-single__brand">
                              <a href="#">
                                 <img src="frontend/assets/image/brand/brand-4.png" alt="brand-img">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-single__brand">
                              <a href="#">
                                 <img src="frontend/assets/image/brand/brand-5.png" alt="brand-img">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-single__brand">
                              <a href="#">
                                 <img src="frontend/assets/image/brand/brand-6.png" alt="brand-img">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Brand area end -->

      <!-- Cta area start -->
      <section class="bd-cta__area p-relative z-index-11 pt-120 pb-60" data-background="frontend/assets/image/mimba/cta-bg.jpg">
         <div class="bd-cta__shape">
            <img src="frontend/assets/image/mimba/shap-01.png" alt="cta-shape">
         </div>
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-lg-7">
               <div class="bd-section__title-wrapper mb-50">
                  <span class="bd-sub__title">Custom Request</span>
                  <h2 class="bd-section__title s-2">Book an appointment</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="bd-cta__left-wrapper mb-60">
                  <form action="#">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="bd-cta__input-item mb-30">
                              <h5 class="bd-cta__input-title">full name</h5>
                              <div class="bd-cta__input">
                                 <input type="text" placeholder="e.g. jhon william">
                                 <i class="fa-solid fa-user"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="bd-cta__input-item mb-30">
                              <h5 class="bd-cta__input-title">email address</h5>
                              <div class="bd-cta__input">
                                 <input type="text" placeholder="info@webmail.com">
                                 <i class="fa-solid fa-envelope-open"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="bd-cta__input-item mb-30">
                              <h5 class="bd-cta__input-title">phone number</h5>
                              <div class="bd-cta__input">
                                 <input type="text" placeholder="000 111 222 55">
                                 <i class="fa-solid fa-phone"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="bd-cta__input-item mb-30">
                              <h5 class="bd-cta__input-title">date & time</h5>
                              <div class="bd-cta__input">
                                 <input type="date">
                                 <i class="fa-solid fa-calendar-days"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="bd-cta__btn mt-10">
                     <a class="bd-theme__btn-2" href="contact.html">get appointment</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="bd-contact__support mb-60">
                  <div class="bd-contact__action">
                     <div class="bd-contact__icon">
                        <img src="assets/img/cta/phone-icon.png" alt="phone-icon">
                     </div>
                     <div class="bd-contact__action-text">
                        <span>Or Call Us Now</span>
                        <h3><a href="tel:00211232000">00 211 232 000</a></h3>
                     </div>
                  </div>
                  <p class="bd-cta__paragraph">Give us a call to ask for online advice or book
                  a physical schedule at dairypress soon.</p>
                  <div class="bd-cta__map">
                     <div class="bd-cta__map-icon">
                        <i class="fa-solid fa-location-dot"></i>
                     </div>
                     <div class="bd-cta__map-title">
                        <span><a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7805733,90.2792399,11z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.810332!4d90.4125181?hl=en">view on google map</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </section>
      <!-- Cta area end -->

      <!-- News area start -->
      <section class="bd-news__area pt-120 pb-60">
         <div class="container">
            <div class="row">
               <div class="bd-section__title-wrapper  text-center mb-50">
                  <span class="bd-sub__title">News Feeds</span>
                  <h2 class="bd-section__title">Farm blog & insights</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="bd-news__item mb-60">
                     <div class="bd-news__thumb w-img">
                        <a href="news-details.html">
                           <img src="assets/img/news/news-01.jpg" alt="news-thumb">
                        </a>
                     </div>
                     <div class="bd-news__content">
                        <div class="bd-news__meta">
                           <div class="bd-news__meta-item">
                              <span><i class="fa-solid fa-calendar-days"></i>May 20, 2022</span>
                           </div>
                           <div class="bd-news__meta-item">
                              <span><i class="fa-solid fa-user"></i>David Askerph</span>
                           </div>
                        </div>
                        <h3 class="bd-news__title"><a href="news-details.html">used to influence consumer behavior, but also used</a></h3>
                        <a class="bd-link__btn" href="news-details.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="bd-news__item mb-60">
                     <div class="bd-news__thumb w-img">
                        <a href="news-details.html">
                           <img src="assets/img/news/news-02.jpg" alt="news-thumb">
                        </a>
                     </div>
                     <div class="bd-news__content">
                        <div class="bd-news__meta">
                           <div class="bd-news__meta-item">
                              <span><i class="fa-solid fa-calendar-days"></i>May 28, 2022</span>
                           </div>
                           <div class="bd-news__meta-item">
                              <span><i class="fa-solid fa-user"></i>Anzila Yatrian</span>
                           </div>
                        </div>
                        <h3 class="bd-news__title"><a href="news-details.html">There are many commercial websites that</a></h3>
                        <a class="bd-link__btn" href="news-details.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="bd-news__right mb-60">
                     <div class="bd-news__item">
                        <div class="bd-news__right-content">
                           <div class="bd-news__meta">
                              <div class="bd-news__meta-item">
                                 <span><i class="fa-solid fa-calendar-days"></i>Mar 28, 2022</span>
                              </div>
                              <div class="bd-news__meta-item">
                                 <span><i class="fa-solid fa-user"></i>Kelian Anderson</span>
                              </div>
                           </div>
                           <h3 class="bd-news__title"> <a href="news-details.html">called "content farms."  Unless your project is a study</a></h3>
                        </div>
                     </div>
                     <div class="bd-news__item">
                        <div class="bd-news__right-content">
                           <div class="bd-news__meta">
                              <div class="bd-news__meta-item">
                                 <span><i class="fa-solid fa-calendar-days"></i>May 20, 2022</span>
                              </div>
                              <div class="bd-news__meta-item">
                                 <span><i class="fa-solid fa-user"></i>Johnson Abert</span>
                              </div>
                           </div>
                           <h3 class="bd-news__title"> <a href="news-details.html">of content farms, these are poor choices to support</a></h3>
                        </div>
                     </div>
                     <div class="bd-news__item">
                        <div class="bd-news__right-content">
                           <div class="bd-news__meta">
                              <div class="bd-news__meta-item">
                                 <span><i class="fa-solid fa-calendar-days"></i>Arp 10, 2022</span>
                              </div>
                              <div class="bd-news__meta-item">
                                 <span><i class="fa-solid fa-user"></i>Peter Anderson</span>
                              </div>
                           </div>
                           <h3 class="bd-news__title"> <a href="news-details.html">your work.  They are created by companies that hire</a></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   {{--   <!-- Slider -->
   <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-bs-ride="carousel" style="margin-top: 80px;">
        <div class="carousel-indicators">
            @foreach($slider as $key => $slide)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($slider as $key => $slide)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/'. $slide?->image) }}" class="d-block w-100"
                         alt="{{ $slide?->title_en }}"/>
                    <div class="carousel-caption d-none d-md-block">
                                         {{--    <h5>{{ $slide->title_en }}</h5>
                                                    <p>{{ $slide->description_en }}</p>-->
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Mission, Values, Customer -->
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-12 col-sm-12 col-md-4">
                <div class="card" style="background-color:#FFFBE7; width:100%; height:100%;">
                    <img class="mx-auto mt-4" src="{{ asset("storage/" . $mission?->image) }}" alt="image1.png"
                         width="80" height="80">
                    <h4 class="my-3 text-center">Mission</h4>
                    <p class="fs-6 m-3 mt-1">{{ $mission?->description_en }}</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="card" style="background-color:#FFFBE7; width:100%; height:100%;">
                    <img class="mx-auto mt-4" src="{{ asset("frontend/assets/" . $vision?->image) }}" alt="image1.png"
                         width="80" height="80">
                    <h4 class="my-3 text-center">Values</h4>
                    <p class="fs-6 m-3 mt-1">{{ $vision?->description_en }}</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="card" style="background-color:#FFFBE7; width:100%; height:100%;">
                    <img class="mx-auto mt-4" src="{{ asset("storage/" . $TargetCustomer?->image) }}" alt="image1.png"
                         width="80" height="80">
                    <h4 class="my-3 text-center">Target Customer</h4>
                    <p class=" fs-6 m-3 mt-1">{{ $TargetCustomer?->description_en }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Mimba -->
    <div class="container my-5" id="about">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                @if ($about && $about->image)
                    <img src="{{ asset('storage/'. $about?->image) }}" class="img-fluid rounded"
                         alt="{{ $about?->title_en }}" width="100%" height="100%">
                @else
                    <img src="{{ asset('frontend/assets/image/mimba/about.webp') }}" class="img-fluid rounded" alt="About Mimba"
                         width="100%" height="100%">
                @endif

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <h1 class="mt-5 mb-5">About <span class="text-success fs-1 ">{{ $about?->title_en }}</span></h1>
                <p class="fs-5" style="text-align: justify">
                    {{ $about?->description_en }}
                </p>
            </div>
        </div>
    </div>

      <!-- Modal -->
    <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="loadingModalLabel">🚧 Site Under Maintenance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light text-center">
                    <!-- Logo Image -->
                    <img src="{{ asset('frontend/assets/image/mimba.png') }}" alt="Company Logo" class="img-fluid mb-3" style="max-width: 150px;">
                    <p class="fs-5 text-black">Our site is currently undergoing maintenance, but you can still access all content. Please bear with us as we work to enhance your experience. We'll be back to full functionality shortly. Thank you for your patience!</p>
                    <p class="text-danger fs-4">🔧 We'll be back soon!</p>
                </div>
            </div>
        </div>
    </div> 

    <!-- Mimba Services -->
    <div class="container pb-5  text-center">
        <h1 class="mb-5"><span class="text-success fs-1">Mimba Services</span></h1>
        <div class="row row-cols-sm-1 row-cols-md-4 g-2">
            @foreach($services as $key => $service)
                <div class="col text-center">
                    <div class="service_card" style=" width:100%; height:100%;">
                        <a href="{{ route('service-detail', $service->id) }}" class="text-decoration-none text-dark">
                            <img class="mx-auto mt-4" src="{{ asset('storage/'. $service->image) }}" alt="image1.png"
                                 width="200"
                                 height="150">
                            <h4 class="my-3 fs-5">{{ $service->title_en }}</h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Research & Development -->
    <div class="container pb-5  text-center" id="research">
        <div class="row">
            <h1 class="mb-5"><span class="text-success fs-1">Research & Development</span></h1>
            <div class="col-sm-12 col-md-12">
                <div class="owl-carousel owl-theme">
                    @foreach($research as $key => $value)
                        <div class="item border" style="width:98%;height: 100%;border: 1px solid #367c33!important">
                            <div class="container text-center">
                                <div class="row my-5 mx-3">
                                    <div class="col-sm-12 col-md-5  my-auto">
                                        <img src="{{ asset('storage/' . $value?->image) }}" class="img-fluid rounded"
                                             alt="" sizes="" srcset="">
                                    </div>
                                    <div class="col-sm-12 col-md-7 my-auto">
                                        <h4 class="mb-3">{{ $value->title_en }}</h4>
                                        <p class="">{{ $value->description_en }}</p>
                                        <div>
                                            @if($value->button_name)
                                                <a href="{{ route('research-detail', $value->id) }}" target="_blank">
                                                    <button type="button" class="btn btn-outline-success">
                                                        {{ $value?->button_name }}
                                                        <i class="bi bi-arrow-up-right"></i>
                                                    </button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Area of Activity -->
    <div class="container pb-5  text-center">
        <h1 class="mb-5"><span class="text-success fs-1">Area of Activity</span></h1>
        <div class="text-center">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <img src="{{ asset("frontend/assets/image/map 1.svg") }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 my-auto">
                    <h2 class="">Where we are</h2>
                    <ul class="">
                        @foreach($areas as $key => $value)
                            <li class="mb-2 fs-5">{{ $value->name_en }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Social responsibility -->
    <div class="container py-5 ">
        <h1 class="mb-5 text-center"><span class="text-success fs-1">Social Responsibility</span></h1>
        <div class="row">
            <!--        @foreach($testimonial as $item)-->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 text-bg-light"
                     style="width: 100%; height: 100%;border-radius: 8px;border: 1px solid #E2E2E2;">
                    <div class="d-flex m-4  align-items-center">
                        <img src="https://fidatoruraltech.com/wp-content/uploads/2023/09/solidarity.png" alt="Avatar"
                             class="">
                        <div class="ms-4">
                            <h5>NGOs</h5>
                            <p>We partner with NGOs to drive positive change by addressing social & environmental issues
                                collaboration.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="p-3 text-bg-light"
                     style="width: 100%; height: 100%;border-radius: 8px;border: 1px solid #E2E2E2;">
                    <div class="d-flex m-4 d-flex align-items-center">
                        <img src="https://fidatoruraltech.com/wp-content/uploads/2023/09/indian-rupee.png" alt="Avatar"
                             class="">
                        <div class="ms-4">
                            <h5>Co-operative Societies</h5>
                            <p>Mimba empowers farmers with access to credit for livestock improvement, particularly
                                aiding small-scale farmers.</p>
                        </div>
                    </div>
                </div>
            </div>
           <!--         @endforeach-->
        </div>
    </div>

    <!-- pricingCard -->
    <div class="container pb-5 ">
        <h1 class="text-center"><span class="text-success fs-1">Pricing</span></h1>
        <p class="mb-5 text-center fs-4">Cattle Registration with QR code base ear Tag Breeding Management </p>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="table-responsive">
                    <table class="table table-success table-hover text-center">
                        <thead>
                        <tr>
                            <th scope="col" class="fs-5">S/L</th>
                            <th scope="col" class="fs-5">Services</th>
                            <th class="fs-5">Basic (BDT 50/-)</th>
                            <th class="fs-5">Premium (BDT 80/-)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>AI</td>
                            <td><span class="badge text-bg-success">Yes</span></td>
                            <td><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>PD</td>
                            <td><span class="badge text-bg-success">Yes</span></td>
                            <td><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Calving</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Dry Off</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Health Management</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Vaccination</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Deworming</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Treatment</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Milk Production data Record</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Report</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Milk collection</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>

                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Calving report</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Vaccination report</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td>Deworming report</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>Treatment report</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>Cattle lifetime history</td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>

                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>Notification on expected calving</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>Notification for Vaccination, deworming, treatment follow-up.</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td>Daily Action plan</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>Alert Action</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td>Different parameter-wise report generate</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td>Report of PD check greater than 90 days</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td>Report On A.I. Done</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td>PD Checked</td>
                            <td class="text-center"><span class="badge text-bg-danger">No</span></td>
                            <td class="text-center"><span class="badge text-bg-success">Yes</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-success mt-3">
                        <a class="text-decoration-none text-dark" href="{{ route('registration') }}" target="_blank">Registration</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Farmer Testimonial -->
    <div class="container py-5 ">
        <h1 class="mb-5 text-center"><span class="text-success fs-1">Farmer Testimonial</span></h1>
        <div class="row">
            @foreach($testimonial as $item)
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="p-3 text-bg-light"
                         style="width: 100%; height: 100%;border-radius: 8px;border: 1px solid #E2E2E2;">
                        <div class="d-flex justify-content-between m-2">
                            <img src="{{ asset('frontend/assets/image/quotes.png') }}" class="me-5" alt="“" width="36"
                                 height="24">
                            <p class="card-text"><small>{{  $item->description_en }}</small></p>
                        </div>
                        <div class="d-flex mt-4" style="margin-left: 90px">
                            <img src="{{ asset("storage/" . $item->image) }}" alt="Avatar" class="avatar">
                            <div class="ms-4">
                                <h5>{{ $item->name_en }}</h5>
                                <p>{{ $item->farm_name_en }} <br>{{ $item->address_en }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Awards -->
    <div class="container">
        <h1 class="my-5 text-center"><span class="text-success fs-1 ">Awards</span></h1>
        <div class="award">
            <div id="demo" class="carousel slide" data-bs-ride="carousel" style="background-color: #EEF3E8">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    @foreach($awards as $key => $item)
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}"
                                class="{{ $key == 0 ? 'active' : ''  }}"></button>
                    @endforeach
                </div>
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    @foreach($awards as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : ''  }}">
                            <div class="row m-3">
                                <div class="col-md-7">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Los Angeles" class="d-block"
                                         style="width:100%; height: 500px">
                                </div>
                                <div class="col-md-5 text-center">
                                    <img src="{{ asset("frontend/assets/image/star.png") }}" alt="{{$item->title_en}}"
                                         class="mx-auto"
                                         style="width:128px;height: 128px"/>
                                    <h2 class="mt-4" style="font-size: 24px;">{{ $item->title_en }}</h2>
                                    <h1 class="my-4"
                                        style="font-size: 80px;font-weight: 700;text-transform: uppercase">{{$item->contests_en}}</h1>
                                    <img src="{{ asset("frontend/assets/image/many-star.png") }}" alt="Los Angeles"
                                         class="mx-auto"
                                         style="width:113px;height: 113px"/>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="text-success carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="text-success carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="container bg-white px-5 py-1" id="contact">
        <h1 class="my-5 text-center"><span class="text-success fs-1"> Contact Us  </span></h1>
        <form action="{{ route('form.store') }}" method="post">
            @csrf
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row my-5 gy-4">
                <div class="col-sm-12 col-md-6">
                    <div class="input-container">
                        <label for="custom-input">Name <span class="text-danger">*</span></label>
                        <input class="custom-input py-3" id="custom-input" type="text" name="name"
                               placeholder="Your name here"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-container">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input class="custom-input py-3" id="email" type="text" name="email"
                               placeholder="Your email here"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-container">
                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                        <input class="custom-input py-3" id="phone" type="text" name="phone"
                               placeholder="Your phone number here"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-container">
                        <label for="cattle">Total Cattle <span class="text-danger">*</span></label>
                        <input class="custom-input py-3" id="cattle" type="number" name="total_cattle"
                               placeholder="Your cattle here"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-container">
                        <label for="address">Address <span class="text-danger">*</span></label>
                        <input class="custom-input py-3" id="address" type="text" name="address"
                               placeholder="Write your address"/>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-container">
                        <label for="message">Your Message</label>
                        <input class="custom-input py-3" id="message" type="text" name="message"
                               placeholder="Your message here"/>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-success">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        window.onload = function() {
            var modal = new bootstrap.Modal(document.getElementById('loadingModal'));
            modal.show();
        }; --}}
    </script>
@endsection

