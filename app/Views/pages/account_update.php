<?php $this->extend('layouts/dashboard') ?>
<?php $this->section('content') ?>
    <div class="container">
        <!-- Text -->
        <div class="row">
            <div class="col-8 col-lg-12 text-center mx-auto mt-5">
                <h2>Account Settings</h2>
            </div>
        </div>
        <!-- End of Text -->
        <!-- Form -->
        <div class="row">
            <div class="col-10 col-lg-6 mx-auto mt-5">
                <p><?= $validation->listErrors() ?></p>
                <form action="/dashboard/update/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Name</label>
                        <input
                                type="text"
                                class="form-control"
                                id="full_name"
                                name="full_name"
                                value="<?= $full_name ?>"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $nim ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="name@example.com"
                                value="<?= $email ?>"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="university" class="form-label">Universitas</label>
                        <input type="text" class="form-control" id="university" name="university" value="<?= $university ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp_num" class="form-label"
                        >Whatsapp Number</label
                        >
                        <input type="text" class="form-control" id="whatsapp_num" name="whatsapp_num" value="<?= $whatsapp_num ?>"/>
                    </div>
                    <button type="submit" class="mt-3 btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <!-- End of Form -->

        <div class="row">
            <div class="col-8 col-lg-12 text-center mx-auto mt-5">
                <h2>Password Settings</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-10 col-lg-6 mx-auto mt-5 mb-5">
                <p><?= session()->getFlashdata('msg') ?></p>
                <form action="/dashboard/update-pass/save" class="mb-5 pb-5" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="new_pass" class="form-label">New Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="new_pass"
                                name="new_pass"
                        />
                    </div>
                    <div class="mb-3">
                        <label for="confirm_new_pass" class="form-label">Confirm New Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="confirm_new_pass"
                                name="confirm_new_pass"
                        />
                    </div>
                    <button type="submit" class="mt-3 mb-5 btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>