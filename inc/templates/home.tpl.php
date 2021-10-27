
   <!--
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- emmet : (div.card>div.card-header>lorem5^div.card-body>lorem40^div)*4 -->
                <div class="card mb-4">
                    <div class="card-header"><a href="article.php">Lorem ipsum dolor sit amet.</a></div>
                    <div class="card-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati repellat
                        molestiae voluptas tempore consequatur, quas laudantium fugiat odio fugit ut modi aliquam sed
                        enim
                        culpa quibusdam. Praesentium vitae dignissimos nesciunt reiciendis? Veritatis error mollitia
                        explicabo ipsam est tempora et suscipit.</div>
                    <div></div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><a href="article.php">Ratione ipsum iusto atque. Ipsa.</a></div>
                    <div class="card-body">Accusantium eum natus explicabo, totam magni culpa mollitia at perspiciatis
                        inventore est. Rerum nisi earum mollitia delectus expedita commodi natus inventore eos! Maxime
                        libero quas soluta, suscipit tenetur nesciunt quod iure consectetur delectus ea. Excepturi
                        veritatis
                        laudantium culpa quidem minima!</div>
                    <div></div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><a href="article.php">Veniam minima aliquam aspernatur quasi!</a></div>
                    <div class="card-body">Accusamus eius eum iste sit officiis quia animi aliquid qui, vero, nihil
                        exercitationem nemo nulla dignissimos unde praesentium enim, porro est? Obcaecati atque at,
                        suscipit
                        in itaque dicta illo magni sed consequuntur! Distinctio voluptatem iure fuga vitae explicabo
                        ipsam
                        architecto.</div>
                    <div></div>
                </div>
                <div class="card mb-4">
                    <div class="card-header"><a href="article.php">Debitis eius repudiandae quo veniam.</a></div>
                    <div class="card-body">Eum sed temporibus sequi quod cumque repellendus fugit aspernatur eaque modi
                        excepturi nesciunt, fugiat mollitia quae, harum aut saepe facilis! Voluptates, iste illum esse
                        magnam odio rem laborum debitis possimus expedita ipsam perspiciatis, doloribus aut corrupti
                        accusantium, omnis aliquam quaerat.</div>
                    <div></div>
                </div>
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
<<<<<<< HEAD
    </div> 
=======
    </div>
 <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
 <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">Ivre, il refait tous les challenges en un week-end sans dormir.</a></h2>
            <p class="card-text">Ou comment j'ai appris plein de choses en faisant une nouvelle fois tous les challenges
              que j'avais loupé.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Alexandre</a> le <time datetime="2017-07-13">13/07/2017</time> dans <a href="#"
                class="card-link">#MaVieDeDev</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">POO or not POO, that is the question.</a></h2>
            <p class="card-text">La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec
              PHP.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Julie</a> le <time datetime="2017-07-04">04/07/2017</time> dans <a href="#"
                class="card-link">#TeamBack</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">Git, pour les n00bs.</a></h2>
            <p class="card-text">Un p'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil
              de versionning.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Lucie</a> le <time datetime="2017-06-19">19/06/2017</time> dans <a href="#"
                class="card-link">#Collaboration</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">Le syndrome de la page blanche</a></h2>
            <p class="card-text">Cette frustration quand le code ne vient pas, le temps passe, la deadline approche...
            </p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Xavier</a> le <time datetime="2017-05-06">06/05/2017</time> dans <a href="#"
                class="card-link">#MaVieDeDev</a>
            </p>
          </div>
        </article>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav>

      </main>

      <aside class="col-lg-3">
        <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>

        <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">TeamBack</li>
            <li class="list-group-item">TeamFront</li>
            <li class="list-group-item">Collaboration</li>
            <li class="list-group-item">Ma Vie De Dev</li>
          </ul>
        </div>

        <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
        <div class="card">
          <h3 class="card-header">Auteurs</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Maxime</li>
            <li class="list-group-item">Anthony</li>
            <li class="list-group-item">Alexandre</li>
            <li class="list-group-item">Dario</li>
            <li class="list-group-item">Julie</li>
            <li class="list-group-item">Lucie</li>
            <li class="list-group-item">Xavier</li>
          </ul>
        </div>

      </aside>
    </div>
>>>>>>> cut-cut-cut
