<?php

	$next_section = $section;
	$next_subsection = $subsection;
	$next_step = $step;
	$next_substep = $substep;

	$c_section = $config[$page]["section"][$section];

	$output = "";

	if($subsection == 0){
		$output .= '<p>'.$c_section["copy"].'</p>';

		$next_subsection = 1;
	}else if($subsection == 1){
		$output .= '<img src="'.$c_section["images"][$step][0].'" />';
		$output .= '<p>'.$c_section["images"][$step][1].'</p>';

		$next_step++;
		if($next_step >= count($c_section["images"])){
			$next_step = 0;
			$next_subsection = 2;
		}
	}else if($subsection == 2){
		if($substep == 0){
			$output .= '<script>var correct_answer = "'.$c_section["training"][$step]["answer"].'";</script>';
			$output .= '<img class="training-image" src="'.$c_section["training"][$step]["image"][$_SESSION["g"]].'" />';
			//$output .= '<p>'.$c_section["training"][$step]["question"].'</p>';
			$output .= formElement($c_section["training"][$step], "answer");
			$next_substep = 1;
		}else{
			//COMPARE ANSWER
			$output .= '<img class="training-image" src="'.$c_section["training"][$step]["correct_image"][$_SESSION["g"]].'" />';
			$output .= '<p>';
			if($_SESSION["answer"] == $c_section["training"][$step]["answer"]){
				$output .= "Correct! ";
			}else{
				$output .= "This was not correct! ";
			}
			$output .= $c_section["training"][$step]["correct_text"].'</p>';

			$next_substep = 0;
			$next_step++;
			if($next_step >= count($c_section["training"])){
				$next_step = 0;
				$next_subsection = 0;
				$next_section++;
			}	
		}
	}

?>
<div class="container">
	<div class="row">
		<div class="col col-sm-1"></div>
		<div class="col col-sm-10">
			<h4><?php echo $c_section["headline"]; ?></h4>
<?php 
	if($section == count($config[$page]["section"])-1){
		?>
			<form data-substep="<?php echo $substep; ?>" data-step="<?php echo $step; ?>" data-subsection="<?php echo $subsection; ?>" data-section="<?php echo $section; ?>" action="index.php?page=pretest" method="post">
		<?php
	}else{
		?>
			<form data-substep="<?php echo $substep; ?>" data-step="<?php echo $step; ?>" data-subsection="<?php echo $subsection; ?>" data-section="<?php echo $section; ?>" action="index.php?page=learning&amp;section=<?php echo $next_section; ?>&amp;subsection=<?php echo $next_subsection; ?>&amp;step=<?php echo $next_step; ?>&amp;substep=<?php echo $next_substep; ?>" method="post">
		<?php
	}

	echo $output;

?>
				<input type="submit" class="btn" value="continue" />
			</form>
		</div>
		<div class="col col-sm-1"></div>
	</div>
</div>
<script type="text/javascript">
$('form').submit(function(){
	event.preventDefault();
	switch($('form').data("subsection")){
		case 0:
			logAndProceed();
		break;
		case 1:
			logAndProceed();
		break;
		case 2:
			switch($('form').data("substep")){
				case 0:
					var good = false, answer = "";
					var type = "";
					if($('*[name="answer"]').is("textarea")){
						type = "textarea";
					}else{
						type = $('*[name="answer"]').first().attr("type");
					}

					switch(type){
						case "textarea":
							if($('*[name="answer"]').val().length >= 1){
								good = true;
								answer = $('*[name="answer"]').val();
							}
						break;
						case "checkbox":
							if($('input[name="answer"]').is(':checked')){
								good = true;
								answer = $('input[name="answer"]:checked').val();
							}
						break;
						case "radio":
							if($('input[name="answer"]').is(':checked')){
								good = true;
								answer = $('input[name="answer"]:checked').val();
							}
						break;
						case "text":
							if($('*[name="answer"]').val().length >= 1){
								good = true;
								answer = $('*[name="answer"]').val();
							}
						break;
					}
					if(good){
						$('input[type="submit"]').hide();
						$.post(
							'log.php',
							{
								task: 		"learning",
								user_id: 	user_id,
								section: 	section,
								subsection: subsection,
								step: 		step,
								substep: 	substep,
								answer: 	answer,
								correct_answer: correct_answer,
								time: 		(now-start)
							},
							function(returnedData){
								logAndProceed();
							}
						);
					}else{
						alert("Please answer the question.");
					}
				break;
				case 1:
					logAndProceed();
				break;
			}
		break;
	}
});
</script>