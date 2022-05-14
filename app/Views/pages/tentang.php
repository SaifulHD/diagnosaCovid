<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="bg-white m-content pb-5">
    <div class="row mx-4 ">
        <!-- head content  -->
        <div class="col-12 pt-3">
            <div class="d-flex d-md-block flex-column-reverse">

                <h6 class="f-24 f-black">Tentang Covid-19</h6>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div><br>

        <!-- Table Tipe Gejala -->
        <table class="table">
            <thead>
                <tr>
                    <th>Tipe Gejala Covid-19</th>
                    <th>Penjelasan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ringan</td>
                    <td>pada tipe gejala ringan tidak ada tanda dan gejala serius seperti sesak napas dan kesulitan bernapas.</td>
                </tr>
                <tr>
                    <td>Sedang</td>
                    <td>pada tipe gejala sedang terdapat tanda dan gejala sesak napas ringan. </td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td>pada tipe gejala berat terdapat tanda dengan <i>dispenea</i> (sesak napas) berat dan mengalami gangguan pernapasan, <i>takipnea</i> (Pernapasan yang sangat cepat dan sering kali pendek) >
                        30 napas / menit</td>
                </tr>
            </tbody>
        </table><br><br>



        <!-- table perawatan berdasarkan tipe gejala -->
        <table class="table">
            <thead>
                <tr>
                    <th>Tipe Gejala Covid-19</th>
                    <th>Perawatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>Ringan</td>
                    <td>Isolasi mandiri di rumah, RS Darurat, RS, maupun RS Rujukan COVID-19. Isolasi minimal 10 hari sejak munculnya gejala ditambah 3 hari bebas demam dan gejala pernapasan. Setelah itu pasien dinyatakan selesai isolasi.</td>
                </tr>
                <tr>

                    <td>Sedang</td>
                    <td>Isolasi mandiri di rumah, RS Darurat, RS, maupun RS Rujukan COVID-19. Isolasi minimal 10 hari sejak munculnya gejala ditambah 3 hari bebas demam dan gejala pernapasan. Setelah itu pasien dinyatakan selesai isolasi.</td>
                </tr>
                <tr>

                    <td>Berat</td>
                    <td>Isolasi di rumah sakit atau rumah sakit rujukan. Pasien diisolasi minimal 10 hari sejak muncul gejala ditambah 3 hari bebas demam dan gejala pernapasan. Pasien akan dilakukan lagi tes swab jika hasilnya negatif maka pasien akan dinyatakan sembuh.</td>
                </tr>
            </tbody>
        </table>



    </div>
</div>


<?= $this->endSection() ?>