<?php $this->extend('layouts/template') ?>
<?php $this->section('content') ?>
<!--Hero-->
<div class="relative">
    <img class="absolute z-0 w-screen h-screen object-cover object-center"
         src="<?= base_url('assets/img/bg-comp.png') ?>" alt="bg-comp">
    <p class="absolute left-10 top-10 z-0 text-gray-300 tracking-wider text-sm"><a
                class="text-gray-50 underline 2xl:font-medium" href="/">Home</a> / <?= $title ?>
    </p>

    <div class="w-screen h-screen absolute z-10 mx-auto inset-x-0 px-10 flex justify-center items-center flex-col text-center
  lg:container lg:text-left lg:flex-row lg:justify-around xl:px-0">
        <!--  Blob  -->
        <div class="flex justify-center items-center order-1 lg:order-2">
            <img class="h-48 xl:h-auto" src="<?= base_url('assets/img/'. $img) ?>" alt="logo-cp">
        </div>
        <!--  End of Blob  -->

        <!--  Text  -->
        <div class="order-2 mt-16 font-rubik text-center lg:text-left lg:pl-16 xl:pl-0">
            <h1 class="font-azonix text-4xl tracking-wide text-gray-50 xl:text-5xl 2xl:text-6xl"><?= $heading ?></h1>
            <p class="mx-auto mt-8 tracking-wide leading-relaxed text-gray-200 md:max-w-lg 2xl:max-w-2xl 2xl:text-lg">
                <?= $desc ?>
            </p>
            <!--   Button   -->
            <div class="mt-16">
                <a class="btn btn-primary" href="#">Read Guidebook</a>
                <a class="btn text-blue-200 hover:text-blue-50 underline" href="<?= base_url() . '/register' ?>">Register</a>
            </div>
            <!--   End of Button   -->
        </div>
        <!-- End of Text   -->
    </div>
</div>
<!--End of Hero-->

<!--Timeline-->
<div class="relative py-20" style="top: 100vh">
    <h2 class="font-azonix text-center text-white tracking-wide text-2xl md:text-3xl lg:text-2xl xl:text-3xl 2xl:text-4xl">
        Timeline</h2>
    <div class="timeline mt-12 md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 2xl:max-w-5xl">
        <?php $timelineCount = 0;
        foreach ($timelines as $timeline) : ?>
            <?php if ($timelineCount % 2 == 0): ?>
                <!--  Item Right  -->
                <div class="timeline__component">
                    <div class="timeline__date timeline__date--right"><?= $timeline['date'] ?></div>
                </div>
                <div class="timeline__middle">
                    <div class="timeline__point"></div>
                </div>
                <div class="timeline__component timeline__component--bg">
                    <h2 class="timeline__title"><?= $timeline['heading'] ?></h2>
                    <p class="timeline__paragraph">
                        <?= $timeline['desc'] ?>
                    </p>
                    <p class="font-medium mt-4">
                        <?= $timeline['full_date'] ?>
                    </p>
                </div>
                <!--  End of Item Right  -->
            <?php else: ?>
                <!--  Item Left  -->
                <div class="timeline__component timeline__component--bg">
                    <h2 class="timeline__title"><?= $timeline['heading'] ?></h2>
                    <p class="timeline__paragraph">
                        <?= $timeline['desc'] ?>
                    </p>
                    <p class="font-medium mt-4">
                        <?= $timeline['full_date'] ?>
                    </p>
                </div>
                <div class="timeline__middle">
                    <div class="timeline__point"></div>
                </div>
                <div class="timeline__component">
                    <div class="timeline__date"><?= $timeline['date'] ?></div>
                </div>
                <!--  End of Item Left  -->
            <?php endif;
            $timelineCount++;
            ?>
        <?php endforeach; ?>
    </div>
</div>
<!--End of Timeline-->

<!--Contact Person-->
<div class="relative py-24 bg-green-50" style="top: 100vh">
    <h2 class="font-azonix text-center text-gray-900 tracking-wide text-2xl md:text-3xl lg:text-2xl xl:text-3xl 2xl:text-4xl">
        Contact Person</h2>

    <div class="flex flex-col items-center justify-around mx-auto mt-12 font-rubik lg:flex-row lg:max-w-4xl">
        <?php foreach ($contacts as $contact) : ?>
        <!--  Item  -->
        <div class="bg-gray-50 text-center mx-auto py-4 px-10 rounded-lg shadow-lg md:py-9 md:px-16">
            <h3 class="text-xl font-bold tracking-wide md:text-2xl"><?= $contact['name'] ?></h3>
            <div class="flex mt-4 text-sm justify-center items-center md:text-base">
                <div>
                    <img src="<?= base_url('assets/img/whatsapp.png') ?>" alt="wa">
                </div>
                <p class="tracking-wider ml-4"><?= $contact['whatsapp'] ?></p>
            </div>
            <div class="flex mt-2 text-sm justify-center md:text-base">
                <div>
                    <img src="<?= base_url('assets/img/line.png') ?>" alt="line">
                </div>
                <p class="tracking-wider ml-4"><?= $contact['line'] ?></p>
            </div>
        </div>
        <!-- End of Item   -->
        <?php endforeach; ?>
    </div>
</div>
<!--End of Contact Person-->

<?php $this->endSection() ?>
