<?php
    $lens_quiz_ut = new lens_quiz_utility();
?>
<div  class="lens_quiz_box" data-no_question="10">
    <div class="progressbar"></div>
<form method="post" id="lens_quiz_submit"  name="lens_quiz_submit">
	<input type="hidden" name="lens_quiz_mode" value="lens_quiz_form">
    <div class="lens_quiz_step1 lens_quiz_steps">
        <h1>Which is the Best Lens for Me - Take Our Quiz</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <button type="button"  class="next_question" data-next="2" data-cur="1">Get started with the Quiz!</button>
     </div>
     <div class="lens_quiz_step2 lens_quiz_steps hidden">
        <h1>What is your level of photography experience?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box">
            <?php
            $photographer_level = $lens_quiz_ut->getPhotographerLevel();
                foreach($photographer_level as $pbk => $pbv){
                    ?>
                    <div class="lens_quiz_que ">

                    <input type="radio" class="radio_checked"  data-next="3" data-cur="2" name="photo_exp" id="photo_exp_<?php echo $pbk;?>" value="<?php echo $pbk;?>"><label class="chk_label" for="photo_exp_<?php echo $pbk;?>"><?php echo $pbv;?></label><span></span>

                    </div>
                    <?php
                }
            ?>
        </div>
        <button type="button" class="previous_question" data-prev="1" data-cur="2">Previous Question</button>
     </div>
     <div class="lens_quiz_step3 lens_quiz_steps hidden">
        <h1>What kind of camera do you use?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box">
        <?php
          $filter = array(
            'post_type' => array( 'lens_camera_type' ),
            'posts_per_page' => -1,
            'orderby'          => 'ID',
              'order'            => 'ASC',
          );
        $query = get_posts($filter);
            foreach($query  as $qr){
                 
                ?>
                <div class="lens_quiz_que">

<input type="radio" name="camera_type"  class="radio_checked" data-next="4" data-cur="3" id="photo_camera_type_<?php echo $qr->ID?>" value="<?php echo $qr->ID?>"><label class="chk_label" for="photo_camera_type_<?php echo $qr->ID?>"><?php echo $qr->post_title;?></label><span></span>

</div>
                <?php
            }
          ?>
            
                    
                   
        </div>
        <button type="button" class="previous_question"  data-prev="2" data-cur="3">Previous Question</button>
        
     </div>
     <div class="lens_quiz_step4 lens_quiz_steps hidden">
        <h1>What is your camera brand?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box" id="lens_brand">
                   
        </div>
        <button type="button" class="previous_question"  data-prev="3" data-cur="4">Previous Question</button>
     </div>
     <div class="lens_quiz_step5 lens_quiz_steps hidden">
        <h1>What is your camera mount?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box" id="lens_mount">
        </div>
        <button type="button" class="previous_question"  data-prev="4" data-cur="5">Previous Question</button>
     </div>
     <div class="lens_quiz_step6 lens_quiz_steps hidden">
        <h1>What type of photography do you enjoy the most?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box">
        <?php
          $filter = array(
            'post_type' => array( 'lens_ideal_genre' ),
            'posts_per_page' => -1,
            'orderby'          => 'ID',
              'order'            => 'ASC',
          );
        $query = get_posts($filter);
            foreach($query  as $qr){
                 
                ?>
                <div class="lens_quiz_que ">

<input type="radio" name="lens_ideal_genre" data-next="7" data-cur="6" id="photo_ideal_genre_<?php echo $qr->ID?>" value="<?php echo $qr->ID?>"><label class="chk_label" for="photo_ideal_genre_<?php echo $qr->ID?>"><?php echo $qr->post_title;?></label><span></span>

</div>
                <?php
            }
          ?>
            
                    
                   
        </div>
        <button type="button" class="previous_question"  data-prev="5" data-cur="6">Previous Question</button>
     </div>
     <div class="lens_quiz_step7 lens_quiz_steps hidden">
        <h1>How important is image stabilization to you?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box">
            <?php
            $image_stabilized_question = $lens_quiz_ut->getImageStabilizedQuestion();
                foreach($image_stabilized_question as $pbk => $pbv){
                    ?>
                    <div class="lens_quiz_que">

                    <input type="radio" data-next="8" data-cur="7" name="photo_image_stabilized" id="photo_image_stabilized_<?php echo $pbk;?>" value="<?php echo $pbk;?>"><label class="chk_label" for="photo_image_stabilized_<?php echo $pbk;?>"><?php echo $pbv;?></label><span></span>

                    </div>
                    <?php
                }
            ?>
        </div>
        <button type="button" class="previous_question"  data-prev="6" data-cur="7">Previous Question</button>
     </div>
     <div class="lens_quiz_step8 lens_quiz_steps hidden">
        <h1>Do you prefer prime or zoom lenses?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box">
            <?php
            $zoom_prime = $lens_quiz_ut->getZoomPrime();
                foreach($zoom_prime as $pbk => $pbv){
                    ?>
                    <div class="lens_quiz_que">

                    <input type="radio"  data-next="9" data-cur="7" name="photo_zoom_prime" id="photo_zoom_prime_<?php echo $pbk;?>" value="<?php echo $pbk;?>"><label class="chk_label" for="photo_zoom_prime_<?php echo $pbk;?>"><?php echo $pbv;?></label><span></span>

                    </div>
                    <?php
                }
            ?>
        </div>
        <button type="button" class="previous_question"  data-prev="7" data-cur="8">Previous Question</button>
     </div>




     <div class="lens_quiz_step9 lens_quiz_steps hidden">
        <h1>How can we reach you?</h1>
        <div class="sub_heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <div class="lens_quiz_que_box">
            <div class="lens_quiz_form">
                <div class="form-element">
                        <input type="text" class="lens_quiz_input" id="quiz_fname" name="quiz_fname" placeholder="First Name">
                </div>
                <div class="form-element">
                        <input type="text" class="lens_quiz_input" id="quiz_lname" name="quiz_lname" placeholder="Last Name">
                </div>
                <div class="form-element">
                        <input type="text" class="lens_quiz_input" id="quiz_email" name="quiz_email" placeholder="Email*">
                </div>
                <div class="form-element">
                        <input type="checkbox" class="lens_quiz_input" id="quiz_agree" name="quiz_agree" value="1">
                        <label>I agree to the processing of personal data*</label>
                </div>
            </div>
        </div>
        <button type="button" class="submit_quiz_form" >Next</button>
        
    </div>

    </form>
    
     <div class="lens_quiz_result lens_quiz_steps hidden" id="show_quiz_result">
        
    </div>
    <div class="lens_quiz_affiliate_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
</div>