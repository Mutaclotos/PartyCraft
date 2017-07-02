<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <?= $this->Html->link('PartyCraft', ['controller' => 'Usuarios', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
    </div>
    <ul class="nav navbar-nav">
      <li>
          <?= $this->Html->link('Ver usuarios', ['controller' => 'Usuarios', 'action' => 'index']) ?>
      </li>
      <li>
          <?= $this->Html->link('Crear usuario', ['controller' => 'Usuarios', 'action' => 'add']) ?>
      </li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
              <li>
                   <?= $this->Html->link('Ingresar', ['controller' => 'Usuarios', 'action' => 'login']) ?>
              </li>
              <li>
                   <?= $this->Html->link('Salir', ['controller' => 'Usuarios', 'action' => 'logout']) ?>
              </li>
    </ul>
  </div>
</nav>