 <? require_once "header.php" ?>
    <div class="content">
        <div class="nameOfCampany">
            <h4>Catering Firmaları</h4>                      <!--firmalar alt alta listelenecek-->
            <a href="istanbul.php">İstanbul Catering Firmaları</a><br>
            <a href="izmir.php">İzmir Catering Firmaları</a><br>
            <a href="antalya.php">Antalya Catering Firmaları</a>
        </div>
        <div class="mainContent">                              <!--ana sayfa içerigi-->
            <form>
                Firma Adı:<br>
                <input type="text" name="firmaAdı"><br>
                Firma Tel:<br>
                <input type="text" name="firmaTel"><br>
                Firma Email:<br>
                <input type="text" name="firmaEmail"><br>
                <select name="iller" id="iller" >
                    <option value="il" name="il">İl seçiniz</option>
                    <? for($i=1; $i<=81; $i++): ?>
                    <!-- sql den iller cekilecek                        -->
                        <option value="il" name="il">istanbul</option>
                    <? endfor; ?>
                </select>
                <select name="ilceler" id="ilceler" >
                    <option value="ilce" name="ilce">İlçe seçiniz</option>
                    <? for($i=1; $i<=81; $i++): ?>
                        <!-- sql den ilceler cekilecek                        -->
                        <option value="ilce" name="ilce">ilçe adları</option>
                    <? endfor; ?>
                </select><br>
                Firma Hakkında:<br>
                <textarea rows="4" cols="50" name="comment" ></textarea><br>
                <input type="submit" value="Gönder"><br>

            </form>
        </div>
        <div style="clear:both;"></div>
        <? require_once "likedCompany.php"?>

    </div>
<? require_once "footer.php" ?>
