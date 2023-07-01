
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
    <script src="https://kit.fontawesome.com/269238eb9d.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Homepage</title>

    <!-- Typewriter Animation -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <style>
        body{
          font-family: 'Inter', sans-serif;
        }
        .cta {
          border: none;
          background: none;
        }

        .cta span {
          padding-bottom: 7px;
          letter-spacing: 4px;
          font-size: 14px;
          padding-right: 15px;
          text-transform: uppercase;
        }

        .cta svg {
          transform: translateX(-8px);
          transition: all 0.3s ease;
          color: black;
        }

        .cta:hover svg {
          transform: translateX(0);
        }

        .cta:active svg {
          transform: scale(0.9);
        }

        .hover-underline-animation {
          position: relative;
          color: black;
          padding-bottom: 20px;
        }

        .hover-underline-animation:after {
          content: "";
          position: absolute;
          width: 100%;
          transform: scaleX(0);
          height: 2px;
          bottom: 0;
          left: 0;
          background-color: black;
          transform-origin: bottom right;
          transition: transform 0.25s ease-out;
        }

        .cta:hover .hover-underline-animation:after {
          transform: scaleX(1);
          transform-origin: bottom left;
        }

        @media only screen and (min-width: 1260px) {
          .hover-underline-animation:after{
            background-color: white;
          }
          .cta svg {
          transform: translateX(-8px);
          transition: all 0.3s ease;
          color:white;
        }
        }
    </style>
  </head>
  <body>
    <header>
      <h1 class="font-bold text-6xl mb-4 text-center">mary.</h1>
    </header>

    <section class="lg:h-screen grid justify-items-center">
      <div class="flex">
        <img class="h-full w-full lg:h-full lg:w-fit" src="images/image5.jpg" alt="">
      </div>
    </section>


    <section class="lg:h-40 lg:flex justify-between p-4 mb-10">
      <div class="lg:w-1/2">
        <p class="font-bold text-4xl mb-8 lg:text-8xl xl:text-white" id="first-title"></p>
      </div>
      <div class="lg:text-center text-lg">
        <a href="items.php">
          <button class="cta flex lg:mt-24 xl:text-white">
              <span class="hover-underline-animation xl:text-white"> View our collections</span>
              <svg class="mt-2 xl:text-white" viewBox="0 0 46 16"  height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                  <path transform="translate(30)" fill="currentColor" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
              </svg>
          </button>
        </a>
      </div>
    </section>
    
    <!-- Best Seller -->
    <section class="xl:mt-40">
      <div class="pl-4 lg:w-1/2">
        <p class="font-bold text-4xl mb-8 lg:text-8xl">our best sellers</p>
      </div>
      <div class="grid justify-items-center">
        <!-- Card Grid -->
        <div class="w-full lg:w-11/12 grid grid-flow-row text-neutral-600 justify-items-center grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
          
          <!-- Card Item -->
          <div class="mb-4 lg:my-8 w-11/12 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
              <!-- Image -->
              <img src="images/bracelet1.jpg" class="rounded-t lg:h-68 w-full object-cover" />

              <div class="p-2">
                <!-- Category -->
                <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed">Bracelet</p>

                <!-- Description -->
                <p class="text-md lg:text-2xl">Bracelet 1 | 4k Gold</p>

                <!-- Price -->
                <p class="text-md lg:text-xl font-bold">¥20,000</p>
              </div>
          </div> 
          <!-- End of Card Item -->

           <!-- Card Item -->
           <div class="mb-4 lg:my-8 w-11/12 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
              <!-- Image -->
              <img src="images/bracelet1.jpg" class="rounded-t lg:h-68 w-full object-cover" />

              <div class="p-2">
                <!-- Category -->
                <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed">Bracelet</p>

                <!-- Description -->
                <p class="text-md lg:text-2xl">Bracelet 1 | 4k Gold</p>

                <!-- Price -->
                <p class="text-md lg:text-xl font-bold">¥20,000</p>
              </div>
          </div> 
          <!-- End of Card Item -->

           <!-- Card Item -->
           <div class="mb-4 lg:my-8 w-11/12 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
              <!-- Image -->
              <img src="images/bracelet1.jpg" class="rounded-t lg:h-68 w-full object-cover" />

              <div class="p-2">
                <!-- Category -->
                <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed">Bracelet</p>

                <!-- Description -->
                <p class="text-md lg:text-2xl">Bracelet 1 | 4k Gold</p>

                <!-- Price -->
                <p class="text-md lg:text-xl font-bold">¥20,000</p>
              </div>
          </div> 
          <!-- End of Card Item -->

           <!-- Card Item -->
           <div class="mb-4 lg:my-8 w-11/12 rounded duration-300 hover:-translate-y-4 lg:hover:-translate-y-8">
              <!-- Image -->
              <img src="images/bracelet1.jpg" class="rounded-t lg:h-68 w-full object-cover" />

              <div class="p-2">
                <!-- Category -->
                <p class="text-sm lg:text-xl text-yellow-500 font-bold leading-relaxed">Bracelet</p>

                <!-- Description -->
                <p class="text-md lg:text-2xl">Bracelet 1 | 4k Gold</p>

                <!-- Price -->
                <p class="text-md lg:text-xl font-bold">¥20,000</p>
              </div>
          </div> 
          <!-- End of Card Item -->

          


        </div>
      </div>
    </section>

    <!-- Image -->
    <section>
      <div>
        <img class="h-full w-full lg:h-full lg:w-fit" src="images/image10.jpg" alt="">
      </div>
    </section>
    
    <!-- Why Choose Us Portion -->
    <section class="h-screen p-4">
      <!-- Wrapper -->
      <div class="grid justify-items-center">
        <!-- Header -->
        <div class="">
          <p class="font-bold text-4xl mb-8 lg:text-8xl">why choose us??</p>
        </div>

        <!-- Items  -->
        <div class="w-11/12">
          <!-- Upper item -->
          <div class="grid lg:grid-cols-3 lg:mb-20">

            <!-- First Item -->
            <div class="grid justify-items-center mb-8">
              <div class="p-4 flex lg:p-12 ">
                <!-- Image -->
                <p class="text-center pt-2 w-1/3 h-full text-6xl"><i class="fa-solid fa-wand-magic-sparkles"></i></p>
                <!-- Info -->
                <div class="w-full lg:w-80">
                  <p class="font-bold text-xl lg:text-2xl">Unique Design</p>
                  <p class="text-sm md:text-lg">Unique and trendy designs you cannot get from other stores.</p>
                </div>
              </div>
            </div>
            <!-- End of first Item -->

            <!-- Second Item -->
            <div class="grid justify-items-center mb-8">
              <div class="p-4 flex lg:p-12 ">
                <!-- Image -->
                <p class="text-center pt-2 w-1/3 h-full text-6xl"><i class="fa-solid fa-shield-heart"></i></p>
                <!-- Info -->
                <div class="w-full lg:w-80">
                  <p class="font-bold text-xl lg:text-2xl">Unique Design</p>
                  <p class="text-sm md:text-lg">Unique and trendy designs you cannot get from other stores.</p>
                </div>
              </div>
            </div>
            <!-- End of first Item -->

            <!-- Third Item -->
            <div class="grid justify-items-center mb-8">
              <div class="p-4 flex lg:p-12 ">
                <!-- Image -->
                <p class="text-center pt-2 w-1/3 h-full text-6xl"><i class="fa-solid fa-yen-sign"></i></p>
                <!-- Info -->
                <div class="w-full lg:w-80">
                  <p class="font-bold text-xl lg:text-2xl">Unique Design</p>
                  <p class="text-sm md:text-lg">Unique and trendy designs you cannot get from other stores.</p>
                </div>
              </div>
            </div>
            <!-- End of first Item -->

          </div>
          <!-- End of Upper Item -->

          <!-- Lower item -->
          <div class="grid lg:grid-cols-3 ">

            <!-- First Item -->
            <div class="grid justify-items-center mb-8">
              <div class="p-4 flex lg:p-12 ">
                <!-- Image -->
                <p class="text-center pt-2 w-1/3 h-full text-6xl"><i class="fa-solid fa-truck-fast"></i></p>
                <!-- Info -->
                <div class="w-full lg:w-80">
                  <p class="font-bold text-xl lg:text-2xl">Unique Design</p>
                  <p class="text-sm md:text-lg">Unique and trendy designs you cannot get from other stores.</p>
                </div>
              </div>
            </div>
            <!-- End of first Item -->

            <!-- Second Item -->
            <div class="grid justify-items-center mb-8">
              <div class="p-4 flex lg:p-12 ">
                <!-- Image -->
                <p class="text-center pt-2 w-1/3 h-full text-6xl"><i class="fa-solid fa-tag"></i></p>
                <!-- Info -->
                <div class="w-full lg:w-80">
                  <p class="font-bold text-xl lg:text-2xl">Unique Design</p>
                  <p class="text-sm md:text-lg">Unique and trendy designs you cannot get from other stores.</p>
                </div>
              </div>
            </div>
            <!-- End of first Item -->

            <!-- Third Item -->
            <div class="grid justify-items-center mb-8">
              <div class="p-4 flex lg:p-12 ">
                <!-- Image -->
                <p class="text-center pt-2 w-1/3 h-full text-6xl"><i class="fa-solid fa-user-check"></i></p>
                <!-- Info -->
                <div class="w-full lg:w-80">
                  <p class="font-bold text-xl lg:text-2xl">Unique Design</p>
                  <p class="text-sm md:text-lg">Unique and trendy designs you cannot get from other stores.</p>
                </div>
              </div>
            </div>
            <!-- End of first Item -->

          </div>
          <!-- End of Lower Item -->
  
        </div>
        <!-- End of Items -->

      </div>
      <!-- End of Wrapper -->
    </section>
    
    <!-- Typewriter Function -->
    <script>
      var app = document.getElementById("first-title");

      var typewriter = new Typewriter(app, {
        loop: true,
      });

      typewriter
        .typeString("jewelry is our passion")
        .pauseFor(2500)
        .deleteAll()
        .typeString("we never go out of style")
        .pauseFor(2500)
        .deleteAll()
        .start();
    </script>


    <!-- For Animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
