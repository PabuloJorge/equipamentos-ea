<!--Introdução-->
<h1>Equipamentos EA</h1>
    <p>Aplicação Web desenvolvida durante o estágio no Grupo Eduardo Albuquerque, para controle dos equipamentos
        (Computadores, Mouses, Teclados, Headsets, TVs, Monitores) da empresa.</p>
        
<!--Tela inicial-->   
<div id="inicio">
        <h2>Início</h2>
        <p>Na página inicial da aplicação, é exibido alguns gráficos com o intuito de facilitar a compreensão de como
            está a
            situação dos equipamentos.</p>
  
   <div>
            <img width="150px" src="https://user-images.githubusercontent.com/65266238/145581996-35a8e7e2-44b4-4991-9f97-92eeacd83abc.jpg" alt="ChartJS">
            <p>Para construí-los, foi utilizado a biblioteca <strong>ChartJS</strong>.</p>
        </div>  
  
  <p>Os gráficos estão sendo "alimentados" dinamicamente através de consultas feitas ao Banco de Dados MySQL
            utilizando o PHP.</p>
        <img src="https://user-images.githubusercontent.com/65266238/145582202-b4e24625-395d-462a-8cad-624a6488b18d.png" width="600px" alt="Gráficos">
  </div>
  
  ##
  
  <!--Informações adicionais-->
  <div id="infoAdicional">
  
   <p>Além da tela inicial, existem as abas de <strong>Computadores</strong>, <strong>Equipamentos</strong> (Mouses,
            Teclados, Headsets, TVs, Monitores), <strong>Funcionários</strong> e <strong>Manutenção</strong>.</p>
  <p>Para cada uma dessas abas, foi feito o CRUD.</p>
  
   <p>Para visualização das informações, está sendo utilizado tabelas construídas com o auxílio do framework
            <strong>DataTables</strong>, que facilita a busca, ordenação, paginação, etc.</p>
  
  
  
  <!--Computadores-->
  <div id="computadores">
  <h2>Computadores</h2>
  <p>O computador tem algumas colunas importantes para destacar:</p>
  <ul>
    <li><strong>Id</strong></li>
    <li><strong>Status (Ativo / Inativo)</strong></li>
    <li><strong>Situação (Operacional / Reserva / Manutenção / Sucata)</strong></li>
  </ul>
  
  <p>Possíveis estados:</p>
  <ul>
    <li><strong>Status == Ativo && Situação == Operacional</strong></li>
    Quando tem ligação com funcionário
    <li><strong>Status == Inativo && Situação == Reserva</strong></li>
    Quando não tem ligação com funcionário e está disponível para uso
    <li><strong>Status == Inativo && Situação == Manutenção</strong></li>
    Quando não tem ligação com funcionário e temporariamente não está disponível para uso 
    <li><strong>Status == Inativo && Situação == Sucata</strong></li>
    Quando não tem ligação com funcionário e definitivamente não está disponível para uso
  </ul>
  </div>
  
  
  
   <!--Funcionários-->
  <div id="funcionarios">
    <h2>Funcionários</h2>
      <p>Para os funcionários, vale destacar as seguintes colunas:</p>
      <ul>
          <li><strong>CPF</strong></li>
          Identificador do funcionário
          <li><strong>Id Computador Empresa</strong></li>
          ID do computador que o funcionário está utilizando no escritório
          <li><strong>Id Computador Home</strong></li>
          ID do computador que o funcionário está utilizando na sua casa, para os que estão trabalhando Home Office ou de forma híbrida 
       </ul>
    </div>
  
  <p>Obviamente que o sistema não permite que os funcionários se relacionem com o mesmo computador. Quando vamos alocar um computador para o funcionário, o sistema vai exibir apenas os que estão com <strong>Status == Inativo && Situação == Reserva</strong>.</p>
    
    
    
    
    
   <!--Equipamentos-->
  <div id="equipamentos">
    <h2>Equipamentos</h2>  
      <p>Diferente dos computadores, os equipamentos não têm relacionamento direto com os funcionários no sistema. Mas existem as colunas como:</p>
       <ul>
         <li><strong>Status (Ativo / Inativo)</strong></li>
         <li><strong>Situação (Operacional / Reserva / Sucata)</strong></li>
      </ul>
         <p>Que seguem a mesma lógica dos computadores. Um diferencial é a coluna:</p>
      <ul>
         <li><strong>Tipo (Mouses, Teclados, Headsets, TVs, Monitores)</strong></li>
      </ul>
      <img src="https://user-images.githubusercontent.com/65266238/145589538-b7248d35-575e-4dd1-95aa-d0d85848165b.png" width="600px" alt="Equipamentos">
   </div>
    
    
    
    
<div id="manutencao">
    <h2>Manutenção</h2>
    <p>Aqui é possível acompanhar e adicionar os reparos dos computadores.</p>
    <p>Quando o usuário vai cadastrar um novo reparo, o sistema exibi os computadores existentes, excetos os que tem a "situação" como "sucata".</p>
    <p>Caso o computador incluído esteja com ligação à algum funcionário, automaticamente é feito o desligamento e a "situação" é alterada para "manutenção".</p>
    <p>Toda nova manutenção registrada, entra com o "status" de "em andamento", quando ocorre a finalização do reparo, o usuário altera o "status" para "finalizada", tornando automaticamente o status do computador para "reserva", podendo ser realocado a um funcionário.</p>
    
<p>Exemplo:</p>
    <p><strong>1-</strong> O Computador Teste não tem ligação com funcionário e disponível para uso:</p>
     <img src="https://user-images.githubusercontent.com/65266238/145594167-5137bd5b-d1c8-4c4c-a2e6-206dc211f6c8.png" width="1000px" alt="passo1">
    <p><strong>2-</strong> Selecionando o Computador Teste na abertura do reparo:</p>
    <img src="https://user-images.githubusercontent.com/65266238/145594160-82e53f79-f3e1-4a2d-91e9-62f597854afe.png" width="500x" alt="passo2">
    <p><strong>3-</strong> Reparo em andamento:</p>
    <img src="https://user-images.githubusercontent.com/65266238/145594161-e96d989c-14de-4eb9-811e-a1c1fb250675.png" width="1000px" alt="passo3">
    <p><strong>4-</strong> Supondo que o reparo tenha finalizado e é necessário fazer essa alteração no sistema, no link do botão "Editar" é possível alterar o "status" do reparo:</p>
    <img src="https://user-images.githubusercontent.com/65266238/145594163-c6106030-8847-4153-b75d-5896494eb576.png" width="300px" alt="passo4">
    <p><strong>5-</strong> Reparo finalizado:</p>
    <img src="https://user-images.githubusercontent.com/65266238/145594165-205a16b6-a1d1-4777-b02f-a4c62a22267a.png" width="1000px" alt="passo5">
    <p><strong>6-</strong> Como houve a finalização do reparo, automaticamente o computador volta a ficar disponível para alocação a um funcionário: </p>
   <img src="https://user-images.githubusercontent.com/65266238/145594167-5137bd5b-d1c8-4c4c-a2e6-206dc211f6c8.png" width="1000px" alt="passo6">
</div>
    
    
<h2>Tecnologias utilizadas</h2>

<div style="display: inline_block"><br>
  <img align="center" alt="PHP" height="30" title="PHP" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg">
  <img align="center" alt="HTML5" height="30" title="HTML5" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-plain.svg">
  <img align="center" alt="CSS3" height="30" title="CSS3" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-plain.svg">
  <img align="center" alt="Bootstrap" height="30" title="Bootstrap" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg">
   <img align="center" alt="MySQL" height="30" title="MySQL" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
