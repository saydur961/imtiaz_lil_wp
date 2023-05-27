<?php


function parse_date($dt) {

  $month_arr = [
    "Jan", "Feb", "Mar", "Apr", "May", "June", "July", 
    "Aug", "Sept", "Oct", "Nov", "Dec"
  ];

  $d = date_parse_from_format("Y-m-d", $dt);

  return $month_arr[$d['month']]." ". $d['day'];

}