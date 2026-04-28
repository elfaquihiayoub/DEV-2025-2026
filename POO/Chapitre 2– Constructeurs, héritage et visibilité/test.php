<?php

require "BlogArticle.php";
$article1 = new BlogArticle('PHP fondamentals',"php is one the best backend lanuages","ayoub elfaquihi");
$article2 = new BlogArticle('PHP advanced',"php far away","ayoub elfaquihi");
echo $article2->afficher();




?>