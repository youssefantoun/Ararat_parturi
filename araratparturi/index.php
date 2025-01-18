<?php get_header(); 
$user_info = get_userdata(1);
$author_meta = get_the_author_meta('description',1);
?>

    <article id="hosep">
      <h2><?php echo $user_info->first_name ?></h2>
      <div class="container">
        <div class="image">
          <img
            src="<?php echo get_template_directory_uri();?>/image/289947707_1325979094478382_7815015605527300029_n.jpg"
            alt=""
          />
        </div>
        <div class="about">
          <p>
          <?php echo $author_meta ?>
          </p>
        </div>
      </div>
    </article>
    <article id="palvelu">
      <h2>Palvelut</h2>
      <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <section class="card">
      <h2 class="service">
            <?php the_title() ?>
          </h2>
          <?php the_content(); ?> 
      </section>
            <?php
            endwhile; else: ?>
      <?php endif; ?>
        <section class="info">
          <h2 class="service">
            joka 10 palvelu on makuton. Kantaasiakaskortti on henkilökontainen.
          </h2>
        </section>
      </div>
    </article>
    <article id="yhteytta">
      <h2>Yhteyttä</h2>
      <div class="container">
        <div class="info">
          <div class="address">
            <address>Insinöörinkatu 27 LH 4</address>
            <address>33720 Tampere</address>
            <p>Y-tunnus : 3144801-9</p>
          </div>
          <div class="contact">
            <div class="email">
              <span>Sähköposti : </span>
              <a href="mailto:araratparturi@gmail.com">
                araratparturi@gmail.com</a
              >
            </div>
            <div class="phone">
              <span>Puhelin-numero : </span>
              <a href="tel:+358413152554">0413152554</a>
            </div>
          </div>
          <div class="media">
            <a
              href="https://www.facebook.com/Parturi.Ararat"
              target="_blank"
              rel="noopener noreferrer"
              ><svg
                class="info-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"
                />
              </svg>
            </a>
            <a
              href="https://instagram.com/araratparturi/"
              target="_blank"
              rel="noopener noreferrer"
            >
              <svg
                class="info-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                />
              </svg>
            </a>
            <a href="http://wa.me/358449249809">
              <svg
                class="info-icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
              >
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z"
                />
              </svg>
            </a>
          </div>
        </div>
        <div class="maps">
          <iframe
            class="maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1603.4731048215958!2d23.848910432972122!3d61.44957910959839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468edf8790c5503f%3A0x4f7b610f911c15f0!2sArarat%20Parturi!5e0!3m2!1sfi!2sfi!4v1729002126258!5m2!1sfi!2sfi"
            style="border: 0"
            allowfullscreen="true"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <?php echo do_shortcode( '[grw id=43]' ); ?>
      </div>
    </article>
    <article id="socialmedia">
      <h2>Social Media</h2>
      <div class="container fb-page">
      
      <iframe src="https://m.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FParturi.Ararat&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </article>
<?php get_footer(); ?>
