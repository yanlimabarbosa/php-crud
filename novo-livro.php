<form action="?page=salvar" method="POST" class="form">
  <h1 class="title">Cadastre um Novo Livro</h1>
  <h1 class="subtitle">Preencha os dados</h1>
  <input type="hidden" name="acao" value="cadastrar">
  <div>
    <input type="text" name="nome" placeholder="Nome">
  </div>
  <div>
    <input type=" text" name="autor" placeholder="Autor">
  </div>
  <div>
    <input type="date" name="data_lancamento">
  </div>
  <div>
    <input type="number" name="qtd_estoque" placeholder="Quantidade">
  </div>
  <div>
    <button type="submit" class="send-btn">Enviar</button>
  </div>
</form>