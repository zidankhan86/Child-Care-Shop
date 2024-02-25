 <!-- Footer Section Begin -->
 <footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    @php
                        $companyLogo = App\Models\CompanyLogo::latest()->first();
                    @endphp
                    <div class="footer__about__logo">
                        <a href="{{ route('home') }}"><img src="{{url('/public/uploads/',$companyLogo->image)}}" alt=""></a>
                    </div>
                    <ul>
                        
                        <li>Phone: 01711111111</li>
                        <li>Email:ChildCareShop@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Product</a></li>
                       
                    </ul>
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="{{route('faq.home')}}">FAQ</a></li>
                        <li><a href="#">DOCTOR</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="https://www.facebook.com/nongorfoodbd"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/nongorfood/"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/nongorfood"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UC-0rsi0dXMF_k1zKjXZOAqw"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by ChildCareShop
</p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
