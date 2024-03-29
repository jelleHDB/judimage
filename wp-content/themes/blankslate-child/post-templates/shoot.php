<?php
/*
Template Name: Shoot
Template Post Type: post
*/
get_header(); ?>

<div class="slider-shoot" style="background-image: linear-gradient( rgb(0 0 0 / 50%), rgb(0 0 0 / 50%) ), url(<?php the_field('afbeeldingSlider-shoot'); ?>)">
    <div class="slider-shoot-inner">
        <h2 class="titelSlider-shoot"><?php the_field( 'titelSlider-shoot' ); ?></h2>
    </div>
</div>

<div class="shoot-informatie">
    <div class="shoot-informatie-inner">
        <h2 class="titelInformatie-shoot"><?php the_field( 'titelInformatie-shoot' ); ?></h2>
        <div class="informatie-shoot"><?php the_field( 'informatie-shoot' ); ?></div>
    </div>
</div>

<div class="image-gallery">
    <div class="image-item">
        <?php $gallerij_shoot_images = get_field( 'gallerij-shoot' ); ?>
        <?php if ( $gallerij_shoot_images ) : ?>
            <?php foreach ( $gallerij_shoot_images as $gallerij_shoot_image ): ?>
                <img src="<?php echo esc_url( $gallerij_shoot_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $gallerij_shoot_image['caption'] ); ?>" data-full="<?php echo esc_url( $gallerij_shoot_image['sizes']['thumbnail'] ); ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
  <!-- Repeat -->
</div>
<!-- Modal Structure -->
<div id="imageModal" class="modal" role="dialog" aria-label="Image View Modal">
    <button class="close" aria-label="Close" tabindex="0">&times;</button>
    <img class="modal-content" id="fullImage">
    <div id="caption" aria-live="polite"></div>
</div>

<script>
    const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("fullImage");
const captionText = document.getElementById("caption");
const imageGallery = document.querySelector(".image-gallery");

imageGallery.addEventListener("click", function (event) {
  const target = event.target;
  if (target.tagName === "IMG" && target.closest(".image-item")) {
    showModal(target);
  }
});

function showModal(img) {
  modal.style.visibility = "visible";
  modal.scrollTop = 0;
  requestAnimationFrame(() => {
    modal.style.opacity = "1";
  });

  modalImg.src = img.dataset.full;
  captionText.style.opacity = "0";
  captionText.style.visibility = "visible";
  setTimeout(() => {
    captionText.innerHTML = img.alt;
    captionText.style.opacity = "1";
  }, 1000);

  document.addEventListener("keydown", handleEscape, false);
}

function handleEscape(event) {
  if (event.key === "Escape" || event.key === "Esc") {
    closeModal();
  }
}

const span = document.querySelector(".close");

span.addEventListener("click", closeModal);
modal.addEventListener("click", function (event) {
  if (event.target === modal) {
    closeModal();
  }
});

function closeModal() {
  modal.style.opacity = "0";
  modal.addEventListener(
    "transitionend",
    () => {
      modal.style.visibility = "hidden";
      captionText.style.visibility = "hidden";
      captionText.style.opacity = "0";
      captionText.innerHTML = "";
    },
    {
      once: true
    }
  );

  document.removeEventListener("keydown", handleEscape, false);
}
</script>



<?php get_footer(); ?>