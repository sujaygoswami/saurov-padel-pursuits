jQuery(document).ready(function($) {

    jQuery('#lens_submit_cbm_btn').click(function(){
        var all_ok = true;
        jQuery('.latr_mand').removeClass('latr_error');
        if(jQuery('#lens_camera_type_id').val()==''){
            jQuery('#lens_camera_type_id').addClass('latr_error');
            all_ok = false;
         }
         if(jQuery('#lens_brand_id').val()==''){
            jQuery('#lens_brand_id').addClass('latr_error');
            all_ok = false;
         }
         if(jQuery('#lens_mount_id').val()==''){
            jQuery('#lens_mount_id').addClass('latr_error');
            all_ok = false;
         }
        if(all_ok){
          jQuery('#lens_submit_cbm_form').submit();
        }
 });


 jQuery("#lens_brand").change(function() {
   var lens_brand = jQuery(this).val();
   var lens_camera_type = jQuery('#lens_camera_type').val();
   var data = {
      'action' : 'lens_mount_service',
      'lens_camera_type' : lens_camera_type,
      'lens_brand' : lens_brand
    }
   jQuery("#lens_mount").empty();
  jQuery("#lens_mount").append("<option value=''></option>");


   jQuery.ajax({
      url: lens_quiz_admin_ajax_object.ajax_url,
      data: data,
      type: 'POST',
      dataType: 'json',
      beforeSend: function(){
      },
    }).done(function(response){
      for (data of response) {
               jQuery("#lens_mount").append("<option value='"+data.id+"'>"+data.title+"</option>");
           }
    });

});
jQuery("#lens_camera_type").change(function() {
   var lens_camera_type = jQuery(this).val();
   var data = {
      'action' : 'lens_brand_service',
      'lens_camera_type' : lens_camera_type
    }
   jQuery("#lens_brand").empty();
   jQuery("#lens_brand").append("<option value=''></option>");

   jQuery("#lens_mount").empty();
   jQuery("#lens_mount").append("<option value=''></option>");
   jQuery.ajax({
      url: lens_quiz_admin_ajax_object.ajax_url,
      data: data,
      type: 'POST',
      dataType: 'json',
      beforeSend: function(){
      },
    }).done(function(response){
      for (data of response) {
               jQuery("#lens_brand").append("<option value='"+data.id+"'>"+data.title+"</option>");
           }
    });

});

});