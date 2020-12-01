    <section class="intro-title blue-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left">
            <div class="intro-content">
              <div class="intro-name">
                <h3 class="text-white">Contact Us</h3>
                <ul class="breadcrumb mt-1">
                  <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
                  <li class="breadcrumb-item text-white">Contact US</li>
                </ul>
              </div>
              <div class="intro-img">
                <img class="img-fluid" src="<?php echo $banner->link ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section-ptb pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">

            <div class="row">
              <div class="col-md-12">
                <div class="contact-address mb-3 white-bg">
                  <div class="address-title mb-3">
                    <h4 class="mb-1">Office </h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-2 sm-mb-1">
                <div class="d-flex">
                  <div class="contact-box">

                    <div class="contact-icon">
                      <i class="ti-direction-alt text-blue"></i>
                    </div>
                  </div>
                  <div class="">
                    <h6><a href="service-detail.html"><?php echo $contact->address ?></a></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-2 sm-mb-1">
                <div class="d-flex">
                  <div class="contact-box">

                    <div class="contact-icon">
                      <i class="ti-headphone-alt text-blue"></i>
                    </div>
                  </div>
                  <div class="">
                    <h6><a href="service-detail.html"><?php echo $contact->phone ?></a></h6>
                    <span class="mb-0"><?php echo $contact->hours ?></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-5 sm-mb-1">
                <div class="d-flex">
                  <div class="contact-box">

                    <div class="contact-icon">
                      <i class="ti-email text-blue"></i>
                    </div>
                  </div>
                  <div class="">
                    <h6><a href="<?php echo $contact->website ?>"><?php echo $contact->website ?></a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="contact-form-title mb-4">
              <h4 class="mb-1"><?php echo $contact->title ?></h4>
              <p><?php echo $contact->article ?></p>
            </div>
            <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
            <form id="contactform" class="gray-form row" role="form" method="post" action="<?php echo site_url('SendMail') ?>">
              <?php echo validation_errors('<p class="alert alert-danger">', '</p>') ?>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name='name' placeholder="Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name='subject' placeholder="subject" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" name='email' placeholder="Email Adress" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name='phone' placeholder="Phone Number" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" rows="7" placeholder="Massage"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <input type="hidden" name="action" value="sendEmail" />
                <button id="submit" name="submit" type="submit" value="Send" class="button"><span>Submit Now</span></button>
              </div>
            </form>
            <div id="ajaxloader" style="display:none"><img class="center-block" src="images/form-loader.gif" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    contact from -->