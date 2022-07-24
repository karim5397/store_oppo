@extends('website_en.layout.app')
@section('content')
<main>
    <!-- start landing  -->
    <section class="landing">
        <div class="container">
            @if ($sliders !== null)
            <div class="text">
                <h1>{{$sliders->title_en}}</h1>
                <p>{!!$sliders->description_en!!}</p>
            </div>
            <div class="img-landing">
                <img src="{{asset($sliders->image)}}" alt="" width="600px" height="378px">
            </div>
            @else

            <div class="text">
                <h1>Welcome, To OPPO Store</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nesciunt dicta possimus ab explicabo earum corporis qui perspiciatis soluta, sit eaque aliquid eveniet neque non veritatis voluptates rem veniam. Voluptatem?</p>
            </div>
            <div class="img-landing">
                <img src="{{asset('frontend/assets/img/reno6-5g-pdp-design-renoglow-xl-1728.webp')}}" alt="" width="600px" height="378px">
            </div>
            @endif
        </div>
        <a href="#products" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </section>
    <!-- end landing -->
    <!-- start products -->
    <section class="products" id="products">
        <h2 class="main-title">Products</h2>
        <div class="container">
            @forelse ($products as $product )

                        <div class="box" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic">
                            <img src="{{asset($product->image)}}" alt="">
                            <div class="content">
                                <h3>{{$product->title_en}}</h3>
                                <p>{!!$product->description_en!!} </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>

            @empty

                        <div class="box" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-reno7.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO Reno 7</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-a16.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO A16</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-a55-4g-1.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO A55</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-f1s.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO F1S</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-right"
                data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-f9.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO F9</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-right"
                data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-f19.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO F19</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-right"
                data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-a9-2020-.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO A9 2020</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>
                        <div class="box" data-aos="flip-right"
                data-aos-easing="ease-out-cubic">
                            <img src="{{asset('frontend/assets/img/oppo-a5s-r.jpg')}}" alt="">
                            <div class="content">
                                <h3>OPPO A5S</h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit harum ad minus eaque sunt, ducimus maiores voluptate aliquam aliquid </p>
                            </div>
                            <div class="info">
                                <a href="#">Read More</a>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </div>
                        </div>


            @endforelse
        </div>
    </section>
    <div class="spikes"></div>
    <!-- end products -->
    <!-- start Gallery -->
    <section class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">
            @forelse ($images as $image)
                    <div class="box" data-aos="zoom-in-right">
                        <div class="image">
                            <img src="{{asset($image->image)}}">
                        </div>
                    </div>
            @empty

                    <div class="box" data-aos="zoom-in-right">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/oppo-find-x5-pro-3.jpg')}}">
                        </div>
                    </div>
                    <div class="box" data-aos="zoom-in">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/gallary2.jpg')}}">
                        </div>
                    </div>
                    <div class="box" data-aos="zoom-in-left">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/gallary3.jpg')}}">
                        </div>
                    </div>
                    <div class="box" data-aos="zoom-in-right">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/gallery7.jpg')}}">
                        </div>
                    </div>
                    <div class="box" data-aos="zoom-in">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/gallary5.jpg')}}">
                        </div>
                    </div>
                    <div class="box" data-aos="zoom-in-left">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/gallery6.jpg')}}">
                        </div>
                    </div>
            @endforelse

        </div>

    </section>
    <!-- end Gallery -->
    <!-- start Features -->
    <section class="features" id="features">
        <h2 class="main-title">Features</h2>
        <div class="container">
            @forelse ($features as $feature )
                    <div class="box quality" data-aos="fade-right">
                        <div class="image">
                            <img src="{{asset($feature->image)}}" alt="">
                        </div>
                        <h3>{{$feature->title_en}}</h3>
                        <p>{{$feature->description_en}}</p>
                        <a href="#">More</a>
                    </div>
            @empty

                    <div class="box quality" data-aos="fade-right">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/quality2.jpg')}}" alt="">
                        </div>
                        <h3>quality</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor dolores odio .</p>
                        <a href="#">More</a>
                    </div>
                    <div class="box time" data-aos="fade-up">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/time.jpg')}}" alt="">
                        </div>
                        <h3>time</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor dolores odio .</p>
                        <a href="#">More</a>
                    </div>
                    <div class="box passion" data-aos="fade-left">
                        <div class="image">
                            <img src="{{asset('frontend/assets/img/processor1.jpg')}}" alt="">
                        </div>
                        <h3>passion</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolor dolores odio .</p>
                        <a href="#">More</a>
                    </div>

            @endforelse
        </div>

    </section>
    <!-- end Features -->
    <!-- start Testimonials -->
    <section class="testimonials" id="testimonials">
        <h2 class="main-title">
            testimonials
        </h2>
        <div class="container">
            @forelse ($testimonials as $testimonial)
                    <div class="box" data-aos="flip-up">
                        <img src="{{asset($testimonial->image)}}" alt="">
                        <h3>{{$testimonial->title_en}}</h3>
                        <span class="title">{!!$testimonial->content_en!!}</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>{!!$testimonial->description_en!!}</p>
                    </div>
            @empty

                    <div class="box" data-aos="flip-up">
                        <img src="{{asset('frontend/assets/images/avatar-01.png')}}" alt="">
                        <h3>Karim Atef</h3>
                        <span class="title">Full Stack Web Developer</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati tempore dolor debitis earum recusandae aspernatur molestias exercitationem possimus blanditiis at,</p>
                    </div>
                    <div class="box" data-aos="flip-up">
                        <img src="{{asset('frontend/assets/images/avatar-02.png')}}" alt="">
                        <h3>Ahmed Atef</h3>
                        <span class="title">Full Stack Web Developer</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati tempore dolor debitis earum recusandae aspernatur molestias exercitationem possimus blanditiis at,</p>
                    </div>
                    <div class="box" data-aos="flip-up">
                        <img src="{{asset('frontend/assets/images/avatar-03.png')}}" alt="">
                        <h3>Mohamed Said</h3>
                        <span class="title">Full Stack Web Developer</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati tempore dolor debitis earum recusandae aspernatur molestias exercitationem possimus blanditiis at,</p>
                    </div>
                    <div class="box" data-aos="flip-down">
                        <img src="{{asset('frontend/assets/images/avatar-04.png')}}" alt="">
                        <h3>Mohamed Ansary</h3>
                        <span class="title">Full Stack Web Developer</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati tempore dolor debitis earum recusandae aspernatur molestias exercitationem possimus blanditiis at,</p>
                    </div>
                    <div class="box" data-aos="flip-down">
                        <img src="{{asset('frontend/assets/images/avatar-05.png')}}" alt="">
                        <h3>Amr Samir</h3>
                        <span class="title">Full Stack Web Developer</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati tempore dolor debitis earum recusandae aspernatur molestias exercitationem possimus blanditiis at,</p>
                    </div>
                    <div class="box" data-aos="flip-down">
                        <img src="{{asset('frontend/assets/images/avatar-06.png')}}" alt="">
                        <h3>Ali Emad</h3>
                        <span class="title">Full Stack Web Developer</span>
                        <div class="rate">
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="filled fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati tempore dolor debitis earum recusandae aspernatur molestias exercitationem possimus blanditiis at,</p>
                    </div>
            @endforelse
        </div>

    </section>
    <!-- end Testimonials -->
    <!-- start team Members -->
    <section class="team-member" id="team-member">
        <h2 class="main-title">Team Members</h2>
        <div class="container">

            @forelse ($members as $member )
                    <div class="box" data-aos="fade-up-right">
                        <div class="data">
                            <img src="{{asset($member->image)}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3> {{$member->name_en}}</h3>
                            <p>{!!$member->description_en!!} </p>
                        </div>
                    </div>

            @empty

                    <div class="box" data-aos="fade-up-right">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team1.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3> Sarah Parmenter</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team2.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Dan Cederholm</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up-left">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team3.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Ethan Marcotte</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up-right">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team4.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Abby Covert</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team5.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Dave Shea</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up-left">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team6.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Jeffrey Zeldman</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up-right">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team7.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Rachel Andrew</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up">
                        <div class="data">
                            <img src="{{asset('frontend/assets/img/team8.webp')}}" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Simon Collison</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit voluptatem </p>
                        </div>

                    </div>
            @endforelse
        </div>

    </section>
    <div class="spikes"></div>
    <!-- end team Members -->
    <!-- start Services -->
    <section class="services" id="services">
        <h2 class="main-title">Services</h2>
        <div class="container">
            @forelse ($services as $service)

                    <div class="box" data-aos="flip-right">
                        <i class="{{$service->icon}} fa-4x"></i>
                        <h3>{{$service->title_en}}</h3>
                        <div class="info">
                        <a href="#">Details</a>
                        </div>
                    </div>

            @empty

                    <div class="box" data-aos="flip-right">
                    <i class="fas fa-user-shield fa-4x"></i>
                    <h3>Security</h3>
                    <div class="info">
                        <a href="#">Details</a>
                    </div>
                    </div>
                    <div class="box" data-aos="zoom-in">
                    <i class="fas fa-tools fa-4x"></i>
                    <h3>Fixing Issues</h3>
                    <div class="info">
                        <a href="#">Details</a>
                    </div>
                    </div>
                    <div class="box" data-aos="flip-left">
                    <i class="fas fa-map-marked-alt fa-4x"></i>
                    <h3>Location</h3>
                    <div class="info">
                        <a href="#">Details</a>
                    </div>
                    </div>
                    <div class="box" data-aos="flip-right">
                    <i class="fas fa-laptop-code fa-4x"></i>
                    <h3>Coding</h3>
                    <div class="info">
                        <a href="#">Details</a>
                    </div>
                    </div>
                    <div class="box" data-aos="zoom-in">
                    <i class="fas fa-palette fa-4x"></i>
                    <h3>Security</h3>
                    <div class="info">
                        <a href="#">Design</a>
                    </div>
                    </div>
                    <div class="box" data-aos="flip-left">
                    <i class="fas fa-bullhorn fa-4x"></i>
                    <h3>Marketing</h3>
                    <div class="info">
                        <a href="#">Details</a>
                    </div>
                    </div>
            @endforelse
        </div>
    </section>
    <!-- end Services -->
    <!-- start our skills  -->
    <section class="our-skills" id="our-skills">
        <h2 class="main-title">Our Skills</h2>
        <div class="container">
            <img src="{{asset('frontend/assets/img/skills.webp')}}" alt="" data-aos="fade-right">
            <div class="skills" data-aos="fade-left">
                <div class="skill">
                    <h3>Screen<span>80%</span></h3>
                        <div class="progress">
                            <span style="width: 0;" data-reach="80%"></span>
                        </div>
                </div>
                <div class="skill">
                    <h3>Camera<span>60%</span></h3>
                        <div class="progress">
                            <span style="width: 0%;"data-reach="60%"></span>
                        </div>
                </div>
                <div class="skill">
                    <h3>Finger Print <span>75%</span></h3>
                        <div class="progress">
                            <span style="width: 0%;"data-reach="75%"></span>
                        </div>
                </div>
                <div class="skill">
                    <h3>Processor<span>90%</span></h3>
                        <div class="progress">
                            <span style="width: 0%;"data-reach="90%"></span>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end our skills  -->
    <!-- start how it work  -->
    <section class="work-steps" id="work-steps">
        <h2 class="main-title">start how work</h2>
        <div class="container">
            <img class="image" src="{{asset('frontend/assets/img/woork.jpg')}}" alt="" data-aos="zoom-out-down">
                <div class="info" data-aos="zoom-out-up">
                    <div class="box">
                         <img src="{{asset('frontend/assets/images/work-steps-1.png')}}" alt="">
                        <div class="text">
                            <h3>Business Analysis</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia animi laudantium tenetur harum excepturi, provident, sint, eveniet quisquam quasi omnis magni unde vero pariatur consequatur praesentium consectetur quo tempora tempore.</p>
                        </div>
                    </div>
                    <div class="box">
                         <img src="{{asset('frontend/assets/images/work-steps-2.png')}}" alt="">
                        <div class="text">
                            <h3>Architecture</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga possimus sequi distinctio hic, nesciunt eligendi rerum. Unde, nesciunt! Rerum architecto officia quae cumque eligendi ullam laborum aspernatur culpa natus ducimus.</p>
                        </div>
                    </div>
                    <div class="box">
                         <img src="{{asset('frontend/assets/images/work-steps-3.png')}}" alt="">
                        <div class="text">
                            <h3>Developement</h3>
                            <p>Lorem ipsum dolor sit amet consectr adipisicing elit. Tempora unde laborum repudiandae cum debitis ad dolor odio iusto, minima quibusdam quis voluptate doloremque exercitationem hic. Voluptate ad architecto ex molestias?</p>
                        </div>
                    </div>
                </div>
         </div>


    </section>
    <!-- end  how it work  -->
    <!-- start events  -->
    <section class="events" id="events">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title">LATEST EVENTS</h2>
        <div class="container">
            <img src="{{asset('frontend/assets/img/event.jpg')}}" alt="">
            <div class="info">
                <div class="time">
                    <div class="units">
                        <span class="days"></span>
                         <span>days</span>
                    </div>
                    <div class="units">
                        <span class="hours"></span>
                         <span>hours</span>
                    </div>
                    <div class="units">
                        <span class="minutes"></span>
                         <span>minutes</span>
                    </div>
                    <div class="units">
                        <span class="seconds"></span>
                         <span>seconds</span>
                    </div>
                </div>
                    <h3 class="title">Tech Masters Event 2021</h3>
                    <p class="description">Lorem ipsum dolor sit amet conser adipisicing elit. Et vero tenetur doloremque iusto ut adipisci quam ratione aliquam excepturi nulla in harum, veritatis porro</p>
            </div>
            <div class="subscribe">
                <form action="">
                    <input type="email" placeholder="input your email">
                    <input type="submit" value="subscribe">
                </form>
            </div>
        </div>
    </section>
    <!-- end events  -->
    <!-- start PRICING PLANS -->
    <section class="plans" id="plans">
        <div class="dots dots-up"></div>
      <div class="dots dots-down"></div>
        <h2 class="main-title">PRICING PLANS</h2>
        <div class="container">
            @forelse ($prices as $price)

                    <div class="box" data-aos="fade-right">
                        <h3 class="title">{{$price->title_en}}</h3>
                        <img src="{{asset($price->image)}}" alt="">
                        <div class="price">
                            <span class="amount">{{$price->price}}</span>
                            <span class="time">per month</span>
                        </div>
                        <ul>
                            {!! $price->description_en !!}

                        </ul>
                        <a href="#">choose plan</a>

                    </div>

            @empty

                    <div class="box" data-aos="fade-right">
                        <h3 class="title">Advanced</h3>
                        <img src="{{asset('frontend/assets/images/hosting-advanced.png')}}" alt="">
                        <div class="price">
                            <span class="amount">$15</span>
                            <span class="time">per month</span>
                        </div>
                        <ul>
                            <li>10GB HDD Space</li>
                            <li>5 Email Addresses</li>
                            <li>2 Subdomains</li>
                            <li>4 Databases</li>
                            <li>Basic Support</li>
                        </ul>
                        <a href="#">choose plan</a>

                    </div>
                    <div class="box popular" data-aos="fade-up">
                        <h3 class="label">Most popular</h3>
                        <h3 class="title">Professional</h3>
                        <img src="{{asset('frontend/assets/images/hosting-professional.png')}}" alt="">
                        <div class="price">
                            <span class="amount">$25</span>
                            <span class="time">per month</span>
                        </div>
                        <ul>
                            <li>20GB HDD Space</li>
                            <li>10 Email Addresses</li>
                            <li>5 Subdomains</li>
                            <li>8 Databases</li>
                            <li>Advanced Support</li>
                        </ul>
                        <a href="#">choose plan</a>

                    </div>
                    <div class="box" data-aos="fade-left">
                        <h3 class="title">Basic</h3>
                        <img src="{{asset('frontend/assets/images/hosting-basic.png')}}" alt="">
                        <div class="price">
                            <span class="amount">$45</span>
                            <span class="time">per month</span>
                        </div>
                        <ul>
                            <li>50GB HDD Space</li>
                            <li>20 Email Addresses</li>
                            <li>10 Subdomains</li>
                            <li>20 Databases</li>
                            <li>Professional Support</li>
                        </ul>
                        <a href="#">choose plan</a>

                    </div>
            @endforelse

        </div>
    </section>
    <!-- end  PRICING PLANS -->
    <!-- start video  -->
    <section class="video" id="video">
        <h2 class="main-title">Top videos</h2>
        <div class="container">
            <div class="holder">
                <div class="list">
                    <div class="name">
                        Top video
                        <i class="fas fa-random"></i>
                    </div>
                    <ul>
                        <li>How To Create Sub Domain<span>05:18</span></li>
                        <li>Playing With The DNS <span>03:18</span></li>
                        <li>Everything About The Virtual Hosts <span>05:25</span></li>
                        <li>How To Monitor Your Website <span>04:16</span></li>
                        <li>Uncharted Beating The Last Boss <span>07:48</span></li>
                        <li>Ys Oath In Felghana Overview <span>03:12</span></li>
                        <li>Ys Series All Games Ending <span>08:10</span></li>
                    </ul>
                </div>
                    <div class="preview">
                        <img src="{{asset('frontend/assets/img/qualcom.jpg')}}" alt="">
                        <div class="info">
                            Everything About The Virtual Hosts
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- send video  -->
    <!-- start Awesome Stats -->
    <section class="stats" id="stats">
        <h3>Our Awesome Stats</h3>

        <div class="container">
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number" data-num="150">0</span>
                <span class="text">Clients</span>
            </div>
            <div class="box">
                <i class="fas fa-code fa-2x fa-fw"></i>
                <span class="number" data-num="200">0</span>
                <span class="text">Projects</span>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia fa-2x fa-fw"></i>
                <span class="number" data-num="400">0</span>
                <span class="text">Countries</span>
            </div>
            <div class="box">
                <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
                <span class="number" data-num="500">0</span>
                <span class="text">Money</span>
            </div>
        </div>
    </section>
    <!-- end Awesome Stats -->
    <!-- start Discount -->
    <section class="discount" id="discount">

            <div class="have-discount">
                <div class="content">
                    <h2>We Have A Discount</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel similique laborum dicta aperiam odit doloribus corporis.</p>
                    <img src="{{asset('frontend/assets/images/discount.png')}}" alt="">
                </div>
            </div>

            <div class="request-discount">
                <div class="content">
                    <h2>Request A Discount</h2>
                    <form method="post"  enctype="multipart/form-data" id="laravel-ajax-file-upload">
                        @csrf
                        @method('POST')
                        <input class="input" name="name" type="text" placeholder="Your Name">
                        <input class="input" name="email" type="email" placeholder="Your Email">
                        <input class="input" name="phone" type="text" placeholder="Your Phone">
                        <textarea class="input" name="message" rows="10" placeholder="Tell Us About Your Needs"></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>

    </section>
    <!-- end Discount -->

</main>

@endsection
