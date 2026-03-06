<?php
$activePage = 'teach';
require __DIR__ . '/header.php';
?>

    <div class="container">
        <h1>Teach with us</h1>
        <div class="form-container">
          
          <form action="save_teacher.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="fullname">Full name</label>
                  <input type="text" id="fullname" name="fullname" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="exp">Teaching experience</label>
                  <input type="text" id="exp" name="exp">
              </div>
              <div class="form-group">
                  <label for="qual">Qualifications</label>
                  <input type="text" id="qual" name="qual">
              </div>
              <div class="form-group">
                  <label for="subject">Subject to teach</label>
                  <input type="text" id="subject" name="subject">
              </div>
              <div class="radio-section">
                  <p>Preferred teaching mode:</p>
                  <label><input type="radio" name="mode" value="Online"> Online</label><br>
                  <label><input type="radio" name="mode" value="In-Person"> In-Person</label>
              </div>
              <div class="form-group">
                  <label for="intro">Introduce yourself</label>
                  <textarea id="intro" name="intro" rows="2"></textarea>
              </div>
              <div class="form-group">
                  <label for="desc">Brief description</label>
                  <textarea id="desc" name="desc" rows="3"></textarea>
              </div>
              <div class="form-group">
                  <label for="doc">Upload certificate</label>
                  <input type="file" id="doc" name="doc">
              </div>
              <button type="submit" class="button">Submit</button>
          </form>
        </div>
    </div>

<?php require __DIR__ . '/footer.php'; ?>