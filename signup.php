<?php
$activePage = 'signup';
require __DIR__ . '/header.php';
?>

    <div class="container">
        <h1>Create an account</h1>
        <div class="form-container">
          <form>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" required>
              </div>
              <button type="submit" class="button">Sign Up</button>
          </form>
        </div>
    </div>

<?php require __DIR__ . '/footer.php'; ?>