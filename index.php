<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Michele Ebau">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"
    integrity="sha512-WrdC3CE9vf1nBf58JHepuWT4x24uTacky9fuzw2g/3L9JkihgwZ6Cfv+JGTtNyosOhEmttMtEZ6H3qJWfI7gIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>Php Badwords</title>
</head>

<body>
  <header>

  </header>
  <main>
    <div class="container">
      <form action="censored.php" class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Paragraph</label>
          <input type="text" class="form-control" id="inputEmail4" name="paragraph">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Word to censor</label>
          <input type="text" class="form-control" id="inputPassword4" name="word">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Go</button>
        </div>
      </form>
    </div>


  </main>




  <script src="js/script.js" type="module"></script>
</body>

</html>