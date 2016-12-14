<?
require_once "connection.php";
require_once "header.php";
?>
          <!--  <img src="https://wwcdn.weddingwire.com/vendor/680001_685000/683753/thumbnails/96x96_SQ_1428518719545-bistro-catering-logo-for-online.jpg" alt="logo">
            <div class="menu">
                <a class="btn btn-default" href="#" role="button"></a>
                <button class="btn btn-default" type="index.php">Anasayfa</button>
                <button class="btn btn-default" type="firmaKayit.php">Firma Kaydı</button>
                <button class="btn btn-default" type="iletisim.php">İleşim</button>
                <button class="btn btn-default" type="ilanlar.php">İlanlar</button>
                <div style="clear:both;"></div>
            </div>-->
        <div class="content">
            <div class="nameOfCampany">
                <h4>Catering Firmaları</h4>                      <!--firmalar alt alta listelenecek-->
                <a href="istanbul.php">İstanbul Catering Firmaları</a><br>
                <a href="izmir.php">İzmir Catering Firmaları</a><br>
                <a href="antalya.php">Antalya Catering Firmaları</a>
            </div>
            <div class="mainContent">                              <!--ana sayfa içerigi-->
                <h3>Biz Kimiz?</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, asperiores beatae
                    consequuntur culpa cupiditate delectus eveniet fuga inventore labore maiores molestias
                    neque quaerat qui quis quo similique sunt unde vel!</p>
                <div>
                    <h3>En Son Eklenen Firmalar</h3>
                    <?
                        //şirketleri veritabanından idlerine göre çekiorz.simdilik gelecek mi die kontrol amaclı çekiyoruz.
                        // sonra illere ve ilçelere göre herbirini kendi sayfasında cekecegiz.
                        for($i=1;$i<5;$i++):
                            $query = mysql_query("SELECT * FROM companies");
                            while ( $companies = mysql_fetch_array($query, MYSQL_ASSOC) ): ?>
                                <div class="addedLast">
                                    <a href="<?=$companies['site']?>">
                                        <img src="<?=$companies['image']?>" alt="<?=$companies['name']?>"><?=$companies['about_us']?>
                                    </a> <br>
                                </div>
                            <?php endwhile;
                        endfor;
                        ?>
                        <div style="clear:both;"></div>
                </div>
            </div>
            <div style="clear:both;"></div>
            <? require_once "likedCompany.php"?>
        </div>
<? require_once "footer.php" ?>