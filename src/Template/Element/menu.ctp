<nav class="navbar navbar-inverse nav-users">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('Torta', ['controller' => 'Sector', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php if(isset($current_user)): ?>
                <ul class="nav navbar-nav">
                    <?php if($current_user['role'] == 'admin'): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nuevo Ingreso <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            
                            
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        <?= $this->Html->link('Mi lista', ['controller' => 'bookmarks', 'action' => 'index']) ?>
                    </li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                   <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?>
              </li>
            </ul>
            <?php else: ?>
            <ul class="nav navbar-nav navbar-right">
              <li>
                   <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add']) ?>
              </li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>