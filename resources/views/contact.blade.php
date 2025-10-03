<x-app-layout meta-title="Contact Deris Empowerment Initiatives | Get in Touch"
              meta-description="Reach out to Deris Empowerment Initiatives. Call, email, or visit us to learn more about our services and community impact in Nigeria."
              meta-keywords="contact Deris Empowerment, NGO Nigeria, microfinance contact, empowerment NGO phone, NGO address Nigeria">
    <!-- Contact Banner Section Start -->
    <section class="d2c_entro_launch_bg">
        <div class="container">
            <h2 class="text-center">Get In Touch</h2>
            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Contact Banner Section End -->

    <!-- Contact Section Start -->
    <section class="d2c_contact_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <div class="d2c_contact_left">
                        <h4>Contact Information</h4>
                        <div class="d2c_info_wrapper d-flex align-items-center">
                            <a href="tel:{{$footer->phone}}" class="d2c_social_icon"><i class="fas fa-phone-alt"></i></a>
                            <p class="mb-0">{{$footer->phone}}</p>
                        </div>
                        <div class="d2c_info_wrapper d-flex align-items-center">
                            <a href="mailto:{{$footer->email}}" class="d2c_social_icon"><i class="fas fa-envelope"></i></a>
                            <p class="mb-0">{{$footer->email}}</p>
                        </div>
                        <div class="d2c_info_wrapper d-flex align-items-center">
                            <a href="#" target="_blank" class="d2c_social_icon"><i class="fas fa-map-marker-alt"></i></a>
                            <p class="mb-0">{{$footer->address}}</p>
                        </div>
                        <h6>Social Media</h6>
                        <ul class="list-group list-group-horizontal mb-4 mb-md-0">
                            @foreach($socials as $social)
                                <li>
                                    <a href="{{$social->url}}" target="_blank" class="d2c_social_icon"><i class="{{$social->icon}}"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="d2c_form_wrapper">
                        <h4>Send Message</h4>
                        <p>Get in touch with me</p>
                        <form class="row needs-validation" novalidate>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" id="validationCustomFirstName" autocomplete="off" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-0">
                                <input type="text" class="form-control" id="validationCustomLastName" autocomplete="off" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-0">
                                <input type="text" class="form-control" id="validationCustomCompany" autocomplete="off" placeholder="Company Name" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="tel" class="form-control" id="validationCustomNumber" autocomplete="off" placeholder="Phone Number" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="4" id="validationCustomMessage" placeholder="Send a Message" required></textarea>
                                <button class="btn" type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
</x-app-layout>
