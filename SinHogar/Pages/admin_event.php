<!DOCTYPE HTML>
<html>

<head>
  <title>Sin Hogar</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../CSS/admin_dashboard.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
                           <img src="../img/coc.PNG" >
          <h1><a href="loginout.php">Login out _ Home</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <br>
          <br>
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="admin_dashboard.php">Dashboard</a></li>
          <li><a href="admin_accounts.php">accounts</a></li>
          <li class="selected"><a href="admin_event.php">Events</a></li>
          <li><a href="admin_bd_homeless.php">Homelessnesses</a></li>
          <li><a href="admin_purchases.php">Purchases</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">

      </div>


            <div id="content">

     <th>

<div style="text-align:center">  </div>
    <table class="table table-striped table-bordered" id="cmptable" style="border:1px solid black;margin-left:auto;margin-right:auto;">
      <br><br>
    <thead>
    <tr style="color:#000000">
          <th style="color:#000000">Id</th>

          <th style="color:#000000"><br> &nbsp;Date event &nbsp; </th>
          <th style="color:#000000"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Title</th>
          <th>Event</th>
          <th  style= "width :  220px ">  </th>
        </tr>
  </thead>
  <tbody>
      <?php 
    include('../Config/sinhogar.php');
    
    $select_compte="SELECT * FROM event";
    $result = mysqli_query($link,$select_compte);
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
      $i++;
      $date_event=$row['date_event'];
      $title=$row['title'];
      $type_event=$row['type_event'];
    ?>                      
       <tr>
       <td><?php echo $i ;?></td>
         <td> <?php echo $date_event ;?></td>
         <td> <?php echo $title ;?></td>
         <td> <?php echo $type_event ;?></td>
       <td><button type="button"  class="btn btn-default btn-xs view_data " id="<?php echo $id;?>" >Update </button>    &nbsp;

           <button type="button" class="btn btn-primary  btn-xs edit_data" id="<?php echo $id;?>" >Delete</button>   
       </td>
       </tr>
     <?php } ?>
   </tbody>
</table>

</th>
</div>
</div>
   
  </div>
</body>
</html>
