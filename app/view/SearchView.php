<?php 

namespace View;

class SearchView extends View{

    public function launchBuffer():self{
    ob_start();

    ?>
    <main>
        <nav class="breadcrumb" aria-label="fil d'ariane">
            <ol>
            <li><a href="/">Accueil</a></li>
            <li aria-current="page">Recherche</li>
            </ol>
        </nav>
        <h1>Résultats de la recherche de livre</h1>
        <div id="mainSection">
            <div class="gridBooks">
            </div>
        </div>
        <aside>
            <h2>Suggestions</h2>
        
        </aside>
    </main>
    <?php 

    $this->setBuffer(ob_get_clean());
    return $this;
    }
}