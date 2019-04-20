<?=form_open('usuario-salvar')?>
    <table>
        <tr>
            <td>Nome de Usuário</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Salvar"/></td>
        </tr>
    </table>
    
<?=form_close()?>
<?=anchor('usuario','Voltar')?>