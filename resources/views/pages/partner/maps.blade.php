<!DOCTYPE html>
<html>

<head>
    <title>Get IP Address</title>
    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <script type="text/javascript">
        function showLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            document.getElementById('latitude').innerText = `${latitude}`;
            document.getElementById('longitude').innerText = `${longitude}`;
            console.log("Latitude:", latitude);
            console.log("Longitude:", longitude);
        }

        function showIP() {
            var ip = geoplugin_request();
            console.log("IP Address:", ip);
        }

        function getLocationAndIP() {
            showLocation();
            showIP();
        }
    </script>
</head>

<body onload="getLocationAndIP()">
    <div>
        <p id="latitude">Masih belum terdeteksi</p>
        <p id="longitude">Masih belum terdeteksi</p>
    </div>
</body>

</html>
