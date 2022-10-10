<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style >
        .body{
            min-height: 2000px;
        }
        .jumbotron{
            padding-top: 6rem;
            background-color: #e2edff;
        }
        #project{
            background-color: #e2edff;
        }
        section{
            padding-top: 5rem;
        }
    </style>
    <title>Aqhlaq dan pergaulan Islami</title>
  </head>
  <body id="home">

    <!-- #region Navibar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Sodikin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="<?php echo site_url('Hello/index') ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Akhlak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Ayat</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#adab">Pergaulan</a>
              </li>
            <!--  
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Contacts</a>
              </li>
            -->
            </ul>
          </div>
        </div>
      </nav>
    <!-- #endregion Nav-->

    <!-- #region -->
    <section class="jumbotron text-center" >
        <img src="https://lh3.googleusercontent.com/-OeNZ9I_7YZA/Yaj8SJhVfDI/AAAAAAAATT4/sDwCw6t63ycUQUIyNQAPco_zAYjc4UpWQCNcBGAsYHQ/image.png" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Sodikin</h1>
        <p class="lead fw-bold">AKHLAK PERGAULAN ISLAMI</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,208C640,213,800,139,960,122.7C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!-- #endregion -->
    
    <!-- #region About -->
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Akhlak</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center mb-3">
                <div class="col-md-4">
                    <p>Akhlak secara terminologi berarti tingkah laku seseorang yang didorong oleh suatu keinginan secara sadar untuk melakukan suatu perbuatan yang baik. Akhlak merupakan bentuk jamak dari kata khuluk, berasal dari bahasa Arab yang berarti perangai, tingkah laku, atau tabiat    
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1" d="M0,192L48,165.3C96,139,192,85,288,96C384,107,480,181,576,197.3C672,213,768,171,864,149.3C960,128,1056,128,1152,149.3C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">

            </path>
        </svg>
    </section>
    <!-- #endregion Akhir about-->
    
    
    <!-- #region Project -->
    <section id="project">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Ayat</h2>
                </div> 
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="image.png" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">An-Nisa ayat 36</h5>
                            <p class="card-text">"Sembahlah Allah dan janganlah kamu mempersekutukan-Nya dengan sesuatupun. Dan berbuat baiklah kepada dua orang ibu-bapak, karib-kerabat, anak-anak yatim, orang-orang miskin, tetangga yang dekat dan tetangga yang jauh, dan teman sejawat, ibnu sabil dan hamba sahayamu. Sesungguhnya Allah tidak menyukai orang-orang yang sombong dan membangga-banggakan diri"
                            </p>    
                            <a href=".." class="btn btn-primary">AYAT ALLAH</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                            <img src="https://lh3.googleusercontent.com/-WdtfyXkNt_I/Yajnc6y74MI/AAAAAAAATTw/UVCNANy2rVEDcDTv_yO_FtDSKSHzn8L4QCNcBGAsYHQ/Cat.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">From KUCING</h5>
                                <p class="card-text">?.</p>
                                <a href="#" class="btn btn-primary">KUCING UNYU</a>
                            </div>        
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,192L26.7,208C53.3,224,107,256,160,234.7C213.3,213,267,139,320,112C373.3,85,427,107,480,149.3C533.3,192,587,256,640,245.3C693.3,235,747,149,800,101.3C853.3,53,907,43,960,48C1013.3,53,1067,75,1120,80C1173.3,85,1227,75,1280,85.3C1333.3,96,1387,128,1413,144L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">

            </path>
        </svg>
    </section>
    <!-- #endregion Akhir Project -->

        <!-- #region About -->
        <section id="adab">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>Adab Pergaulan Remaja dalam Islam</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-justify mb-3">
                    <div class="col-md-4">
                        <p>Berikut adalah contoh adab pergaulan remaja menurut Islam sebagaimana dikutip dari buku Akidah Akhlak Kementerian Agama RI 2020. <br><br>
                           <b> 1. Menjaga sopan santun.</b> Sopan santun diperlukan dalam bertindak dan berucap. Hal ini dilakukan demi menghargai orang lain atau antar sesama remaja.<br>
                           <b> 2. Mengerti dan memahami.</b> Dua sifat ini bisa menimbulkan dampak positif. Yakni dapat terjalinnya persahabatan antar remaja hingga waktu yang cukup lama <br>
                           <b> 3. Selalu mengajak ke arah kebaikan.</b> Mengajak ke arah kebaikan dapat meningkatkan iman dan taqwa kepada Allah SWT. Seorang remaja diharapkan selalu dapat menjadi rekan bagi temannya untuk selalu mengajak ke jalan kebaikan. <br>
                           <b> 4. Saling membantu.</b> Dalam pergaulan, dibutuhkan sikap saling membantu. Selain itu, juga diiringi sifat lapang dada. <br>
                           <b> 5. Jujur dan Adil.</b> Dua sifat yang penting dimiliki remaja. Dengan menanamkan perilaku jujur, maka tidak akan menimbulkan masalah bagi orang lain. Demikian pula perilaku adil atau tidak pilih kasih terhadap sesama. <br> 
                           <b> 6. Berjuang mencari ilmu. </b> Sebagai seorang remaja, mencari ilmu merupakan hal terpenting sebelum memasuki masa dewasa.
                        </p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#e2edff" fill-opacity="1" d="M0,192L48,165.3C96,139,192,85,288,96C384,107,480,181,576,197.3C672,213,768,171,864,149.3C960,128,1056,128,1152,149.3C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    
                </path>
            </svg>
        </section>
       
    
    <!-- #region -->
        <footer class="bg-primary text-white text-center pb-5">
            <p>Created with Love by: <a href="https://www.instagram.com/tsoedikun._y/" class="text-white fw-bold">Sodikin</a></p>
        </footer>
    <!-- #endregion -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>