<?php
function date_formatter($date)
{
  $items = explode("-", $date);
  $months = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  );

  return $items[2] . " " . $months[(int) $items[1]] . " " . $items[0];
}