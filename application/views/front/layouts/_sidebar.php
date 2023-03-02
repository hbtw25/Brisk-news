<div class="col-lg-4">
   <div class="right_sidebar">

      <aside class="r_widgets news_widgets">
         <div class="main_title2">
            <h2>Berita Populer</h2>
         </div>
         <div class="choice_item">
            <img class="img-fluid" src="<?= base_url("images/posting/large/$popular->photo") ?>" alt="">
            <div class="choice_text">
               <div class="date">
                  <a class="gad_btn" href="<?= base_url("blog/category/$popular->slug") ?>"><?= $popular->category_name ?></a>
                  <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($popular->date) ?></a>
               </div>
               <a href="<?= base_url("blog/read/$popular->seo_title") ?>">
                  <h4><?= $popular->title ?></h4>
               </a>
               <p><?= character_limiter($popular->content, 150) ?></p>
            </div>
         </div>

         <div class="main_title2 mb-5">
            <h2>Sedang Tren</h2>
         </div>
         <div class="news_slider owl-carousel">
            <?php foreach ($trending as $t) : ?>
               <div class="item">
                  <div class="choice_item">
                     <img src="<?= base_url('images/posting/xsmall/' . $t->photo) ?>" alt="">
                     <div class="choice_text">
                        <a href="<?= base_url("blog/read/$t->seo_title") ?>">
                           <h4><?= $t->title ?></h4>
                        </a>
                        <div class="date">
                           <a href="<?= base_url("blog/read/$t->seo_title") ?>"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($t->date) ?></a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endforeach ?>
         </div>
      </aside>

      <aside class="r_widgets social_widgets mt-5">
         <div class="main_title2">
            <h2>Jaringan Sosial</h2>
         </div>
         <ul class="list">
            <li><a href="https://www.facebook.com/CNNIndonesia/?locale=id_ID"><i class="fa fa-facebook"></i>brisk news<span>Like our page</span></a></li>
            <li><a href="https://twitter.com/CNNIndonesia"><i class="fa fa-twitter"></i>brisk news<span>Follow Us</span></a></li>
            <li><a href="https://www.youtube.com/channel/UCKII0Ml9S5wneKbHswmUrIQ"><i class="fa fa-youtube-play"></i>brisk news<span>Subscribe</span></a></li>
         </ul>
      </aside>

   </div>
</div>