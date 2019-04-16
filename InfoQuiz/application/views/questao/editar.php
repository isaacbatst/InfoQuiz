<?=form_open('questao-atualizar')?>
    <input type="hidden" name="id" value="<?=$questao['id']?>">
    <table>
        <tr>
            <td>Pergunta</td>
            <td><input type="text" name="pergunta" value="<?=$questao['pergunta']?>"/></td>
        </tr>
        <tr>
            <td>Alternativa A</td>
            <td><input type="text" name="alternativa_a" value="<?=$questao['alternativa_a']?>"/></td>
        </tr>
        <tr>
            <td>Alternativa B</td>
            <td><input type="text" name="alternativa_b" value="<?=$questao['alternativa_b']?>"/></td>
        </tr>
        <tr>
            <td>Alternativa C</td>
            <td><input type="text" name="alternativa_c" value="<?=$questao['alternativa_c']?>"/></td>
        </tr>
        <tr>
            <td>Alternativa D</td>
            <td><input type="text" name="alternativa_d" value="<?=$questao['alternativa_d']?>"/></td>
        </tr>
        <tr>
            <td>Alternativa Correta</td>
            <td><input type="text" name="alternativa_correta" value="<?=$questao['alternativa_correta']?>"/></td>
        </tr>
        <tr>
            <td>Disciplina</td>
            <td><input type="text" name="disciplina" value="<?=$questao['disciplina']?>"/></td>
        </tr>
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('questao','Voltar')?>