<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- IE対策 -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"> <!-- スマホ画面対策 -->
  <title>Leave Your Worries Behind</title>
  <link rel="stylesheet" href="../css/uploadText.css">
</head>
<body>
  <div class="container">
    <div class="formessage">
      <p class="great">
          <?php
            echo  "DON'T"." WORRY".'<br>'." BE"." HAPPY".'<br>'.mb_strtoupper($_SESSION['name']) ;
              ?>
       </p>
    </div>
  </div>
  <script LANGUAGE="JavaScript">

    function autoLink()
      {
          // location.href="http://37.97.136.49/timeflies/php/last.php";
          location.href="http://37.97.136.49/timeflies/voucher.html"
    }
        setTimeout("autoLink()",4000);

</script>
</body>
</html>
