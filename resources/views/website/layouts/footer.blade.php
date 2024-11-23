<footer class="bg-footer-color text-light py-3 mt-3">
    <div class="container">
        <div class="row">
            <!-- Center text on mobile, left-align on larger screens -->
            <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="mb-0">© 2024 Your Business Solution. All rights reserved.</p>
            </div>
            @php
                $footer = DB::table('site_settings')->first();
            @endphp

            <!-- Center icons and links on mobile, right-align on larger screens -->
            <div class="col-12 col-md-6 text-center text-md-end">
                <a href="{{ isset($footer->facebook) ? $footer->facebook : '' }}" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                <a href="{{ isset($footer->twitter) ? $footer->twitter : '' }}" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                <a href="{{ isset($footer->linkedin) ? $footer->linkedin : '' }}" class="text-light me-3"><i class="fab fa-linkedin"></i></a>

            </div>
        </div>
    </div>
</footer>
