
<?php get_header();?>

  <main>
    <section class="buttons">
      <button onclick="showAlert('Welcome to Muse Fanpage!')">Welcome</button>
      <button onclick="showAlert('Discover More About Muse')">Learn More</button>
    </section>
    <section class="image-text">
      <img src="<?php echo get_stylesheet_directory_uri();?>/muse1.jpeg" alt="Muse Band">
      <div>
        <h2>About Muse</h2>
        <p>Muse is an English rock band from Teignmouth, Devon, formed in 1994. The band consists of Matt Bellamy, Chris Wolstenholme, and Dominic Howard.</p>
      </div>
    </section>
    <section class="info">
      <p>Muse has released nine studio albums and is known for their energetic live performances and unique musical style combining alternative rock, electronic, and classical music influences.</p>
    </section>
    <section class="gallery">
      <img src="<?php echo get_stylesheet_directory_uri();?>/muse2.jpg" alt="Gallery Image 1">
      <img src="<?php echo get_stylesheet_directory_uri();?>/muse3.jpeg" alt="Gallery Image 2">
      <img src="<?php echo get_stylesheet_directory_uri();?>/muse4.jpeg" alt="Gallery Image 3">
    </section>
  </main>
  <?php get_footer();?>