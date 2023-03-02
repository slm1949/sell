$(function(){
  $('#image_upload').uploadFile({
        url    : SITE_URL+'/site/upload',
        multiple:false,
        dragDrop:true,
        uploadStr : '上传',
        fileName: 'Filedata',
        acceptFiles:"image/*",
        maxFileSize: 1000*1024,
        onSuccess : function(files,data,xhr,pd) {
          $('#Product_image').val(data);
        }
  });
});