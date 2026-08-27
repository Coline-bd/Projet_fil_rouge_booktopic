<?php

//"../src/scripts/api.js" type="module">
namespace View\Components;
    
class Footer{
    private ?array $linkScript;
    private ?string $buffer;

    public function __construct(array $linkScript){
        $this->linkScript = $linkScript;
    }

    public function display():void{
        echo $this->buffer;
    }

    public function launchBuffer():self{
        ob_start();
        ?>
    <footer role="contentinfo">
    <h3>Légal</h3>
    <nav aria-label="liens légaux">
        <ul>
        <li> <a href="#"> Politique de confidentialité </a></li>
        <li> <a href="#"> Mentions légales </a></li>
        <li> <a href="#"> Politique de cookies </a></li>
        <li> <a href="#"> CGU </a></li>
        </ul>
    </nav>
    <p>© 2026 - Booktopic</p>
    </footer>
    <script src="./scripts/main.js"></script>
    <?php foreach($this->linkScript as $link) : ?>
    <script src=<?= $link ?> type="module"></script>
    <?php endforeach ?>
</body>
</html>
<?php 
    $this->buffer=ob_get_clean();
    return $this;
    }
}

    