<form id="user-edit" class="form_validation_ttip" method="post" name="user-edit" action="/cp/user/grants/save_role/<?=$edit->id?>">
<div class="row-fluid">
		<div class="span6">
				<h3 class="heading">Роль</h3>
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Роль</a></li>
						<li><a href="#tab2" data-toggle="tab">Права</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="formSep">
								<label>Название <span class="f_req">*</span></label>
								<input type="text" name="name" value="<?=$edit->name?>"/>
								<span class="help-inline">должно быть уникальным (a-z0-9_)</span>
							</div>
							<div class="formSep">
								<label>Описание <span class="f_req">*</span></label>
								<input type="text" name="description" value="<?=$edit->description?>"/>
								<span class="help-inline"></span>
							</div>
							
						</div>
<!-- Tab 2 optional params -->							
						<div class="tab-pane" id="tab2">
						
							
						</div>
					</div>
				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-inverse">Сохранить</button>
					<button class="btn">Отмена</button>
				</div>
		</div>
</form>



