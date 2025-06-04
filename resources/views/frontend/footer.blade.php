
@php
    if (session()->has('language')) {
        $lanCode = session()->get('language');
        App::setLocale($lanCode);
    }
@endphp

  <footer>
      <section class="bd-footer__area green-bg foo p-relative pt-95">
         <div class="bd-footer__bg w-img">
            <img src="frontend/assets/image/gallery/footer-bg.png" alt="footer-bg">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="bd-footer__widget footer-col-1 mb-60">
                     <div class="bd-footer__title">
                        <h4>about us</h4>
                     </div>
                     <div class="bd-footer__paragraph">
                        <p>Mimba cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue nec.</p>
                     </div>
                     <div class="bd-footer__social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-behance-square"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="bd-footer__widget footer-col-2 mb-60">
                     <div class="bd-footer__title">
                        <h4>Services</h4>
                     </div>
                     <div class="bd-footer__link">
                        <ul>
                           <li><a href="#">Mimba shop</a></li>
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">Cow</a></li>
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">monitoring</a></li>
                           <li><a href="#">devices</a></li>
                           <li><a href="#">Insurance</a></li>
                           <li><a href="#">devices</a></li>
                           <li><a href="#">Veterinary</a></li>
                           <li><a href="#">Help</a></li>
                           <li><a href="#">CSR services</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="bd-footer__widget footer-col-3 mb-60">
                     <div class="bd-footer__title">
                        <h4>Business hours</h4>
                     </div>
                     <div class="bd-footer__contact">
                        <div class="bd-footer__contact-item">
                           <span>Mon - Fri</span>
                           <p class="mb-20">10:00 am to 06:00 pm</p>
                        </div>
                        <div class="bd-footer__contact-item">
                           <span>Saturday (1st & 4th)</span>
                           <p class="mb-25">08:00 am to 04:00 pm</p>
                        </div>
                        <div class="bd-footer__support">
                           <div class="bd-footer__support-inner">
                              <div class="bd-footer__support-icon">
                                 <img src="assets/img/icon/footer-text.png" alt="footer-text">
                              </div>
                              <div class="bd-footer__support-title">
                                 <span>Emergency Service</span>
                                 <p>
                                    <i> Dhaka, Bangladesh</i>
                                 </p>
                                 <p>
                                    <i> www.mimba.xyz</i>
                                 </p>
                                 <a href="tel:00011122233">+880 1773-45623</a>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-8 col-md-6">
                  <div class="bd-footer__widget footer-col-4 mb-60">
                     <div class="bd-footer__title">
                        <h4>Subscribe us</h4>
                     </div>
                     <div class="bd-footer__subcribe">
                        <p>Subscribe us & recive our office
                        & update in your inbox directly</p>
                        <form action="#">
                           <div class="bd-footer__input p-relative mb-20">
                              <input type="text" placeholder="info@webmail.com">
                              <i class="fa-solid fa-envelope-open"></i>
                           </div>
                           <button type="button" class="bd-theme__btn-3">subscribe now</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-copyright__area">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="bd-copyright__main">
                        <div class="bd-copyright__border">
                           <div class="bd-copyright__text">
                              <p>Copyright design by <span><a target="_blank" href="https://themeforest.net/user/bdevs/portfolio">@bdevs</a></span> - 2025</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </footer>
   <!-- Footer area end -->

   <!-- Back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>


 {{-- <footer class="text-center text-lg-start">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between  border-bottom">
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start my-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <img src="{{ asset("frontend/assets/image/mimba.svg") }}" alt="Logo" width="200" height="50"
                         class="d-inline-block align-text-top mb-4" />
                    <!--                        <h6 class="text-uppercase fw-bold"> <i class="fas fa-gem me-3"></i>Mimba </h6>-->
                    <p>
                        Mimba cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna
                        congue nec.
                    </p>
                </div>

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Services
                    </h6>
                    <p class="text-decoration-none">
                        <a href="#" class="text-reset text-decoration-none">Mimba Shop</a>
                    </p>
                    <p class="text-decoration-none">
                        <a href="#" class="text-reset text-decoration-none">Cow monitoring
                            devices</a>
                    </p>
                    <p class="text-decoration-none">
                        <a href="#" class="text-reset text-decoration-none">Veterinary Services</a>
                    </p>
                    <p>
                        <a href="#" class="text-reset text-decoration-none">CSR services</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#about" class="text-reset text-decoration-none">About Us</a>
                    </p>
                    <p>
                        <a href="{{ route('FAQ') }}" class="text-reset text-decoration-none">FAQ</a>
                    </p>
                    <p>
                        <a href="{{ route('Insurance') }}" class="text-reset text-decoration-none">Insurance</a>
                    </p>
                    <p>
                        <a href="#" class="text-reset text-decoration-none">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 ms-3">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Dhaka, Bangladesh</p>
                    <p><i class="fas fa-envelope me-3"></i> www.mimba.xyz</p>
                    <p><i class="fas fa-print me-3"></i> +880 1708 169 401-5</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © <span id="currentYear"></span> Copyright:
        <a class="text-reset fw-bold text-decoration-none" href="http://ussinc.tech/">United Software Solutions</a>
    </div>
    <!-- Copyright -->
</footer>
 --}}