<?php $this->extend('layouts/sign') ?>
<?php $this->section('content') ?>
    <div class="w-screen flex justify-center items-center">

        <div class="mt-8 w-full sm:mx-auto sm:w-full sm:max-w-md">
            <!--  Already Registered?  -->
            <div class="mb-6 sm:mx-auto sm:w-full sm:max-w-md ">
                <div class="flex justify-center items-center text-center">
                    <img class="h-16 sm:h-full" src="<?= base_url('assets/img/logo.png') ?>" alt="logo">
                    <h1 class="font-azonix ml-4 text-3xl sm:text-4xl">Srifoton</h1>
                </div>
            </div>
            <!--  End of Already Registered?  -->

            <div class="bg-white py-8 px-16 shadow rounded-lg sm:px-10">
                <p><?= $validation->listErrors() ?></p>
                <form class="mb-0 space-y-5" action="/update/save" method="POST">
                    <?= csrf_field(); ?>
                    <!--  Name   -->
                    <div class="pt-5">
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Name <span
                                    class="text-red-700">*</span>
                            : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   id="full_name" name="full_name" type="text" autocomplete="on" value="<?= $full_name ?>" required>
                        </div>
                    </div>
                    <!--  End of Name    -->
                    <!--  NIM   -->
                    <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700">NIM <span class="text-red-700">*</span>
                            : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   id="nim" name="nim" type="text" autocomplete="on" value="<?= $nim ?>" required>
                        </div>
                    </div>
                    <!--  End of NIM    -->
                    <!--  University   -->
                    <div>
                        <label for="university" class="block text-sm font-medium text-gray-700">University <span
                                    class="text-red-700">*</span> : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   id="university" name="university" type="text" autocomplete="on" value="<?= $university ?>" required>
                        </div>
                    </div>
                    <!--  End of University    -->
                    <!--  Whatsapp   -->
                    <div>
                        <label for="whatsapp_num" class="block text-sm font-medium text-gray-700">Whatsapp <span
                                    class="text-red-700">*</span> : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   id="whatsapp_num" name="whatsapp_num" type="text" autocomplete="on" value="<?= $whatsapp_num ?>" required>
                        </div>
                    </div>
                    <!--  End of Whatsapp    -->
                    <div class="pt-8">
                        <button type="submit" class="btn btn-primary text-white w-full text-center">Update</button>
                    </div>
                </form>
            </div>

            <!-- alert validation -->
        </div>
    </div>
<?php $this->endSection() ?>