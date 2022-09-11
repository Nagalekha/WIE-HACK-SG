<section id="contact">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Contact</p>
                <h1 class="text-uppercase">For Any Queries</h1>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                <h4 class="text-uppercase">Email us at</h4>
                <p class="text-primary"><a href="mailto:kumudh.r@ieee.org">kumudh.r@ieee.org</a></p>
                <p class="text-primary"><a href="mailto:prachako@in.ibm.com">prachako@in.ibm.com</a></p>
            </div>
        </div>

        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">
                        <form action="./forms/mail.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input class="btn btn-primary w-100 py-3" type="submit" value = "Send Message" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</section>