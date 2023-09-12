<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>
<body>
  <form action="/registration-form-submit.php" method="post" enctype="multipart/form-data">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
    <?php echo '<br>'; ?>
    <?php echo '<br>'; ?>
    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
    <?php echo '<br>'; ?>
    <?php echo '<br>'; ?>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Email" required>
    <?php echo '<br>'; ?>
    <?php echo '<br>'; ?>
    <label for="birthday">Birthday</label>
    <input type="date" id="birthday" name="birthday" placeholder="Birthday" required>
    <?php echo '<br>'; ?>
    <?php echo '<br>'; ?>
    <label for="file">Upload photo</label>
    <input type="file" name="file" required>
    <?php echo '<br>'; ?>
    <?php echo '<br>'; ?>
    
    <button type="submit">Submit</button>
  </form>
  
</body>
</html>