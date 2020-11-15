<h1><?php echo $title; ?></h1>
    <hr>
        
    <?php
    echo $pagination;
    foreach ($movie_data as $key => $value) {
        echo '
        <div class="row">
            <div class="well clearfix">
                <div class="col-lg-3 col-md-2 text-center">
                <img class="img-thumbnail" src="'.$value["poster"].'" alt="'.$value["name"].'">
                <p>'.$value["name"].'</p>
                </div>

                <div class="col-lg-9 col-md-10">
                <p>
                    '.$value["descriptions"].'
                </p>
                </div>
                
                <div class="col-lg-12 col-md-12">
                <a href="/movies/'.$value["slug"].'" class="btn btn-lg btn-warning pull-right">подробнее</a>
                </div>

            </div>
        </div>
        ';
    }
    echo $pagination;
    ?>