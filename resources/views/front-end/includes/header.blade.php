<section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
        <div class="container">

            <a class="navbar-brand" href="{{route('/')}}">
                <img src="{{asset('/')}}/images/logo.png" alt="Birth Registration System Bangladesh :: BRSBD" title="Birth Registration System Bangladesh :: BRSBD" style="height:60px;" />
            </a>

            <a class="navbar-brand" href="{{route('/')}}"><span>BRS</span> BD</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('birth-reg')}}">Register Birth</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('apl-status')}}">Application Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('birth-info')}}">Birth Info</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
                <div class="main-social-head">
                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                </div>
            </div>
        </div>
    </nav>
</section>
