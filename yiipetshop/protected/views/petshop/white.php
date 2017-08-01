<div class="pets">
    <?php foreach ($result as $pets): ?>
	    <?php foreach ($pets as $pet): ?>
	        <?php foreach ($pet as $key => $value): ?>
	            <div class="pet">
	                <?=$key?>: <?=$value?><br/>
	            </div>
	        <?php endforeach; ?>
	        <br/>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>