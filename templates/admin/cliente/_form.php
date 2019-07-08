<form name="dados" action="" method="post" enctype="application/x-www-form-urlencoded">

    <div>
        <label>Nome</label>
        <input type="text" name="nome" id="nome" value="<?=(isset($data["dados"]->nome))?$data["dados"]->nome:""?>" class="form-control" />
    </div>

    <div>
        <label>E-mail</label>
        <input type="email" name="email" id="email" value="<?=(isset($data["dados"]->email))?$data["dados"]->email:""?>" class="form-control" />
    </div>

    <div class="margin-top:30px;">
        <button type="submit">Salvar</button>
    </div>

</form>
