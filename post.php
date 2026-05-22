<?php
  include_once("helpers/url.php");
  include_once("data/posts.php");
  include_once("templates/header.php");
  include_once("data/categories.php");

  $currentPost = null;

  if(isset($_GET['id'])) {
    $postId = (int) $_GET['id'];
    
    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
            break;
        }
    }
  }
?>
  
  <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Uma linguagem de programação funciona como um canal de comunicação estruturado entre a mente humana e os circuitos integrados de um computador, permitindo que instruções lógicas abstratas sejam traduzidas em ações físicas e computacionais executáveis. Composta por um conjunto estrito de regras sintáticas e semânticas, ela serve para que desenvolvedores possam ditar comportamentos de softwares, estruturar bancos de dados, automatizar tarefas repetitivas e criar as interfaces digitais presentes no cotidiano técnico moderno. Essas linguagens variam desde os níveis mais baixos, que conversam diretamente com os registradores do hardware através de códigos densos e complexos, até os níveis mais altos, que utilizam termos em inglês e lógicas matemáticas intuitivas para priorizar a produtividade e a legibilidade humana. Independentemente de ser compilada para gerar um arquivo binário ultrarrápido ou interpretada linha por linha em tempo real por um navegador web, cada linguagem possui um ecossistema próprio desenhado para resolver problemas específicos, transformando sequências textuais puras no motor que impulsiona toda a infraestrutura tecnológica global.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>        
        </ul>
    </aside>
  </main>


<?php
  include_once("templates/footer.php");
?>
