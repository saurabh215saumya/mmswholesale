<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body style="font-family:Arial, Helvetica, sans-serif; padding:0; margin:0; color:#000;">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:10px; border:1px solid #ddd;">
  
  <tr>
    <td align="left" valign="top">
    <table style="width:100%;" cellpadding="0" cellspacing="0">
          <tr>
            <th align="left" style="padding:5px; font-size:14px;background:#cfd0cd;">User Name</th>
            <th align="left" style="padding:5px; font-size:14px;background:#cfd0cd;">Mobile Number</th>
            <th align="left" style="padding:5px; font-size:14px;background:#cfd0cd;">IC Number</th>
            <th align="left" style="padding:5px; font-size:14px;background:#cfd0cd;">State Name</th>
            <th align="left" style="padding:5px; font-size:14px;background:#cfd0cd;">Total Spent(RM)</th>
          </tr>
          <?php
            if (isset($allcustomers) && !empty($allcustomers)) { //echo '<pre>'; print_r($allcustomers); die;
              $i=1;
              foreach ($allcustomers as $customers) {
          ?>
          <tr>
            <td align="center" valign="top" style="padding:10px 5px; font-size:13px; border-bottom:1px solid #ddd;"><?php echo $customers['name']; ?></td>
            <td align="center" valign="top" style="padding:10px 5px; font-size:13px; border-bottom:1px solid #ddd;"><?php echo $customers['mobile']; ?></td>
            <td align="center" valign="top" style="padding:10px 5px; border-bottom:1px solid #ddd;"><?php echo $customers['ic_no']; ?></td>
            <td align="center" valign="top" style="padding:10px 5px; border-bottom:1px solid #ddd;"><?php echo getStateName($customers['id']); ?></td>
            <td align="center" valign="top" style="padding:10px 5px; border-bottom:1px solid #ddd;"><?php echo getUserTotalSpentAmt($customers['id']);; ?></td>
          </tr>
          <?php $i++; } } ?>
      </table>
      </td>
  </tr>
</table>
</body>
</html>
