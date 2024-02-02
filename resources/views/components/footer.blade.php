

</main>
  <!-- ================ start footer Area ================= -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><i class="ti-mobile" aria-hidden="true"></i> Call Us: <a href="tel:94777123456">(+94) 77 7 123456</a></li>
                            <li><i class="ti-email" aria-hidden="true"></i> <a href="mailto:info@labookellievilla.com">info@labookellievilla.com</a></li>
                            <li><i class="ti-time" aria-hidden="true"></i> <a href="#">Mon-Sun: (24/7)</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Our Partners</h4>
                        <ul>
                            <li><a href="https://marinobeach.com" target="_new">Marino Beach</a></li>
                            <li><a href="https://sigiriyaforestedge.com" target="_new">Sigiriya Forestedge</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{ URL::to('') }}/about-us">About us</a></li>
                            <li><a href="{{ URL::to('') }}/gallery">Gallery</a></li>
                            <li><a href="{{ URL::to('') }}/contact-us">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                        <h4>About</h4>
                        <p>You can trust us. we only send promo offers,</p>
                        <div class="form-wrap footer-bottom " id="mc_embed_signup">
                            <div class="col-lg-12 col-md-12 text-left text-lg-left footer-social p-0">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom row align-items-center text-center text-lg-left">
                    <p class="footer-text m-0 col-lg-12 col-md-12">Copyright &copy; {{ date('Y') }} All Rights Reserved | Labookellie Villa</p>
                </div>
            </div>

        </footer>



        @include('libraries.scripts')

    </body>
</html>
