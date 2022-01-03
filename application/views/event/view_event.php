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
<h4>Ttile : <?php echo $event_view->title; ?></h4>
        <?php 
        $start_date = $event_view->start_date;
        $sd = date('d', strtotime($start_date));
        $end_date = $event_view->end_date;
        $ed = date('d', strtotime($end_date));
        $recurrence = json_decode($event_view->recurrence);
        if($recurrence->recurrence_type == 0){
            if($recurrence->every_type == 'every' && $recurrence->every_day == 'day'){
                $rec = 0;
            }
            elseif($recurrence->every_type == 'every_other' && $recurrence->every_day == 'day'){
                $rec = 1;
            }
            elseif($recurrence->every_type == 'every_third' && $recurrence->every_day == 'day'){
                $rec = 2;
            }
            elseif($recurrence->every_type == 'every_fourth' && $recurrence->every_day == 'day'){
                $rec = 3;
            }
        }
        else{

        }
        ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Dates</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          for($i = $sd ; $i<=$ed ; $i = $rec+($i+1)){
          ?>
                <tr>
                <td><?php echo date('Y-m-'.$i); ?></td>
                </tr>
          <?php }?>
          </tbody>
        </table>

</div>

</body>
</html>