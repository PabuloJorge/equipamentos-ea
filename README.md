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
  
  <p>Os gráficos estão sendo “alimentados” dinamicamente através de consultas feitas ao Banco de Dados MySQL
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
 <p>Que seguem a mesma lógica dos computadores. Um diferencial é a coluna:
</p>
     <ul>
         <li><strong>Tipo (Mouses, Teclados, Headsets, TVs, Monitores)</strong></li>
      </ul>
      <img src="https://user-images.githubusercontent.com/65266238/145589538-b7248d35-575e-4dd1-95aa-d0d85848165b.png" width="600px" alt="Equipamentos">
   </div>
    
    <div id="manutencao">
      <h2></h2>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
