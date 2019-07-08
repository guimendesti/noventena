<?php require_once __DIR__ . '/../../layout/header.php'; ?>

<div class="container">
    <h3>Pesquisas</h3>
    <a class="btn btn-success btn-novo" href="/pesquisas/criar">Novo</a>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Descrição</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if($data['lista']){
                foreach($data['lista'] as $item){
                ?>
                <tr>
                    <td><?=$item->idpesquisa?></td>
                    <td><?=$item->nome?></td>
                    <td><?=$item->descricao?></td>
                    <td class="acoes">
                        <a href="/pesquisas/editar/1"><i class="fa fa-edit icon-blue"></i></a>
                        <a onclick="if(confirm('Tem certeza que deseja deletar?')){ return acaoDeletar('pesquisa', <?=$item->idpesquisa?>); } return false;" href="#"><i class="fa fa-close icon-red"></i></a>
                    </td>
                </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
