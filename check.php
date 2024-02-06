<?php
// Prints the day, date, month, year, time, AM or PM
$set = date_default_timezone_set("Africa/Lagos");
echo time('h:i:s');

?>
<br>
<script type="text/javascript">
var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()

if (minutes < 10){
  minutes = "0" + minutes;
}
var suffix = "AM";
if (hours >= 12) {
suffix = "PM";
hours = hours - 12;
}
if (hours == 0) {
hours = 12;
}

document.write("<b>" + hours + ":" + minutes + " " + suffix + "</b>");
</script>