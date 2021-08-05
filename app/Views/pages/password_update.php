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
                <form class="mb-0 space-y-5" action="/update-pass/save" method="POST">
                    <?= csrf_field(); ?>
                    <!--  Password    -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password <span
                                    class="text-red-700">*</span> : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   pattern=".{8,12}" title="8 to 12 characters" id="password" name="password"
                                   type="password" autocomplete="current-password" required>
                        </div>
                    </div>
                    <!--  End of Password    -->
                    <!--  New Password    -->
                    <div>
                        <label for="new_pass" class="block text-sm font-medium text-gray-700">New Password <span
                                    class="text-red-700">*</span> : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   pattern=".{8,12}" title="8 to 12 characters" id="new_pass" name="new_pass"
                                   type="password" autocomplete="current-password" required>
                        </div>
                    </div>
                    <!--  End of New Password    -->
                    <!--  Confirm New Password    -->
                    <div>
                        <label for="confirm_new_pass" class="block text-sm font-medium text-gray-700">Confirm New Password
                            <span class="text-red-700">*</span> : </label>
                        <div class="mt-1">
                            <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light"
                                   id="confirm_new_pass" name="confirm_new_pass" type="password" autocomplete="on"
                                   required>
                        </div>
                    </div>
                    <!--  End of Confirm New Password    -->
                    <div class="pt-8">
                        <button type="submit" class="btn btn-primary text-white w-full text-center">Update</button>
                    </div>
                </form>
            </div>

            <!-- alert validation -->
        </div>
    </div>
<?php $this->endSection() ?>