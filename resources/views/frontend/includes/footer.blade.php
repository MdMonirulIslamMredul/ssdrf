


<footer id="rs-footer" class="rs-footer home9-style main-home" style="background:#071123;">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <div class="footer-logo mb-30">
                        @php $logo = \App\Models\Logo::latest()->first() @endphp
                        <a href="index.html"><img src="{{asset($logo->logo_image1??null)}}" alt=""></a>
                    </div>
                    <div class="textwidget pr-60 md-pr-15"><p class="white-color">{{$footer->details??null}}</p>
                    </div>
                   
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{$links->address}}</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:{{$links->number}}">{{$links->number}}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{$links->email}}">{{$links->email}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">Courses</h3>
                    <ul class="site-map">
                        @foreach($services as $service)
                        <li><a href="{{route('services.details',['id'=>$service->id])}}">{{$service->service_title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <h3 class="widget-title">Contact</h3>
                     <ul  style="color:white">
                        <li>
                            <a href="{{$links->facebook}}" style="color:white" target="_blank"><span><i class="fa fa-facebook"></i> Facebook</span></a> <br>
                        </li>
                        <li>
                            <a href="{{$links->youtube}} " style="color:white" target="_blank"><span><i class="fa fa-youtube-play"></i> Youtube</span></a> <br>
                        </li>

                        <li>
                            <a href="{{$links->instagram}}" style="color:white" target="_blank"><span><i class="fa fa-instagram"></i> Instagram</span></a> <br>
                        </li>
                        <li>
                            <a href="{{$links->linkedIn}}" style="color:white" target="_blank"><span><i class="fa fa-linkedin"></i> Linkedin</span></a> <br>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>&copy; {{$footer->credit}}</p>
                    </div>
                </div>
                <div class="col-lg-6 text-right md-text-left">
                    <ul class="copy-right-menu">
                        <li><a href="{{route('blogs.page')}}">Blog</a></li>
                        <li><a href="{{route('contacts')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
