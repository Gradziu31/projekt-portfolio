<div class="container-full">
    <header>
      <div class="header--text">
        <h1 class="animated zoomIn">KRYSTIAN GRADEK</h1>
      </div>
      <p class="header--text--under animated zoomIn">FRONT-END DEVELOPMENT</p>
    </header>

    <script type="text/javascript">
    function getOS() {
    var userAgent = window.navigator.userAgent,
    platform = window.navigator.platform,
    macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
    windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
    iosPlatforms = ['iPhone', 'iPad', 'iPod'],
    os = null;

    if (macosPlatforms.indexOf(platform) !== -1) {
    os = 'Mac OS';
    } else if (iosPlatforms.indexOf(platform) !== -1) {
    os = 'iOS';
    } else if (windowsPlatforms.indexOf(platform) !== -1) {
    os = 'Windows';
    } else if (/Android/.test(userAgent)) {
    os = 'Android';
    } else if (!os && /Linux/.test(platform)) {
    os = 'Linux';
    }

    return os;
    }

    var header = document.querySelector("header");

    if(getOS() == "iOS"){
    header.className += "addjs";
    }
    if(getOS() == "Android"){
    header.className += "addjs";
    }
    </script>
