<?php include_once "includes/connect.php";?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<link rel="stylesheet" href="css/main.css"/>
  <head>
       
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Menu</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/album-rtl/"
    />

    <!-- Bootstrap core CSS -->
    <link
      href="/docs/5.1/dist/css/bootstrap.rtl.min.css"
      rel="stylesheet"
      integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q"
      crossorigin="anonymous"
    />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="img/pancake.jpg"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="/docs/5.1/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="/docs/5.1/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json" />
    <link
      rel="mask-icon"
      href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg"
      color="#7952b3"
    />
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#7952b3" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  </nav>
    
   

    </header>

    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">MENU</h1>
            <p class="lead text-muted">
            </p>
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php 
            $sql = "SELECT * FROM products";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

          foreach($result as $res){
          ?>


            <div class="col">
              <div class="card shadow-sm">
                <img class="zoom" src="img/<?php echo $res['img'];?>">                
                  <title><?php echo $res['title'];?></title>
                  <rect width="100%" height="100%" fill="#55595c" />
                  
                 
                </svg>

                <div class="card-body">
                  <p class="card-text">
                  <?php echo $res['titel'];?>
                    </p>

                  <div
                  >
                    <div class="btn-group">
        
                    </div>
                    <small class="text-muted"><?php echo $res['price'];?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
           
          </div>
        </div>
      </div>
    </main>

    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
        </p>


         
          <a href="/docs/5.1/getting-started/introduction/ "></a>.
        </p>
      </div>
    </footer>

    <script
      src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
