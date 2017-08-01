<div class="cats">
    <?php foreach ($cats as $cat): ?>
        <?php foreach ($cat as $key => $value): ?>
            <div class="cat">
                <?=$key?>: <?=$value?><br/>
            </div>
        <?php endforeach; ?>
        <br/>
    <?php endforeach; ?>
</div>