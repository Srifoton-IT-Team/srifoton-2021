<?php $this->extend('layouts/dashboard') ?>
<?php $this->section('content') ?>
    <div class="container">
        <div class="row">
            <div class="col-8 col-lg-12 text-center mx-auto mt-5">
                <h2>Upload Payment Image</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-10 col-lg-6 mx-auto">
                <form action="/dashboard/uploadImage/verify" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <select name="competition" class="form-select" aria-label="Default select example">
                        <option selected>Competition Type</option>
                        <option value="image_cp">Competitive Programming</option>
                        <option value="image_uiux">UI/UX Design</option>
                        <option value="image_photo">Photography</option>
                    </select>
                    <div class="mt-3">
                        <label for="imageFile" class="form-label"
                        >Enter proof of competition payment</label
                        >
                        <input class="form-control <?= ($validation->hasError('imageFile')) ? 'is-invalid' : ''; ?>"
                               type="file" id="imageFile" name="imageFile"/>
                        <div class="invalid-feedback">
                            <?= $validation->getError('imageFile'); ?>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $this->endSection() ?>