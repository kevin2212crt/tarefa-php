<form action = "kevinALLPatv02.php" method = "POST">

<label for = "ambiente"> Tipo de ambiente:</label>
<select name="ambiente" id= "ambiente" required>

<option value="">--Outro--</option>
<option value="residencial">Casa</option>
<option value="pequeno_departamento">Pequeno escritório (Até 15 pessoas)</option>
<option value="data_center">Data Center Corporativo"</option>
</select>
<br><br>

<button type="submit">Ver a melhor recomendação para você</button>
</form>


<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){
$recomendar = $_POST["ambiente"];
switch($recomendar){

case "residencial":
echo "Equipamento Indicado: Roteador Wireless (SOHO). 
Para ambientes residenciais, um roteador Wi-Fi padrão é suficiente para conectar smartphones, TVs e notebooks";
break;

case "pequeno_departamento":
echo "Equipamento Indicado: Switch Gerenciável de 24 Portas.
Para um escritório, recomendamos o uso de um Switch para conectar os computadores via cabo, garantindo estabilidade e segurança na rede local (LAN).";
break;

case "data_center":
echo "Equipamento Indicado: Roteador de Borda e Switch Layer 3.
Para Data Centers, é necessária uma infraestrutura robusta com equipamentos de alta capacidade para lidar com grande tráfego de dados e roteamento avançado.";
break;

default:
echo"Erro: Ambiente não reconhecido em nosso banco de dados.";


}
}
?>