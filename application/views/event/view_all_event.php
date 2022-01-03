<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Event</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Start_Date</th>
              <th scope="col">End_date</th>
              <th scope="col">Recurrence</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($events as $value):
            $recurrence = json_decode($value->recurrence);
            ?>
            <tr>
            
              <td><?php echo $value->title; ?></td>
              <td><?php echo $value->start_date; ?></td>
              <td><?php echo $value->end_date; ?></td>
              <td><?php 
              if($recurrence->recurrence_type == 0){
                echo $recurrence->every_type.' '.$recurrence->every_day;
              }
              else{
                echo $recurrence->number.' '.$recurrence->week_day.' '.$recurrence->month_day;
              }
              ?></td>
              <td><a href="<?php echo base_url('index.php/event/view_event/'.$value->id) ?>">view</a></td>
            </tr>
          <?php endforeach;?>
          </tbody>
        </table>

</div>

</body>
</html>