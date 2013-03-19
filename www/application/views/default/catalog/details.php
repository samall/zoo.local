<p class="title t"><?=$item->title?> <span class="price"><?=$item->price?> руб.</span></p>

				<div class="rainbow"></div>
				<div class="zone_and_bread">
					<p>Калужское шоссе, 5 км от МКАД</p>
					<div class="breadcrumbs"><a href="#">Новостройки</a> > <a href="#">Рязанское ш.</a> > <a href="#">5км -10км</a></div>
				</div>

				<div class="full_offer">

					<div class="left_side">
						<p class="descr"><?=$item->description?></p>

						<div class="parameters">
						<?php 
						foreach($tpl as $row)
						{
							if($row->has_children() && $row->lvl >1)
							{
								$childs = array();
								$ch = $row->children();
								
								foreach($ch as $c)
								{
									if(!empty($data[$c->id]))
									{
										$value = $data[$c->id];
									}else{
										$value = '';	
									}
				
									if($value != '')
									{
										$childs[] = $c;
									}
								}
				
								if(count($childs)>0)
								{
						?>
							<div>
								<span class="title"><?=$row->title?></span>
						<?php
								foreach($childs as $ch)
									{
						?>
								<p><?=$ch->title?>:<span><?=$data[$ch->id]?></span></p>
						<?php
									}
								echo "</div>";
								}
							}
						}
						
						?>
						
							<!--<div>
								<span class="title">Расположение</span>
								<p>Район:<span>Московская область</span></p>
								<p>Адрес:<span>д. Ватутинки (Ленинский район)</span></p>
							</div>

							<div>
								<span class="title">&nbsp;</span>
								<p>Район:<span>Московская область</span></p>
								<p>Адрес:<span>д. Ватутинки (Ленинский район)</span></p>
							</div>

							<div>
								<span class="title">Дом</span>
								<p>Площадь:<span>442 м2</span></p>
								<p>Комнат:<span>7-комнатный</span></p>
								<p>Санузлы:<span>4 не указано</span></p>
								<p>Вид:<span>загородный коттедж</span></p>
								<p>Высота потолков:<span>3,40 м</span></p>
							</div>-->

							
						</div>
					</div>

					<div class="right_side">
						<div class="photos">
						<?php
							$images = $item->images();
							$image = !empty($images[0]) ? $item->image_path . $images[0] : '/assets/nofoto.png';
						?>
						
							<a href="<?=$image?>" class="img big" rel="prettyPhoto[gal]">
								<img src="<?=$image?>" alt="<?=$item->title?>">
								<img src="/assets/themes/default/images/zoom.png" alt="" class="zoom">
							</a>

							<div class="little">
								<?php
								array_shift($images);
								foreach($images as $img){
								?>
								<a href="<?=$item->image_path . $img?>" rel="prettyPhoto[gal]"><img src="<?=$item->image_path . $img?>" alt=""></a>
								<?php
								}
								?>
								<div class="clear"></div>
							</div>
						</div>

						<div class="publication">
							<p>Объявление опубликовано:&nbsp;&nbsp;&nbsp;12.11.2012г.</p>
							<p>Обновлено:&nbsp;&nbsp;&nbsp;12.11.2012г.</p>
							<p>Всего просмотров:&nbsp;&nbsp;&nbsp;25</p>
							<div class="progress_wrapper">
								<div class="progress" style="width:35%;"></div>
							</div>
						</div>

						<div class="options">
							<div>
								<a href="#" class="fl_l">Поднять предложение</a>
								<a href="#" class="fl_r">Дополнительные услуги</a>
							</div>
							<div>
								<a href="#" class="fl_l">Выделить предложение</a>
								<a href="#" class="fl_r">Добавить в избранное</a>
							</div>
							<div>
								<a href="#" class="fl_l premium">ПРЕМИУМ-размещение</a>
								<a href="#" class="fl_r">Отправить другу</a>
							</div>
							<div class="no_back">
								<a href="#" class="complaint">Подать жалобу на это предложение</a>
							</div>
						</div>

						<p class="title">Объект на карте:<a href="#">(увеличить)</a></p>

						<div class="map">
							<img src="images_example/map.jpg" alt="">
						</div>
					</div>

					<div class="clear"></div>

					<div class="contacts">
						<p class="title">Контактная информация:</p>
						<div class="rainbow"></div>
						<div class="data">
							<div class="name_and_photo">
								<img src="/assets/users/avatars/<?=$owner->info->avatar?>" alt="">
								
								<p class="name"><?=$owner->info->name?></p>
								<p><?=$owner->info->company?></p>
								<p><a href="/catalog/fromuser/<?=$owner->id?>">Другие объявления автора</a> (12)</p>
							</div>
							<div class="tel">
								<p class="tel"><?=$owner->info->phone?></p>
								<p>(с 10 до 20:00)</p>
								<p><a href="#">Отправить сообщение на почту</a></p>
							</div>
							<div class="other_contacts">
								<p>Доп. тел: <?=$owner->info->phone2?></p>
								<p>E-mail: <?=$owner->email ?></p>
								<p>icq: <?=$owner->info->icq?></p>
								<p>Skype: <?=$owner->info->skype?></p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>


				<p class="title">Похожие объявления <a href="#">(8 похожих предложений)</a></p>

				<div class="offers_slider yellow">
					<div class="slider">
						<ul>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
						</ul>
					</div>

					<div class="clear"></div>

					<div class="arrows">
						<div class="center_outer l_arrow"><div class="center_middle"><div class="center_inner"></div></div></div>
						<div class="center_outer r_arrow"><div class="center_middle"><div class="center_inner"></div></div></div>
					</div>
					<div class="shadow"></div>
				</div>

				<p class="title">Предложения от агентств</p>

				<div class="offers_slider green">
					<div class="slider">
						<ul>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
							<li class="offer">
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
								<div>
									<a href="#" class="img"><img src="images_example/agencies_offers.jpg" alt=""></a>
									<a href="#" class="title">Эксклюзивный дом в стиле минимал хай тек</a>
								</div>
							</li>
						</ul>
					</div>

					<div class="clear"></div>

					<div class="arrows">
						<div class="center_outer l_arrow"><div class="center_middle"><div class="center_inner"></div></div></div>
						<div class="center_outer r_arrow"><div class="center_middle"><div class="center_inner"></div></div></div>
					</div>
					<div class="shadow"></div>
				</div>
			