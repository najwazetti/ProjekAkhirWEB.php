<?php include('config/functions.php') ?>

<link rel="icon" href="images/pngegg.png">
<header id="home">
    <div class="header-content">
        <h2>Best Trip</h2>
        <div class="line"></div>
        <h1>Only With BlueBird</h1>
    </div>
</header>

<!-- Catalog -->
<section class="catalog" id="catalog">
    <div class="title">
        <h1 class="about">BlueBird Bus</h1>
        <div class="line"></div>
        <div class="controls">
            <button id="leftArrow">&lt;</button>
            <button id="rightArrow">&gt;</button>
        </div>
        </div>
    </div>
    <div class="row" id="slideContainer">
            <?php $busData = getDataBus(); ?>
            <?php for ($i = 0; $i < count($busData); $i ++): ?>
                <div class="col">
                <div class="slide-pair">
                        <?php if ($i < count($busData)): ?>
                            <?php $bus = $busData[$i]; ?>
                            <img src="admin/gambar-upload/<?= $bus['gambar'] ?>" width="300px">
                            <h4><?= $bus['nama_bus'] ?></h4>
                            <p class="fasilitas"><?= $bus['fasilitas'] ?></p>
                            <p class="jumlah-unit">Jumlah Unit: <?= $bus['jumlah_unit'] ?></p>
                            <p class="jumlah-unit">Harga Sewa: Rp. <?= number_format($bus['harga_sewa'], 0, ',', '.') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endfor; ?>
</section>

<!-- About Us -->
<section class="about" id="about">
    <div class="title">
        <h1>About Us</h1>
    </div>
    <div class="line"></div>
    <div class="content">
        <div class="image">
            <img src="images/kolase.jpg" alt="" width=" 50px">
        </div>
        <div>
        <h3>Tentang Bus Services Oleh BlueBird</h3>
            <br />
            <div> BlueBird, sebagai penyedia layanan rental bis terkemuka, menawarkan <br> pengalaman perjalanan yang tak terlupakan melalui <br> armada yang elegan dan fasilitas yang menawarkan kenyamanan optimal. <br> 
                <br> Dengan komitmen terhadap layanan berkualitas tinggi, BlueBird menonjolkan nuansa mewah dalam setiap perjalanan, menjadi mitra setia bagi mereka yang menghargai kombinasi istimewa antara gaya dan 
                kenyamanan dalam setiap perjalanan mereka yang melibatkan sejauh kilometer.  </div>
        </div>
    </div>
</section>

<section class="footer">
    <p>Copyright © 2022 Blue Bird Group. All Rights Reserved</p>
</section>


