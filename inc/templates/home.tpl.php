
   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <?php
               
                /*décommenter ce bout de code pour visualiser le contenu de la variable $dataArticlesList
                echo '<div style="border: solid 2px #F00">';
                    echo '<div style="; background-color:#CCC">@'.__FILE__.' : '.__LINE__.'</div>';
                    echo '<pre>';
                    print_r($dataArticlesList);
                    echo '</pre>';
                echo '</div>';
                */
                //IMPORTANT nous bouclons sur la liste des articles $dataArticlesList
                
                foreach($dataArticlesList as $articleIndex => $article) :
                ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="index.php?page=article&id=<?=$articleIndex;?>"><?=$article->title?></a>
                        </div>
                        <div class="card-body"><?=$article->content;?></div>
                        <div></div>
                    </div>
                <?php
                endforeach;
                ?>

            </div>

            <div class="col-lg-4 col-md-12">
                <form class="form">
                    <div class="form-row">
                        <div class="col">
                            <label for="search" class="sr-only">Rechercher</label>
                            <input type="text" class="form-control mr-2" id="search">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </div>
                </form>
                <!-- emmet : (div.card>div.card-header+ul.list-group.list-group-flush>li.list-group-item*4)*2 -->
                <div class="card mb-4">
                    <div class="card-header">Catégories</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="category.php">Teamback</a></li>
                        <li class="list-group-item"><a href="category.php">Teamfront</a></li>
                        <li class="list-group-item"><a href="category.php">Collaboration</a></li>
                        <li class="list-group-item"><a href="category.php">Ma vie de dev</a></li>
                    </ul>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Auteurs</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="author.php">Maxime</a></li>
                        <li class="list-group-item"><a href="author.php">Dario</a></li>
                        <li class="list-group-item"><a href="author.php">Lucie</a></li>
                        <li class="list-group-item"><a href="author.php">Anthony</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>