
<?php 

require_once ('MysqliDb.php');
$db = new MysqliDb ('localhost', 'root', '', 'jewelry_db');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/269238eb9d.js"
      crossorigin="anonymous"
    ></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="styles.css" />

    <title>Homepage</title>
  </head>
  <body >
    <header>
      <nav>
        <img class="logo" src="images/logo.png" alt="logo" />
        <p class="cart"><i class="fa-solid fa-bag-shopping"></i></p>
      </nav>
    </header>

    <section>
      <h1>Mary Jewelry Online Shop</h1>

      <!-- Category Names -->
      <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Necklace</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bracelet</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Ring</button>
        </li>
      </ul>

      <!-- Category Items -->
      <div class="tab-content d-flex justify-content-center" id="pills-tabContent">

        <!-- For Necklace -->
        <div class="tab-pane fade show active w-75" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="card-wrapper mb-5">
            <?php 
              $db->where('category', "Necklace");
              $items = $db->get('items');

              foreach($items as $item){
                $images = explode(',' , $item['image']);
            ?>
            <div class="card" data-aos="fade-up">
              <div class="card-image">
                <img src=<?php echo $images[0] ?> alt="" />
              </div>
              <div class="category"><?php echo $item['category'] ?></div>
              <div class="heading">
                <p class="description mb-0"><?php echo $item['description'] ?></p>
                <p class="price mb-0">¥<?php echo $item['price'] ?></p>
              </div>
              <button class="add-button">View details</button>
            </div>
            <?php }?>
          </div>
        </div>

        <!-- For Bracelet -->
        <div class="tab-pane fade w-75" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="card-wrapper">
            <?php 
              $db->where('category', "Bracelet");
              $items = $db->get('items');
              foreach($items as $item){
            ?>
            <div class="card" data-aos="fade-up">
              <div class="card-image">
                <img src=<?php echo $item['image'] ?> alt="" />
              </div>
              <div class="category"><?php echo $item['category'] ?></div>
              <div class="heading">
                <p class="description mb-0"><?php echo $item['description'] ?></p>
                <p class="price mb-0">¥<?php echo $item['price'] ?></p>
              </div>
              <button class="add-button">View details</button>
            </div>
            <?php }?>
          </div>
        </div>

        <!-- For Ring -->
        <div class="tab-pane fade w-75" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="card-wrapper">
            <?php 
              $db->where('category', "Ring");
              $items = $db->get('items');
              foreach($items as $item){
            ?>
            <div class="card" data-aos="fade-up">
              <div class="card-image">
                <img src=<?php echo $item['image'] ?> alt="" />
              </div>
              <div class="category"><?php echo $item['category'] ?></div>
              <div class="heading">
                <p class="description mb-0"><?php echo $item['description'] ?></p>
                <p class="price mb-0">¥<?php echo $item['price'] ?></p>
              </div>
              <button class="add-button">View details</button>
            </div>
            <?php }?>
          </div>
        </div>

      </div>
      
    </section>

    <!-- <footer>
      <div class="footer-info">
        <div>
          <h3>Mary Jewelry Online Shop</h3>
          <p>2023 | All rights reserved.</p>
        </div>
        <div >
          <ul class="socials">
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
          </ul>
        </div>
      </div>
    </footer> -->

    <!-- For Animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
