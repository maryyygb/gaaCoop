@extends('layouts.lay')

@section('content')

<div class="landing-page-con">
    <!-- First -->
    <div class="page-list-con page-list1">
        <div class="page-first-items">
            <h5 class="name-of-the-company">Global Administrative Alliance Cooperative</h5>
            <h2 class="hook">Your Partner in Achieving Seamless and Efficient <span>Administrative Operations</span>.</h2>
            <h5 class="com-des">A global voice for administrative professionals. We advocate for excellence, efficiency, and innovation, building a stronger and more collaborative administrative landscape.</h5>
            <div class="action-btn-first">
                <a href="#" class="action-1">Join Now</a>
                <a href="#" class="action-2">Learn More</a>
            </div>
        </div>
        <div class="page-first-items">
            <img class="team" src="{{ asset('/images/team.png') }}" alt="Team Collaboration">
        </div>
    </div>

    <!-- GLANCE -->
    <div class="page-list-con page-list2">
        <h5 class="page-list-titles">GLANCE</h5>
        <div class="glance-section">
            <h4>Why Join GAAC?</h4>
            <p>Our mission is to support you in achieving your goals.</p>
            <div class="benefits">
                <div class="benb ben-boxes1">
                    <i class="fa-solid fa-people-group"></i>
                    <h4 class="what-ben">Responsive and Accessible</h4>
                    <p class="ben-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex et animi reiciendis iusto!</p>
                    <p class="ben-read-more"><a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a></p>
                </div>
                <div class="benb ben-boxes2">
                    <i class="fa-solid fa-globe"></i>
                    <h4 class="what-ben">Responsive and Accessible</h4>
                    <p class="ben-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex et animi reiciendis iusto!</p>
                    <p class="ben-read-more"><a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a></p>
                </div>
                <div class="benb ben-boxes3">
                    <i class="fa-solid fa-handshake"></i>
                    <h4 class="what-ben">Responsive and Accessible</h4>
                    <p class="ben-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex et animi reiciendis iusto!</p>
                    <p class="ben-read-more"><a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a></p>
                </div>
            </div>

        </div>
    </div>

    <!-- ABOUT -->
    <div class="page-list-con page-list3" id="about">
        <h5 class="page-list-titles">ABOUT</h5>

        <div class="about-sec">
            <div class="about-box">
                <img class="about-img" src="{{ asset('/images/goodteam.png') }}" alt="Good Team || About Us">
            </div>
            <div class="about-box">
                <h2 class="about-com">Our Commitment</h2>
                <p class="about-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex et animi reiciendis iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="about-com-items">
                    <div class="about-com-list">
                        <i class="fa-solid fa-circle-check"></i>
                        <p class="about-com-des"><span class="about-highlight-text">24/7 Support:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem minima fugit iusto perferendis, doloribus.</p>
                    </div>
                    <div class="about-com-list">
                        <i class="fa-solid fa-circle-check"></i>
                        <p class="about-com-des"><span class="about-highlight-text">24/7 Support:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem minima fugit iusto perferendis, doloribus.</p>
                    </div>
                    <div class="about-com-list">
                        <i class="fa-solid fa-circle-check"></i>
                        <p class="about-com-des"><span class="about-highlight-text">24/7 Support:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem minima fugit iusto perferendis, doloribus.</p>
                    </div>
                    <div class="about-com-list">
                        <i class="fa-solid fa-circle-check"></i>
                        <p class="about-com-des"><span class="about-highlight-text">24/7 Support:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem minima fugit iusto perferendis, doloribus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <div class="page-list-con page-list4" id="services">
        <h5 class="page-list-titles">SERVICES</h5>
        <div class="services-sec">
            <h2>What You'll Get</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <div class="ser-box">
                <div class="services-items serlists1">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists2">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists3">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists4">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists5">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists6">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists7">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
                <div class="services-items serlists8">
                    <div class="icon-coat">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                    <h5 class="services-title">Documentation</h5>
                    <p class="services-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reprehenderit sapient.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FEATURES -->
    <div class="page-list-con page-list9" id="features">
        <h5 class="page-list-titles features-title">FEATURES</h5>
        <div class="feature">
            <h2>Our Features</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis similique totam alias! Fuga cumque, non quam doloribus. Debitis similique totam alias! Fuga cumque, non quam doloribus.</p>
            <div class="features">
                <div class="features-items">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <div class="features-items">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <div class="features-items">
                    <i class="fa-solid fa-people-group"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM -->
    <div class="page-list-con page-list5" id="team">
        <h5 class="page-list-titles">OUR TEAM</h5>
        <div class="team-section">
            <h2>The people who make our organization Successful</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate impedit ullam iusto placeat quos nisi reprehenderit adipisci, tenetur ducimus quia.</p>
            <div class="team-box">
                <div class="team-list member1">
                    <img src="{{ asset('/images/p1.png') }}" alt="Members of the Team">
                    <p class="mem-position">Director</p>
                    <h5 class="mem-name">Hadley Kim</h5>
                    <p class="mem-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quos laboriosam debiti.</p>
                    <div class="mem-socials">
                        <a href="#" class="mem-accounts ac-fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="mem-accounts ac-ig"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="mem-accounts ac-x"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="mem-accounts ac-at"><i class="fa-solid fa-at"></i></a>
                    </div>
                </div>
                <div class="team-list member2">
                    <img src="{{ asset('/images/p2.png') }}" alt="Members of the Team">
                    <p class="mem-position">Director</p>
                    <h5 class="mem-name">Hadley Kim</h5>
                    <p class="mem-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quos laboriosam debiti.</p>
                    <div class="mem-socials">
                        <a href="#" class="mem-accounts ac-fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="mem-accounts ac-ig"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="mem-accounts ac-x"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="mem-accounts ac-at"><i class="fa-solid fa-at"></i></a>
                    </div>
                </div>
                <div class="team-list member3">
                    <img src="{{ asset('/images/p3.png') }}" alt="Members of the Team">
                    <p class="mem-position">Director</p>
                    <h5 class="mem-name">Hadley Kim</h5>
                    <p class="mem-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quos laboriosam debiti.</p>
                    <div class="mem-socials">
                        <a href="#" class="mem-accounts ac-fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="mem-accounts ac-ig"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="mem-accounts ac-x"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="mem-accounts ac-at"><i class="fa-solid fa-at"></i></a>
                    </div>
                </div>
                <div class="team-list member4">
                    <img src="{{ asset('/images/p4.png') }}" alt="Members of the Team">
                    <p class="mem-position">Director</p>
                    <h5 class="mem-name">Hadley Kim</h5>
                    <p class="mem-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quos laboriosam debiti.</p>
                    <div class="mem-socials">
                        <a href="#" class="mem-accounts ac-fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="mem-accounts ac-ig"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="mem-accounts ac-x"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="mem-accounts ac-at"><i class="fa-solid fa-at"></i></a>
                    </div>
                </div>
                <div class="team-list member5">
                    <img src="{{ asset('/images/p5.png') }}" alt="Members of the Team">
                    <p class="mem-position">Director</p>
                    <h5 class="mem-name">Hadley Kim</h5>
                    <p class="mem-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quos laboriosam debiti.</p>
                    <div class="mem-socials">
                        <a href="#" class="mem-accounts ac-fb"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="mem-accounts ac-ig"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="mem-accounts ac-x"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="mem-accounts ac-at"><i class="fa-solid fa-at"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PACKAGES -->
    <div class="page-list-con page-list6" id="packages">
        <h5 class="page-list-titles">PACKAGES</h5>
        <div class="packages-sec">
            <h3 class="sub-pack">Packages that flex with your needs.</h3>
            <p class="des-pack">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam sint incidunt earansis.</p>
            <div class="packages">

                <ul class="pack-box">
                    <li class="pack-items">
                        <div class="pack-details">
                            <p class="pack-name">Premium</p>
                            <p class="pack-price">122.89<span>/ Month</span></p>
                            <p class="pack-des-each">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, eaque.</p>
                        </div>
                        <div class="pack-separator">
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>What Ever</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>What ever</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adasdf</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adfad</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adgasd</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>asdga</p>
                        </div>
                        <button class="pack-btn" type="button">Get Started!</button>
                    </li>
                    <li class="pack-items">
                        <div class="highlighter">
                            <p>
                                <i class="fa-solid fa-bolt"></i>
                                Popular
                            </p>
                        </div>
                        <div class="pack-details">
                            <p class="pack-name">Premium</p>
                            <p class="pack-price">122.89<span>/ Month</span></p>
                            <p class="pack-des-each middle-pack">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, eaque.</p>
                        </div>
                        <div class="pack-separator">
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>What Ever</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>What ever</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adasdf</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adfad</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adgasd</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>asdga</p>
                        </div>
                        <button class="pack-btn" type="button">Get Started!</button>
                    </li>
                    <li class="pack-items">
                        <div class="pack-details">
                            <p class="pack-name">Premium</p>
                            <p class="pack-price">122.89<span>/ Month</span></p>
                            <p class="pack-des-each">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, eaque.</p>
                        </div>
                        <div class="pack-separator">
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>What Ever</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>What ever</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adasdf</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adfad</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>adgasd</p>
                            <p class="pack-perks"><span><i class="fa-solid fa-circle-check"></i></span>asdga</p>
                        </div>
                        <button class="pack-btn" type="button">Get Started!</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- FAQs -->
    <div class="page-list-con page-list7" id="faqs">
        <h5 class="page-list-titles">FAQs</h5>
        <div class="faq-section">
            <h3>Frequently Asked Questions?</h3>
            <p class="faq-des">We have shared some of the most frequently asked questions to help you out.</p>
            <div class="questions-section">
                <div class="ques-box">
                    <div class="ques-items">
                        <p class="faq-questions">Do I need to make an account to make an order?
                            <span class="qus-show">
                                <button type="button"
                                    id="plusBtn1" onclick="funcPlusBtn1()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <span class="qus-hide" id="spanHide1">
                                <button type="button"
                                    id="minusBtn1" onclick="funcMinusBtn1()">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </span>
                        </p>
                        <div class="answer-box-show" id="faq-1">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti fugiat, iure nihil voluptas aperiam voluptatum hic necessitatibus dolor quisquam beatae ut officiis eligendi? Suscipit qui mollitia ratione voluptates asperiores aspernatur.</p>
                        </div>
                    </div>
                    <div class="ques-items">
                        <p class="faq-questions">Do I need to make an account to make an order?
                            <span class="qus-show">
                                <button type="button" id="plusBtn2" onclick="funcPlusBtn2()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <span class="qus-hide" id="spanHide2">
                                <button type="button" id="minusBtn2" onclick="funcMinusBtn2()">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </span>
                        </p>
                        <div class="answer-box-show" id="faq-2">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti fugiat, iure nihil voluptas aperiam voluptatum hic necessitatibus dolor quisquam beatae ut officiis eligendi? Suscipit qui mollitia ratione voluptates asperiores aspernatur.</p>
                        </div>
                    </div>
                    <div class="ques-items">
                        <p class="faq-questions">Do I need to make an account to make an order?
                            <span class="qus-show">
                                <button type="button" id="plusBtn3" onclick="funcPlusBtn3()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <span class="qus-hide" id="spanHide3">
                                <button type="button" id="minusBtn3" onclick="funcMinusBtn3()">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </span>
                        </p>
                        <div class="answer-box-show" id="faq-3">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti fugiat, iure nihil voluptas aperiam voluptatum hic necessitatibus dolor quisquam beatae ut officiis eligendi? Suscipit qui mollitia ratione voluptates asperiores aspernatur.</p>
                        </div>
                    </div>
                </div>
                <div class="ques-box">
                    <div class="ques-items">
                        <p class="faq-questions">Do I need to make an account to make an order?
                            <span class="qus-show">
                                <button type="button" id="plusBtn4" onclick="funcPlusBtn4()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <span class="qus-hide" id="spanHide4">
                                <button type="button" id="minusBtn4" onclick="funcMinusBtn4()">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </span>
                        </p>
                        <div class="answer-box-show" id="faq-4">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti fugiat, iure nihil voluptas aperiam voluptatum hic necessitatibus dolor quisquam beatae ut officiis eligendi? Suscipit qui mollitia ratione voluptates asperiores aspernatur.</p>
                        </div>
                    </div>
                    <div class="ques-items">
                        <p class="faq-questions">Do I need to make an account to make an order?
                            <span class="qus-show">
                                <button type="button" id="plusBtn5" onclick="funcPlusBtn5()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <span class="qus-hide" id="spanHide5">
                                <button type="button" id="minusBtn5" onclick="funcMinusBtn5()">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </span>
                        </p>
                        <div class="answer-box-show" id="faq-5">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti fugiat, iure nihil voluptas aperiam voluptatum hic necessitatibus dolor quisquam beatae ut officiis eligendi? Suscipit qui mollitia ratione voluptates asperiores aspernatur.</p>
                        </div>
                    </div>
                    <div class="ques-items">
                        <p class="faq-questions">Do I need to make an account to make an order?
                            <span class="qus-show">
                                <button type="button" id="plusBtn6" onclick="funcPlusBtn6()">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <span class="qus-hide" id="spanHide6">
                                <button type="button" id="minusBtn6" onclick="funcMinusBtn6()">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </span>
                        </p>
                        <div class="answer-box-show" id="faq-6">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti fugiat, iure nihil voluptas aperiam voluptatum hic necessitatibus dolor quisquam beatae ut officiis eligendi? Suscipit qui mollitia ratione voluptates asperiores aspernatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->
    <div class="page-list-con page-list8" id="testimonial">
        <h5 class="page-list-titles testimonial-title">TESTIMONIALS</h5>

        <div class="test-section">
            <h3>Discover What People Are Saying About Us</h3>
            <p class="faq-des">Customer reviews, social media and testimonials to discover how is our products and services.</p>

            <div class="test-con">

                <div class="test-list test-list1">
                    <div class="test-items">
                        <p class="reviews"><span><i class="fa-solid fa-quote-left"></i></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga modi expedita quasi totam? <span>-- Read More</span></p>
                        <p class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.3</span>
                        </p>
                    </div>

                    <div class="test-items">
                        <div class="test-items-list">
                            <img class="img-reviewer" src="{{ asset('/images/p2.png') }}" alt="" srcset="">
                        </div>
                        <div class="test-items-list">
                            <h1 class="name-reviewer">Jane Doe</h1>
                            <p class="email">janedoe@personal.email</p>
                        </div>
                        <div class="test-items-list">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="test-list test-list2">
                    <div class="test-items">
                        <p class="reviews"><span><i class="fa-solid fa-quote-left"></i></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga modi expedita quasi totam? <span>-- Read More</span></p>
                        <p class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.3</span>
                        </p>
                    </div>

                    <div class="test-items">
                        <div class="test-items-list">
                            <img class="img-reviewer" src="{{ asset('/images/p4.png') }}" alt="" srcset="">
                        </div>
                        <div class="test-items-list">
                            <h1 class="name-reviewer">Jane Doe</h1>
                            <p class="email">janedoe@personal.email</p>
                        </div>
                        <div class="test-items-list">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 
                <div class="test-list test-list3">
                    <div class="test-items">
                        <p class="reviews"><span><i class="fa-solid fa-quote-left"></i></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga modi expedita quasi totam? <span>-- Read More</span></p>
                        <p class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.3</span>
                        </p>
                    </div>

                    <div class="test-items">
                        <div class="test-items-list">
                            <img class="img-reviewer" src="{{ asset('/images/p3.png') }}" alt="" srcset="">
                        </div>
                        <div class="test-items-list">
                            <h1 class="name-reviewer">Jane Doe</h1>
                            <p class="email">janedoe@personal.email</p>
                        </div>
                        <div class="test-items-list">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="test-list test-list4">
                    <div class="test-items">
                        <p class="reviews"><span><i class="fa-solid fa-quote-left"></i></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga modi expedita quasi totam? <span>-- Read More</span></p>
                        <p class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.3</span>
                        </p>
                    </div>

                    <div class="test-items">
                        <div class="test-items-list">
                            <img class="img-reviewer" src="{{ asset('/images/p1.png') }}" alt="" srcset="">
                        </div>
                        <div class="test-items-list">
                            <h1 class="name-reviewer">Jane Doe</h1>
                            <p class="email">janedoe@personal.email</p>
                        </div>
                        <div class="test-items-list">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="test-list test-list5">
                    <div class="test-items">
                        <p class="reviews"><span><i class="fa-solid fa-quote-left"></i></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga modi expedita quasi totam? <span>-- Read More</span></p>
                        <p class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.3</span>
                        </p>
                    </div>

                    <div class="test-items">
                        <div class="test-items-list">
                            <img class="img-reviewer" src="{{ asset('/images/p5.png') }}" alt="" srcset="">
                        </div>
                        <div class="test-items-list">
                            <h1 class="name-reviewer">Jane Doe</h1>
                            <p class="email">janedoe@personal.email</p>
                        </div>
                        <div class="test-items-list">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="test-list test-list6">
                    <div class="test-items">
                        <p class="reviews"><span><i class="fa-solid fa-quote-left"></i></span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga modi expedita quasi totam? <span>-- Read More</span></p>
                        <p class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>4.3</span>
                        </p>
                    </div>

                    <div class="test-items">
                        <div class="test-items-list">
                            <img class="img-reviewer" src="{{ asset('/images/p1.png') }}" alt="" srcset="">
                        </div>
                        <div class="test-items-list">
                            <h1 class="name-reviewer">Jane Doe</h1>
                            <p class="email">janedoe@personal.email</p>
                        </div>
                        <div class="test-items-list">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    </div>
                </div>
                 -->
            </div>
        </div>
    </div>

    <!-- CONTACT US -->
    <!-- <div class="page-list-con page-list9">
        <h5 class="page-list-titles">CONTACT US</h5>
    </div> -->

    <!-- FOOTER -->
    <div class="page-list-con page-list10">
        <div class="footer-sec">
            <h4 class="footer-header">GAAC</h4>
            <p class="company-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis error obcaecati accusantium minus quibusdam nemo optio iure velit nobis quod labore nisi, ipsa delectus recusandae eius tempora dolores odit rem!</p>
        </div>
        <div class="footer-sec">
            <h6 class="footer-header">PAGES</h6>
            <ul class="footer-items">
                <li class="footer-list">
                    <a href="#" class="footer-link">Email</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Profile</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Timeline</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Projects</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Contacts</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Portfolio</a>
                </li>
            </ul>
        </div>
        <div class="footer-sec">
            <h6 class="footer-header">INFO</h6>
            <ul class="footer-items">
                <li class="footer-list">
                    <a href="#" class="footer-link">Our Team</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Conatct Us</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">About</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Services</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Blog</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">Terms & Conditions</a>
                </li>
            </ul>
        </div>
        <div class="footer-sec">
            <h6 class="footer-header">CONTACT</h6>
            <ul class="footer-items">
                <li class="footer-list">
                    <a href="#" class="footer-link">info@gmail.com</a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link">+(555)-1900-1000</a>
                </li>
                <li class="footer-list">
                    <p class="accounts">FOLLOW US ON:</p>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link"></a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link"></a>
                </li>
                <li class="footer-list">
                    <a href="#" class="footer-link"></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="page-list-con page-list11">
        <h6 class="copyright">Copyright © 2024 GAAC. Designed by MGEB. All Rights Reserved.</h6>
    </div>

</div>

@endsection