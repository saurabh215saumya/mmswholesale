<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif; padding:0; margin:0; color:#000;">
<div style="width:100%;">
  <?php
    if (isset($allusertoken) && !empty($allusertoken)) {
      $i=1;
      foreach ($allusertoken as $key => $val) {
  ?>
        <div style="width:23%; height:100px; border: 2px solid black; margin-left: 5px; margin-bottom: 5px; float: left;">
          <div style="text-align: center; font-size: 10px; margin-top:10px;">Token Number</div>
          <div style="text-align: center; margin-top:3px; font-weight: bold; font-size: 15px;"><?php echo $val['token_no']; ?></div>

          <div style="text-align: center; margin-top:3px; font-size: 10px;">Name : <?php echo $val['name']; ?></div>
          <div style="text-align: center; margin-top:3px; font-size: 10px;">IC : <?php echo $val['ic_no']; ?></div>
          <div style="text-align: center; margin-top:3px; font-size: 10px;">Phone Number : <?php echo $val['mobile']; ?></div>
        </div>
  <?php
      $i++; }
    } else {
  ?>
  <?php } ?>
  </div>
</body>
</html>