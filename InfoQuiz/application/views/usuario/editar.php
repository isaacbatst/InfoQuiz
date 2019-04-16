<?=form_open('usuario-atualizar')?>
    <input type="hidden" name="id" value="<?=$usuario['id']?>">
    <table>
        <tr>
            <td>Nome de Usuário</td>
            <td><input type="text" name="username" value="<?=$usuario['username']?>"/></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="text" name="password" value="<?=$usuario['password']?>"/></td>
        </tr>
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('usuario','Voltar')?>