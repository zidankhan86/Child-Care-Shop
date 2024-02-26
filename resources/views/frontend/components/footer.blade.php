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
                       @if($companyLogo)
                        <a href="{{ route('home') }}"><img src="{{url('/public/uploads/',$companyLogo->image)}}" alt=""></a>
                    @else
                        <a href="{{ route('home') }}"><img src="{{url('/path/to/default/logo.png')}}" alt="Inseart a Logo"></a>
                    @endif
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
                        
                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        <li><a href="{{url('/product')}}">Product</a></li>
                       
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
                   
                    <div class="footer__widget__social">
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com//"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
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
