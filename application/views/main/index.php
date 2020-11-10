<!-- CONTENT (index) start -->

<h2>Новые фильмы</h2>
          <hr>
          <div class="row">

            <?php
            foreach ($movie as $key => $value) {
              echo '<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">';
              echo '  <a href="/movies/'.$value["slug"].'"><img src="'.$value["poster"].'" alt="'.$value["name"].'"></a>';
              echo '  <div class="film_label"><a href="/movies/'.$value["slug"].'">'.$value["name"].'</a></div>';
              echo '</div>';
            }
            ?>             

          </div>

          <div class="margin-8"></div>

         <h2>Новые сериалы</h2>
         <hr>
          <div class="row">

          <?php
            foreach ($serials as $key => $value) {
              echo '<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">';
              echo '  <a href="/movies/'.$value["slug"].'"><img src="'.$value["poster"].'" alt="'.$value["name"].'"></a>';
              echo '  <div class="film_label"><a href="/movies/'.$value["slug"].'">'.$value["name"].'</a></div>';
              echo '</div>';
            }
          ?>

          </div>

          <div class="margin-8"></div>

          <?php
          foreach ($posts as $key => $value) {
            echo '<a href="/posts/"><h3>'.$value["title"].'</h3></a>';
            echo '<hr>';
            echo '<p>';
            echo $value["text"];
            echo '</p>';
            echo '<a href="/posts/view/'.$value["slug"].'" class="btn btn-warning pull-right">читать</a>';
            echo '<div class="margin-8"></div>';
          }
          ?>

          <div class="margin-8 clear"></div>

          <!-- CONTENT (index) end -->