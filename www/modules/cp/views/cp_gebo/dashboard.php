
					<div class="row-fluid">
						<div class="span12">
							<ul class="dshb_icoNav tac">
								<li><a href="/cp/user/lastest/" style="background-image: url(/assets/cp/default/img/gCons/multi-agents.png)"><span class="label label-info">+<?=$new_users?></span> Users</a></li>				
								<li><a href="/cp/settings/" style="background-image: url(/assets/cp/default/img/gCons/configuration.png)">Settings</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(/assets/cp/default/img/gCons/pie-chart.png)">Charts</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(/assets/cp/default/img/gCons/edit.png)">Add New Article</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(/assets/cp/default/img/gCons/add-item.png)"> Add New Page</a></li>
								<li><a href="javascript:void(0)" style="background-image: url(/assets/cp/default/img/gCons/chat-.png)"><span class="label label-important">26</span> Comments</a></li>
							</ul>
						</div>
					</div>
					
					<div class="row-fluid">
						<div class="span5">
							<h3 class="heading">Visitors by Country <small>last week</small></h3>
							<div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
						</div>
						<div class="span7">
							<div class="heading clearfix">
								<h3 class="pull-left">Another Chart</h3>
								<span class="pull-right label label-info ttip_t" title="Here is a sample info tooltip">Info</span>
							</div>
							<div id="fl_1" style="height:270px;width:100%;margin:15px auto 0"></div>
						</div>
					</div>
               
                    <div class="row-fluid">
                        <div class="span8">
							<h3 class="heading">Calendar</h3>
							<div id="calendar"></div>
                        </div>
                        <div class="span4" id="user-list">
							<h3 class="heading">Users <small>last 24 hours</small></h3>
							<div class="row-fluid">
								<div class="input-prepend">
									<span class="add-on ad-on-icon"><i class="icon-user"></i></span><input type="text" class="user-list-search search" placeholder="Search user" />
								</div>
								<ul class="nav nav-pills line_sep">
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort by <b class="caret"></b></a>
										<ul class="dropdown-menu sort-by">
											<li><a href="javascript:void(0)" class="sort" data-sort="sl_name">by name</a></li>
											<li><a href="javascript:void(0)" class="sort" data-sort="sl_status">by status</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Show <b class="caret"></b></a>
										<ul class="dropdown-menu filter">
											<li class="active"><a href="javascript:void(0)" id="filter-none">All</a></li>
											<li><a href="javascript:void(0)" id="filter-online">Online</a></li>
											<li><a href="javascript:void(0)" id="filter-offline">Offline</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<ul class="list user_list">
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">John Doe</a><br />
									<small class="s_color sl_email">johnd@example1.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Kate Miller</a><br />
									<small class="s_color sl_email">kmiller@example1.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">James Vandenberg</a><br />
									<small class="s_color sl_email">jamesv@example2.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Donna Doerr</a><br />
									<small class="s_color sl_email">donnad@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Perry Weitzel</a><br />
									<small class="s_color sl_email">perryw@example2.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Charles Bledsoe</a><br />
									<small class="s_color sl_email">charlesb@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Wendy Proto</a><br />
									<small class="s_color sl_email">wnedyp@example1.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Nancy Ibrahim</a><br />
									<small class="s_color sl_email">nancyi@example2.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Eric Cantrell</a><br />
									<small class="s_color sl_email">ericc@example4.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Andre Hill</a><br />
									<small class="s_color sl_email">andreh@example2.com</small>
								</li>
								<li>
									<span class="label label-success pull-right sl_status">online</span>
									<a href="#" class="sl_name">Laura Taggart</a><br />
									<small class="s_color sl_email">laurat@example3.com</small>
								</li>
								<li>
									<span class="label label-important pull-right sl_status">offline</span>
									<a href="#" class="sl_name">Doug Singer</a><br />
									<small class="s_color sl_email">dougs@example2.com</small>
								</li>
							</ul>
							<div class="pagination"><ul class="paging bottomPaging"></ul></div>
                        </div>
                    </div>
