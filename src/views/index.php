<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="/css/datatables.css" rel="stylesheet" crossorigin="anonymous">
  <link href="/css/bootstrap-icons.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid d-flex">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index.php?r=formsongs">Add Songs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index.php?r=credits">Credits</a>
            </li>
          </ul>
          <h1 class="text-white mx-4">Test Project 1</h1>
        </div>
      </div>
    </nav>
  </div>

  <!-- Content -->
  <div class="container d-flex h-100 w-100 mt-4">
    <div class="w-50 mx-4">
      <div class="container mt-3 mb-4">
        <div class="bg-custom-grey">
          <div class="custom-container-title">
            <p class="mx-4 p-2">Player</p>
          </div>
          <div class="">
            <p class="mx-4 p-2">
              <span id="songInfo">Cançó (Artista) (el que está sonant)</span>
              <button id="play-btn" class="btn btn-primary">
                <i class="bi bi-play fs-4"></i>
              </button>
              <button id="stop-btn" class="btn btn-secondary">
                <i class="bi bi-pause fs-4"></i>
              </button>

            </p>

          </div>
        </div>
      </div>
      <div class="container mt-3 mb-4">
        <div class="bg-custom-grey">
          <div class="custom-container-title">
            <p class="mx-4 p-2">Opcions</p>
          </div>
          <div class="">
            <form action="">
              <div>
                <label class="mx-4 p-2">Aleatori</label>
                <input id="btn-random" class="mx-4 p-2" type="checkbox">
              </div>
              <div>
                <label class="mx-4 p-2">Silencia</label>
                <input id="mute-btn" class="mx-4 p-2" type="checkbox">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container mt-3 d-block mb-4">
        <div class="bg-custom-grey">
          <div class="custom-container-title">
            <p class="mx-4 p-2">Player</p>
          </div>
          <div class="">
            <p class="mx-4 p-2">
              Cançó (Artista) (cançó anterior)
              <button id="play-btn" class="btn btn-primary">
                <i class="bi bi-play fs-4"></i>
              </button>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Songs list -->
    <div class="w-50">
      <h2>Llista de cançons</h2>
      <div class="container bg-custom-grey h-100 border p-4 rounded container-fluid">
        <?php if (!empty($songs)): ?>
          <?php foreach ($songs as $song): ?>
            <ul class="w-100">
              <li class="p-2 m-2" id="songList"><?= $song['song_name'] ?> (<?= $song['artist'] ?>)
                <button id="play-btn" class="btn btn-primary">
                  <i class="bi bi-play fs-4"></i>
                </button>

                <!-- Botó de editar -->
                <a href="index.php?r=editsong&id=<?= $song['id_song'] ?>" class="btn btn-warning btn-sm me-2">
                  <i class="fas fa-edit"></i> Editar
                </a>

                <!-- Botón Eliminar -->
                <a href="index.php?r=songdelete&id=<?= $song['id_song'] ?>" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash-alt"></i> Eliminar
                </a>

                <input type="hidden" value="<?= $song['song_path'] ?>">
              </li>
            </ul>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
  </div>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/jquery-3.7.1.min.js"></script>
  <script src="/js/datatables.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/song.js"></script>
</body>

</html>