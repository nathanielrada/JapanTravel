<?php  header_template(); ?>
<section class="blog mb-5">
  <div class="container h-100">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url()?>blog/list/<?=$blog->category?>"><?=$blog->category?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$blog->title?></li>
      </ol>
    </nav>
    <h1><?=$blog->title?></h1>
    <div class="row">
      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-md-12"><?=$blog->date_posted?></div>
        </div>
        <div class="row mb-3">
          <div class="col-md-1">
            <img class="avatar" src="<?=base_url()?>images/avatars/<?=$blog->avatar?>"/>
          </div>
          <div class="col-md-6 "><?=$blog->author?></div>
        </div>
      </div>
    </div>
    <div class="row mb-4 blog-image">
      <div class="col-md-12">
        <img src="<?=base_url()?>images/blogs/<?=$blog->image?>"/>
      </div>
    </div>
    <div class="row blog-text">
      <div class="col-md-12">
        <p><?=$blog->content?></p>
      </div>
    </div>
  </div>
</section>
<?php  footer_template(); ?>