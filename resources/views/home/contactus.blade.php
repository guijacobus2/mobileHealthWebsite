@extends('layouts.app')
@section('content')

    @if (Auth::check())
        </div>
    @else
        <div class="container">
        @endif

        <!-- Page starts here -->

            <div class="row col-md-12 section-heading">
                <h2>Contact Us</h2>
                <hr>
            </div>
            <div class="contact-text">
                <p>Please drop us a message using the contact form to request more information. <br>
                    Or if you wish to talk to someone please call us directly.</p>

            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col">

                        <h5>Mobile Health</h5>

                        <p>18 Glenda Drive, Frankton, Queenstown, 9300, Central Otago</p>
                        <p>PO Box 2036, Queenstown</p>

                        <p>
                            <a href="#"><i class="fa fa-phone-square"></i> 03 111 2222</a>
                        </p>
                        <p>
                            <a href="#"><i class="fa fa-phone-square"></i> 0274 423 624</a>
                        </p>
                        <p>
                            <a href="mailto:firstaid@mobilehealth.co.nz"><i class="fa fa-envelope"></i>
                                firstaid@mobilehealth.co.nz</a>
                        </p>
                        <p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/"
                                   target="_blank">
                                    <i class="fa fa-facebook"></i></a>
                                </a>
                                <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank">
                                    <i class="fa fa-linkedin"></i></a>
                                </a>
                            </div>
                        </p>

                        <p>Mobile Health is part of <strong>Queenstown and Central Otago Health and Safety
                                Services</strong> and <strong>Engage Safety.</strong></p>

                        <p>
                            <a href="https://engagesafety.co.nz/" target="_blank">
                                <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                                     class="footer-media">&nbsp
                                www.engagesafety.co.nz
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col">
                        <h5>Send us a message</h5>
                        <form class="contact__form" method="post" action="http://webdevbasics.net/scripts/demo.php">

                            <input name="name" type="text" class="form-control" id="name"
                                   placeholder="Your name..." required="">

                            <input name="email" type="text" class="form-control" id="email"
                                   placeholder="Your email..." required="">

                            <input name="subject" type="text" class="form-control" id="subject"
                                   placeholder="Subject..." required="">

                            <textarea name="message" rows="4" class="form-control" id="message"
                                      placeholder="Your message..." required=""></textarea>

                            {{-- <button type="submit" id="form-submit" class="button">Send Message
                                                          </button>--}}
                            <div class="btn-other">
                                <a href="/book">Send</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <div class="row col-md-12 section-heading">
            <h4>Location</h4>
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.762020721694!2d168.74658921583796!3d-45.00945437909809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9d51e577f73d201%3A0xa02bb19b521b5b0f!2s18%20Glenda%20Drive%2C%20Frankton%2C%20Queenstown%209300!5e0!3m2!1sen!2snz!4v1632125351681!5m2!1sen!2snz"
{{--                    width="100%"
                    height="400px"--}}
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="main.js"></script>

@endsection
