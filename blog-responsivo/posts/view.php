<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit;
}
// Capturar o parâmetro 'post' da URL
$post = isset($_GET['post']) ? $_GET['post'] : '';

// Definir os dados para cada post
$posts = [
    'culinaria' => [
        'title' => 'Por que Cozinhar é Mais do que Apenas Fazer Comida?',
        'image' => '../img/post_culinaria.jpg',
        'content' => '<h2 class="text-center">O Encanto da Culinária: Muito Além das Receitas</h2>
        <p style="text-indent: 2em;">A culinária é uma arte que vai muito além de simplesmente misturar ingredientes e seguir instruções. Cozinhar é uma forma de expressão, uma maneira de compartilhar cultura, tradição e afeto. Cada prato carrega consigo uma história, um pedaço de um povo, de um momento e, muitas vezes, de uma memória afetiva que nos transporta no tempo.</p>
        <h3 class="text-center">A Comida Como Experiência Sensorial</h3>
        <p style="text-indent: 2em;">Ao preparar ou saborear um prato, nossos sentidos são despertados. O aroma de um pão recém-saído do forno, o som crocante de um ingrediente frito na manteiga, a textura macia de uma sobremesa ou a explosão de sabores na boca são experiências que marcam nossa relação com os alimentos. Comer não é apenas uma necessidade fisiológica, mas um evento sensorial que nos conecta ao mundo de uma maneira única.</p>
        <h3 class="text-center">Cultura e Tradição à Mesa</h3>
        <p style="text-indent: 2em;">Os hábitos alimentares de uma região são reflexo da sua cultura e da sua história. Cada país, cada cidade e até cada família tem suas próprias tradições culinárias, passadas de geração em geração. O modo como certos ingredientes são combinados e preparados carrega influências históricas, geográficas e sociais. Por isso, ao explorar diferentes culinárias, estamos também conhecendo um pouco mais sobre os povos e suas raízes.</p>
        <h3 class="text-center">Cozinhar Como Terapia</h3>
        <p style="text-indent: 2em;">Muitas pessoas encontram na culinária uma forma de relaxamento. Preparar um prato pode ser uma atividade meditativa, um momento de concentração e criatividade. O processo de cozinhar nos convida a estar presentes no agora, a sentir a textura dos ingredientes, a observar as cores e aromas, e a dedicar nossa atenção a cada detalhe. Além disso, a satisfação de preparar algo com as próprias mãos e compartilhar com outras pessoas traz uma sensação de realização e bem-estar.</p>
        <h3 class="text-center">O Futuro da Culinária</h3>
        <p style="text-indent: 2em;">A gastronomia está em constante evolução. Novas técnicas, tendências e inovações surgem a todo momento, seja com a culinária sustentável, que busca reduzir o desperdício e valorizar os ingredientes locais, seja com a fusão gastronômica, que combina tradições de diferentes partes do mundo em um único prato. Além disso, a tecnologia tem desempenhado um papel importante, tornando a cozinha mais acessível e permitindo novas experiências gastronômicas.</p>
        <p style="text-indent: 2em;">A culinária é, acima de tudo, uma forma de conexão — com a nossa história, com os outros e até com nós mesmos. Seja para inovar, resgatar tradições ou simplesmente desfrutar de uma boa refeição, cozinhar sempre será uma das formas mais genuínas de viver e compartilhar momentos inesquecíveis.</p>'
    ],
    'tecnologia' => [
        'title' => 'Inteligência Artificial: A Revolução Tecnológica que Está Transformando o Mundo',
        'image' => '../img/post_technology.jpg',
        'content' => '<h2 class="text-center">Inteligência Artificial: O Futuro Já Começou</h2>
        <p style="text-indent: 2em;">A inteligência artificial (IA) já deixou de ser um conceito futurista e se tornou parte do nosso dia a dia. Desde assistentes virtuais em nossos smartphones até algoritmos que personalizam o conteúdo que consumimos na internet, a IA está moldando a forma como interagimos com o mundo digital. Mas, afinal, o que é essa tecnologia e até onde ela pode nos levar?</p>
        <h3 class="text-center">O Que é Inteligência Artificial?</h3>
        <p style="text-indent: 2em;">Inteligência artificial é o campo da computação que busca desenvolver sistemas capazes de realizar tarefas que normalmente exigiriam inteligência humana, como aprender com dados, reconhecer padrões, tomar decisões e até mesmo criar conteúdo. Diferente de simples programas baseados em regras, a IA evolui com o tempo, tornando-se cada vez mais eficiente e adaptável.</p>
        <h3 class="text-center">Como a IA Está Transformando o Mundo?</h3>
        <p style="text-indent: 2em;">A IA está presente em praticamente todas as áreas da sociedade. No setor da saúde, por exemplo, já existem algoritmos capazes de diagnosticar doenças com precisão comparável à de médicos experientes. Na indústria automobilística, os carros autônomos prometem revolucionar o transporte. No entretenimento, plataformas de streaming usam IA para sugerir filmes e músicas com base nos gostos dos usuários.</p>
        <h3 class="text-center">Desafios e Questões Éticas</h3>
        <p style="text-indent: 2em;">Com o avanço da inteligência artificial, surgem também preocupações sobre ética e segurança. O uso de IA em reconhecimento facial, por exemplo, levanta debates sobre privacidade. O impacto da automação no mercado de trabalho também gera discussões sobre a substituição de empregos por máquinas.</p>
        <h3 class="text-center">O Futuro da Inteligência Artificial</h3>
        <p style="text-indent: 2em;">A IA está longe de atingir todo o seu potencial. Nos próximos anos, espera-se que a tecnologia se torne ainda mais integrada ao nosso cotidiano, tornando processos mais rápidos e eficientes. A inteligência artificial também poderá ajudar na solução de problemas globais, como mudanças climáticas e pandemias, otimizando a análise de dados e permitindo respostas mais ágeis.</p>'
    ],
    'viagens' => [
        'title' => 'Viajar: A Arte de Explorar o Mundo e a Si Mesmo',
        'image' => '../img/post_travel.jpg',
        'content' => '<h2 class="text-center">Viajar: A Arte de Explorar o Mundo e a Si Mesmo</h2>
        <p style="text-indent: 2em;">Viajar é muito mais do que simplesmente ir de um lugar para outro. É uma experiência que transforma, ensina e nos permite ver o mundo com novos olhos. Cada destino visitado carrega histórias, culturas e paisagens únicas, proporcionando momentos inesquecíveis que enriquecem a vida.</p>
        <h3 class="text-center">A Magia de Conhecer Novos Lugares</h3>
        <p style="text-indent: 2em;">Explorar um novo destino desperta nossa curiosidade e nos tira da rotina. Ao viajar, nos deparamos com diferentes modos de vida, tradições e perspectivas, o que amplia nossa visão de mundo. Seja uma cidade vibrante, uma praia paradisíaca ou uma vila remota nas montanhas, cada lugar tem algo especial a oferecer.</p>
        <h3 class="text-center">Memórias Que Ficam Para Sempre</h3>
        <p style="text-indent: 2em;">As melhores lembranças de uma viagem nem sempre estão nos pontos turísticos famosos, mas nos momentos inesperados. Pode ser uma conversa com um morador local, um pôr do sol visto do alto de uma montanha ou uma refeição caseira feita com carinho. Essas experiências são únicas e tornam cada viagem especial de um jeito próprio.</p>
        <h3 class="text-center">Viajar Também é se Redescobrir</h3>
        <p style="text-indent: 2em;">Toda viagem é, de certa forma, uma jornada interior. Estar longe de casa nos permite refletir, conhecer novas versões de nós mesmos e desenvolver mais autoconfiança. A cada aventura, descobrimos que somos mais capazes e resilientes do que imaginávamos.</p>
        <h3 class="text-center">O Futuro das Viagens</h3>
        <p style="text-indent: 2em;">Nos últimos anos, a forma como viajamos tem mudado. O turismo sustentável tem ganhado destaque, incentivando práticas que respeitam o meio ambiente e as comunidades locais. O nomadismo digital também se tornou uma tendência, permitindo que muitas pessoas trabalhem remotamente enquanto exploram diferentes partes do mundo.</p>'
    ]
];

