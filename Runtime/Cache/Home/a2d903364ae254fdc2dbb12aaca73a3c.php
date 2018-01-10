<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): foreach($list as $key=>$ind): ?><div class="hdisplay_box clearfix">
          <div class="display_left col-md-3 col-xs-12">
              <a href="hospital.html"><img  class="img-responsive" src="/Public/Admin/img/<?php echo ($ind["image"]); ?>" alt=""></a>
          </div>
          <div class="display_right">
             
                  <h3 class="hostitle"><span><?php echo ($ind["hospitalname"]); ?></span></h3>
                  <p class="hostitle"><span><?php echo ($ind["hospitallevelcode"]); ?></span></p>
                  <p class="hostitle"><span><?php echo ($ind["governcode"]); ?></span></p>
            
              <p class="hosdes"><span>
                  <?php echo ($ind["info"]); ?>
              </span></p>
          </div>
        </div><?php endforeach; endif; ?>
      <div class="page" style="text-align:center">
					<?php echo ($page); ?>
    </div>