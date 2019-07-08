<?php require_once __DIR__ . '/../../layout/header.php'; ?>

<div class="container">
    <h3>Histórico de Pesquisas Enviadas</h3>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Pesquisa</th>
                <th class="text-center">Cliente</th>
                <th class="text-center">Data Envio</th>
            </tr>
        </thead>

        <tbody>
        <?php
        if($data['lista']){
            foreach($data['lista'] as $item){
            ?>
            <tr>
                <td><?=$item->idenvio?></td>
                <td><?=$item->idpesquisa?></td>
                <td><?=$item->idcliente?></td>
                <td><?=$item->dataenvio?></td>
            </tr>
            <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../../layout/footer.php'; ?>
