<div class="fix">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="./">
                     <img src="{{ asset('frontend/assets/image/mimba.png') }}" alt="header logo" width="100" height="40"
                             class="d-inline-block align-text-center">
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fal fa-times"></i>
                     </button>
                  </div>
               </div>
               <div class="offcanvas__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix mb-40"></div>
               <div class="sidebar__thumb d-none d-lg-block mb-20">
                  <div class="row gx-2">
                     <div class="col-4">
                        <div class="sidebar__single-thumb w-img mb-10">
                           <a class="popup-image" href="frontend/assets/image/gallery/06.jpg">
                              <img src="frontend/assets/image/gallery/06.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-thumb w-img mb-10">
                           <a class="popup-image" href="frontend/assets/image/gallery/07.jpg">
                              <img src="frontend/assets/image/gallery/07.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-thumb w-img mb-10">
                           <a class="popup-image" href="frontend/assets/image/gallery/08.jpg">
                              <img src="frontend/assets/image/gallery/08.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-thumb w-img mb-10">
                           <a class="popup-image" href="frontend/assets/image/gallery/09.jpg">
                              <img src="frontend/assets/image/gallery/09.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-thumb w-img mb-10">
                           <a class="popup-image" href="frontend/assets/image/gallery/10.jpg">
                              <img src="frontend/assets/image/gallery/10.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-thumb w-img mb-10">
                           <a class="popup-image" href="frontend/assets/image/gallery/12.jpg">
                              <img src="frontend/assets/image/gallery/12.jpg" alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offcanvas__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:+088889797697">+088889797697</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:+012-345-6789"><span class="mailto:support@mail.com">support@mail.com</span></a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="offcanvas__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas-overlay"></div>
   <div class="offcanvas-overlay-white"></div>
   <!--Offcanvas area end-->

   <!-- Cartmini sidber start -->
   {{-- <div class="fix">
      <div class="shoping__sidebar">  
         <div class="cartmini__wrapper">
            <div class="cartmini__title">
               <h4>Shopping Cart</h4>
            </div> --}}
             {{-- <li class="has-dropdown">
                 <a href="{{ route('user.login') }}">Login</a>
            </li> --}}
            {{-- @extends('header.login') --}}
               {{-- login end --}}
               
               {{-- <div class="cartmini__inner">
                  <ul>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="backend/assets/images/products/02.png" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">sweet milk Cream</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1">
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$46.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="backend/assets/images/products/04.png" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">pure 1000ml milk</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1">
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$32.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="backend/assets/images/products/05.png" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">mikado cheese bar</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1">
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$62.00</span>
                           </div>
                        </div>
                        <a href="product-details.html" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="cartmini__checkout">
                  <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                  </div>
                  <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="bd-fill__btn w-100"> <span></span> view cart</a>
                     <a href="checkout.html" class="bd-fill__btn-2 w-100"> <span></span> checkout</a>
                  </div> --}}
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Cartmini sidber end -->

   <!-- Added to cart message  -->
   <div class="added-to-cart">
      <div class="added-to-cart-content d-flex align-items-center">
         <i class="fa-light fa-check"></i>
         <p>Successfully Added to cart</p>
         <span class="bd-action__item-number cart-count">0</span> 
      </div>
   </div>

   <!-- Added to wishlist message -->
   <div class="added-to-wishlist">
      <div class="added-to-cart-content d-flex align-items-center">
         <i class="fa-light fa-check"></i>
         <p>Successfully Added to wishlist</p>
         <span class="bd-action__item-number wishlist-count">0</span>  
      </div>
   </div> 

   <!-- Add product modal area start -->  
   <div class="product__modal modal fade" id="productmodal">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="product__modal-wrapper p-relative">
               <div class="product__modal-close p-absolute">
                  <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
               </div>
               <div class="product__modal-inner">
                  <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="product__modal-box">
                        <div class="tab-content" id="modalTabContent">
                           <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                              <div class="product__modal-img w-img">
                                 <img src="assets/img/product/quick-view/quick-view-01.png" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                              <div class="product__modal-img w-img">
                                 <img src="assets/img/product/quick-view/quick-view-02.png" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                              <div class="product__modal-img w-img">
                                 <img src="assets/img/product/quick-view/quick-view-03.png" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                              <div class="product__modal-img w-img">
                                 <img src="assets/img/product/quick-view/quick-view-04.png" alt="">
                              </div>
                           </div>
                        </div>
                           <ul class="nav nav-tabs" id="modalTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1">
                                    <img src="assets/img/product/quick-view/nav-01.png" alt="">
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                    <img src="assets/img/product/quick-view/nav-02.png" alt="">
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                    <img src="assets/img/product/quick-view/nav-03.png" alt="">
                                 </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                    <img src="assets/img/product/quick-view/nav-04.png" alt="">
                                 </button>
                              </li>
                           </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     <div class="product__modal-content">
                        <h3 class="product__modal-title">Dairy products are derived from milk</h3>
                        <div class="product__details-price">
                           <span class="old-price">$90.35</span>
                           <span class="new-price">$70.25</span>
                        </div>
                        <div class="product__review">
                           <div class="product__details-rating">
                              <a href="#"><i class="fa-solid fa-star"></i></a>
                              <a href="#"><i class="fa-solid fa-star"></i></a>
                              <a href="#"><i class="fa-solid fa-star"></i></a>
                              <a href="#"><i class="fa-regular fa-star"></i></a>
                              <a href="#"><i class="fa-regular fa-star"></i></a>
                           </div>
                           <div class="product__add-review">
                           <span><a href="#">1 Review</a></span>
                           <span><a href="#">Add Review</a></span>
                           </div>
                        </div>
                        <div class="product__stock mb-20">
                           <span>Availability :</span>
                           <span>In Stock</span>
                        </div>
                        <div class="product__details-action mb-20">
                           <div class="product__quantity">
                              <div class="product-quantity-wrapper">
                                 <form action="#">
                                    <button class="cart-minus"><i class="fa-light fa-minus"></i></button>
                                    <input class="cart-input" type="text" value="1">
                                    <button class="cart-plus"><i class="fa-light fa-plus"></i></button>
                                 </form>
                              </div>
                           </div>
                           <div class="product__add-cart">
                              <a href="javascript:void(0)" class="bd-fill__btn cart-btn"><i class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                           </div>
                           <div class="product__add-wish">
                              <a href="#" class="product__add-wish-btn"><i class="fa-solid fa-heart"></i></a>
                           </div>
                        </div>
                        <div class="product__modal-links mb-20">
                           <ul>
                           <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                           <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                           <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                           <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                           </ul>
                        </div>
                        <div class="product__safe-checkout">
                           <h5>Guaranteed Safe Checkout</h5>
                           <a href="#"><img src="assets/img/product/details/discover.png" alt="payment image"></a>
                           <a href="#"><img src="assets/img/product/details/mastercard.png" alt="payment image"></a>
                           <a href="#"><img src="assets/img/product/details/paypal.png" alt="payment image"></a>
                           <a href="#"><img src="assets/img/product/details/visa.png" alt="payment image"></a>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <header>
      <!-- Header top area start -->
      <div class="bd-header__top-area pg-bg d-none d-md-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-8 col-lg-8 col-md-9 col-8">
                  <div class="bd-header__contact-spacing">
                     <div class="bd-header__contact">
                        <ul>
                           <li><a href="mailto:info@webmail.com"><i class="fa-solid fa-envelope-open"></i>info@webmail.com</a></li>
                           <li><a href="tel:89789790899"><i class="fa-solid fa-phone"></i>897 897 908 99</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4  col-md-3 col-4">
                  <div class="bd-header__social text-end">
                     <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-behance-square"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Header top area end -->

      <div id="header-sticky" class="bd-header__area">
         <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
               <div class="col-xl-2 col-lg-2 col-md-4 col-4 p-0">
                  <div class="bd-header__logo">
                     <a href="./">
                        <img src="{{ asset('frontend/assets/image/mimba.svg') }}"  alt="Logo" width="260" height="90" href="{{ url('/') }}"
                             class="d-inline-block align-text-top">
                     </a>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-9 col-md-4 d-none d-md-block">
                  <div class="bd-header__menu-wrapper d-flex justify-content-center">
                     <div class="main-menu d-none d-none d-lg-block">
                        <nav id="mobile-menu" style="margin-right:10px;">
                           <ul>
                              <li class="has-dropdown">
                                  <a class="nav-link fs-5 active" aria-current="page" href="{{ url('/') }}">HOME</a>
                                  {{-- <ul class="submenu">
                                    <li><a href="{{ url('/') }}">Home Style 1</a></li>
                                    <li><a href="{{ url('/') }}">Home Style 2</a></li>
                                    <li><a href="{{ url('/') }}">Home Style 3</a></li>
                                 </ul> --}}
                              </li>
                              <li class="has-dropdown" style="margin-right:28px;">
                                 <a href="{{ url('/') }}">About Us</a>
                              </li>
                              <li class="has-dropdown" style="margin-right:28px;">
                                 <a href="{{ url('/') }}">Features</a>
                              </li>
                              <li class="has-dropdown" style="margin-right:28px;">
                                 <a href="{{ url('/') }}">Solutions</a>
                              </li>
                              <li class="has-dropdown" style="margin-right:28px;">
                                 <a href="{{ url('/') }}">Pricing</a>
                              </li>
                              <li class="has-dropdown" style="margin-right:28px;">
                                 <a href="{{ url('/') }}">Resources</a>
                              </li>
                              <li class="has-dropdow"  style="margin-right:28px;">
                                 <a href="{{ url('/') }}">Partners</a>
                              </li>
                              <li class="has-dropdown"style=" margin-right:28px;">
                                 <a href="{{ url('/') }}">Support</a>
                              </li>
                              <li class="has-dropdown" style=" margin-right:28px;">
                                 <a href="{{ url('/') }}">Contact Us</a>
                              </li>
                              
                           </ul>
                        </nav>

                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-1 col-md-4 col-8">
                  <div class="bd-header__right d-flex align-items-center justify-content-end">
                     <div class="bd-header__action">
                        <div class="bd-header__action-icon">
                           <button class="shoping__toggle">
                            
                                 <a href="{{ route('user.login') }}">Login</a>
                              
                           </button>
                        </div>
                     </div>
                     <div class="bd-header__hamburger">
                        <div class="bd-header__hamburger-icon">
                           <button class="side-toggle">
                              <img src="frontend/assets/image/icon/hamburger-icon.png" alt="hamburger-icon">
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

    <!-- Header area end-->

      
      <!-- News area end -->

   </main>
   <!-- Body main wrapper end -->

{{-- <nav class="navbar navbar-expand-lg bg-main fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" Sustainability Matters!Toggle navigation>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <nav class="navbar ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset("frontend/assets/image/mimba.svg") }}" alt="Logo" width="150" height="40"
                             class="d-inline-block align-text-top" />
                    </a>
                </div>
            </nav>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-5 active" aria-current="page" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#research">RESEARCH & DEVELOPMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#about">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#">ACTIVITIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('gallerys') }}">GALLERY</a>
                </li>
            </ul>
            <div>
                <button type="button" class="btn btn-outline-success">
                    <a class="text-decoration-none text-dark" href="#">GO TO SHOP</a>
                </button>
                <button type="button" class="btn btn-outline-success">
                    <a class="text-decoration-none text-dark" href="{{ route('registration') }}" target="_blank">REGISTRATION</a>
                </button>
            </div>
        </div>
    </div>
</nav> --}}
