<?php use helpers\View;?>

<!-- Page Headers -->
<?php View::render('layout/header', ['pageTitle' => 'Hero Components']) ?>

<body>
<!-- Navigation -->
<?php View::render('layout/navigation/main') ?>

<main class="components-index">
    <div class="heading h3">Hero Option 1</div>
    <?php
    View::render('organisms/hero/global-hero-1', [
        'title' => 'GLOBAL</br> LEVEL HERO </br>HEADLINE',
        'breadcrumbLinks' => [['name' => 'Sdgs', 'link' => '#']],
        'imageUrl' => '/assets/images/placeholder/hero/global-hero-3.jpg',
        'imageMobileUrl' => '/assets/images/placeholder/hero/sdg-hero-mobile@2x.jpg'
    ]);?>
    <div class="heading h3">Hero Option 2</div>
    <?php
    View::render('organisms/hero/global-hero-2', [
        'title' => 'Global Level Hero',
        'breadcrumbLinks' => [['name' => 'Sdgs', 'link' => '#']],
        'imageUrl' => '/assets/images/placeholder/hero/hero-2-image.png',
        'imageMobileUrl' => '/assets/images/placeholder/hero/about-image.jpg'
    ]);
    ?>
    <div class="heading h3">Country Hero Option 2</div>
    <?php View::render('organisms/hero/country-hero-2', [
        'subtitle' => 'Re-imagining Life in a Post-pandemic World',
        'title' => 'COUNTRY LEVEL HERO HEADLINE',
        'description' => 'As we ‘come to our feet’ to respond to public health issues at the borders, key 
                          messages on Covid-19 should be reinforced, border security enhanced…',
        'imageUrl' => '../../../assets/images/placeholder/hero/country-hero-img.jpg'
    ]) ?>
    <div class="heading h3">Country Hero Option 3</div>
    <?php View::render('organisms/hero/country-hero-3', [
        'subtitle' => 'Sierra Leone',
        'title' => 'Sierra Leone Youth Minister Launches 2020 Social Good Summit',
        'description' => 'As we ‘come to our feet’ to respond to public health issues at the borders, key 
                          messages on Covid-19 should be reinforced, border security enhanced…',
        'imageUrl' => '../../../assets/images/placeholder/hero/country-hero-img.jpg'
    ]) ?>

</main>

<!-- Footer -->
<?php View::render('layout/footer'); ?>
<script type="text/javascript" src="/dist/app.js"></script>
</body>
</html>
