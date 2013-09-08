<ol class="breadcrumb">
  <?php
    $nodes = explode('/', $site->uri->path());
    $uri = '';
    foreach($nodes as $node): 
      $class = false;
      if($node === end($nodes)) $class = 'active';
      else if($node === $nodes[0]) $class = 'top';
      $uri .= "/$node"
  ?>
    <li><a href="<?php echo $base_url.$uri ?>" <?php if($class) echo "class=\"$class\"" ?> >
      <?php echo $node; ?></a></li>
  <?php endforeach; ?>
</ol>