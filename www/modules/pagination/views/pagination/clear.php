<div class="dataTables_info" id="DataTables_Table_0_info">Показано 1 to 10 of 40 entries</div>
	<div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
	<?php if ($first_page !== FALSE){ ?>
	<a class="first paginate_button paginate_button_disabled" tabindex="0" id="DataTables_Table_0_first" href="<?= HTML::chars($page->url($first_page)) ?>"><?= __('First') ?></a>
	<?php } ?>
	<?php if ($previous_page !== FALSE){ ?>
	<a class="previous paginate_button paginate_button_disabled" tabindex="0" id="DataTables_Table_0_previous" href="<?= HTML::chars($page->url($previous_page)) ?>"><?= __('Previous') ?></a>
	<?php } ?>
	
	<span>
	<?php for ($i = 1; $i <= $total_pages; $i++){ ?>
		<a class="paginate_<?=$i == $current_page ? 'active': 'button'?>" tabindex="0" href="<?= HTML::chars($page->url($i)) ?>"><?=$i?></a>
	<?php } ?>
	
	</span>
	
	<?php if ($next_page !== FALSE){ ?>
	<a class="next paginate_button" tabindex="0" id="DataTables_Table_0_next" href="<?= HTML::chars($page->url($next_page)) ?>"><?= __('Next') ?></a>
	<?php } ?>
	<?php if ($last_page !== FALSE){ ?>
	<a class="last paginate_button" tabindex="0" id="DataTables_Table_0_last" href="<?= HTML::chars($page->url($last_page)) ?>"><?= __('Last') ?></a>
	<?php } ?>
</div>