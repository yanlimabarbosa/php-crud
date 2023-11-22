<h1>Novo Livro</h1>
<?php
$sql = "SELECT * FROM livros WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();


?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id ?>">
  <div>
    <label>Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>">
  </div>
  <div>
    <label>Autor</label>
    <input type="text" name="autor" value="<?php print $row->autor; ?>">
  </div>
  <div>
    <label>Data de Lançamento</label>
    <input type="date" name="data_lancamento" value="<?php print $data_lancamento; ?>">
  </div>
  <div>
    <label>Quantidade em Estoque</label>
    <input type="number" name="qtd_estoque" value="<?php print $row->qtd_estoque; ?>">
  </div>
  <div>
    <button type="submit">Enviar</button>
  </div>
</form>