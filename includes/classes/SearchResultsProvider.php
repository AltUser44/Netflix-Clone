<?php
class SearchResultsProvider {

    private $con, $username;

    public function __construct($con, $username) {
        $this->con = $con;
        $this->username = $username;
    }

    public function getResults($inputText) {
        $entities = EntityProvider::getSearchEntities($this->con, $inputText);
        error_log("Results for '$inputText': " . json_encode($entities)); // Log the entities found
    
        $html = "<div class='previewCategories noScroll'>";
        $html .= $this->getResultHtml($entities);
        return $html . "</div>";
    }

    private function getResultHtml($entities) {
        if(sizeof($entities) == 0) {
            return "<p>No results found</p>";
        } 

        $entitiesHtml = "";
        $previewProvider = new PreviewProvider($this->con, $this->username);

        foreach($entities as $entity) {
            $entitiesHtml .= $previewProvider->createEntityPreviewSquare($entity);
        }

        return "<div class='category'>
                    <div class='entities'>
                        $entitiesHtml
                    </div>
                </div>";
    }
}
?>