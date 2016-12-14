<?php  require_once "header.php"?>
    <div class="content">
        <div class="nameOfCampany">
            <h4>Catering Firmaları</h4>                      <!--firmalar alt alta listelenecek-->
            <a href="istanbul.php">İstanbul Catering Firmaları</a><br>
            <a href="izmir.php">İzmir Catering Firmaları</a><br>
            <a href="antalya.php">Antalya Catering Firmaları</a>
        </div>
        <div class="mainContent">                              <!--istanbul sayfa içerigi-->
            <div class="link">
                <a href="http://catering.kayaprestige.com.tr/" >
                    <img src="http://catering.kayaprestige.com.tr/wp-content/themes/ArtWorksResponsive/images/logo.jpg" alt="kayaprestige">
                    <p>Kâya ailesi, Türk turizminin yeni yeni geliştiği yıllar olan 1961 yılında sektöre girmiştir.
                        Su anda grup bünyesinde bulunmayan, 1963 yılında hizmete giren 36 odalı 2 yıldızlı Kaya turistik
                        oteli grubun ilk tesisi olup, uzun yıllar  İzmir otelciliği için bir model olma özelliğini korumuştur</p>
                </a>
                <div style="clear:both;"></div>
            </div>

            <div class="link">
                <a href="http://www.secsan.com.tr/izmir-catering.aspx" >
                    <img src="http://www.secsan.com.tr/Portals/0/SecsanLogov01.png" alt="secsan">
                    <p>SEÇSAN, açık ve kapalı mekanlarda yapılacak organizasyon ve davetlerde kullanılacak
                        her türlü ekipmanı temin eder. Özel mönüler, açık büfe mönüleri, iftar mönüleri,
                        brunch mönüleri ve istekleriniz doğrultusunda oluşturabileceğiniz her türlü mönü ikramını en kusursuz şekilde sunar.</p>
                </a>
                <div style="clear:both;"></div>
            </div>

        </div>
        <div style="clear:both;"></div>
        <? require_once "likedCompany.php"?>

    </div>
<? require_once "footer.php" ?>
