<?php 
if(!isset($subpages)) {
  $subpages = $site->pages();
} ?>
<ul>
  <?php 
  foreach($subpages->visible() as $p) :
    $class = '';  
    if($p->isActive()) $class = 'active';
    else if(isset($top)) $class = 'top';
    $empty = !ctype_upper($p->title()->value{0})
  ?>
  <li class="depth-<?php echo $p->depth() ?>">
    <?php if($empty) : ?>
    <span class="striped">
      <?php echo $p->title() ?>
    </span>
    <?php else : ?>
    <a <?php if($class) echo "class=\"$class\"" ?> 
       href="<?php echo $p->url() ?>">
      <?php echo $p->title() ?></a>
    <?php endif; if($p->hasChildren()) { 
            snippet('menu', ['subpages' => $p->children()]); 
    
    }?>
  </li>
  <?php endforeach ?>
</ul>
