<div class="row-fluid">
						<div class="span12">
							<h3 class="heading">Профиль пользователя <?=$user->username?></h3>
							<div class="row-fluid">
								<div class="span12">
									<div class="vcard">
										<img class="thumbnail" src="http://www.placehold.it/80x80/EFEFEF/AAAAAA" alt="Avatar" />
										<ul>
											<li class="v-heading">
												Пользователь
											</li>
											<li>
												<span class="item-key">ФИО</span>
												<div class="vcard-item"><?=$user->info->name?></div>
											</li>
											<li>
												<span class="item-key">Юзернейм</span>
												<div class="vcard-item"><?=$user->username?></div>
											</li>
											<li>
												<span class="item-key">Email</span>
												<div class="vcard-item"><?=$user->email?></div>
											</li>
											<li>
												<span class="item-key">Компания</span>
												<div class="vcard-item"><?=$user->info->company?></div>
											</li>
											<li>
												<span class="item-key">Телефон</span>
												<div class="vcard-item"><?=$user->info->phone?></div>
											</li>
											<li>
												<span class="item-key">День рождения</span>
												<div class="vcard-item"><?=$user->info->birthday?></div>
											</li>
											<li>
												<span class="item-key">Зарегистрирован</span>
												<div class="vcard-item"><?=$user->info->created ? date('d.m.Y h:i', $user->info->created) : 'нет данных'?></div>
											</li>
											<li>
												<span class="item-key">Дополнительно</span>
												<div class="vcard-item">
													<?=$user->info->info?>
												</div>
											</li>
											<li class="v-heading">
											<i>!!TODO: Сделать это активным!!</i>
												Активность <span>(за 24 часа)</span>
											</li>
											<li>
												<ul class="unstyled sepH_b item-list">
													<li><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet...</a></li>
													<li><i class="splashy-document_letter_edit sepV_b"></i>John <a href="#">posted</a> new article <a href="#">Lorem ipsum dolor sit amet, consectetur...</a></li>
													<li><i class="splashy-image_cultured  sepV_b"></i>John added <a href="#">new_image,jpg</a></li>
													<li><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit </a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum, consectetur adipiscing elit</a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit </a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></li>
													<li class="item-list-more"><i class="splashy-comment sepV_b"></i>John <a href="#">commented</a> on <a href="#">Lorem ipsum, consectetur adipiscing elit</a></li>
												</ul>
												<a href="#" data-items="5" class="item-list-show btn btn-mini">Show 5 more...</a>
											</li>
										
										</ul>
									</div>
								</div>
							</div>	
						</div>
					</div>