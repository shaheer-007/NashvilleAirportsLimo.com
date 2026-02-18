<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Airport Limousine | Book Your Ride</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @if (app()->environment('production'))
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "814f8504-23dc-44c4-b98c-87c1ac90f482";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js"; s
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
    @endif

</head>

<body>
    <div id="preloader">
        <div class="loader-content">
            <div class="loader-circle"></div>
            <img src="{{ asset('asset/web-logo nashville.svg') }}" alt="Loading..." class="loader-logo">
        </div>
    </div>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('asset/web-logo nashville.svg') }}" alt="Airport Limousine Logo"
                style="max-height: 110px;">
            <div class="logo-subtext">Limo Sevice in Nashville and Tennessee</div>
        </div>
        <div class="form-wrapper">
            <h2 class="form-header">Book Now or Get A Quote</h2>
            <div id="mylimobiz-widget-container" class="mylimobiz-placeholder">
                <a id="bro_reservation" href="https://book.mylimobiz.com/v4/airportslimosvc" data-ores-widget="website"
                    data-ores-alias="airportslimosvc">
                    Online Reservations
                </a>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="contact-info">
            <div class="contact-item">
                <span>Phone:</span>
                <a href="tel:{{ env('NUMBER') }}">{{ env('NUMBER') }}</a>
            </div>
            <div class="contact-item">
                <span>Email:</span>
                <a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a>
            </div>
        </div>
        <div style="font-size: 0.8rem; color: #444; margin-top: 1rem;">
            &copy; {{ date('Y') }} <span style="color: var(--accent-color);">Nashville Airport Limo Service</span>. All
            rights reserved.
        </div>
    </footer>
    <script type="text/javascript" src="https://book.mylimobiz.com/v4/widgets/widget-loader.js"></script>
    <a href="tel:{{ env('NUMBER') }}" class="floating-call-btn">
        <i class="fa-solid fa-phone-volume call-icon"></i>
        <span class="call-text">Call Now</span>
    </a>
    <script>
        window.addEventListener('load', function () {
            setTimeout(() => {
                document.body.classList.add('loaded');
            }, 800);
        });
    </script>
</body>

</html>