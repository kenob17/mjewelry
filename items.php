
<?php 

require_once ('MysqliDb.php');
$db = new MysqliDb ('localhost', 'root', '', 'jewelry_db');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link rel="stylesheet" href="styles.css" /> -->

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/269238eb9d.js"
      crossorigin="anonymous"
    ></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet"> 

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    

    <title>Homepage</title>
  </head>
  <body >
    <header class="">
      <h1 class="font-bold text-6xl mb-4 text-center">mary.</h1>
    </header>

    <section>
      <h1 class="text-center text-4xl mb-8 font-bold">Mary Jewelry Online Shop</h1>

      <!-- Pill Headers -->
      <div class="grid justify-items-center">
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
            </li>
        </ul>
      </div>
      

      <!-- Pill Contents -->
      <div class="tab-content" id="pills-tabContent">

        <!-- For Necklace -->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

          <div class="p-2 lg:p-8 grid justify-items-center">
            <!-- Card Grid -->
            <div class="w-full lg:w-11/12 grid grid-flow-row text-neutral-600 justify-items-center grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-5">
              
              <?php 
                $db->where('category', "Necklace");
                $items = $db->get('items');

                foreach($items as $item){
                  $images = explode(',' , $item['image']);
              ?>
              <!-- Card Item -->
              <div class="mb-4 lg:my-8 lg:w-80 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
                  <!-- Image -->
                  <img src=<?php echo $images[0] ?> class="rounded-t h-40 lg:h-80  w-full object-cover" />

                  <div class="p-2">
                    <!-- Category -->
                    <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed"><?php echo $item['category'] ?></p>

                    <!-- Description -->
                    <p class="text-md lg:text-2xl"><?php echo $item['description'] ?></p>

                    <!-- Price -->
                    <p class="text-md lg:text-xl font-bold">¥<?php echo $item['price'] ?></p>
                  </div>
              </div> 
              <!-- End of Card Item -->
              <?php }?>
            </div>
          </div> 

        </div>
        <!-- End of For Neclace -->


        <!-- For Bracelet -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="p-2 lg:p-8 grid justify-items-center">
              <!-- Card Grid -->
              <div class="w-full lg:w-11/12 grid grid-flow-row text-neutral-600 justify-items-center grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-5">
                
                <?php 
                  $db->where('category', "Bracelet");
                  $items = $db->get('items');

                  foreach($items as $item){
                    $images = explode(',' , $item['image']);
                ?>
                <!-- Card Item -->
                <div class="mb-4 lg:my-8 lg:w-80 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
                    <!-- Image -->
                    <img src=<?php echo $images[0] ?> class="rounded-t h-40 lg:h-80  w-full object-cover" />

                    <div class="p-2">
                      <!-- Category -->
                      <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed"><?php echo $item['category'] ?></p>

                      <!-- Description -->
                      <p class="text-md lg:text-2xl"><?php echo $item['description'] ?></p>

                      <!-- Price -->
                      <p class="text-md lg:text-xl font-bold">¥<?php echo $item['price'] ?></p>
                    </div>
                </div> 
                <!-- End of Card Item -->
                <?php }?>
              </div>
          </div> 
        </div>
        <!-- End of For Bracelet -->


        <!-- For Rings -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="p-2 lg:p-8 grid justify-items-center">
              <!-- Card Grid -->
              <div class="w-full lg:w-11/12 grid grid-flow-row text-neutral-600 justify-items-center grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-5">
                
                <?php 
                  $db->where('category', "Ring");
                  $items = $db->get('items');

                  foreach($items as $item){
                    $images = explode(',' , $item['image']);
                ?>
                <!-- Card Item -->
                <div class="mb-4 lg:my-8 lg:w-80 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
                    <!-- Image -->
                    <img src=<?php echo $images[0] ?> class="rounded-t h-40 lg:h-80  w-full object-cover" />

                    <div class="p-2">
                      <!-- Category -->
                      <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed"><?php echo $item['category'] ?></p>

                      <!-- Description -->
                      <p class="text-md lg:text-2xl"><?php echo $item['description'] ?></p>

                      <!-- Price -->
                      <p class="text-md lg:text-xl font-bold">¥<?php echo $item['price'] ?></p>
                    </div>
                </div> 
                <!-- End of Card Item -->
                <?php }?>
              </div>
          </div> 

        </div>
        <!-- End of For Rings -->

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
