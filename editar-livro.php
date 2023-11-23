<?php
$sql = "SELECT * FROM livros WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();


?>
<form action="?page=salvar" method="POST" class="form glass">
  <h1 class="title">Edite seu livro</h1>
  <h1 class="subtitle">Preencha os dados</h1>
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id ?>">
  <div>
    <label class="label-title">Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>">
  </div>
  <div>
    <label class="label-title">Autor</label>
    <input type="text" name="autor" value="<?php print $row->autor; ?>">
  </div>
  <div>
    <label class="label-title">Data de Lançamento</label>
    <input type="date" name="data_lancamento" value="<?php print $data_lancamento; ?>">
  </div>
  <div>
    <label class="label-title">Quantidade em Estoque</label>
    <input type="number" name="qtd_estoque" value="<?php print $row->qtd_estoque; ?>">
  </div>
  <div>
    <button type="submit">Enviar</button>
  </div>
</form>