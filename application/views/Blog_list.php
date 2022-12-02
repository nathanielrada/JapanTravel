<?php  header_template(); ?>
<section class="blog_list">
  <div class="container h-100">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
        <?php if($category){?>
        <li class="breadcrumb-item active" aria-current="page"><?=ucwords($category)?></a></li>
        <?php } ?>
      </ol>
    </nav>
    <ul class="result">
      <?php if(!$blogs){ ?>
      <li class="mb-5" style="cursor: default;margin-bottom: 300px !important;">
        <div class="row">
          <div class="col-md-12 details">
            <div class="row">
              <div class="col-md-12">
                <h4>No blogs yet <?=$category ? 'for '.$category : '' ?>.</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1 avatar-container">
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
          </div>
        </div>
      </li>        
      <?php } ?>
      <?php foreach ($blogs as $key => $value) {?>
      <li class="mb-3" onclick="javascript: window.location='<?=base_url()?>blog/index/<?=$value->id?>'">
        <div class="row">
          <div class="col-md-4">
            <div class="blog-image" style="
            background-image:url('<?=base_url()?>images/blogs/<?=$value->image?>');
            ">
          </div>
        </div>
        <div class="col-md-8 details">
          <div class="row">
            <div class="col-md-12">
              <h4><?=$value->title?></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1 avatar-container">
              <img class="avatar" src="<?=base_url()?>images/avatars/<?=$value->avatar?>"/>
            </div>
            <div class="col-md-6"><?=$value->author?></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p><?=substr($value->content, 0,200).'...'?></p>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php } ?>
  </ul>
</div>
</section>
<?php  footer_template(); ?>