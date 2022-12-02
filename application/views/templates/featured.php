<section class="blogs">
  <div class="p-5 text-center hero-container" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/hero-bg.jpg');">
    <div class="container h-100">
      <div class="row h-100 blogs-main-container">
        <h1><span class="slogan">Awaken To A Different World.</span></h1>
        <div class="col-md-8 h-100 p-2">
            <div class="row h-100">
                <div class="col-md-12" onclick="javascript: window.location='<?=base_url()?>blog/index/<?=$blog[0]['id']?>'">
                    <div class="blog-container big" style="
                        background-image:url('images/blogs/<?=$blog[0]['image']?>');
                        background-size: cover;
                    ">
                        <h3>
                            <?=$blog[0]['title']?>
                        </h3>
                        <div class="category">
                            <?=$blog[0]['category']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="row h-50 mb-2 mb-md-0">
              <div class="col-md-12 p-2" onclick="javascript: window.location='<?=base_url()?>blog/index/<?=$blog[1]['id']?>'">
                  <div class="blog-container small" style="
                      background-image:url('images/blogs/<?=$blog[1]['image']?>');
                      background-size: cover;
                  ">
                      <h3>
                          <?=$blog[1]['title']?>
                      </h3>
                      <div class="category">
                          <?=$blog[1]['category']?>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row h-50">
              <div class="col-md-12 p-2" onclick="javascript: window.location='<?=base_url()?>blog/index/<?=$blog[2]['id']?>'">
                  <div class="blog-container small" style="
                      background-image:url('images/blogs/<?=$blog[2]['image']?>');
                      background-size: cover;
                  ">
                      <h3>
                          <?=$blog[2]['title']?>
                      </h3>
                      <div class="category">
                          <?=$blog[2]['category']?>
                      </div>
                  </div>
              </div>
          </div><!-- h-50 -->
        </div>
      </div><!-- blogs-main-container -->
    </div>
  </div><!-- container -->
</section>