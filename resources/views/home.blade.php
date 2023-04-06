@extends('index')

@section('content')
<x-carousel />
<div class="main-aboutus-div">
    <div class="small-container inner-aboutus-div">
        <div class="row upper-aboutus">
            <div class="upper-aboutus-heading">
                <h2>Request A Service Today</h2>
            </div>
            <div class="upper-aboutus-form">
                <form action="#" class="row">
                    <div class="col-md-3">
                        <input type="text" placeholder="Enter Name*" class="request-from-input" name="request-name" id="">
                    </div>
                    <div class="col-md-3">
                        <input type="email" placeholder="Enter Email*"  class="request-from-input" name="request-email" id="">
                    </div>
                    <div class="col-md-3">
                        <input type="number" placeholder="Enter number*"  class="request-from-input" name="request-number" id="">
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="request-from-btn">Request <i class="fas fa-square-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <div class="container aboutus-para-div">
                    <p class="client-benefits"><span class="fab fa-magento"></span> Our BPO Services</p>
                    <h2>We Have The Best Experts To Elevate Your Business.</h2>
                    <p class="aboutus-para mt-3">We are a leading client call service provider, acknowledged as the preferred partner by both clients and worldwide associates for its integrity, reliability and discretion.</p>
                    <div class="bullets-aboutus">
                        <div class="inner-bullets-aboutus">
                            <div class="bullets">
                                <div class="bullet-icon-div">
                                    <div class="bullet-icon-inner">
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="bullet-detail">
                                    <h5>Call Center Outsourcing</h5>
                                    <p>Call center outsourcing services combine cost reduction and process improvement with excellent customer service, quality assurance and highly trained employees.</p>
                                </div>
                            </div>
                            <div class="bullets">
                                <div class="bullet-icon-div">
                                    <div class="bullet-icon-inner">
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="bullet-detail">
                                    <h5>Truck Dispatching</h5>
                                    <p>Equipped with all the latest tools to make successful marketing calls service.</p>
                                </div>
                            </div>
                            <div class="bullets">
                                <div class="bullet-icon-div">
                                    <div class="bullet-icon-inner">
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="bullet-detail">
                                    <h5>IT Services</h5>
                                    <p>Every single call routed in our Inbound Call center is handled by a highly trained.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="aboutus-img-div">
                        <img src="{{asset('/images/team-images.png')}}" alt="aboutus pic">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid quality-section">
    <div class="container">
       <div class="quality-div">
            <div class="qualtiy-heading">
                <p class="client-benefits"><span class="fab fa-magento"></span> QUALITY & EFFICIENCE</p>
                <h2>Uninterrupted 24/7 BPO Service</h2>
                <p class="px-5">Both private and public organizations are wrestling with unprecedented challenges: economic uncertainty, market complexity, hyper-competition, changing consumer expectations and regulatory pressures. They are looking to next-generation business process outsourcing (BPO) for solutions.</p>
            </div>
            <div class="quality-lists p-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem">
                            <div class="card-body text-start">
                               <div class="upper-head">
                                    <div class="card-symbol">
                                        <i class="fas fa-headset fa-2x"></i>
                                    </div>
                                    <div class="upper-head-heading">
                                        <span class="card-subtitle text-muted">Explore Services</span>
                                        <h5 class="card-title">Inbound Call Center</h5>
                                    </div>
                               </div>
                                <p class="card-text">Every single call routed in our Inbound Call center is handled by a highly trained.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link quality-card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem">
                            <div class="card-body text-start">
                               <div class="upper-head">
                                    <div class="card-symbol">
                                        <i class="fa-brands fa-intercom fa-2x"></i>
                                    </div>
                                    <div class="upper-head-heading">
                                        <span class="card-subtitle text-muted">Explore Services</span>
                                        <h5 class="card-title">Dynamic Call Support</h5>
                                    </div>
                               </div>
                                <p class="card-text">The Dynamic call support to performance and productivity through reports & Dashbord.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link quality-card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem">
                            <div class="card-body text-start">
                               <div class="upper-head">
                                    <div class="card-symbol">
                                        <i class="fas fa-phone-volume fa-2x"></i>
                                    </div>
                                    <div class="upper-head-heading">
                                        <span class="card-subtitle text-muted">Explore Services</span>
                                        <h5 class="card-title">Outbound Call Center</h5>
                                    </div>
                               </div>
                                <p class="card-text">Equipped with all the latest tools to make successful marketing calls service.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link quality-card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<div class="container-fluid videography-section">
    <div class="small-container">
        <div class="videography-div">
            <div class="videography-info">
                <h6>ABOUT CALL CENTER</h6>
                <h1 class="pb-5">World-Class Contact Center</h1>
                <a class="video-play-button">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 104 104" enable-background="new 0 0 104 104" xml:space="preserve">
                    <path fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" d="M26,35h52L52,81L26,35z"/>
                    <circle class="video-play-circle" fill="none" stroke="#DA3D25" stroke-width="4" stroke-miterlimit="10" cx="52" cy="52" r="50"/>
                    </svg>
                    <span class="video-play-outline"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="small-container">
        <div class="aboutus-div p-5">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="images-aboutus-div d-flex" style="height: 550px;">
                        <div class="big-image-aboutus-div">
                            <img src="{{asset('images/about-us-1.jpg')}}" height="100%" width="auto" alt="" srcset="">
                        </div>
                        <div class="small-image-aboutus-div ms-2">
                            <div class="image-text-div">
                                <h2>We Are Trusted By More Than 4500 Clients</h2>
                            </div>
                            <div class="small-image-div" style="height: 50%;">
                                <img src="{{asset('images/about-us-2.jpg')}}" width="auto" height="100%" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="info-aboutus-div px-5" style="height: 550px;">
                        <p class="client-benefits"><span class="fab fa-magento"></span> About Us</p>
                        <h2 class="pb-3">The High Standard Trusted & Professional Services</h2>
                        <div class="aboutus-nav">
                            <ul class="aboutus-navbar-list">
                                <li class="aboutus-navbar-item active" data-name="mission">Our Mission</li>
                                <li class="aboutus-navbar-item" data-name="vision">Our Vision</li>
                                <li class="aboutus-navbar-item" data-name="strategies">Strategies</li>
                            </ul>
                        </div>
                        <div class="aboutus-nav-details">
                            <div class="mission aboutus-nav-data active">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium illo tempora cumque error dolorum dicta, expedita praesentium amet tenetur blanditiis.
                            </div>
                            <div class="vision aboutus-nav-data">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro facere similique quod praesentium at eius debitis. Perspiciatis maxime dolores numquam saepe asperiores esse nihil ab, beatae suscipit. Libero, eum veritatis?
                            </div>
                            <div class="strategies aboutus-nav-data">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis asperiores, recusandae enim tempora quam minus voluptatibus modi. Adipisci ducimus sunt totam numquam fugit eos, nihil, quaerat voluptatem molestias itaque suscipit minus pariatur dolores natus libero dolore quisquam. Libero, sapiente reiciendis?
                            </div>
                        </div>
                        <a href="#" class="aboutus-action-btn">Get Services <i class="fas fa-square-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid counter-section">
    <div class="container">
        <div id="counter">
            <div class="item">
                <h1 class="count" data-number="05"></h1>
                <h3 class="text">Reward</h3>
            </div>
            <div class="item">
                <h1 class="count" data-number="10"></h1>
                <h3 class="text">year+ Eexperience</h3>
            </div>
            <div class="item">
                <h1 class="count" data-number="20"></h1>
                <h3 class="text">project completed</h3>
            </div>
            <div class="item">
                <h1 class="count" data-number="50"></h1>
                <h3 class="text">happy clients</h3>
            </div>
        </div>
    </div>
</div>
@endsection