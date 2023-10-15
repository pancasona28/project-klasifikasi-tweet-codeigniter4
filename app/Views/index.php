<?= $this->extend('template/template'); ?>
<?php if ($page === 'index') : ?>
    <?= $this->Section('conten'); ?>
    <div class="container-fluid">
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>My Profil</h1>

            </div><!-- End Page Title -->

            <section class="section dashboard">
                <div class="row">

                    <section class="section profile">
                        <div class="row">
                            <div class="col-xl-4">

                                <div class="card">
                                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                        <h2>Kevin Anderson</h2>
                                        <h3>Web Designer</h3>
                                        <div class="social-links mt-2">
                                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-8">

                                <div class="card">
                                    <div class="card-body pt-3">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">

                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                            </li>

                                        </ul>
                                        <div class="tab-content pt-2">

                                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                                <h5 class="card-title">About</h5>
                                                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                                <h5 class="card-title">Profile Details</h5>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Company</div>
                                                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Job</div>
                                                    <div class="col-lg-9 col-md-8">Web Designer</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                                    <div class="col-lg-9 col-md-8">USA</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                <!-- Profile Edit Form -->
                                                <form>
                                                    <div class="row mb-3">
                                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <img src="assets/img/profile-img.jpg" alt="Profile">
                                                            <div class="pt-2">
                                                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="country" type="text" class="form-control" id="Country" value="USA">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form><!-- End Profile Edit Form -->

                                            </div>

                                            <div class="tab-pane fade pt-3" id="profile-settings">

                                                <!-- Settings Form -->
                                                <form>

                                                    <div class="row mb-3">
                                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                                <label class="form-check-label" for="changesMade">
                                                                    Changes made to your account
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                                <label class="form-check-label" for="newProducts">
                                                                    Information on new products and services
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="proOffers">
                                                                <label class="form-check-label" for="proOffers">
                                                                    Marketing and promo offers
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                                <label class="form-check-label" for="securityNotify">
                                                                    Security alerts
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form><!-- End settings Form -->

                                            </div>

                                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                                <!-- Change Password Form -->
                                                <form>

                                                    <div class="row mb-3">
                                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                                    </div>
                                                </form><!-- End Change Password Form -->

                                            </div>

                                        </div><!-- End Bordered Tabs -->

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </section>

        </main><!-- End #main -->
    </div>
    <?= $this->endSection(); ?>
