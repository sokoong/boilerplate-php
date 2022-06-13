<?php require 'inc/header.php';?>

<main>
    <div id="main-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="background:url('https://placehold.jp/1920x987.png');"><img src="https://placehold.jp/1920x987.png" alt=""></div>
            </div>
            <div class="carousel-item">
                <div style="background:url('https://placehold.jp/1920x987.png');"><img src="https://placehold.jp/1920x987.png" alt=""></div>
            </div>
            <div class="carousel-item">
                <div style="background:url('https://placehold.jp/1920x987.png');"><img src="https://placehold.jp/1920x987.png" alt=""></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</main>

<?php require 'inc/footer.php';?>