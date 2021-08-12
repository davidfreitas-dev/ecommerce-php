<?php if(!class_exists('Rain\Tpl')){exit;}?>    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                <h2>Password Recovery</h2>
                <div class="page_link">
                    <a href="/">Home</a>
                    <a href="/forgot">Recovery</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Tracking Box Area =================-->
    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner mt-5 mb-5">
                <h2>Recovery</h2>
                <p>Type your email and click send, then we will send an recovery link where you could change your password.</p>
                <form class="row tracking_form" action="/forgot" method="post">
                    <div class="col-md-8 form-group">
                        <input type="email" class="single-input" id="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="col-md-8 form-group">
                        <button type="submit" value="submit" class="btn submit_btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================End Tracking Box Area =================-->