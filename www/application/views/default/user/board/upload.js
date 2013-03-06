function checkPhotosCount(){var
$overhead=$('#fld_images_overhead'),catSelected=''!==$categories.val(),filesCount=$('#files div').length-3,maxPhotos=getMaxPhotosCount();if($photoProgress.is(':visible')){++filesCount;}
$photoCount.toggle(catSelected);if(catSelected){$photoCount.html('до '+maxPhotos+' фотографий');}
if(filesCount>maxPhotos){$overhead.html((catSelected?'В категории &laquo;'+$('option:selected',$categories).text()+'&raquo; ':'')+'Вы можете добавить не более '+maxPhotos+' фотографий');}
$photoList.toggle(filesCount>0);$('#fld_images').toggle(filesCount<maxPhotos);$('#fld_images_toomuch').toggle(filesCount===maxPhotos);$overhead.toggle(filesCount>maxPhotos);}
function hideLoader(){$photoProgress.removeClass('hide_progress');$photoProgressBar.hide();progressBarVisible=false;}
$form.uploader({isJSON:true,isUploadAllowed:function(filename){if('undefined'===typeof photoFiles[filename]){return true;}
avito.notifications.push(['Загрузка фотографий','Вы уже загружали эту фотографию']);return false;},onBeforeUpload:function(caps){$form.removeClass('f_ss');if(!$photoList.is(':visible')){if(caps.progress){$photoProgress.addClass('hide_progress');}
$photoList.show();}
$photoProgress.show();},onAfterUpload:function(){clearTimeout(photoProgressTimer);hideLoader();$photoProgress.hide();if(progressBarVisible){$photoProgressBarInner.css('width',0);}
$form.addClass('f_ss');checkPhotosCount();},onWrongExtension:function(){avito.notifications.push(['Ошибка загрузки','Тип загружаемого изображения не поддерживается']);},onProgress:function(percent){if(!progressBarVisible){$photoProgress.addClass('hide_progress');$photoProgressBar.show();progressBarVisible=true;}
$photoProgressBarInner.css('width',percent+'%');if(percent===100){photoProgressTimer=setTimeout(hideLoader,1000);}},onFileUploaded:function(reply,original){if('undefined'!==typeof reply.error){avito.notifications.push(['Ошибка загрузки',reply.error?reply.error:'Неизвестная ошибка']);}else{var
$wrapper=$('<div />'),$table=$('<table />').css({'cellpadding':0,'cellspacing':0}),$tr=$('<tr />'),$td=$('<td />');if(!original.match(/\\fakepath\\/)){photoFiles[original]=1;}
$('<input type="hidden" name="images[]" />').val(reply.id).appendTo($wrapper);$('<img />').attr({'src':'http://'+reply.host+'/100x75/'+reply.id+'.jpg','alt':''}).appen