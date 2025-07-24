 <!-- Footer area start here -->
 <footer class="footer-area" style="background-color:black">
     <div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
         <img src="{{ asset('frontend/assets/images/shape/footer-regular-left.png') }}" alt="shape">
     </div>
     <div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
         <img class="sway_Y__animation" src="{{ asset('frontend/assets/images/shape/footer-solid-left.png') }}" alt="shape">
     </div>
     <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
         <img class="sway_Y__animation" src="{{ asset('frontend/assets/images/shape/footer-regular-right.png') }}" alt="shape">
     </div>
     <div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
         <img src="{{ asset('frontend/assets/images/shape/footer-solid-right.png') }}" alt="shape">
     </div>
     <div class="footer__shadow-shape">
         <img src="{{ asset('frontend/assets/images/shape/footer-shadow-shape.png') }}" alt="shodow">
     </div>
     <div class="container">
         <div class="footer__wrp pt-100 pb-100">
             <div class="footer__item item-big wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                 <a href="{{ route('index') }}" class="logo mb-10">
                     <img src="{{ asset('webceylon.png') }}" alt="Webceylon">
                 </a>
                 <p style="text-align:justify">Webceylon is an IT service provider offering web development, software solutions, and digital marketing to help businesses thrive in the digital age.
                 </p>
                 <div class="social-icon">
                     <a href="https://web.facebook.com/facebook.com.webceylon"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                     <a href="https://wa.me/94779954063"><i class="fa-brands fa-whatsapp fw-bold"></i></a>
                     <a href="#0"><i class="fa-brands fa-instagram fw-bold"></i></a>
                 </div>
             </div>
             <div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                 <h3 class="footer-title">IT Services</h3>
                 <ul>
                     @foreach ($footerServices as $service)
                     <li>
                         <a href="{{ route('service.details', $service->id) }}">
                             <i class="fa-regular fa-angles-right me-1"></i>
                             {{ $service->name }}
                         </a>
                     </li>
                     @endforeach
                 </ul>
             </div>
             <div class="footer__item item-sm wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                 <h3 class="footer-title">Quick Link</h3>
                 <ul>
                     <li><a href="{{ route('services') }}l"><i class="fa-regular fa-angles-right me-1"></i> Services</a></li>
                     <li><a href="{{ route('portfolio') }}"><i class="fa-regular fa-angles-right me-1"></i> Portfolio</a>
                     </li>
                     <li><a href="{{ route('blogs') }}"><i class="fa-regular fa-angles-right me-1"></i> Blog</a>
                     </li>
                     <li><a href="#" data-bs-toggle="modal" data-bs-target="#feedbackModal"><i class="fa-regular fa-angles-right me-1"></i> Feedback</a></li>
                     <li><a href="{{ route('careers') }}"><i class="fa-regular fa-angles-right me-1"></i> Careers</a></li>
                     <li><a href="{{ route('about') }}"><i class="fa-regular fa-angles-right me-1"></i> About Us</a></li>
                 </ul>
             </div>
             <div class="footer__item item-big wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                 <h3 class="footer-title">Contact Us</h3>
                 <p class="mb-20">No 156/1/A, Kaduwela Road, Athurugiriya, Sri Lanka</p>
                 <ul class="footer-contact">
                     <li>
                         <i class="fa-regular fa-clock"></i>
                         <div class="info">
                             <h5>
                                 Opening Hours:
                             </h5>
                             <p>Mon - Fri: 8.30 AM - 5.30 PM</p>
                         </div>
                     </li>
                     <li>
                         <i class="fa-duotone fa-phone"></i>
                         <div class="info">
                             <h5>
                                 Phone Call:
                             </h5>
                             <p>+94 77 995 4063</p>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="footer__copyright">
         <div class="container">
             <div
                 class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
                 <p class="wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                     All Rights Reserved. &copy; 2024 - 2025
                     <a href="https://webceylon.com" target="_blank" rel="noopener noreferrer">webceylon.com</a>
                 </p>

                 <ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
                     <li><a href="{{ route('terms_and_conditions') }}">Terms & Condition</a></li>
                     <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer area end here -->

 <!-- Feedback Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Submit Your Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation">
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <input type="text" class="form-control" name="company">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Company Logo</label>
                        <input type="file" class="form-control" name="logo" id="logoInput" accept="image/*">
                    </div>

                    <div class="mb-3 text-center">
                        <img id="logoPreview" src="#" alt="Logo Preview" style="max-height: 120px; display: none;" class="img-fluid rounded shadow-sm border">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number">
                    </div>

                    <div class="mb-3">
                        <label for="feedback" class="form-label">Your Feedback*</label>
                        <textarea class="form-control fs-6" name="feedback" rows="3" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary fs-6">Submit Feedback</button>
                    <button type="button" class="btn btn-secondary fs-6" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    document.getElementById('logoInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.getElementById('logoPreview');
                img.src = event.target.result;
                img.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>




