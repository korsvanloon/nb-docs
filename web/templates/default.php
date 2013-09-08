<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />

  <?php echo css('http://fonts.googleapis.com/css?family=PT+Sans:400italic,400,700,700italic') ?>
  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/css/bootstrap.min.css') ?>

</head><body>

<div class="row">
    <?php snippet('breadcrumbs', ['base_url' => 'http://localhost/~korsvanloon/docs']); ?>
    <nav class="menu col-md-4">
      <?php snippet('menu', ['top' => true]) ?>
    </nav>
    
    <section class="content col-md-7">
      
      <h1 class="page-title">
        <?php echo html($page->title()) ?>
      </h1>
      <article>
        <?php echo kirbytext($page->text()) ?>
      </article>
    
    </section>
    
</div>
<div class="row">
  <footer>
    
    <?php echo kirbytext($site->copyright()) ?>
  </footer>
</div> 
<?php echo js('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') ?>
<?php echo js('assets/js/bootstrap.min.js') ?>
</body>

</html>