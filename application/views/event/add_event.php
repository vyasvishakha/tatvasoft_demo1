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
<?php echo validation_errors(); ?>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter title">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">start date</label>
    <input type="date" class="form-control" name="start_date">
  </div>
  <div class="form-group form-check">
  <label for="exampleInputEmail1">end date</label>
  <input type="date" class="form-control" name="end_date">

  </div>
  <div class="form-group form-check">
  <label for="exampleInputEmail1">repeat</label>
  <input value="0" type="radio" class="" name="recurrence_type">
  <select name="every_type">
  <option value="every">Every</option>
  <option value="every_other">Every Other</option>
  <option value="every_third">Every third</option>
  <option value="every_fourth">Every fourth</option>
  </select>
  <select name="every_day">
  <option value="day">Day</option>
  <option value="week">Week</option>
  <option value="month">Month</option>
  <option value="year">Year</option>
  </select>
  </div>
  <div class="form-group form-check">
  <label for="exampleInputEmail1">repeat on the</label>
  <input value="1" type="radio" class="" name="recurrence_type">
  <select name="number">
  <option value="first">First</option>
  <option value="second">Second</option>
  <option value="third">Third</option>
  <option value="fourth">Fourth</option>
  </select>
  <select name="week_day">
  <option value="sun">sun</option>
  <option value="mon">mon</option>
  <option value="tue">tue</option>
  <option value="wed">wed</option>
  </select>
  of the
  <select name="month_day">
  <option value="1_month">Month</option>
  <option value="3_month">3 Months</option>
  <option value="4_month">4 Month</option>
  <option value="6_month">6 Month
  </select>
  </div>
  <button type="submit" name="save" value="save" class="btn btn-primary">Submit</button>
  <a href="<?php echo base_url('index.php/event/view_all_event') ?>">View All</a>
</form>

</div>

</body>
</html>