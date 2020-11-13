<h1><?php echo $title; ?></h1>
          <hr>

          <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th>Фильм</th>
                <th class="text-center">Год</th>
                <th class="text-center">Рейтинг</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($movie_data as $key => $value) {
            echo '
              <tr>
                <td class="col-lg-1 col-md-1 col-xs-2">
                  <img class="img-responsive img-thumbnail" src="'.$value["poster"].'" alt="'.$value["name"].'">
                </td>
                <td class="vert-align"><a href="/movies/'.$value["slug"].'">'.$value["name"].'</a></td>
                <td class="text-center vert-align">'.$value["year"].'</td>
                <td class="text-center vert-align"><span class="badge">'.$value["rating"].'</span></td>
              </tr>
              ';
            }?>
            </tbody>


          </table>