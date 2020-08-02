<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Lets go</title>
</head>
<body>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <!-- edit your event -->
<script type="text/javascript">
    $(document).on('click','.editEvent', function(e) {
    e.preventDefault();

    // get data form <a href=""></a>
    var event_id = $(this).data('event_id');
    var title = $(this).data('title');
    var city = $(this).data('city');
    var description = $(this).data('description');
    var cat_id = $(this).data('cat_id');
    var start_date = $(this).data('start_date');
    var end_date = $(this).data('start_date');
    var start_time = $(this).data('start_time');
    var end_time = $(this).data('end_time');
    var categories = <?= json_encode($categoryData, JSON_PRETTY_PRINT) ?>;
    var option;

    // loop categorys
    categories.forEach(category => {
      if(cat_id == category['category_id']){
        option += `<option value = '${category['category_id']}' selected>${category['name']}</option>`;
      }else {
        option += `<option value = '${category['category_id']}'>${category['name']}</option>`;
      }
    });

    // give data into input form
    $('#event_category').html(option);
    $('#event_id').val(event_id);
    $('#event_title').val(title);
    $('#event_description').val(description);
    $('#event_start_date').val(start_date);
    $('#event_end_date').val(end_date);
    $('#event_start_time').val(start_time);
    $('#event_end_time').val(end_time);
    $('#event_city').val(city);

});

</script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <?= $this->renderSection('content') ?>
</body>
</html>