// Verificar se o post existe
if (array_key_exists($post, $posts)) {
    $postData = $posts[$post];
} else {
    // Se o post não existir, exibir um erro
    $postData = [
        'title' => 'Erro: Post Não Encontrado',
        'image' => '../img/error.jpg', // Use uma imagem de erro ou placeholder
        'content' => '<p class="text-danger">O post que você está tentando acessar não existe ou foi removido. Por favor, volte à página inicial e escolha um post válido.</p>'
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $postData['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .post-image {
            max-width: 30%;
            height: auto;
            margin: 20px auto;
            display: block;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Ajustes para tecnologia e viagens */
        .post-image[data-post="tecnologia"], .post-image[data-post="viagens"] {
            max-width: 40%; /* Aumentado novamente */
        }

        .post-content {
            text-align: justify;
            margin: 20px;
        }
        @media (max-width: 768px) {
            .post-image {
                max-width: 50%;
            }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main class="container mt-5">
    <h1 class="text-center mb-4"><?php echo $postData['title']; ?></h1>
    <img src="<?php echo $postData['image']; ?>" class="post-image" alt="<?php echo $postData['title']; ?>" data-post="<?php echo $post; ?>">
    <div class="post-content">
        <?php echo $postData['content']; ?>
    </div>
</main>
    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>