<?php elseif ($page === 'form') : ?>
    <?= $this->Section('conten'); ?>
    <div id="main" class="main">
        <div class="pagetitle">
            <h1><?= strtoupper($title); ?></h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Sentiment</h5>
                            <!-- Horizontal Form -->
                            <form>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Teks</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputText">
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection(); ?>
<?php elseif ($page === 'label') : ?>
    <?= $this->Section('conten'); ?>
    <div id="main" class="main">
        <div class="pagetitle">
            <h1><?= strtoupper($title); ?></h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if (session()->getFlashdata('berhasil')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $pesan = session()->getFlashdata('berhasil'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('gagal')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $pesan = session()->getFlashdata('gagal') ?>
                                </div>
                            <?php endif; ?>
                            <form id="myForm" action="" method="post">
                                <h5 class="card-title">Labeling Tweet</h5>
                                <p class="small fst-italic"><?= $labeling['Full_text']; ?></p>
                                <h5 class="card-title">Data</h5>

                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-12 col-md-12">
                                        <label class="col-lg-3 col-md-4  ">Label</label>
                                        <span class="badge rounded-pill bg-<?= ($labeling['Label'] === '1' ? "success" : "danger"); ?> col-lg-2 col-md-2"><?= ($labeling['Label'] === '1' ? "Positif" : "Negatif"); ?></span>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-3 col-md-4 label">Clening</div>
                                    <p class="col-lg-9 col-md-8"><?= $labeling['Dataset']; ?></p>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-3 col-md-4">
                                        <label>Sudah Di Chek</label>
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <p><?= $total['t_sudah']['t_sudah']; ?></p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-3 col-md-4 label">Sisa Data</div>
                                    <div class="col-lg-9 col-md-8"><?= $total['t_belum']['t_belum']; ?></div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-3 col-md-4 label">data dengan label 0</div>
                                    <div class="col-lg-9 col-md-8"><?= $t_0; ?></div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                        <div class="col-lg-3 col-md-4 label">data dengan label 1</div>
                                        <div class="col-lg-9 col-md-8"><?= $t_1; ?></div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-3 col-md-4 label">Rasio data dengan label 0</div>
                                    <div class="col-lg-9 col-md-8"><?= $r_0; ?></div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                        <div class="col-lg-3 col-md-4 label">Rasio data dengan label 1</div>
                                        <div class="col-lg-9 col-md-8"><?= $r_1; ?></div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-12 col-md-12">
                                        <label class="col-lg-3 col-md-4">Ragu</label>
                                        <span class="badge rounded-pill bg-<?= ($ragu['ini'] === '1' ? 'success' : 'danger'); ?> col-lg-2"><?= ($ragu['ini'] === '1' ? 'Positif' : 'Negatif'); ?></span>
                                    </div>
                                </div>
                                <div class="text-center" style="margin-top: 10px;">
                                    <button id="positif" type="submit" class="btn btn-success" style="margin-top: 10px;">Positif</button>
                                    <button id="negatif" type="submit" class="btn btn-danger" style="margin-top: 10px;">Negatif</button>
                                    <button id="r_positif" type="submit" class="btn btn-success" style="margin-top: 10px;">Ragu Positif</button>
                                    <button id="r_negatif" type="submit" class="btn btn-danger" style="margin-top: 10px;">Ragu Negatif</button>
                                </div>
                            </form>
                            <script>
                                // Fungsi untuk mengubah action formulir
                                function changeFormAction(action) {
                                    document.getElementById('myForm').action = action;
                                }

                                // Menambahkan event listener ke masing-masing tombol
                                document.getElementById('positif').addEventListener('click', function() {
                                    changeFormAction('/save/pos/' + <?= $labeling['Id']; ?>);
                                    document.getElementById('myForm').submit();
                                });

                                document.getElementById('negatif').addEventListener('click', function() {
                                    changeFormAction('/save/neg/' + <?= $labeling['Id']; ?>);
                                    document.getElementById('myForm').submit();
                                });

                                document.getElementById('r_positif').addEventListener('click', function() {
                                    changeFormAction('/save/rapos/' + <?= $labeling['Id']; ?>);
                                    document.getElementById('myForm').submit();
                                });

                                document.getElementById('r_negatif').addEventListener('click', function() {
                                    changeFormAction('/save/raneg/' + <?= $labeling['Id']; ?>);
                                    document.getElementById('myForm').submit();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection(); ?>
<?php elseif ($page === 'tabel') : ?>
    <?= $this->Section('conten'); ?>
    <div id="main" class="main">
        <div class="pagetitle">
            <h1><?= strtoupper($title); ?></h1>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <!-- Bordered Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Full_text</th>
                                        <th scope="col">Dataset</th>
                                        <th scope="col">Lang</th>
                                        <th scope="col">Label</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $k = 1;
                                    foreach ($label as $i) : ?>
                                        <tr>
                                            <th scope="row"><?= $i['Id']; ?></th>
                                            <td><?= $i['Id']; ?></td>
                                            <td><?= $i['Full_text']; ?></td>
                                            <td><?= $i['Dataset']; ?></td>
                                            <td><?= $i['Lang']; ?></td>
                                            <td><?= ($i['Label'] === '1' ? 'Positif' : 'Negatif'); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?= $pager->links('Dataset') ?>
                            <!-- End Bordered Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
<?php endif; ?>