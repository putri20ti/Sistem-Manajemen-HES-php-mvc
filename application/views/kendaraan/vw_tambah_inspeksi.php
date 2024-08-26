<div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Checklist Pre-Trip Inspection - Kendaraan Berat</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Inspeksi/upload'); ?>" data-toggle="validator">
                            <div class="row"> 
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                    <label>Nomor Plat *</label>
                                        <select name="no_plat" id="no_plat" class="form-control">
                                            <option value="">Pilih Nomor Plat</option>
                                            <?php foreach ($kendaraan as $d) : ?>
                                                <option value="<?= $d['id_kendaraan']; ?>" data-tipe="<?= $d['tipe_kendaraan']; ?>"><?= $d['no_plat']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('no_plat', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bulan *</label>
                                        <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Masukkan Bulan" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Tipe kendaraan *</label>
                                        <input type="text" class="form-control" id="tipe_kendaraan" name="tipe_kendaraan" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lokasi *</label>
                                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Perusahaan / PHR Dept User *</label>
                                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Masukkan Nama Perusahaan" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="header-title">
                            <h4 class="card-title">HARIAN</h4>
                        </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Item</th>
                    <th colspan="5">Tanggal Inspeksi</th>
                </tr>
                <tr>
                    <th><input type="date" name="tanggal_inspeksi[]" required></th>
                    <th><input type="date" name="tanggal_inspeksi[]" required></th>
                    <th><input type="date" name="tanggal_inspeksi[]" required></th>
                    <th><input type="date" name="tanggal_inspeksi[]" required></th>
                    <th><input type="date" name="tanggal_inspeksi[]" required></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><strong>LUAR KENDARAAN</strong></td>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>KACA DEPAN + WIPER</td>
                    <td><input type="checkbox" name="kaca_depan_wiper[0]"></td>
                    <td><input type="checkbox" name="kaca_depan_wiper[1]"></td>
                    <td><input type="checkbox" name="kaca_depan_wiper[2]"></td>
                    <td><input type="checkbox" name="kaca_depan_wiper[3]"></td>
                    <td><input type="checkbox" name="kaca_depan_wiper[4]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bodi + kaca jendela + kaca belakang</td>
                    <td><input type="checkbox" name="bodi_kaca[0]"></td>
                    <td><input type="checkbox" name="bodi_kaca[1]"></td>
                    <td><input type="checkbox" name="bodi_kaca[2]"></td>
                    <td><input type="checkbox" name="bodi_kaca[3]"></td>
                    <td><input type="checkbox" name="bodi_kaca[4]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BAN DEPAN & BELAKANG</td>
                    <td><input type="checkbox" name="ban_depan_belakang[0]"></td>
                    <td><input type="checkbox" name="ban_depan_belakang[1]"></td>
                    <td><input type="checkbox" name="ban_depan_belakang[2]"></td>
                    <td><input type="checkbox" name="ban_depan_belakang[3]"></td>
                    <td><input type="checkbox" name="ban_depan_belakang[4]"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>LAMPU-LAMPU (LAMPU UTAMA, LAMPU REM, LAMPU SEIN, LAMPU HAZARD, LAMPU MUNDUR)</td>
                    <td><input type="checkbox" name="lampu[0]"></td>
                    <td><input type="checkbox" name="lampu[1]"></td>
                    <td><input type="checkbox" name="lampu[2]"></td>
                    <td><input type="checkbox" name="lampu[3]"></td>
                    <td><input type="checkbox" name="lampu[4]"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Lampu rotary / strobe (khusus Truk)</td>
                    <td><input type="checkbox" name="lampu_rotary[0]"></td>
                    <td><input type="checkbox" name="lampu_rotary[1]"></td>
                    <td><input type="checkbox" name="lampu_rotary[2]"></td>
                    <td><input type="checkbox" name="lampu_rotary[3]"></td>
                    <td><input type="checkbox" name="lampu_rotary[4]"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Alat Bantu Mundur (alarm/kamera)</td>
                    <td><input type="checkbox" name="alat_bantu_mundur[0]"></td>
                    <td><input type="checkbox" name="alat_bantu_mundur[1]"></td>
                    <td><input type="checkbox" name="alat_bantu_mundur[2]"></td>
                    <td><input type="checkbox" name="alat_bantu_mundur[3]"></td>
                    <td><input type="checkbox" name="alat_bantu_mundur[4]"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>PENGAMANAN BARANG MUATAN</td>
                    <td><input type="checkbox" name="pengamanan_barang[0]"></td>
                    <td><input type="checkbox" name="pengamanan_barang[1]"></td>
                    <td><input type="checkbox" name="pengamanan_barang[2]"></td>
                    <td><input type="checkbox" name="pengamanan_barang[3]"></td>
                    <td><input type="checkbox" name="pengamanan_barang[4]"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Ganjal Ban tersedia sepasang</td>
                    <td><input type="checkbox" name="ganjal_ban[0]"></td>
                    <td><input type="checkbox" name="ganjal_ban[1]"></td>
                    <td><input type="checkbox" name="ganjal_ban[2]"></td>
                    <td><input type="checkbox" name="ganjal_ban[3]"></td>
                    <td><input type="checkbox" name="ganjal_ban[4]"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>BAGIAN MESIN</strong> - mesin kondisi mati</td>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>OLI MESIN</td>
                    <td><input type="checkbox" name="oli_mesin[0]"></td>
                    <td><input type="checkbox" name="oli_mesin[1]"></td>
                    <td><input type="checkbox" name="oli_mesin[2]"></td>
                    <td><input type="checkbox" name="oli_mesin[3]"></td>
                    <td><input type="checkbox" name="oli_mesin[4]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>AIR RADIATOR</td>
                    <td><input type="checkbox" name="air_radiator[0]"></td>
                    <td><input type="checkbox" name="air_radiator[1]"></td>
                    <td><input type="checkbox" name="air_radiator[2]"></td>
                    <td><input type="checkbox" name="air_radiator[3]"></td>
                    <td><input type="checkbox" name="air_radiator[4]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>AIR WIPER</td>
                    <td><input type="checkbox" name="air_wiper[0]"></td>
                    <td><input type="checkbox" name="air_wiper[1]"></td>
                    <td><input type="checkbox" name="air_wiper[2]"></td>
                    <td><input type="checkbox" name="air_wiper[3]"></td>
                    <td><input type="checkbox" name="air_wiper[4]"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>DALAM KABIN</strong></td>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SABUK PENGAMAN</td>
                    <td><input type="checkbox" name="sabuk_pengaman[0]"></td>
                    <td><input type="checkbox" name="sabuk_pengaman[1]"></td>
                    <td><input type="checkbox" name="sabuk_pengaman[2]"></td>
                    <td><input type="checkbox" name="sabuk_pengaman[3]"></td>
                    <td><input type="checkbox" name="sabuk_pengaman[4]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>STIR & KLAKSON</td>
                    <td><input type="checkbox" name="stir_klakson[0]"></td>
                    <td><input type="checkbox" name="stir_klakson[1]"></td>
                    <td><input type="checkbox" name="stir_klakson[2]"></td>
                    <td><input type="checkbox" name="stir_klakson[3]"></td>
                    <td><input type="checkbox" name="stir_klakson[4]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>DIM GPS & RFID</td>
                    <td><input type="checkbox" name="dim_gps[0]"></td>
                    <td><input type="checkbox" name="dim_gps[1]"></td>
                    <td><input type="checkbox" name="dim_gps[2]"></td>
                    <td><input type="checkbox" name="dim_gps[3]"></td>
                    <td><input type="checkbox" name="dim_gps[4]"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>PANEL INSTRUMEN dan KONTROL</td>
                    <td><input type="checkbox" name="panel_instrumen[0]"></td>
                    <td><input type="checkbox" name="panel_instrumen[1]"></td>
                    <td><input type="checkbox" name="panel_instrumen[2]"></td>
                    <td><input type="checkbox" name="panel_instrumen[3]"></td>
                    <td><input type="checkbox" name="panel_instrumen[4]"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>PEDAL GAS, REM, KOPLING</td>
                    <td><input type="checkbox" name="pedal_gas[0]"></td>
                    <td><input type="checkbox" name="pedal_gas[1]"></td>
                    <td><input type="checkbox" name="pedal_gas[2]"></td>
                    <td><input type="checkbox" name="pedal_gas[3]"></td>
                    <td><input type="checkbox" name="pedal_gas[4]"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>PENEMPATAN BARANG LEPASAN (LOOSE ITEM) +kebersihan kabin</td>
                    <td><input type="checkbox" name="penempatan_barang[0]"></td>
                    <td><input type="checkbox" name="penempatan_barang[1]"></td>
                    <td><input type="checkbox" name="penempatan_barang[2]"></td>
                    <td><input type="checkbox" name="penempatan_barang[3]"></td>
                    <td><input type="checkbox" name="penempatan_barang[4]"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>DOKUMEN</strong></td>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>LISENSI & IZIN MENGEMUDI (SIM, KP, SIO/LISENSI K3 PESAWAT ANGKAT & ANGKUT) </td>
                    <td><input type="checkbox" name="lisensi_izin[0]"></td>
                    <td><input type="checkbox" name="lisensi_izin[1]"></td>
                    <td><input type="checkbox" name="lisensi_izin[2]"></td>
                    <td><input type="checkbox" name="lisensi_izin[3]"></td>
                    <td><input type="checkbox" name="lisensi_izin[4]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SURAT KENDARAAN (STNK + PLAT NOMOR, PAJAK, PASS KENDARAAN, KIR, SILO/P3A2/SKPP, SURAT IZIN PENGGUNAAN LAMPU ROTARY) </td>
                    <td><input type="checkbox" name="stnk_plat[0]"></td>
                    <td><input type="checkbox" name="stnk_plat[1]"></td>
                    <td><input type="checkbox" name="stnk_plat[2]"></td>
                    <td><input type="checkbox" name="stnk_plat[3]"></td>
                    <td><input type="checkbox" name="stnk_plat[4]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Journey Management plan (JMP), Fatigue management Checklist (FMC)</td>
                    <td><input type="checkbox" name="jmp_fmc[0]"></td>
                    <td><input type="checkbox" name="jmp_fmc[1]"></td>
                    <td><input type="checkbox" name="jmp_fmc[2]"></td>
                    <td><input type="checkbox" name="jmp_fmc[3]"></td>
                    <td><input type="checkbox" name="jmp_fmc[4]"></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <div class="col-md-12">
                                <div class="header-title">
                            <h4 class="card-title">MINGGUAN</h4>
                        </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Item</th>
                    <th colspan="5">Tanggal</th>
                </tr>
                <tr>
                    <th><input type="date" name="tanggal" required></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><strong>BAGIAN MESIN</strong> - mesin kondisi mati</td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>MINYAK REM</td>
                    <td><input type="checkbox" name="minyak_rem"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>MINYAK POWER STREERING</td>
                    <td><input type="checkbox" name="minyak_power"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>V-BELT</td>
                    <td><input type="checkbox" name="v_belt"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>LUAR KENDARAAN</strong></td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SPION KIRI & KANAN</td>
                    <td><input type="checkbox" name="spion_kirikanan"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bagian bawah mesin & transmisi</td>
                    <td><input type="checkbox" name="bagian_bawahmesin"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tangki bahan bakar</td>
                    <td><input type="checkbox" name="tangki_bb"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Baterai Aki</td>
                    <td><input type="checkbox" name="baterai_aki"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Alat Pemadam Api Ringan</td>
                    <td><input type="checkbox" name="alat_pemadam"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ban Cadangan, dongkrak, kunci</td>
                    <td><input type="checkbox" name="ban_cadangan"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Segitiga reflektif</td>
                    <td><input type="checkbox" name="segitiga_reflektif"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>DALAM KABIN</strong> - mesin kondisi mati</td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>REM PARKIR</td>
                    <td><input type="checkbox" name="rem_parkir"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SANDARAN KEPALA & jok</td>
                    <td><input type="checkbox" name="sandaran_jok"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Item P3K</td>
                    <td><input type="checkbox" name="item_p3k"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pemecah kaca (khusus bus) </td>
                    <td><input type="checkbox" name="pemecah_ban"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>PERANGKAT TAMBAHAN</strong> (sesuai tipe)</td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Bak angkut / Bed muatan / Box</td>
                    <td><input type="checkbox" name="bak_angkutan"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>trailer / lowboy / Highboy</td>
                    <td><input type="checkbox" name="trailer"></td>
                </tr>
</tbody>
</table>
                <div class="col-md-12">
                                <div class="header-title">
                            <h4 class="card-title">BULANAN</h4>
                        </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">Item</th>
                    <th colspan="5">Tanggal</th>
                </tr>
                <tr>
                    <th><input type="date" name="tanggal" required></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><strong>UJI FUNGSI</strong>(oleh pengemudi / bersama mekanik, uji dengan laju kurang dari 20 kpj di lokasi aman)</td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>KINERJA REM</td>
                    <td><input type="checkbox" name="kinerja_rem"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kinerja mesin</td>
                    <td><input type="checkbox" name="kinerja_mesin"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kinerja PTO (Power Take Off)</td>
                    <td><input type="checkbox" name="kinerja_pto"></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>CEK VISUAL</strong></td>
                    <td colspan="1"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>PERISAI KOLONG (TRUK)</td>
                    <td><input type="checkbox" name="perisai_kolong"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bagian bawah kendaraan suspensi, poros propeller, axie</td>
                    <td><input type="checkbox" name="poros_propeller"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sekering (fuse)</td>
                    <td><input type="checkbox" name="sekering_fuse"></td>
                </tr>
</tbody>
</table>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var noPlatSelect = document.getElementById('no_plat');
        var tipeKendaraanInput = document.getElementById('tipe_kendaraan');

        noPlatSelect.addEventListener('change', function() {
            var selectedOption = noPlatSelect.options[noPlatSelect.selectedIndex];
            var tipeKendaraan = selectedOption.getAttribute('data-tipe');
            tipeKendaraanInput.value = tipeKendaraan || '';
        });
    });
</script>
