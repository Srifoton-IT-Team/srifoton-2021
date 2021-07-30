<?php $this->extend('layouts/dashboard') ?>
<?php $this->section('content') ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <?php if ($valid_uiux === true) : ?>
                    <div class="alert alert-success" role="alert">
                        Your payment for the UI/UX contest has been confirmed. Please click
                        this <a href="">link</a> to register
                    </div>
                <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                        Your payment for UI/UX has not been accepted. If within 5 days after payment has not been
                        received, please contact the committee
                    </div>
                <?php endif; ?>

                <?php if ($valid_cp === true) : ?>
                    <div class="alert alert-success" role="alert">
                        Your payment for the CP contest has been confirmed. Please click
                        this <a href="">link</a> to register
                    </div>
                <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                        Your payment for CP has not been accepted. If within 5 days after payment has not been
                        received, please contact the committee
                    </div>
                <?php endif; ?>

                <?php if ($valid_photography === true) : ?>
                    <div class="alert alert-success" role="alert">
                        Your payment for the Photography contest has been confirmed. Please click
                        this <a href="">link</a> to register
                    </div>
                <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                        Your payment for Photography has not been accepted. If within 5 days after payment has not been
                        received, please contact the committee
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-lg-12 text-center mx-auto mt-5">
                <h1>Hello <?= $name ?>!</h1>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>