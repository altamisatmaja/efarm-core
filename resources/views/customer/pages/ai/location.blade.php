<!DOCTYPE html>
<html>
<head>
    <title>User Location</title>
</head>
<body>
    <h1>User Location</h1>
    @if ($location)    
        <p>Latitude: {{ $location->lat }}</p>
        <p>Longitude: {{ $location->lon }}</p>
    @endif
</body>
</html>
