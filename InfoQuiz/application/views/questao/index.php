<?=anchor('questao-novo','Nova Postagem')?>

<?php if ($questoes == FALSE): ?>
    <h3>Nenhuma questao encontrada</h3>
<?php else: ?>
    <table >
        <thead>
            <tr>
                <th>Título</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questoes as $questao): ?>
                <tr >
                    <td style="border:1px solid black"><?=anchor('questao-visualizar/'.$questao['id'], $questao['pergunta'])?></td>
                    <td style="border:1px solid black"><?=anchor('questao-editar/'.$questao['id'],'Editar')?>
                    <td style="border:1px solid black"><?=anchor('questao-excluir/'.$questao['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>