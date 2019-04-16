<table>
    <tr>
        <td><?=anchor('index','Página Inicial')?></td>
        <td><?=anchor('usuario-novo','Novo Usuário')?></td>
    </tr>
</table>

<?php if ($usuarios == FALSE): ?>
    <h3>Nenhum usuário encontrado</h3>
<?php else: ?>
    <table >
        <thead>
            <tr>
                <th>ID </th>
                <th>Nome </th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr >
                    <td><?=$usuario['id']?></td>
                    <td><?=$usuario['username']?></td>
                    <td><?=$usuario['password']?></td>
                    <td><?=anchor('usuario-editar/'.$usuario['id'],'Editar')?>
                    <td><?=anchor('usuario-excluir/'.$usuario['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>

