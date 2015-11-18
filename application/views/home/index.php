<div id="my_container">
	<div id="my_img_container">
		<center><img id="my_img" src="../public/img/my_img.png" alt=""></center>
	</div>
	<div id="my_intro_container">
		<div id="my_intro">
			<? echo NAME;?>
			<br><br>
			<? echo INTRO;?>
		</div>
	</div>
</div>
<?php 
# 로그인 한 유저만 나타나도록
if(1) { ?>
<div id="write_container">
	<form action="write_content" method="post">
		<div id="write_box">
			<textarea id="write_input" type="text" placeholder=""></textarea>
		</div>
		<button id="write_submit" type="submit" name="write_submit">등록</button>
	</form>
</div>
<?php } ?>
<div id="list_container">
	<?php #foreach($write_list as $row){ ?>
		<div class="list_wrapper">	
			<div class="list_left">
				<div class="list_num"><?php #echo $row->id; ?></div>
				<div class="list_date"></div>
			</div>
			<div class="list_right">
				<div class="list_content"><?php #echo $row->content; ?></div>
			</div>
		</div>
	<?php #} ?>
</div>