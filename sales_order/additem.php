<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="order.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<form id="users" action="db/orderadd.php" method="post">
<div class="container">
    <div class="title">NEW ITEM</div>
<input type="hidden" id="sales_id" name="sales_id" value="<?php  echo $_GET['sales_id']?>">
 <div class="user">
   <input name="productname" type="text" placeholder="PRODCUTNAME"><br>
   <input name="price" type="text" placeholder="PRICE"><br>
   <input name="unit" type="text" placeholder="UNIT"><br><br>
 </div>
   <input type="submit">   
</form>
