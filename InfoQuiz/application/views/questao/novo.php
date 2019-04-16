<?=form_open('questao-salvar')?>
    <table>
        <tr>
            <td>Pergunta</td>
            <td><input type="text" name="pergunta"/></td>
        </tr>
        <tr>
            <td>Alternativa A</td>
            <td><input type="text" name="alternativa_a"/></td>
        </tr>
        <tr>
            <td>Alternativa B</td>
            <td><input type="text" name="alternativa_b"/></td>
        </tr>
        <tr>
            <td>Alternativa C</td>
            <td><input type="text" name="alternativa_c"/></td>
        </tr>
        <tr>
            <td>Alternativa D</td>
            <td><input type="text" name="alternativa_d"/></td>
        </tr>
        <tr>
            <td>Alternativa Correta</td>
            <td><input type="text" name="alternativa_correta"/></td>
        </tr>
        <tr>
            <td>Disciplina</td>
            <td><input type="text" name="disciplina"/></td>
        </tr>
    </table>
    <input type="submit" value="Salvar"/>
<?=form_close()?>
<?=anchor('questao','Voltar')?>