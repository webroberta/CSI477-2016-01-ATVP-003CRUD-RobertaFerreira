<div class="index_login form">
  <div class="container text-center col-lg-4 col-lg-offset-4">

    <form class="form-signin" action="../pacientes/login" controller="Pacientes" id="PacienteLoginForm" method="post" accept-charset="utf-8">

      <h2 class="form-signin-heading"> Faca o Login:</h2>
      
      <label for="inputEmail" class="sr-only">Login</label>
      <input name="data[Paciente][email]" type="text" id="PacienteEmail" class="form-control" placeholder="Login" required autofocus>

      <label for="inputPassword" class="sr-only">Senha</label>
      <input name="data[Paciente][senha]" type="password" id="PacienteSenha" class="form-control" placeholder="Senha" required>
      
      <br>

      <div class="submit">
      	<input type="submit" value="Entrar">
      </div>
    </form>

  </div>
</div>

<div class="actions">
    <h3><?php echo __('Escolha uma opcao:'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Pagina Inicial'), array('controller' => 'pages', 'action' => 'display')); ?></li>
    </ul>
</div>
