<div class="container">
    <h2 class="bi bi-film"><i class="bi bi-plus"></i>Cadastro de nova categoria</h2>

    <form action="index.php?menu=inserir-categorias" method="post">
        <div class="mb-3 col-6">
            <label class="form-label" for="nomeCategoria">Nome da Categoria</label>
            <input class="input-group" type="text" name="nomeCategoria" id="nomeCategoria">
        </div>

        <div class="mb-3">
            <input class="btn btn-success bi bi-floppy-fill" type="submit" value="Salvar">
        </div>
    </form>
</div>