<div class="bg-yellow-100 text-center">
    <?php if(isset($_COOKIE['message'])) : ?>
        <div class="p-3 bg-gray-700 m-3 rounded-xl text-white">
            <?= $_COOKIE['message']?>
        </div>
        <?php endif ?>
</div>