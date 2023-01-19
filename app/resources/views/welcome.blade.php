<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>
<body>

<div class="container-fluid">
    <x-menu.header-menu></x-menu.header-menu>
</div>

<div class="st-content">
    <!-- Start Hero Slider -->
    <div class="st-hero-slider1 owl-carousel st-owl-controler2" id="home">
        <div class="st-hero-slide st-style1 st-flex">
            <div class="container">
                <div class="st-hero-text st-style1">
                    <h1 class="st-hero-title">We provide outstanding <br/>Creative Work!</h1>
                    <div class="st-hero-subtitle">
                        The process of business model construction and modification<br/>
                        is also called business model innovation.
                    </div>
                    <div class="st-btn-group st-style1">
                        <a href="#" class="st-btn st-style1 st-color1">Learn More</a>
                        <a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1"
                           class="st-btn st-style2 st-video-open"><i class="flaticon-multimedia"></i> Watch Video</a>
                    </div>
                </div>
            </div>
            <div class="st-hero-img">
                img here
            </div>
        </div>
        <div class="st-hero-slide st-style1 st-flex">
            <div class="container">
                <div class="st-hero-text st-style1">
                    <h1 class="st-hero-title">We are Very Professional <br/> To Our Work</h1>
                    <div class="st-hero-subtitle">
                        The process of business model construction and modification<br/>
                        is also called business model innovation.
                    </div>
                    <div class="st-btn-group st-style1">
                        <a href="#" class="st-btn st-style1 st-color1">Learn More</a>
                        <a href="https://www.youtube.com/embed/jRcfE2xxSAw?autoplay=1"
                           class="st-btn st-style2 st-video-open"><i class="flaticon-multimedia"></i> Watch Video</a>
                    </div>
                </div>
            </div>
            <div class="st-hero-img">
                img here
            </div>
        </div>
    </div>
    <!-- End Hero Slider -->
    <!-- Start Icon Box -->
    <section class="st-section-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s"
                         data-wow-delay="0.2s">
                        <div class="st-iconbox-icon">
                            <i class="flaticon-focus"></i>
                        </div>
                        <h3 class="st-iconbox-title">Business Growth</h3>
                        <div class="st-iconbox-text">
                            Market penetration is the key for a business growth. Business
                            development processes to develop and implement.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s"
                         data-wow-delay="0.3s">
                        <div class="st-iconbox-icon">
                            <i class="flaticon-career"></i>
                        </div>
                        <h3 class="st-iconbox-title">Business Focus</h3>
                        <div class="st-iconbox-text">
                            Business focuses on strategic planning for international
                            operations. Business focus ensuring business needs.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s"
                         data-wow-delay="0.4s">
                        <div class="st-iconbox-icon">
                            <i class="flaticon-career-1"></i>
                        </div>
                        <h3 class="st-iconbox-title">Business Goal</h3>
                        <div class="st-iconbox-text">
                            Business needs are understood and communicated so that problem
                            solutions meet the business goals.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Icon Box -->

    <!-- Start About Section -->
    <div class="st-about-wrap st-section-top" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-about-img wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                img here
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="st-section-heading st-style1">
                        <h3>About Us</h3>
                        <h2>We are awesome team work for your business dream</h2>
                    </div>
                    <div class="st-about-text">
                        <p>Business is the activity of making one's living or making money. One business makes a
                            commercial transaction with another. A business entity is an entity that is formed and
                            administered as per corporate.</p>
                        <ul class="tr-list">
                            <li>One's business To attend to one's duties.</li>
                            <li>Business may refer to many differing activities.</li>
                            <li>Business representation made by and for business people.</li>
                            <li>Business information about a company or individual.</li>
                        </ul>
                        <a href="#" class="st-btn st-style1 st-size1 st-color2">Get More Info!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Start Service Section -->
    <section class="st-service-section st-section-top" id="service">
        <div class="container">
            <div class="st-section-heading st-style2 text-center">
                <h2>Business Services</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                    img here
                    <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                </div>
                <p>Business services are activities that combine or consolidate certain <br>enterprise-wide needed
                    support services</p>
            </div>
        </div>
        <div class="st-owl-controler3-hover">
            <div class="container">
                <div class="st-service-carousel owl-carousel st-style2 st-owl-controler3">
                    <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s"
                         data-wow-delay="0.2s">
                        <a href="#" class="st-image">
                            img here
                        </a>
                        <div class="st-image-box-info">
                            <h3 class="st-image-box-title"><a href="#">Business Meeting</a></h3>
                            <div class="st-image-box-text">A meeting is when two or more people come together to discuss
                                one or more topics often in a formal or business
                            </div>
                        </div>
                    </div>
                    <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s"
                         data-wow-delay="0.25s">
                        <a href="#" class="st-image">
                            img here
                        </a>
                        <div class="st-image-box-info">
                            <h3 class="st-image-box-title"><a href="#">Business Analysis</a></h3>
                            <div class="st-image-box-text">Business analysis is a research discipline of identifying
                                business needs and determining solutions to business.
                            </div>
                        </div>
                    </div>
                    <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s"
                         data-wow-delay="0.3s">
                        <a href="#" class="st-image">
                            img here
                        </a>
                        <div class="st-image-box-info">
                            <h3 class="st-image-box-title"><a href="#">Business Grow</a></h3>
                            <div class="st-image-box-text">Market penetration is the key for a business growth. Business
                                development processes to develop and implement growth.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-service-background-shap">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="858px"
                 height="924px">
                <path fill-rule="evenodd" fill="rgb(249, 251, 255)"
                      d="M664.747,103.039 C653.462,87.314 639.932,72.487 623.957,58.931 C548.874,-4.793 440.575,-17.454 354.139,28.436 C295.555,59.540 256.035,109.725 237.462,166.269 C210.450,248.522 169.585,324.882 114.434,391.411 C-3.108,533.202 -36.669,703.629 44.624,816.957 C149.756,963.519 407.069,959.014 619.349,806.896 C831.627,654.780 918.489,412.653 813.356,266.091 C804.112,253.203 793.682,241.497 782.210,230.960 C739.413,191.657 698.632,150.252 664.747,103.039 Z"/>
            </svg>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Start Fun Fact Section -->
    <div class="st-funfact-wrap st-section-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="st-funfact-icon"><i class="flaticon-rate"></i></div>
                        <h2 class="st-funfact-number st-counter">999</h2>
                        <h3 class="st-funfact-title">Satisfied customers</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.25s">
                        <div class="st-funfact-icon"><i class="flaticon-code"></i></div>
                        <h2 class="st-funfact-number st-counter">185</h2>
                        <h3 class="st-funfact-title">Built websites</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="st-funfact-icon"><i class="flaticon-laptop"></i></div>
                        <h2 class="st-funfact-number st-counter">100</h2>
                        <h3 class="st-funfact-title">Experts Worker</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.35s">
                        <div class="st-funfact-icon"><i class="flaticon-win"></i></div>
                        <h2 class="st-funfact-number st-counter">200</h2>
                        <h3 class="st-funfact-title">Experience Years</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Section -->

    <!-- Start Project Section -->
    <div class="st-project-wrap st-section-top" id="portfolio">
        <div class="container">
            <div class="st-section-heading st-style2 text-center">
                <h2>Our Latest Project</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                    img here
                    <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                </div>
                <p>This is a great place to tell people more about your services and peak <br>their interest. Last year
                    our latest work album</p>
            </div>
        </div>
        <div class="st-project st-project-carousel owl-carousel st-style1 st-owl-controler1">
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s"
               data-src="{{asset('/imag')}}es/project1.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s"
               data-src="{{asset('/imag')}}es/project2.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s"
               data-src="{{asset('/imag')}}es/project3.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s"
               data-src="{{asset('/imag')}}es/project4.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s"
               data-src="{{asset('/imag')}}es/project1.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s"
               data-src="{{asset('/imag')}}es/project2.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s"
               data-src="{{asset('/imag')}}es/project3.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s"
               data-src="{{asset('/imag')}}es/project4.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s"
               data-src="{{asset('/imag')}}es/project1.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s"
               data-src="{{asset('/imag')}}es/project2.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s"
               data-src="{{asset('/imag')}}es/project3.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s"
               data-src="{{asset('/imag')}}es/project4.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s"
               data-src="{{asset('/imag')}}es/project1.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s"
               data-src="{{asset('/imag')}}es/project2.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s"
               data-src="{{asset('/imag')}}es/project3.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
            <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s"
               data-src="{{asset('/imag')}}es/project4.jpg">
                <div class="st-project-meta">
                    <h3>Project Title One</h3>
                    <span>Branding</span>
                </div>
            </a>
        </div>
    </div>
    <!-- End Project Section -->

    <!-- Start Skill Section -->
    <section class="st-skill-wrap st-section-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in wow fadeInLeft" data-wow-duration="0.8s"
                             data-wow-delay="0.2s">
                            <div class="st-skill-img text-center">
                                img here
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="st-section-heading st-style2 st-type2">
                        <h2>Skills & Expertise</h2>
                        <p>A skill is the ability to carry out a task with determined results often within a given
                            amount of time. Skill usually requires certain environ stimuli and situations to assess more
                            then enough.</p>
                    </div>
                    <div class="st-progressbar-wrap">
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-meta">
                                <h3 class="st-progressbar-title">Web Development</h3>
                                <div class="st-progressbar-percentage">90%</div>
                            </div>
                            <div class="st-progressbar" data-progress-percentage="90">
                                <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s"
                                     data-wow-delay="0.5s"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-meta">
                                <h3 class="st-progressbar-title">Web Design</h3>
                                <div class="st-progressbar-percentage">95%</div>
                            </div>
                            <div class="st-progressbar" data-progress-percentage="95">
                                <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s"
                                     data-wow-delay="0.5s"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-meta">
                                <h3 class="st-progressbar-title">HTML / CSS</h3>
                                <div class="st-progressbar-percentage">85%</div>
                            </div>
                            <div class="st-progressbar" data-progress-percentage="85">
                                <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s"
                                     data-wow-delay="0.5s"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-meta">
                                <h3 class="st-progressbar-title">WordPress</h3>
                                <div class="st-progressbar-percentage">80%</div>
                            </div>
                            <div class="st-progressbar" data-progress-percentage="80">
                                <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s"
                                     data-wow-delay="0.5s"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                        <div class="st-single-progressbar">
                            <div class="st-progressbar-meta">
                                <h3 class="st-progressbar-title">Photoshop</h3>
                                <div class="st-progressbar-percentage">95%</div>
                            </div>
                            <div class="st-progressbar" data-progress-percentage="95">
                                <div class="st-progressbar-in wow fadeInLeft" data-wow-duration="1.5s"
                                     data-wow-delay="0.5s"></div>
                            </div>
                        </div><!-- .st-single-progressbar -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Section -->

    <!-- Start Team Section -->
    <section class="st-team-wrap st-section" id="team">
        <div class="container">
            <div class="st-section-heading st-style2 text-center">
                <h2>Creative Team</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                    img here
                    <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                </div>
                <p>Team members need to learn how to help one another. A team becomes more <br>than just a collection of
                    people when a strong sense.</p>
            </div>
        </div>
        <div class="st-owl-controler3-hover">
            <div class="container">
                <div class="st-member-carousel owl-carousel st-style2 st-owl-controler3">
                    <div class="st-team-member text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="st-member-img">
                            img here
                        </div>
                        <div class="st-member-info">
                            <h3 class="st-member-name">Rodney Artichoke</h3>
                            <div class="st-member-designation">UI/UX Designer</div>
                            <ul class="st-member-social-btn st-flex st-mp0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="st-team-member text-center wow fadeInUp" data-wow-duration="0.8s"
                         data-wow-delay="0.25s">
                        <div class="st-member-img">
                            img here
                        </div>
                        <div class="st-member-info">
                            <h3 class="st-member-name">Aston Dark</h3>
                            <div class="st-member-designation">Web Developer</div>
                            <ul class="st-member-social-btn st-flex st-mp0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="st-team-member text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="st-member-img">
                            img here
                        </div>
                        <div class="st-member-info">
                            <h3 class="st-member-name">Keir Preston</h3>
                            <div class="st-member-designation">Business Advisor</div>
                            <ul class="st-member-social-btn st-flex st-mp0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="st-team-member text-center wow fadeInUp" data-wow-duration="0.8s"
                         data-wow-delay="0.35s">
                        <div class="st-member-img">
                            img here
                        </div>
                        <div class="st-member-info">
                            <h3 class="st-member-name">Criss Donald</h3>
                            <div class="st-member-designation">Business Analysis</div>
                            <ul class="st-member-social-btn st-flex st-mp0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Start CTA Section -->
    <section class="st-cta-wrap st-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-1">
                    <div class="st-cta text-center st-section">
                        <h2 class="st-cta-title">Build your Perfect Template Now!</h2>
                        <div class="st-cta-text">If you want to create a new website for your business, do not hesitate
                            to contact us today. We have created you to provide all type.
                        </div>
                        <div class="st-cta-btn">
                            <a href="#" class="st-btn st-style1 st-size1 st-color1">Get Limty Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in st-flex">
                            <div class="st-cta-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                img here
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->

    <!-- Start Pricing Plan -->
    <section class="st-pricing-wrap st-section" id="price">
        <div class="container">
            <div class="st-section-heading st-style2 text-center">
                <h2>Pricing Plan</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                    img here
                    <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                </div>
                <p>Pricing strategy in which the selling price is determined by adding a specific <br>amount markup to a
                    product's unit cost.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="st-price-card text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="st-price-card-img">
                            img here
                        </div>
                        <h3 class="st-price-card-title">Economy</h3>
                        <div class="st-price">
                            <h3>$19</h3>
                            <span>per month</span>
                        </div>
                        <ul class="st-price-card-feature st-mp0">
                            <li>Free Suppport 24/7</li>
                            <li>Databases Download</li>
                            <li>Maintenance Email</li>
                            <li>Unlimited Traffic</li>
                        </ul>
                        <div class="st-price-card-btn">
                            <a href="#" class="st-btn st-style1 st-size1 st-color1">Start The Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-price-card text-center st-featured-price wow fadeInUp" data-wow-duration="0.8s"
                         data-wow-delay="0.3s">
                        <div class="st-price-card-img">
                            img here
                        </div>
                        <h3 class="st-price-card-title">Deluxe</h3>
                        <div class="st-price">
                            <h3>$29</h3>
                            <span>per month</span>
                        </div>
                        <ul class="st-price-card-feature st-mp0">
                            <li>Free Suppport 24/7</li>
                            <li>Databases Download</li>
                            <li>Maintenance Email</li>
                            <li>Unlimited Traffic</li>
                        </ul>
                        <div class="st-price-card-btn">
                            <a href="#" class="st-btn st-style1 st-size1 st-color2">Start The Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-price-card text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <div class="st-price-card-img">
                            img here
                        </div>
                        <h3 class="st-price-card-title">Ultimate</h3>
                        <div class="st-price">
                            <h3>$49</h3>
                            <span>per month</span>
                        </div>
                        <ul class="st-price-card-feature st-mp0">
                            <li>Free Suppport 24/7</li>
                            <li>Databases Download</li>
                            <li>Maintenance Email</li>
                            <li>Unlimited Traffic</li>
                        </ul>
                        <div class="st-price-card-btn">
                            <a href="#" class="st-btn st-style1 st-size1 st-color1">Start The Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Plan -->

    <!-- Start Blog Section -->
    <section class="st-blog-wrap st-section st-gray-bg" id="blog">
        <div class="container">
            <div class="st-section-heading st-style2 text-center">
                <h2>Latest News</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                    img here
                    <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                </div>
                <p>News websites and blogs are common sources for web feeds, but feeds are <br>also used to deliver
                    structured</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="st-blog st-style1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="st-zoom">
                            <a href="#" class="st-blog-thumb st-bg st-zoom-in"
                               data-src="{{asset('/images/blog1.p')}}ng"></a>
                        </div>
                        <div class="st-blog-info">
                            <div class="st-blog-label">By <a href="#">Limty</a></div>
                            <h2 class="st-blog-title"><a href="#">A business plan is a formal written document business
                                    goals</a></h2>
                            <div class="st-blog-text">A business plan is a formal written document containing business
                                goals. The methods on how these goals can be [....]
                            </div>
                            <div class="st-blog-meta">
                                <div class="st-blog-meta-left"><span class="st-posted-by">12 March, 2019</span></div>
                                <div class="st-blog-meta-right"><a href="#" class="st-blog-btn">Read More <i
                                            class="fas fa-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-blog st-style1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="st-zoom">
                            <a href="#" class="st-blog-thumb st-bg st-zoom-in"
                               data-src="{{asset('/images/blog2.p')}}ng"></a>
                        </div>
                        <div class="st-blog-info">
                            <div class="st-blog-label">By <a href="#">Limty</a></div>
                            <h2 class="st-blog-title"><a href="#">A business is the activity of making one's living</a>
                            </h2>
                            <div class="st-blog-text">Business may offer to many differing activitie, such as the
                                activity of buying or selling in trade. Business activity [....]
                            </div>
                            <div class="st-blog-meta">
                                <div class="st-blog-meta-left"><span class="st-posted-by">08 March, 2019</span></div>
                                <div class="st-blog-meta-right"><a href="#" class="st-blog-btn">Read More <i
                                            class="fas fa-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st-blog st-style1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="st-zoom">
                            <a href="#" class="st-blog-thumb st-bg st-zoom-in"
                               data-src="{{asset('/images/blo')}}g3.png"></a>
                        </div>
                        <div class="st-blog-info">
                            <div class="st-blog-label">By <a href="#">Limty</a></div>
                            <h2 class="st-blog-title"><a href="#">Business statistics is the science of good decision
                                    making</a></h2>
                            <div class="st-blog-text">Business statistics is the science of good decision making in the
                                face of ambiguity and is used in many system [....]
                            </div>
                            <div class="st-blog-meta">
                                <div class="st-blog-meta-left"><span class="st-posted-by">02 March, 2019</span></div>
                                <div class="st-blog-meta-right"><a href="#" class="st-blog-btn">Read More <i
                                            class="fas fa-chevron-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Client Section -->
    <div class="st-client-wrap st-section">
        <div class="container">
            <div class="st-client-carousel owl-carousel">
                <div class="st-client-logo st-flex wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    img here
                </div>
                <div class="st-client-logo st-flex wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">
                    img here
                </div>
                <div class="st-client-logo st-flex wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    img here
                </div>
                <div class="st-client-logo st-flex wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s">
                    img here
                </div>
                <div class="st-client-logo st-flex wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    img here
                </div>
            </div>
        </div>
    </div>
    <!-- End Client Section -->

    <!-- Start Testimonial Section -->
    <section class="st-testimonial-wrap st-section st-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-testimonial-right-img st-flex wow fadeInLeft" data-wow-duration="0.8s"
                         data-wow-delay="0.2s">
                        img here
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-section-heading st-style1">
                                <h3>Testimonials</h3>
                                <h2>What client says about us?</h2>
                            </div>
                            <div class="st-testimonial-slider owl-carousel st-owl-controler4">
                                <div class="st-single-testimonial">
                                    <div class="st-testimonial-quote st-flex"><i class="fas fa-quote-right"></i></div>
                                    <div class="st-testimonial-text">“I am very happy to create a website from you.
                                        Whatever I wanted for my website, I got everything from you very quickly. When I
                                        made a website in the future, I will build from you. ”
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h3>David T. Eiler</h3>
                                        <p>Systems Software Engineer</p>
                                    </div>
                                </div>
                                <div class="st-single-testimonial">
                                    <div class="st-testimonial-quote st-flex"><i class="fas fa-quote-right"></i></div>
                                    <div class="st-testimonial-text">“Imagine a combination of AJAX and OWL. Our feature
                                        set is unparalleled, but our out-of-the-box ultra-co-branded interfaces and
                                        simple use is constantly considered an amazing achievement. ”
                                    </div>
                                    <div class="st-testimonial-meta">
                                        <h3>Jhon Doe T. Eiler</h3>
                                        <p>Markeging Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start News Letter Section -->
    <section class="st-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-newsletter-wrap">
                        <div class="st-left-newsletter">
                            <div class="st-section-heading st-style1 st-type1">
                                <h3>Just a moment</h3>
                                <h2>Subscribe to our newsletter</h2>
                            </div>
                            <div class="st-newsletter">
                                <div class="st-newsletter-text">Subscribe to our Newsletter. We'll send email
                                    notifications everytime we release new Template.
                                </div>
                                <form class="mailchimp st-subscribe-form"
                                      action="https://storerepublic.us12.list-manage.com/subscribe/post?u=d227d8d335060b093084903d0&amp;id=9ba078ceb0">
                                    <input type="email" name="subscribe" id="subscriber-email"
                                           placeholder="Enter your Email">
                                    <button type="submit" id="subscribe-button" class="st-newsletter-btn"><i
                                            class="flaticon-plane"></i></button>
                                    <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                    <h5 class="subscription-success"> .</h5>
                                    <h5 class="subscription-error"> .</h5>
                                    <label class="subscription-label" for="subscriber-email"></label>
                                </form>
                            </div>
                        </div>
                        <div class="st-right-newsletter">
                            <div class="st-newsletter-img wow fadeInRight" data-wow-duration="0.8s"
                                 data-wow-delay="0.2s">
                                img here
                                <div class="st-bard-animation">
                                    <div class="st-bard-animation1">
                                        img here
                                    </div>
                                    <div class="st-bard-animation2">
                                        img here
                                    </div>
                                    <div class="st-bard-animation3">
                                        img here
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Letter Section -->

    <!-- Start Contact Section -->
    <section class="st-contact-wrap st-gray-bg st-section" id="contact">
        <div class="container">
            <div class="st-section-heading st-style2 text-center">
                <h2>Contact Us</h2>
                <div class="st-seperator">
                    <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                    img here
                    <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay="0.2s"></div>
                </div>
                <p>News websites and blogs are common sources for web feeds, but feeds are also <br>used to deliver
                    structured</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="cf-msg"></div>
                    <form action="assets/php/mail.php" method="post" class="st-contact-form" id="cf">
                        <input type="text" placeholder="Full Name" id="name" name="name">
                        <input type="text" placeholder="Email Address" id="email" name="email">
                        <input type="text" placeholder="Subject" id="subject" name="subject">
                        <textarea cols="30" rows="10" placeholder="Your Message" id="msg" name="msg"></textarea>
                        <button class="st-btn st-style1 st-size1 st-color1" type="submit" id="submit" name="submit">Send
                            Message
                        </button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="st-contact-info st-style1">
                        <div class="st-contact-info-in">
                            <h3 class="st-contact-info-title">Contact Info</h3>
                            <div class="st-contact-info-text">Contact is the most important part of businessess. If you
                                need any information about our business, contact the information provided below
                            </div>
                            <h3 class="st-contact-info-title">Corporate Office</h3>
                            <ul>
                                <li><i class="fas fa-map-signs"></i>111 Camino Del Rio Suite 300 San Diego</li>
                                <li><i class="fas fa-phone"></i>+00 222- 333 -7889</li>
                                <li><i class="fas fa-envelope"></i><a href="#">support@limty.com</a></li>
                                <li><i class="fas fa-globe"></i><a href="#">www.limty.com</a></li>
                            </ul>
                        </div>
                        <div class="st-svg-animation1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="590px" height="436px">
                                <defs>
                                    <filter filterUnits="userSpaceOnUse" id="Filter_0" x="0px" y="0px" width="590px"
                                            height="436px">
                                        <feOffset in="SourceAlpha" dx="0" dy="5"/>
                                        <feGaussianBlur result="blurOut" stdDeviation="3.162"/>
                                        <feFlood flood-color="rgb(106, 106, 106)" result="floodOut"/>
                                        <feComposite operator="atop" in="floodOut" in2="blurOut"/>
                                        <feComponentTransfer>
                                            <feFuncA type="linear" slope="0.15"/>
                                        </feComponentTransfer>
                                        <feMerge>
                                            <feMergeNode/>
                                            <feMergeNode in="SourceGraphic"/>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <g filter="url(#Filter_0)">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                          d="M359.506,400.811 C311.350,416.741 266.303,427.200 215.885,416.924 C166.065,406.770 119.155,382.030 83.358,345.883 C32.880,294.910 5.320,222.074 9.403,150.433 C11.889,106.817 27.202,61.676 61.083,34.027 C101.026,1.428 158.043,-0.486 208.701,8.960 C259.358,18.407 308.226,37.556 359.592,41.763 C414.001,46.218 473.787,34.861 519.488,64.652 C532.722,73.279 543.780,84.912 553.231,97.563 C563.583,111.419 572.219,126.797 576.587,143.532 C584.814,175.056 577.226,208.904 563.417,238.444 C538.267,292.240 493.162,335.144 441.630,364.721 C415.638,379.639 387.934,391.407 359.506,400.811 Z"/>
                                </g>
                            </svg>
                        </div><!-- .st-svg-animation1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Map Section -->
    <div class="st-map-wrap">
        <div class="st-map-bar st-flex">
            <div class="st-map-bar-img">
                img here
                <div class="st-map-bar-icon"><i class="fas fa-map-marker-alt"></i></div>
            </div>
        </div>
        <div class="st-map-wrpa">
            <div class="st-google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End Map Section -->
</div>

<!-- Start Footer Seciton -->
<footer class="st-site-footer st-style1 st-sticky-footer">
    <div class="st-main-footer text-center">
        <div class="container">
            <div class="st-footer-logo">
                img here
            </div>
            <div class="st-footer-text">We understand that it is better to morph virally than to embrace
                intuitively.<br>
                We will matrix the power of schemas to redefine.
            </div>
            <div class="st-footer-social">
                <ul class="st-footer-social-btn st-flex st-mp0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="st-copyright text-center">
        <div class="st-copyright-text">© limty, 2019. Developed by <a href="#">Laralink</a></div>
    </div>
</footer>
<!-- End Footer Seciton -->
<!-- Start Video Popup -->
<div class="st-video-popup">
    <div class="st-video-popup-overlay"></div>
    <div class="st-video-popup-content">
        <div class="st-video-popup-layer"></div>
        <div class="st-video-popup-container">
            <div class="st-video-popup-align">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="about:blank"></iframe>
                </div>
            </div>
            <div class="st-video-popup-close"></div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
