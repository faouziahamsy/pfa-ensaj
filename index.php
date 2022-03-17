<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <?php include "./componnents/header.php"?>
        <title> departement TRI </title>
    </head>
<body>
      <!--- Navbar-->
      <div class="navbar">
          <div class="container flex">
              <h1 class="logo">departement TRI</h1>
              <nav>
                  <ul>
                      <li><a href="./index.html">Home</a></li>
                      <li><a href="./isic.php">Programme ISIC</a></li>
                      <li><a href="iite.html">Programme IITE</a></li>
                  </ul>
              </nav>
            </div>
      </div>
      <?php include "./componnents/navbar.php"?>
    <h1> Index page </h1>
    <h2>welcome</h2>
    <div class="container mt-4">
        
    </div>


    <?php include "./componnents/scripts.php"?>

      <!----Showcase------>
      <section class="showcase">
          <div class="container grid ">
              <div class="showcase=text">
                <img src="image.jpg"
                alt="ENSA EL JADIDA"
                width="400"
                height="341">
                <p>Plateforme TRI Département Télécommunications, Réseaux et Informatique 2021/2022</p>
                <a href="" class="btn btn-outline">Read more</a>
                  <h1>S'identifier</h1>
                  <form>
                    <div class="formcontrol">
                        <p>User : 
                                 <input type="text" name="User">
                        </p>
                        <p>password:
                            <input type="text" name="password">
                        </p>
                    </div>
                    <input type="submit" value="OK" class="btn btn-primary">
                </form>
              </div>
              <div class="showcase-form card"></div>
                <h2> new user  </h2>
                <form>
                    <div class="formcontrol">
                        <input type="text" name="user" placeholder="enter your name ">
                    </div>
                    <div class="formcontrol">
                        <input type="text" name="last name" placeholder="enter your last name">
                    </div>
                    <div class="formcontrol">
                        <input type="email" name="" placeholder="email"required>
                    </div>
                    <input type="submit" value="send" class="btn btn-primary">
                </form>
          </div>
      </section>
</body>
</html>