<h1><?php echo $title; ?></h1>
          <hr>

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $player_code; ?>" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="well info-block text-center">
            Год: <span class="badge"><?php echo $year; ?></span>
            Рейтинг: <span class="badge"><?php echo $rating; ?></span>
            Режиссер: <span class="badge"><?php echo $producer; ?></span>
          </div>

          <div class="margin-8"></div>

          <h2>Описание <?php echo $title; ?></h2>
          <hr>

          <div class="well">
          <?php echo $descriptions_movie; ?>
          </div>

          <div class="margin-8"></div>

          <h2>Отзывы о <?php echo $title; ?></h2>
          <hr>

          <?php
            foreach ($comments as $key => $value) {
              echo '<div class="panel panel-info">';
              echo '  <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> <span>'.getUserNameById($value['user_id']).'</span> </div>';
              echo '    <div class="panel-body">';
              echo '      '.$value['comment_text'];
              echo '    </div>';
              echo '</div>';
            }
          ?>

          <?php
          if ($this->dx_auth->is_logged_in()) {
          echo '
          <form action = "/comments/add/" method="post">
            <div class="form-group">
              <textarea class="form-control"></textarea>
            </div>
            <button class="btn btn-lg btn-warning pull-right">отправить</button>
          </form>
          ';
          }
          ?>