<!-- MENU start -->
<div class="col-lg-3 col-lg-pull-9"> <!-- Меняем блоки местами col-lg-pull-9 -->
  
  <div class="panel panel-info hidden-xs">
    <div class="panel-heading"><div class="sidebar-header">Поиск</div></div>
    <div class="panel-body">
      <form role="search">
        <div class="form-group">
          <div class="input-group">
            <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
            <div class="input-group-btn">
              <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </div>
      </form> 
    </div>
  </div>

  <div class="panel panel-info">
    <div class="panel-heading"><div class="sidebar-header">Вход</div></div>
    <div class="panel-body">

      <form role="form" action="" method="post">
        <div class="form-group">
          <input type="text"  class="form-control input-lg" placeholder="Логин" name="username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control input-lg" placeholder="Пароль" name="password">
        </div>

        <button type="submit" class="btn btn-warning pull-right">вход</button>

      </form>

    </div>
  </div>  


  <div class="panel panel-info">
    <div class="panel-heading"><div class="sidebar-header">Новости</div></div>
    <div class="panel-body">
      
    <?php
      foreach ($news as $key => $value) {
        echo "<p><a href='/news/view/".$value['slug']."'>".$value['title']."</a></p>";
      }
    ?>
      
    </div>
  </div>


  <div class="panel panel-info">
    <div class="panel-heading"><div class="sidebar-header">Рейтинг фильмов</div></div>
    <div class="panel-body">
        
        <ul class="list-group">
          
          <?php
          foreach ($films as $key => $value) {
            echo '<li class="list-group-item list-group-warning">';
            echo '<span class="badge">'.$value['rating'].'</span>';
            echo '<a href="/movies/'.$value['slug'].'">'.$value['name'].'</a>';
            echo '</li>';
          }
          ?>          

        </ul>

    </div>
  </div>  
  


</div>      

<!-- MENU end -->