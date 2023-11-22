<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Livro</title>
  </head>

  <body>
    <nav>
      <div>
        <!-- <a href="#">Cadastro</a>
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
        </button> -->
        <div>
          <ul>
            <li>
              <a aria-current="page" href="index.php">Home</a>
            </li>
            <li>
              <a href="?page=novo">Novo Livro</a>
            </li>
            <li>
              <a href="?page=listar">Listar Livros</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div>
      <div>
        <div>
          <?php
          include("config.php");
          switch (@$_REQUEST["page"]) {
            case "novo":
              include("novo-livro.php");
              break;
            case "listar":
              include("listar-livros.php");
              break;
            case "salvar":
              include("salvar-livro.php");
              break;
            case "editar":
              include("editar-livro.php");
            default:
              print "<h1>Bem vindos!</h1>";
          }
          ?>
        </div>
      </div>
    </div>
  </body>

</html>