
<table>
    <tr>
        <td><?=anchor('index-index','Página Inicial')?></td>
        <td><?=anchor('questao-novo','Nova Questão')?></td>
    </tr>
</table>


<?php if ($questoes == FALSE): ?>
    <h3>Nenhuma questao encontrada</h3>
<?php else: ?>
    <table >
        <thead>
            <tr>
                <th>ID </th>
                <th>Questão </th>
                <th>Alternativa A</th>
                <th>Alternativa B</th>
                <th>Alternativa C</th>
                <th>Alternativa D</th>
                <th>Alternativa Correta</th>
                <th>Disciplina</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questoes as $questao): ?>
                <tr >
                    <td><?=$questao['id']?></td>
                    <td><?=$questao['pergunta']?></td>
                    <td><?=$questao['alternativa_a']?></td>
                    <td><?=$questao['alternativa_b']?></td>
                    <td><?=$questao['alternativa_c']?></td>
                    <td><?=$questao['alternativa_d']?></td>
                    <td><?=$questao['alternativa_correta']?></td>
                    <td><?=$questao['disciplina']?></td>
                    <td><?=anchor('questao-editar/'.$questao['id'],'Editar')?>
                    <td><?=anchor('questao-excluir/'.$questao['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>

