<?php include "include/header.php" ?>
<div class="page-header">
<h1>Новости</h1>
</div>
<ul>
<?php foreach ( $results['articles'] as $article ) { ?>
<li>
<h2>
<span class="pubDate"><?php echo date('j F', $article->publicationDate)?></span> <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
<?php if ( $article->categoryId ) { ?>
<span class="category">в <a href=".?action=archive&amp;categoryId=<?php echo $article->categoryId?>"><?php echo htmlspecialchars( $results['categories'][$article->categoryId]->name )?></a></span>
<?php } ?>
</h2>
<p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
</li>
<?php } ?>

      </ul>

      <p><a class="btn btn-primary" href="./?action=archive">Все новости</a></p>

<?php include "include/footer.php" ?>

