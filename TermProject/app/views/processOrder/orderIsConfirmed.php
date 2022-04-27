<?php require APPROOT . '/views/includes/header.php'; 
?>
<html>
    <head>
        <script type="text/javascript" src="/TermProject/public/javascript/main.js"></script>
        <style type="text/css">
            .container{
                height: 450px;
            }
            #map{
                width: 100%;
                height: 100%;
                border: 1px solid blue;
            }
        </style>
    </head>
    <body>
        <h1>ORDER IS CONFIRMED</h1>
        <h2>You order is coming from here!</h2>

        <div class="container">
            <div id="map"></div>
        </div>
    </body>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9dYmq-CNh8kUs-GwBrRAjMzewG1ll6gE&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
</html>
<?php require APPROOT . '/views/includes/footer.php'; ?>