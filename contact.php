<!-- ========== CONTACT SECTION ========== -->
<section id="contact" name="contact"></section>
<div id="f">
<div class="container">
  <div class="row">
    <h3>CONTACT ME</h3>
    <p class="centered">
	    <i class="icon icon-circle"></i>
	    <i class="icon icon-circle"></i>
	    <i class="icon icon-circle"></i>
    </p>
  </div><!-- row -->

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form class="contact-form php-mail-form" role="form" action="contactform.php" method="POST">

        <div class="form-group">
          <label for="contact-name">Your Name</label>
          <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
          <div class="validate"></div>
        </div><!-- form-group -->
        
        <div class="form-group">
          <label for="contact-email">Your Email</label>
          <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div><!-- form-group -->
        
        <div class="form-group">
          <label for="contact-subject">Subject</label>
          <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
          <div class="validate"></div>
        </div><!-- form-group -->

        <div class="form-group">
          <label for="contact-message">Your Message</label>
          <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
          <div class="validate"></div>
        </div><!-- form-group -->

        <div class="loading"></div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>

        <div class="form-send">
          <button type="submit" class="btn btn-large">Send Message</button>
        </div>

      </form>

    </div><!-- row -->
    
  </div><!-- row -->
</div><!-- container -->

</div><!-- f -->