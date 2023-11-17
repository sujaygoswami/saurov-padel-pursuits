jQuery(document).ready(function($) {
    jQuery('.lens_quiz_steps').hide();
    jQuery('.pls_select_option').hide();
    jQuery('.lens_quiz_step1').show();
    
    
    jQuery('.next_question').click(function(){
        var next = jQuery(this).data('id');
        var cur = jQuery(this).data('cur');
        switch(cur){
            case 2:
                if(jQuery("input:radio[name='photo_exp']").is(":checked")) {
                    jQuery('.lens_quiz_steps').hide();
                    jQuery('.lens_quiz_step'+next).show();
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            case 3:
                if(jQuery("input:radio[name='camera_type']").is(":checked")) {
                  var lens_camera_type = jQuery('input[name="camera_type"]:checked').val();

                    var data = {
                        'action' : 'lens_brand_service',
                        'lens_camera_type' : lens_camera_type
                      }

                      jQuery.ajax({
                        url: lens_quiz_ajax.ajax_url,
                        data: data,
                        type: 'POST',
                        dataType: 'json',
                        beforeSend: function(){
                        },
                      }).done(function(response){
                            var html = '';
                            for (data of response) {
                                    html +='<div class="lens_quiz_que">';
                                    html +='<input type="radio" name="lens_brand"  id="photo_brand_'+data.id+'" value="'+data.id+'"><label class="chk_label" for="photo_brand_'+data.id+'">'+data.title+'</label>';
                                    html +='<div>';
                            }
                            jQuery('#lens_brand').html(html);
                             jQuery('.lens_quiz_steps').hide();
                             jQuery('.lens_quiz_step'+next).show();
                      });

                   
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            case 4:
                if(jQuery("input:radio[name='lens_brand']").is(":checked")) {


                    var lens_camera_type = jQuery('input[name="camera_type"]:checked').val();
                    var lens_brand = jQuery('input[name="lens_brand"]:checked').val();

                    var data = {
                        'action' : 'lens_mount_service',
                        'lens_camera_type' : lens_camera_type,
                        'lens_brand' : lens_brand
                      }
                      jQuery.ajax({
                        url: lens_quiz_ajax.ajax_url,
                        data: data,
                        type: 'POST',
                        dataType: 'json',
                        beforeSend: function(){
                        },
                      }).done(function(response){
                            var html = '';
                            for (data of response) {
                                    html +='<div class="lens_quiz_que">';
                                    html +='<input type="radio" name="lens_mount"  id="photo_mount_'+data.id+'" value="'+data.id+'"><label class="chk_label" for="photo_mount_'+data.id+'">'+data.title+'</label>';
                                    html +='<div>';
                            }
                            jQuery('#lens_mount').html(html);
                             jQuery('.lens_quiz_steps').hide();
                             jQuery('.lens_quiz_step'+next).show();
                      });
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            case 5:
                if(jQuery("input:radio[name='lens_mount']").is(":checked")) {
                    var photo_exp = jQuery('input[name="photo_exp"]:checked').val();  
                    jQuery('.lens_quiz_step'+next+' .next_question').show();
                    jQuery('.lens_quiz_step'+next+' .show_result').hide();
                    if(photo_exp == 'beg'){
                        jQuery('.lens_quiz_step'+next+' .next_question').hide();
                        jQuery('.lens_quiz_step'+next+' .show_result').show();
                    }  
                    
                    jQuery('.lens_quiz_steps').hide();
                    jQuery('.lens_quiz_step'+next).show();
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            case 6:
                if(jQuery("input:radio[name='lens_ideal_genre']").is(":checked")) {
                    jQuery('.lens_quiz_steps').hide();
                    jQuery('.lens_quiz_step'+next).show();
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            case 7:
                if(jQuery("input:radio[name='photo_image_stabilized']").is(":checked")) {
                    jQuery('.lens_quiz_steps').hide();
                    jQuery('.lens_quiz_step'+next).show();
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            case 8:
                if(jQuery("input:radio[name='photo_zoom_prime']").is(":checked")) {
                    jQuery('.lens_quiz_steps').hide();
                    jQuery('.lens_quiz_step'+next).show();
                }
                else{
                    jQuery('.pls_select_option').hide();
                    jQuery('.lens_quiz_step'+cur+' .pls_select_option').show();
                }
            break;
            default:
                jQuery('.lens_quiz_steps').hide();
                jQuery('.lens_quiz_step'+next).show();
            break;
        }
       
    });
    jQuery('.show_result').click(function(){
        console.log(jQuery('#lens_quiz_submit').serialize());
        jQuery('.lens_quiz_steps').hide();
        jQuery('.lens_quiz_result').show();
        
    });
    
});