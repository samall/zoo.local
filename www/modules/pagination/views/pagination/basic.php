 <ul>
	<li>
	<?php if ($first_page !== FALSE){ ?>
		<a href="<?= HTML::chars($page->url($first_page)) ?>" rel="first"><?= __('First') ?></a>
	<?php } ?>
	</li>
 	<li>
    <?php if ($previous_page !== FALSE){ ?>
		<a href="<?= HTML::chars($page->url($previous_page)) ?>" rel="prev"><?= __('Previous') ?></a>
	<?php } ?>
    </li>
    
    
    
    <?php for ($i = 1; $i <= $total_pages; $i++){ ?>
	<?php if ($i == $current_page){ ?>
		<li class="active"><a href="<?= HTML::chars($page->url($i)) ?>"><?= $i ?></a></li>
	<?php }else{ ?>
		<li><a href="<?= HTML::chars($page->url($i)) ?>"><?= $i ?></a></li>
	<?php } ?>
	<?php } ?>
    
    <li>
     <?php if ($next_page !== FALSE){ ?>
		<a href="<?= HTML::chars($page->url($next_page)) ?>" rel="next"><?= __('Next') ?></a>
	<?php } ?>
	</li>
	<li>
	<?php if ($last_page !== FALSE){ ?>
		<a href="<?= HTML::chars($page->url($last_page)) ?>" rel="last"><?= __('Last') ?></a>
	<?php } ?>
	</li>
</ul>