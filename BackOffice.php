<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form method="post" action="traitement.php">
        <div class="row">
          <div class="col-25">
            <label for="subject">sujet</label>
          </div>
          <div class="col-75">
            <input type="text" id="subject" name="subject" placeholder="sujet">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">article</label>
          </div>
          <div class="col-75">
            <textarea id="content" name="content" placeholder="article" style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="publier">
        </div>
      </form>
    </div>
  </body>
</html>
