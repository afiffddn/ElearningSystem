<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> 
<h2> Files Have Been Downloaded </h2>
<p style="font-size: 18px;font-weight: bold;"> Course Name : <?php echo $res->LessonChapter;?> <br> Title : <?php echo $res->LessonTitle;?></p>

<img src="images/3.jpg" height="250" width="500" alt="note">

<div class="container">
	<embed src="<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
</div> 