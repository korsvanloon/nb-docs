<div class="pagination">
<?php 
if($page->hasChildren()) :
  $firstChild = $page->children()->first();
?>
  <a href="<?php echo $firstChild->url() ?>" class="btn btn-default btn-lg">
    <strong>Verdieping:</strong>
    <?php echo $firstChild->title() ?>
  </a>
<?php endif; ?>

<?php 
$next = null;
if($page->hasNextVisible()) 
  $next = $page->nextVisible();
else if($page->parent() && $page->parent()->hasNextVisible())
  $next = $page->parent()->nextVisible();
if($next):
?>
  <a href="<?php echo $next->url() ?>" class="btn btn-default btn-lg">
    <strong>Volgende:</strong>
    <?php echo $next->title() ?>
  </a>
<?php endif; ?>

</div>
     