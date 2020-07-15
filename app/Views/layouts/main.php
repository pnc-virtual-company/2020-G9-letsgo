<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/monthly.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Lets go</title>
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
                "name": "Event game of month",
                "startdate": "2020-7-14",
                "enddate": "2020-7-15",
                "color": "#99CCCC",
                "url": ""
                },
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