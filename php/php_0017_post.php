<!DOCTYPE html>
<html>

<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
</head>

<body>
    <form name="cadastro" method="post" action="php_0017_action.php">


        <table>

            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" size="20"></td>
            </tr>

            <tr>
                <td><label>Data de nascimento:</label></td>
                <td><input type="date" name="dataNascimetno"></td>
            </tr>

            <tr>
                <td><label>Endereço</label></td>
                <td><textarea name="endereco" rows="3" cols="22"></textarea></td>
            </tr>

            <tr>
                <td><label>Estado civil</label></td>
                <td>
                    <select name="estadoCivil">
                        <option value="S">Solteiro</option>
                        <option value="C">Casado</option>
                    </select>
                </td>    
            </tr>

            <tr>
                <td><label>Sexo</label></td>
                <td>
                    <input type="radio" name="sexo" value="M">Masculino
                    <input type="radio" name="sexo" value="F">Feminino
                </td>    
            </tr>

            <tr>
                <td><label>Meio de locomoção:</label></td>
                <td>
                    <input type="checkbox" name="locomocao[]" value="M">Moto
                    <input type="checkbox" name="locomocao[]" value="C">Coletivo
                    <input type="checkbox" name="locomocao[]" value="B">Bicicleta
                </td>
            </tr>

            <tr>
                <td valign="top"><label>Estados<br />que visitou:</label></td>
                <td>
                    <select name="uf[]" multiple="multiple" size="10">
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Enviar">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>