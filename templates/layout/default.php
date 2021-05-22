<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta content="True" name="HandheldFriendly">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Signika:600,400,300' rel='stylesheet' type='text/css'>
    <title>
        Ge-Agro:
        <?= isset($title) ? $title : __($this->fetch('title')) ?>
    </title>

    <?= $this->Html->meta('favicon.ico', '/img/favicon.png', ['type' => 'icon']) ?>

    <?= $this->Html->css("/dist/main.css") ?>
    <?= $this->Html->script("/dist/site.js") ?>

    <?= $this->Html->script("/theme/js/jquery.js") ?>
    <?= $this->Html->script("/theme/js/scripts.js") ?>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKkWyscQoa3E_hTmdD4JAvgIi5bJOfP10&callback=initMap&libraries=&v=weekly" defer></script>
    <script>
        let map;

        function initMap() {
            let element = document.getElementById("map");
            if (element) {
                const uluru = { lat: -16.6682365, lng: -48.6134903 };

                map = new google.maps.Map(element, {
                    center: uluru,
                    mapTypeControl: false,
                    zoom: 17,
                });

                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }
        }
    </script>
</head>

<body class="home color-brown">
    <div class="root">

        <?= $this->element('header') ?>

        <?= $this->fetch('content') ?>

        <?= $this->element('footer') ?>
    </div>
</body>

</html>