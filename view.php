<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>View</title>
    <style>
      body {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        min-height: 100vh;
      }
      .alb {
        height: 200px;
        padding: 5px;
        width: 200px;
      }
      .alb img {
        height: 100%;
        width: 100%;
      }
      a {
        color: #222;
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <a href="index.php">&#8592;</a>
    <?php
      $sql = "SELECT * FROM images ORDER BY id DESC";
      $res = mysqli_query($conn, $sql);

      if(mysqli_num_rows($res) > 0){
        while($images = mysqli_fetch_assoc($res)){ ?>
          <div class='alb'>
            <img src="uploads/<?=$images['image_url']?>">
          </div>

<?php
        }
      }

    ?>
    
  </body>
</html>