<html>

<head>
    <title>Store Locator</title>
    <style>
        #map {
            height: 100%;
        }
        
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <!-- The div to hold the map -->
    <div id="map"></div>

    <script src="app.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap">
    </script>
</body>

</html>