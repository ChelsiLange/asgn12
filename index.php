<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Image Upload</title>
    <style>
      body {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 100vh;
      }
    </style>
  </head>

  <body>
      <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
      <?php endif ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="my_image">
      <input type="submit" name="submit" value="Upload">

    </form>
  </body>
</html>