<?php
require "ArticleEncapsule.php";

$article= new Articles();
$article->setTitle("how to be a fullstack webdev in a year");
$article->setContenu("enter solicode tangier for more infos about this offer");
echo $article->show()



?>