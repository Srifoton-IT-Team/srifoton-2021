<?php $this->extend('layouts/sign') ?>
<?php $this->section('content') ?>
<div class="w-screen flex justify-center items-centerl">

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
            <?= csrf_field(); ?>
            <?php if(isset($validation)):?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif;?>
            <form class="mb-0 space-y-5" action="/register/save" method="POST">
                <!--   Email   -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-700">*</span> :
                    </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="email" name="email" type="email" autocomplete="email" required>
                    </div>
                </div>
                <!--   End of Email   -->
                <!--  Password    -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password <span class="text-red-700">*</span> : </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="password" name="password" type="password" autocomplete="current-password" required>
                    </div>
                </div>
                <!--  End of Password    -->
                <!--  Confirm Password    -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password
                        <span class="text-red-700">*</span> : </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="confirm-password" name="confirm-password" type="password" autocomplete="on" required>
                    </div>
                </div>
                <!--  End of Confirm Password    -->

                <!--  Name   -->
                <div class="pt-5">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name <span class="text-red-700">*</span>
                        : </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="name" name="name" type="text" autocomplete="on" required>
                    </div>
                </div>
                <!--  End of Name    -->
                <!--  NIM   -->
                <div>
                    <label for="nim" class="block text-sm font-medium text-gray-700">NIM <span class="text-red-700">*</span> : </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="nim" name="nim" type="text" autocomplete="on" required>
                    </div>
                </div>
                <!--  End of NIM    -->
                <!--  University   -->
                <div>
                    <label for="university" class="block text-sm font-medium text-gray-700">University <span class="text-red-700">*</span> : </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="university" name="university" type="text" autocomplete="on" required>
                    </div>
                </div>
                <!--  End of University    -->
                <!--  Whatsapp   -->
                <div>
                    <label for="whatsapp" class="block text-sm font-medium text-gray-700">Whatsapp <span class="text-red-700">*</span> : </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand-light" id="whatsapp" name="whatsapp" type="text" autocomplete="on" required>
                    </div>
                </div>
                <!--  End of Whatsapp    -->
                <div class="pt-8">
                    <button type="submit" class="btn btn-primary text-white w-full text-center">Sign Up</button>
                </div>
            </form>
        </div>

        <!-- alert validation -->


        <!--  Already Registered?  -->
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-3 px-3 shadow rounded-lg sm:px-10 text-center text-gray-500">
                <p class="text-sm">Already registered ? <a class="text-brand" href="/login">Sign In</a></p>
            </div>
        </div>
        <!--  End of Already Registered?  -->
    </div>
</div>
<?php $this->endSection() ?>