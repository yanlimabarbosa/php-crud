<form action="?page=salvar" method="POST" class="form">
  <h1 class="title">Cadastre um Novo Livro</h1>
  <h1 class="subtitle">Preencha os dados</h1>
  <input type="hidden" name="acao" value="cadastrar">
  <div>
    <label class="label-novo-livro">Nome</label>
    <input type="text" name="nome" placeholder="Nome">
  </div>
  <div>
    <label class="label-novo-livro">Autor</label>
    <input type=" text" name="autor">
  </div>
  <div>
    <label class="label-novo-livro">Data de Lancamento</label>
    <input type="date" name="data_lancamento" placeholder=" ">
  </div>
  <div>
    <label class="label-novo-livro">Quantidade em Estoque:</label>
    <input type="number" name="qtd_estoque">
  </div>
  <div>
    <button type="submit" class="send-btn">Enviar</button>
  </div>
</form>