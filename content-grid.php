<h5>Course Information</h5>
<? the_content(); ?>
<? 
$checked = get_field('show_info');
if ($checked == true){ ?>
<div class="row">
  <div class="col-xs-8"> <strong>Instructor: </strong>
    <? the_field('instructor'); ?>
  </div>
  <div class="col-xs-4"><strong>Credit Hours: </strong>
    <? the_field('credit_hours'); ?>
  </div>
</div>
<hr />
<div class="course-info">
  <h5>Available Sections</h5>
  <?php $myCount = get_field('class_list');
$myCount = count($myCount);
$theCount = 1;
if(get_field('class_list')): 
while(has_sub_field('class_list')):



echo '<div class="row">';
  echo '<div class="col-xs-12"> <strong>Student Type: </strong>';
    the_sub_field('student_type');
  echo '</div>';
echo '</div>';
echo '<div class="row">';
  echo '<div class="col-xs-8"> <strong>Dept/Class/Section: </strong>';
    the_sub_field('dept_class_section');
  echo '</div>';
  echo '<div class="col-xs-4"> <strong>Class #: </strong>';
    the_sub_field('class_number');
  echo '</div>';
echo '</div>';

if ($theCount < $myCount){
	echo '<hr class="dotted"/>';
}
$theCount++;
endwhile;
endif; ?>
  <hr />
  <div class="row">
    <div class="col-xs-12">
      <h5>Course Permissions:</h5>
      <?php the_field('permissions'); ?>
    </div>
  </div>
</div>
<? } ?>
