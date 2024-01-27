<footer>
    {{-- footer up --}}
    <div class="footer-up">
        <div class="container d-flex justify-content-between position-relative">
            <div class="left d-flex">
                <div class="col">
                    <h4>DC Comics</h4>
                    <ul>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                    </ul>
                    <h4>Shop</h4>
                    <ul>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>DC</h4>
                    <ul>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Sites</h4>
                    <ul>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                    </ul>
                </div>
            </div>

            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo-bg"
                class="position-absolute overflow-hidden" />
        </div>
    </div>
    {{-- /footer up --}}

    {{-- footer down --}}
    <div class="footer-down position-relative">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="text-uppercase">Sign up now!</button>
            <ul class="d-flex align-items-center">
                <li>Follow us</li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook-footer" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter-footer" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube-footer" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope-footer" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest-footer" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {{-- /footer down --}}
</footer>
