<?php
error_reporting(0);
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

$preset1 = "https://ru.wikipedia.org/wiki/%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8";
$preset2 = "https://echo.msk.ru/programs/sorokina/2917870-echo/";
$preset3 = "https://mishka-knizhka.ru/skazki-dlay-detey/zarubezhnye-skazochniki/skazki-alana-milna/vinni-puh-i-vse-vse-vse/#glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy";

if ($_GET["preset"]) {
    if ($_GET["preset"] == "1") {
        $text = file_get_contents($preset1, false, stream_context_create($arrContextOptions));
    }
    elseif ($_GET["preset"] == "2") {
        $text = file_get_contents($preset2, false, stream_context_create($arrContextOptions));
    }
    elseif ($_GET["preset"] == "3") {
        $text = file_get_contents($preset3, false, stream_context_create($arrContextOptions));
    }
    else {
        $text = $_POST["text"];
    }
    $analyze = new TextAnalyze($text);
}
else {
    if ($_POST["text"]) {
        $text = $_POST["text"];
    }
    $analyze = new TextAnalyze($text);
}



class textAnalyze{
    public $textBody;

    public function __construct($text){
        $this->textBody = $text;
    }

    public function Task1(){
        $i = 0;
        $numlist = '<ol class = "ollist">';
        $checktext = preg_match_all('#\s?<h[12][^>]*>(.*?)</h[12][^>]*>\s?#', $this->textBody,$matches,PREG_SET_ORDER);
        if ($checktext) {
            $checkerh2 = false;
            if(strpos($matches[0][0], "h2")){
                $checkerh2 = true;
            }
            while($matches[$i][0]){
                if (strpos($matches[$i][0], "h1") && $matches[$i + 1][0]) {
                    $numlist = $numlist . '<li class = "lilist">';
                    if (!strpos($matches[$i + 1][0], "h1")) {
                        $numlist = $numlist . $matches[$i][1] . '<ol class="ollist">';
                    } else {
                        $numlist = $numlist . $matches[$i][1] . '</li>';
                    }
                } elseif (strpos($matches[$i][0], "h2") && $matches[$i + 1][0]) {
                    $numlist = $numlist . '<li class = "lilist">';
                    if (!strpos($matches[$i + 1][0], "h2") && $checkerh2==false) {
                        $numlist = $numlist . $matches[$i][1] . '</li></ol></li>';
                    }elseif(!strpos($matches[$i + 1][0], "h2")&&$checkerh2==true){
                        $numlist = $numlist . $matches[$i][1] . '</li></ol><ol class = "ollist">';
                        $checkerh2 == false;
                    }
                    else {
                        $numlist = $numlist . $matches[$i][1] . '</li>';
                    }
                }
                elseif(!$matches[1][0]){
                    $numlist = $numlist . '<li class = "lilist">'. $matches[0][1].'</li></ol>';}
                elseif(strpos($matches[$i][0], "h2") && !$matches[$i + 1][0] && $checkerh2 == false){
                    $numlist = $numlist .'<li class = "lilist">'.$matches[$i][1].'</li></ol></li></ol>';
                }
                elseif(strpos($matches[$i][0], "h2") && !$matches[$i + 1][0] && $checkerh2 == true){
                    $numlist = $numlist .'<li class = "lilist">'.$matches[$i][1].'</li></ol>';
                }
                elseif(strpos($matches[$i][0], "h1") && !$matches[$i + 1][0]){
                    $numlist = $numlist .'<li class = "lilist">'.$matches[$i][1].'</li></ol>';
                }
                $i++;
            }
            return $numlist;
        } else {
            return 0;
        }
    }

    public  function Task9(){
        $this->textBody = preg_replace("/([^\s]?)\s?([.,?!:;-])\s?([^\s]?)/u", "\$1\$2 \$3" , $this->textBody);
        $this->textBody = preg_replace("/\s+([\.|,|!|\?|-]+)/", '\\1', $this->textBody);
        $this->textBody = preg_replace("/(-)\s+/", '\\1', $this->textBody);
    }

 
    
    public function processTextTask12(): array {
        $th = array();
        $linksTables = array();
        $domBody= new DOMDocument();
        @$domBody->loadHTML('<?xml encoding="utf-8" ?>' . $this->textBody);
        $tables = $domBody->getElementsByTagName("table");
        foreach ($tables as $key=>$table) {
            $tables[$key]->setAttribute("id", "{$key}");
            $innerTextTh = ($table->getElementsByTagName("th"))[0]->nodeValue;
            $innerTextTd = ($table->getElementsByTagName("td"))[0]->nodeValue;
            if ($innerTextTh) {
                array_push($th, $innerTextTh);
                array_push($linksTables, "<a href=\"#{$key}\">Таблица №{$key} - {$innerTextTh}</a> ");
            }
            elseif($innerTextTd) {
                array_push($th, $innerTextTd);
                array_push($linksTables, "<a href=\"#{$key}\">Таблица №{$key} - {$innerTextTd}</a> ");
            }
        }
        $this->textBody = $domBody->saveHTML();
        return array($this->textBody, $linksTables);
    }
    
    public function processTextTask20():string {
        $listElementStyle = array();
        $listStyle = array();
        $domBody= new DOMDocument();
        @$domBody->loadHTML('<?xml encoding="utf-8" ?>' . $this->textBody);
        $nodeBody = $domBody->getElementsByTagName("body")->item(0);
        $nodeStyle = $domBody->createElement("style");
        $nodeBody->appendChild($nodeStyle);
        $allElements = $domBody->getElementsByTagName('*');

        $textStyle = "";
        foreach ($allElements as $element) {
            if ($element->hasAttribute("style")) {
                array_push($listElementStyle, array($element, $element->getAttribute("style")));
                array_push($listStyle, $element->getAttribute("style"));
            }
        }
        $groupsElementStyle = array_count_values($listStyle);

        foreach ($groupsElementStyle as $key=>$value) {
            if ($value>1) {
                $className = hash("md2", $key);
                foreach ($listElementStyle as &$valueListElementStyle) {
                    if ($valueListElementStyle[1] == $key) {
                        $valueListElementStyle[0]->removeAttribute("style");
                        if ($valueListElementStyle[0]->hasAttribute("class")) {
                            $attributeClass = $valueListElementStyle[0]->getAttribute("class");
                            $valueListElementStyle[0]->setAttribute("class", $attributeClass . " " . $className);
                        }
                        else {
                            $valueListElementStyle[0]->setAttribute("class", $className);
                        }
                    }
                }
                 $textStyle .= "{$className} {{$key}}\n";
            }
        }
        $domBody->getElementsByTagName("style")[0]->nodeValue = $textStyle;
        $this->textBody = $domBody->saveHTML();
        return $this->textBody;
    }
}
?>