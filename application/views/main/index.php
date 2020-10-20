<!-- CONTENT (index) start -->

<h2>Новые фильмы</h2>
          <hr>
          <div class="row">

            <?php
            foreach ($movie as $key => $value) {
              echo '<div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">';
              echo '  <a href="show.html"><img src="'.$value["poster"].'" alt="'.$value["name"].'"></a>';
              echo '  <div class="film_label"><a href="show.html">'.$value["name"].'</a></div>';
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
              echo '  <a href="show.html"><img src="'.$value["poster"].'" alt="'.$value["name"].'"></a>';
              echo '  <div class="film_label"><a href="show.html">'.$value["name"].'</a></div>';
              echo '</div>';
            }
          ?>

          </div>

          <div class="margin-8"></div>

          <?php
          foreach ($posts as $key => $value) {
            echo '<a href="#"><h3>'.$value["title"].'</h3></a>';
            echo '<hr>';
            echo '<p>';
            echo $value["text"];
            echo '</p>';
            echo '<a href="#" class="btn btn-warning pull-right">читать</a>';
            echo '<div class="margin-8"></div>';
          }
          ?>

          <a href="#"><h3>Как снимали Интерстеллар</h3></a>
          <hr>
          <p>
            45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.
          </p>
          <a href="#" class="btn btn-warning pull-right">читать</a>

          <div class="margin-8"></div>

          <a href="#"><h3>Актер Том Хенкс поделился впечатлением о фестивале</h3></a>
          <hr>
          <p>
            16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.
          </p>
          <a href="#" class="btn btn-warning pull-right">читать</a>

          <div class="margin-8 clear"></div>

          <!-- CONTENT (index) end -->