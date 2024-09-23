<div id="footer-bar" class="footer-bar-5">
    <a href="#">
        <i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i>
        <span>@if (session('lang') === 'id') {{ 'Edukatif' }} @else {{ $translate->translate('Edukatif') }} @endif</span>
    </a>
    <a href="#">
        <i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i>
        <span>@if (session('lang') === 'id') {{ 'Jurnal' }} @else {{ $translate->translate('Jurnal') }} @endif</span>
    </a>
    <a href="#" class="active-nav">
        <i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i>
        <span>@if (session('lang') === 'id') {{ 'Home' }} @else {{ $translate->translate('Home') }} @endif</span>
    </a>
    <a href="#">
        <i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i>
        <span>@if (session('lang') === 'id') {{ 'Komunitas' }} @else {{ $translate->translate('Komunitas') }} @endif</span>
    </a>
    <a href="#">
        <i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i>
        <span>@if (session('lang') === 'id') {{ 'Settings' }} @else {{ $translate->translate('Settings') }} @endif</span>
    </a>
</div>
