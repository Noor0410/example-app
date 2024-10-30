@extends('frontend.layouts.main')
@section('main-container')
    <main>
        <div class="container my-5">
            <h2>Contact Us</h2>
            <p>If you have any questions, comments, or concerns, we’d love to hear from you! Please fill out the form below, and we will get back to you as soon as possible.</p>
            
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4>Contact Information</h4>
                    <p><strong>Email:</strong> support@BoldWare.com</p>
                    <p><strong>Phone:</strong> +1 (234) 567-8901</p>
                    <p><strong>Address:</strong> 123 Fashion St, Karachi City, Pakistan</p>
    
                    <h4>Follow Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
                        <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                        <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                    </ul>
                </div>
            </div>
    
            <!-- Optional Google Map -->
            <!-- <div class="my-4">
                <h4>Our Location</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345090953!2d144.95373631531607!3d-37.816279979751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f1b84b%3A0x5054eab3660c6e3!2sFashion%20Store!5e0!3m2!1sen!2sus!4v1614011213145!5m2!1sen!2sus" 
                width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"></iframe>

            </div> -->
        </div>
    </main>
    @endsection