<?php
						if(!empty($template)){
						?>
						
						<table>
							<tbody>
				
							<?php
							foreach($template as $d)
							{
								if($d->lft == 1) continue;
							?>
							<tr <?=($d->rgt-$d->lft>1) ? 'style="background:#f8f8f8;"': ''?>>
							<td  class="row1">
							<?php
							if($d->rgt-$d->lft>1)
							{ ?>
								<strong><?=iconv("UTF-8", "WINDOWS-1251", $d->title)?></strong>
							<?php 
							}else{
							?>
							<?=str_repeat('&nbsp;&nbsp;', $d->lvl)?><?=iconv("UTF-8", "WINDOWS-1251", $d->title)?>
							<?php
							}
							?>
							</td>
							<td  class="row2">
							<?php
							if($d->rgt-$d->lft==1)
							{ ?>
								<input type="text" name="param-<?=$d->id?>" value="<?=!empty($values[$d->id]) ? iconv("UTF-8", "WINDOWS-1251", $values[$d->id]) : ''?>" />
							<?php }?>
							</td>
							</tr>

							<?php
							}
							?>
							</tbody>
						</table>
						
						<?php
						}
						?>