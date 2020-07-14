<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lets go</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/monthly.css">
</head>
<body>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/monthly.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
        });
        var sampleEvents = {
            "monthly": [
                {
                "id": 1,
                "name": "Whole month event",
                "startdate": "2016-10-01",
                "enddate": "2016-10-31",
                "starttime": "12:00",
                "endtime": "2:00",
                "color": "#99CCCC",
                "url": ""
                },
                {
                "id": 2,
                "name": "Test encompasses month",
                "startdate": "2016-10-29",
                "enddate": "2016-12-02",
                "starttime": "12:00",
                "endtime": "2:00",
                "color": "#CC99CC",
                "url": ""
                },
                {
                "id": 3,
                "name": "Test single day",
                "startdate": "2016-11-04",
                "enddate": "",
                "starttime": "",
                "endtime": "",
                "color": "#666699",
                "url": "https://www.google.com/"
                },
                {
                "id": 8,
                "name": "Test single day",
                "startdate": "2016-11-05",
                "enddate": "",
                "starttime": "",
                "endtime": "",
                "color": "#666699",
                "url": "https://www.google.com/"
                },
                {
                "id": 4,
                "name": "Test single day with time",
                "startdate": "2016-11-07",
                "enddate": "",
                "starttime": "12:00",
                "endtime": "02:00",
                "color": "#996666",
                "url": ""
                },
                {
                "id": 5,
                "name": "Test splits month",
                "startdate": "2016-11-25",
                "enddate": "2016-12-04",
                "starttime": "",
                "endtime": "",
                "color": "#999999",
                "url": ""
                },
                {
                "id": 6,
                "name": "Test events on same day",
                "startdate": "2016-11-25",
                "enddate": "",
                "starttime": "",
                "endtime": "",
                "color": "#99CC99",
                "url": ""
                },
                {
                "id": 7,
                "name": "Test events on same day",
                "startdate": "2016-11-25",
                "enddate": "",
                "starttime": "",
                "endtime": "",
                "color": "#669966",
                "url": ""
                },
                {
                "id": 9,
                "name": "Test events on same day",
                "startdate": "2016-11-25",
                "enddate": "",
                "starttime": "",
                "endtime": "",
                "color": "#999966",
                "url": ""
                }
            ]
	    };

        $(window).load( function() {
            $('#mycalendar').monthly({
                mode: 'event',
                dataType: 'json',
                events: sampleEvents
            });
        });
    </script>

    <?= $this->renderSection('content') ?>
</body>
</html>