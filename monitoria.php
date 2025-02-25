<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sua Página</title>
  
  <!-- Link para o arquivo CSS -->
  <link rel="stylesheet" href="css/monitoria.css"> <!-- Substitua pelo seu caminho -->
</head>
<body>

<?php
  require_once('html_header.php');
  require_once('header.php');
?>
  <h1 id="centered">MONITORIA</h1>
<div class="content">
  <h1>EDITAL</h1>
  
  <p class="centered">Para acessar a chamada, <a href="#">clique aqui</a>.</p>

  <h3 class="centered other-text">INFORMAÇÕES GERAIS</h3>
<ol class="centered">
  <li>Serão disponibilizadas 10 (dez) vagas para suprir a demanda das equipes de Monitoria do evento.</li>
  <li>Poderão se inscrever alunos de cursos de graduação.</li>
</ol>

<h4 class="centered">Requisitos para inscrição:</h4>
<ol class="centered">
  <li>Ter idade igual ou superior a 18 anos;</li>
  <li>Possuir Índice de Rendimento Acadêmico (IRA) com nota mínima igual a 5 (cinco);</li>
  <li>Ter disponibilidade integral durante a realização do evento, bem como em períodos previamente divulgados para atividades pré e pós-congresso, se julgado necessário;</li>
  <li>Comprometer-se a participar do treinamento presencial conforme cronograma da monitoria.</li>
</ol>
  <p class="centered">Os monitores receberão os seguintes certificados:</p>
  <ol class="centered">
    <li>Monitoria (120 horas);</li>
    <li>Participação no Evento;</li>
    <li>Apresentação de Trabalhos (para aqueles com resumos aprovados e apresentados conforme as normas do evento).</li>
  </ol>

  <h3 class="centered">Cronograma</h3>
  <table class="centered">
    <thead>
      <tr>
        <th>ATIVIDADES</th>
        <th>DATAS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Lançamento da Chamada para Seleção de Monitores</td>
        <td>24/03/2025</td>
      </tr>
      <tr>
        <td>Período de inscrições</td>
        <td>24 à 28/03/2025 até às 18:00</td>
      </tr>
      <tr>
        <td>Resultado</td>
        <td>02/04/2025</td>
      </tr>
      <tr>
        <td>Interposição de recursos</td>
        <td>03 e 04/04/2025</td>
      </tr>
      <tr>
        <td>Resultado final</td>
        <td>07/04/2025</td>
      </tr>
      <tr>
        <td>Resultado Final da Seleção de Monitores</td>
        <td><a href="#">Clique aqui para baixar o resultado</a> - 17/05/2022 às 17h</td>
      </tr>
    </tbody>
  </table>
</div>

<?php 
    require_once('footer.php');
    require_once('html_footer.php');
?>

</body>
</html>
