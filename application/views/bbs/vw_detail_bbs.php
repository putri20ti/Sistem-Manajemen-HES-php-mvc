<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $title ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="tanggal"
                                    value="<?= $observasi->tanggal ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_karyawan" class="col-sm-3 col-form-label">Nama Karyawan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="id_karyawan"
                                    value="<?= $observasi->nama_karyawan ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="observasi_diri_sendiri" class="col-sm-3 col-form-label">Observasi Diri
                                Sendiri?</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="observasi_diri_sendiri"
                                    value="<?= $observasi->{'observasi_diri_sendiri'} == 1 ? 'Ya' : 'Tidak' ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="coach" class="col-sm-3 col-form-label">Coach</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="coach"
                                    value="<?= $observasi->{'coach'} == 1 ? 'Ya' : 'Tidak' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi_observasi" class="col-sm-3 col-form-label">Lokasi Observasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="lokasi_observasi"
                                    value="<?= $observasi->lokasi_observasi ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah_observasi" class="col-sm-3 col-form-label">Jumlah Observasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="jumlah_observasi"
                                    value="<?= $observasi->jumlah_observasi ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="golongan_observasi" class="col-sm-3 col-form-label">Golongan Observasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="golongan_observasi"
                                    value="<?= $observasi->golongan_observasi ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="organisasi_observasi" class="col-sm-3 col-form-label">Organisasi
                                Observasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="organisasi_observasi"
                                    value="<?= $observasi->organisasi_observasi ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perusahaan_kontraktor" class="col-sm-3 col-form-label">Perusahaan
                                Kontraktor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="perusahaan_kontraktor"
                                    value="<?= $observasi->perusahaan_kontraktor ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="1.1" class="col-sm-3 col-form-label">Menghindari "Line of Fire"</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="1.1"
                                    value="<?= $observasi->{'1.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="1.2" class="col-sm-3 col-form-label">Berjalan/bergerak dengan pandangan ke arah
                                gerakan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="1.2"
                                value="<?= $observasi->{'1.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="1.3" class="col-sm-3 col-form-label">Menjaga mata pada pekerjaan </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="1.3"
                                value="<?= $observasi->{'1.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="1.4" class="col-sm-3 col-form-label">Menjaga badan dan bagiannya diluar posisi
                                terjepit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="1.4"
                                value="<?= $observasi->{'1.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="1.5" class="col-sm-3 col-form-label">Naik/turun</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="1.5"
                                value="<?= $observasi->{'1.5'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="2.1"
                                class="col-sm-3 col-form-label">Mengangkat/menurunkan/menekan/menarik</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="2.1"
                                value="<?= $observasi->{'2.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="2.2" class="col-sm-3 col-form-label">Menghindar dari memuntir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="2.2"
                                value="<?= $observasi->{'2.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="2.3" class="col-sm-3 col-form-label">Menggapai dalam jangkauan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="2.3"
                                value="<?= $observasi->{'2.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="2.4" class="col-sm-3 col-form-label">Menanggapi resiko ergonomi industri</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="2.4"
                                value="<?= $observasi->{'2.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="3.1" class="col-sm-3 col-form-label">Memilih dan menggunakan
                                perkakas/peralatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="3.1"
                                value="<?= $observasi->{'3.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="3.2" class="col-sm-3 col-form-label">Menggunakan pelindung/barikade/alat
                                peringatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="3.2"
                                value="<?= $observasi->{'3.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="4.1" class="col-sm-3 col-form-label">Persiapan kerja dan JHA (Job Hazard
                                Analysis) - JSA</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="4.1"
                                value="<?= $observasi->{'4.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="4.2" class="col-sm-3 col-form-label">Mengikuti prosedur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="4.2"
                                value="<?= $observasi->{'4.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="4.3" class="col-sm-3 col-form-label">Isolasi energi (Lock-Out/Tag-Out) </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="4.3"
                                value="<?= $observasi->{'4.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="4.4" class="col-sm-3 col-form-label">Mengerjakan Hot-Work</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="4.4"
                                value="<?= $observasi->{'4.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="4.5" class="col-sm-3 col-form-label">Memasuki area confined space</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="4.5"
                                value="<?= $observasi->{'4.5'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="4.7" class="col-sm-3 col-form-label">Komunikasi ke rekan kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="4.7"
                                value="<?= $observasi->{'4.7'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="5.1" class="col-sm-3 col-form-label">Bekerja pada posisi seimbang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="5.1"
                                value="<?= $observasi->{'5.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="5.2" class="col-sm-3 col-form-label">Membersihkan/menyimpan peralatan/perkakas
                                (h.keeping)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="5.2"
                                value="<?= $observasi->{'5.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="5.3" class="col-sm-3 col-form-label">Bekerja di lingkungan dengan cahaya yang
                                cukup</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="5.3"
                                value="<?= $observasi->{'5.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.1" class="col-sm-3 col-form-label">Melakukan istirahat berkala</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.1"
                                value="<?= $observasi->{'6.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.2" class="col-sm-3 col-form-label">Postur leher dan punggung </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.2"
                                value="<?= $observasi->{'6.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.3" class="col-sm-3 col-form-label">Postur saat menggunakan telepon </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.3"
                                value="<?= $observasi->{'6.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.4" class="col-sm-3 col-form-label">Penyangga punggung</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.4"
                                value="<?= $observasi->{'6.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.5" class="col-sm-3 col-form-label">Postur pundak</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.5"
                                value="<?= $observasi->{'6.5'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.6" class="col-sm-3 col-form-label">Posisi pergelangan dan tangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.6"
                                value="<?= $observasi->{'6.6'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.7" class="col-sm-3 col-form-label">Memegang/menggerakkan mouse</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.7"
                                value="<?= $observasi->{'6.7'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.8" class="col-sm-3 col-form-label">Posisi Pinggang dan Kaki</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.8"
                                value="<?= $observasi->{'6.8'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.9" class="col-sm-3 col-form-label">Posisi Telapak Kaki</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.9"
                                value="<?= $observasi->{'6.9'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="6.10" class="col-sm-3 col-form-label">Mengenali dan Melaporkan
                                ketidaknyamanan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="6.10"
                                value="<?= $observasi->{'6.10'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="7.1" class="col-sm-3 col-form-label">Pencegahan tumpahan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="7.1"
                                value="<?= $observasi->{'7.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="7.2" class="col-sm-3 col-form-label">Persiapan untuk pembersihan
                                tumpahan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="7.2"
                                value="<?= $observasi->{'7.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="7.3" class="col-sm-3 col-form-label">Menangani sampah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="7.3"
                                value="<?= $observasi->{'7.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.1" class="col-sm-3 col-form-label">Pelindung kepala</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.1"
                                value="<?= $observasi->{'8.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.2" class="col-sm-3 col-form-label">Pelindung mata dan wajah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.2"
                                value="<?= $observasi->{'8.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.3" class="col-sm-3 col-form-label">Pelindung pendengaran</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.3"
                                value="<?= $observasi->{'8.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.4" class="col-sm-3 col-form-label">Pelindung pernafasan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.4"
                                value="<?= $observasi->{'8.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.5" class="col-sm-3 col-form-label">Pelindung tangan dan lengan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.5"
                                value="<?= $observasi->{'8.5'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.6" class="col-sm-3 col-form-label">Pelindung jatuh</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.6"
                                value="<?= $observasi->{'8.6'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.7" class="col-sm-3 col-form-label">Pakaian pelindung</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.7"
                                value="<?= $observasi->{'8.7'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.8" class="col-sm-3 col-form-label">Alat mengambang personal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.8"
                                value="<?= $observasi->{'8.8'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="8.9" class="col-sm-3 col-form-label">Pelindung kaki</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="8.9"
                                value="<?= $observasi->{'8.9'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.1" class="col-sm-3 col-form-label">Perencanaan perjalanan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.1"
                                value="<?= $observasi->{'9.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.2" class="col-sm-3 col-form-label">Pre-Trip Inspection dan Seat Belt</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.2"
                                value="<?= $observasi->{'9.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.3" class="col-sm-3 col-form-label">Berkendara pada kecepatan yang
                                sesuai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.3"
                                value="<?= $observasi->{'9.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.4" class="col-sm-3 col-form-label">Jarak iring</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.4"
                                value="<?= $observasi->{'9.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.5" class="col-sm-3 col-form-label">Mengerem</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.5"
                                value="<?= $observasi->{'9.5'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.6" class="col-sm-3 col-form-label">Berpindah jalur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.6"
                                value="<?= $observasi->{'9.6'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.7" class="col-sm-3 col-form-label">Menjaga pandangan dan pengamatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.7"
                                value="<?= $observasi->{'9.7'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.8" class="col-sm-3 col-form-label">Memundurkan kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.8"
                                value="<?= $observasi->{'9.8'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="9.9" class="col-sm-3 col-form-label">Perilaku lainnya yang tidak tersebut di
                                defenisi driving</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="9.9"
                                value="<?= $observasi->{'9.9'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="10.1" class="col-sm-3 col-form-label">Persiapan perjalanan kapal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="10.1"
                                value="<?= $observasi->{'10.1'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="10.2" class="col-sm-3 col-form-label">Menggerakkan/memundurkan kapal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="10.2"
                                value="<?= $observasi->{'10.2'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="10.3" class="col-sm-3 col-form-label">Memasuki persimpangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="10.3"
                                value="<?= $observasi->{'10.3'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="10.4" class="col-sm-3 col-form-label">Docking </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="10.4"
                                value="<?= $observasi->{'10.4'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="11.0" class="col-sm-3 col-form-label">Lain-lain</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="11.0"
                                value="<?= $observasi->{'11.0'} == 1 ? 'Safe' : 'At Risk' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perilaku_selamat" class="col-sm-3 col-form-label">Safe Behavior/Perilaku
                                Selamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="perilaku_selamat"
                                    value="<?= $observasi->perilaku_selamat ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perilaku_beresiko" class="col-sm-3 col-form-label">At Risk Behavior/Perilaku
                                Beresiko</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="perilaku_beresiko"
                                    value="<?= $observasi->perilaku_beresiko ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ketika" class="col-sm-3 col-form-label">Ketika: (Melakukan tugas atau
                                pekerjaan)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="ketika"
                                    value="<?= $observasi->ketika ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ditemukan" class="col-sm-3 col-form-label">Ditemukan: (Penjelasan perilaku
                                beresiko)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="ditemukan"
                                    value="<?= $observasi->ditemukan ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sebab" class="col-sm-3 col-form-label">Sebab: (Alasan yang diberikan pada
                                perilaku beresiko)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="sebab"
                                    value="<?= $observasi->sebab ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="saran" class="col-sm-3 col-form-label">Saran-saran/Mencoba: (Diskusi solusi dan
                                kesanggupan mencoba)</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="saran"
                                    value="<?= $observasi->saran ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="setuju_perilaku_terjadi" class="col-sm-3 col-form-label">Setuju Perilaku
                                Terjadi?</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="setuju_perilaku_terjadi"
                                value="<?= $observasi->{'setuju_perilaku_terjadi'} == 1 ? 'Ya' : 'Tidak' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="setuju_perilaku_beresiko" class="col-sm-3 col-form-label">Setuju Perilaku
                                Beresiko?</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="setuju_perilaku_beresiko"
                                value="<?= $observasi->{'setuju_perilaku_beresiko'} == 1 ? 'Ya' : 'Tidak' ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bentuk_perilaku_selamat" class="col-sm-3 col-form-label">Perilaku
                                Selamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="bentuk_perilaku_selamat"
                                    value="<?= $observasi->bentuk_perilaku_selamat ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tindak_lanjut" class="col-sm-3 col-form-label">Tindak Lanjut Steering
                                Committee</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control bg-light" id="tindak_lanjut"
                                value="<?= $observasi->{'tindak_lanjut'} == 1 ? 'Ya' : 'Tidak' ?>" readonly>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="<?= base_url('bbs') ?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>