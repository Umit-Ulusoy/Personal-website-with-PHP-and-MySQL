<?php

function security($value)
{

 $value = trim($value);
 $value = strip_tags($value);
 $value = htmlspecialchars($value);

 return $value;
}