<style>
    .donut2-legend>span {
        display: inline-block;
        margin-right: 30px;
        margin-bottom: 10px;
        font-size: 13px;
    }

    .donut2-legend>span:last-child {
        margin-right: 0;
    }

    .donut2-legend>span>i {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-right: 7px;
        margin-top: -3px;
        vertical-align: middle;
        border-radius: 1px;
    }

    .donut-legend>span {
        display: inline-block;
        margin-right: 30px;
        margin-bottom: 10px;
        font-size: 13px;
    }

    .donut-legend>span:last-child {
        margin-right: 0;
    }

    .donut-legend>span>i {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-right: 7px;
        margin-top: -3px;
        vertical-align: middle;
        border-radius: 1px;
    }

    .col {
        padding-top: 5px;
    }

    #donut2 {
        max-height: 280px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
<section class='content'>
    <?php if ($this->ion_auth->is_admin()) : ?>
        <div class="col-md-12">
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-blue-active">
                    <p style="text-align: center;">
                        <span style="font-family: georgia, palatino; font-size: 15pt;">Selamat datang di Sistem Absensi Siswa MA AT-TAQWA YASTU</span>
                    </p>
                    <h3 class="widget-user-username"></h3>
                    <h5 class="widget-user-desc"></h5>
                </div>
                <div class="widget-user-image">
                    <!-- <img class="img-circle" src="<?php echo base_url() ?>assets/dist/img/logo.jpg" alt="User Avatar"> -->
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                            </div>
                        </div>
                        <div class="col-sm-4 border-right">
                            <center>
                                <i>Sistem Absensi Siswa berbasis QR CODE</i><br>
                                <br>Halaman ini terbuka dalam
                                <strong>{elapsed_time}</strong> detik.
                            </center>
                        </div>
                        <div class="col-sm-3">
                            <div class="description-block">
                                <h5 class="description-header"></h5>
                                <span class="description-text"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php else : ?>

    <div class="col-md-12">
        <div class="box box-widget widget-user">
            <div class="widget-user-header bg-blue-active">
                <p style="text-align: center;">
                    <span style="font-family: georgia, palatino; font-size: 15pt;">Selamat datang di Sistem Absensi Siswa MA AT-TAQWA YASTU</span>
                </p>
                <h3 class="widget-user-username"></h3>
                <h5 class="widget-user-desc"></h5>
            </div>
            <div class="widget-user-image">
                <!-- <img class="img-circle" src="<?php echo base_url() ?>assets/dist/img/logo.jpg" alt="User Avatar"> -->
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                        </div>
                    </div>
                    <div class="col-sm-4 border-right">
                        <center>
                            <i>Sistem Absensi Siswa berbasis QR CODE</i><br>
                            <br>Halaman ini terbuka dalam
                            <strong>{elapsed_time}</strong> detik.
                        </center>
                    </div>
                    <div class="col-sm-3">
                        <div class="description-block">
                            <h5 class="description-header"></h5>
                            <span class="description-text"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>