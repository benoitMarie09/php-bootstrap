<?php

namespace Html\Body\Navbar;

class Navbar extends \Html\Body\BodyElement
{
    #region --- Attributs ---------------------------------------
    /** @var string Titre du Header. */
    private string $titre;
    /** @var ?string Lien vers le logo du header. */
    private ?string $logo;
    /** @var Link[] Array de Link. */
    private array $links = array();

    #endregion
    #region --- Constructeur ---------------------------------------
    public function __construct(string $titre, ?string $logo = null)
    {
        $this->titre = $titre;
        $this->logo = $logo;
    }
    #endregion
    #region --- Methodes ---------------------------------------

    /**
     * @param Link $link lien de la navbar.
     */
    public function addLink(Link $link) : void
    {
        array_push($this->links, $link);
    }

    private function renderLinks(): string
    {
        $html = '';
        foreach ($this->links as $link) {
            $html .= $link->render();
        }
        return $html;
    }

    public function render() : string
    {
        $links = $this->renderLinks();
        $html = <<<HTML
            <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/myNotes/index.php?page=accueil">$this->titre</a>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        $links
                   </ul>
                </div>
            </nav>
            HTML;

        return $html;
    }

    #endregion
}
