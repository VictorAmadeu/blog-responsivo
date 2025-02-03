<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Responsivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main class="container mt-5">
        <h1 class="text-center">Bem-vindo ao Blog Responsivo</h1>
        <p class="text-center">Explore os posts mais recentes abaixo.</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/post_culinaria.jpg" class="card-img-top img-thumbnail" alt="Post de Culinária">
                    <div class="card-body">
                        <h5 class="card-title text-center">Culinária</h5>
                        <p class="card-text">Por que Cozinhar é Mais do que Apenas Fazer Comida?</p>
                        <a href="posts/view.php?post=culinaria" class="btn btn-primary">Leia Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/post_technology.jpg" class="card-img-top img-thumbnail" alt="Post de Tecnologia">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tecnologia</h5>
                        <p class="card-text">Inteligência Artificial: A Revolução Tecnológica que Está Transformando o Mundo.</p>
                        <a href="posts/view.php?post=tecnologia" class="btn btn-primary">Leia Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/post_travel.jpg" class="card-img-top img-thumbnail" alt="Post de Viagens">
                    <div class="card-body">
                        <h5 class="card-title text-center">Viagens</h5>
                        <p class="card-text">Viagem: A Arte de Descobrir o Mundo e a Si Mesmo.</p>
                        <a href="posts/view.php?post=viagens" class="btn btn-primary">Leia Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>