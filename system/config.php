<?php

	require_once("db.php");

	//j = juxtaposed
	//s = superimposed

	//question types: check, radio, text, textarea

	$config = array(
		"start" => array(
			"skyline" => "User Study on Multi-Perspsective Overview",
			"headline" => "Welcome to the User Study",
			"subline" => "",
			"copy" => "Please select your Group."
		),
		"intro" => array(
			"skyline" => "User Study on Multi-Perspsective Overview",
			"headline" => "Welcome to the User Study",
			"subline" => "",
			"copy" => ""
		),
		"prelearning" => array(
			"skyline" => "User Study on Multi-Perspsective Overview",
			"headline" => "Training",
			"subline" => "",
			"copy" => "
Before we start the actual study we will explain the visualizations that you are going to use in the test. <!--Please read the explanations thoroughly. --> <br />
<h3>Graphics that summarise collections of crime records according to where they occurred, when they occurred and what type of crimes occurred.</h3>
The graphics that you will be shown during the experiments were designed to summarise data collected from thousands of crime reports.<br /><br />
Each graphic summarises a collection of crimes, and attempts to convey three distinct pieces of information, or perspectives: where those crimes occurred, when they occurred and some information on what type of crimes occurred. When analysing crime data, it is very important that Police consider these three perspectives at the same time<!-- – focussing only on where a group of crimes took place and forgetting when and what type of crimes took place might mean that Police Officers miss important patterns-->.<br /><br /><br />
<div class='graphic-placeholder overview-graphic'></div>
For each of these perspectives, a distinct visual representation is created to help summarise where, when and what type of crimes occurred. These distinct views are further adapted so that more or less detailed information is shown. <!-- As you will discover, there are benefits and costs associated with showing this varying detail.--><br /><br /><br />
<!-- <h3>Graphical summaries with varying levels of detail</h3> -->
<!--<div class='graphic-placeholder low-detail-graphic'></div> -->
<!--At their <strong>least detailed</strong>, the visual representations attempt to summarise central tendency. The centre of the distribution is shown along with a measure of spread around that central value; the better the central value describes the collection of crimes it represents, the smaller the spread around that value. These central values vary with the category of data, or perspective, that is shown: they are, for instance, the mean time of day and day of week for a collection of crimes, the mean spatial location or the modal crime type.<br /><br /><br /> -->
<!--<div class='graphic-placeholder mid-detail-graphic'></div> -->
<!-- At the <strong>middle level of detail</strong>, more information is exposed by aggregating time values, spatial locations and crime types into bins and showing counts amongst those bins. Notice that, since more information is presented in the graphic, the views increasingly overlap.<br /><br /><br /> -->
<!--<div class='graphic-placeholder high-detail-graphic'></div>-->
<!--At the <strong>most detailed level</strong>, time values, spatial locations and crime descriptions are identified with more precision still. In this case there is much occlusion and overlap of the views -- the spatial view becomes almost unintelligible.-->" 
		),
		"learning" => array(
			"skyline" => "User Study on Multi-Perspective Overview",
			"headline" => "",
			"subline" => "Training",
			"copy" => "",
			"section" => array(
				array(
					"headline" => "Spatial Distribution",
					"copy" => "The visualization used in this test consists of three \"perspectives\". The first summarises the spatial distribution of crimes in the dataset. Spatial information is summarised at three levels of detail. In the training we will introduce these views, starting with the highest level of detail.",
					"images" => array(
						array(
							"img/spatial-high.png",
							"At the most detailed level is a 'hotspot map'. A fine grid is placed over the study area and observations at individual grid cells are smoothed by taking into account numbers of crimes in nearby grid cells. Administrative boundaries are included as background detail."
						),
						array(
							"img/spatial-mid.png",
							"At the mid-level, the study region is split into a grid and at each location in the grid, the number of crimes occurring in that grid square are counted. The area of the squares are then sized according to this number."
						),
						array(
							"img/spatial-low.png",
							"At the least detailed level, the dot represents the spatial centre of all crime locations and the ellipse summarises an area over which most crimes typically occur."
						)
					),
					"training" => array(
						array(
							"image" => 	array(
								"j" => "img/training/spatial_1_j.png",
								"s" => "img/training/spatial_1_s.png"
							),
							"question" => "How many spatial hotspots can you identify?",
							"type" => "radio",
							"answers" => array("No Hotspots", "1", "2", "3", "4", "Don't know"),
							"answer" => "1",
							"correct_image" => array(
								"j" => "img/training/spatial_1_j_result.png",
								"s" => "img/training/spatial_1_s_result.png"
							),
							"correct_text" => "There is one area in the visualization that shows particularly high spatial density."
						),
						array(
							"image" => 	array(
								"j" => "img/training/spatial_2_j.png",
								"s" => "img/training/spatial_2_s.png"
							),
							"question" => "Does the visualization show spatial areas with no crimes?",
							"type" => "radio",
							"answers" => array("No", "Yes", "Don't know."),
							"answer" => "Yes",
							"correct_image" => array(
								"j" => "img/training/spatial_2_j_result.png",
								"s" => "img/training/spatial_2_s_result.png"
							),
							"correct_text" => "Actually most areas don't have any crimes of this type reported."
						),
						array(
							"image" => 	array(
								"j" => "img/training/spatial_3_j.png",
								"s" => "img/training/spatial_3_s.png"
							),
							"question" => "Are the crimes in this visualization spread across the whole of Chicago or are most concentrated in a small area?",
							"type" => "radio",
							"answers" => array("Across Chicago", "High density in small area", "Don't know."),
							"answer" => "High density in small area",
							"correct_image" => array(
								"j" => "img/training/spatial_3_j_result.png",
								"s" => "img/training/spatial_3_s_result.png"
							),
							"correct_text" => "The crime pattern is concentrated in a small area."
						)
					)
				),
				array(
					"headline" => "Time Distribution",
					"copy" => "In the screens that follow, we will explain how time-related data are represented.",
					"images" => array(
						array(
							"img/time-high.png",
							"At the most detailed level, crimes are summarised by hour of day and day of week as a calendar heatmap view: the columns represent the seven days of the week (from Sunday to Saturday, left-to-right) and the rows represent hours of the day (from midnight-midnight, top-to-bottom). <!-- Below that, the time period is split into finer time bins and smoothed frequency counts are created by counting the number of crimes occurring in nearby time bins.-->"
						),
						array(
							"img/time-mid.png",
							"At the mid-level, polar coordinates are used to show time data. The outside ring represents hour of day on a 24hr clock. Thus, what would be just after 3 o’clock (on a 12hr clock) is 6.00am and just after 9 o’clock becomes 6.00pm.  The inside ring represents days of the week. Numbers of crimes in each bin are represented using colour fill; the greater the amount of fill, the greater the number of crimes. <!--Below that, the time period is split into continuous time (days) and the number of crimes occurring on each day reported as a bar.-->"
						),
						array(
							"img/time-low.png",
							"For each crime record, the hour at which a crime happened is treated as a numeric value and the mean hour represented as a dot. The line surrounding the dot is a measure of dispersion around that mean time. Thus, if the mean hour was 12.00pm and the vast majority of crimes happened within 90 minutes of that time, the dot would be located at just past the 6 o’clock position and the length of the surrounding line would be very short. The same principal is used to draw the inside ring, but days of week are shown: Monday is located between 12-2 o’clock and Saturday between roughly 8-10 o’clock. <!--The horizontal line is a summary across continuous time. Crimes are ordered according to how recently they occurred. The dot represents the median timestamp of all crimes and the length of the line is the Interquartile Range of those ordered crimes.-->"
						)
					),
					"training" => array(
						array(
							"image" => 	array(
								"j" => "img/training/time_1_j.png",
								"s" => "img/training/time_1_s.png"
							),
							"question" => "On which day of the week is the mean day?",
							"type" => "radio",
							"answers" => array("MON","TUE","WED","THU","FRI","SAT","SUN","I don't know."),
							"answer" => "SAT",
							"correct_image" => array(
								"j" => "img/training/time_1_j_result.png",
								"s" => "img/training/time_1_s_result.png"
							),
							"correct_text" => "The mean value for day of the week for this crime pattern is Saturday."
						),
						array(
							"image" => 	array(
								"j" => "img/training/time_2_j.png",
								"s" => "img/training/time_2_s.png"
							),
							"question" => "During which hour of the day do the most crimes occur?",
							"type" => "radio",
							"answers" => array("24:00-01:00","01:00-02:00","02:00-03:00","03:00-04:00","04:00-05:00","05:00-06:00","06:00-07:00", "07:00-08:00", "08:00-09:00", "09:00-10:00", "10:00-11:00", "11:00-12:00", "12:00-13:00", "13:00-14:00", "14:00-15:00", "15:00-16:00", "16:00-17:00", "17:00-18:00", "18:00-19:00", "19:00-20:00", "20:00-21:00", "21:00-22:00", "22:00-23:00", "23:00-24:00", "Don't know."),
							"answer" => "02:00-03:00",
							"correct_image" => array(
								"j" => "img/training/time_2_j_result.png",
								"s" => "img/training/time_2_s_result.png"
							),
							"correct_text" => "The mean value for hour of the day for this crime pattern is between 2am and 3am."
						),
						array(
							"image" => 	array(
								"j" => "img/training/time_3_j.png",
								"s" => "img/training/time_3_s.png"
							),
							"question" => "Which day has the lowest crime rate?",
							"type" => "radio",
							"answers" => array("MON","TUE","WED","THU","FRI","SAT","SUN", "Don't know."),
							"answer" => "WED",
							"correct_image" => array(
								"j" => "img/training/time_3_j_result.png",
								"s" => "img/training/time_3_s_result.png"
							),
							"correct_text" => "Wednesday shows the lowest occurrence of crimes, followed by Tuesday."
						),
						array(
							"image" => 	array(
								"j" => "img/training/time_4_j.png",
								"s" => "img/training/time_4_s.png"
							),
							"question" => "During which time do the least crimes happen?",
							"type" => "radio",
							"answers" => array("00:00-02:00","02:00-04:00","04:00-06:00","06:00-08:00","08:00-10:00","10:00-12:00","12:00-14:00","14:00-16:00","16:00-18:00","18:00-20:00","20:00-22:00","22:00-24:00","Don't know."),
							"answer" => "14:00-16:00",
							"correct_image" => array(
								"j" => "img/training/time_4_j_result.png",
								"s" => "img/training/time_4_s_result.png"
							),
							"correct_text" => "During early afternoon, especially between 2pm and 4pm the least number of crimes occur."
						)
					)
				),
				array(
					"headline" => "Description Distribution",
					"copy" => "In the screens that follow, we will explain how descriptive information around crime reports is represented.",
					"images" => array(
						array(
							"img/category-high.png",
							"At the most detailed level, crime type categories and subcategories (left) and location type categories and subcategories (right) are shown. The heights of the bars represent the number of crimes; so acquisitive and violence are the most common offences. Notice how the bars are also divided horizontally. These subdivisions identify sub-categories of crime type and location type. You do not need to worry about what these represent, but for example for violent crime there are three main subcatories, the largest of which accounts for approximately two thirds of all violent crime. "
						),
						array(
							"img/category-mid.png",
							"At the medium level, horizontal bars are used to show frequency in each crime type and location type. Three letter acronyms are now also used to identify crime types and location types."
						),
						array(
							"img/category-low.png",
							"In the left margin the modal (most frequently occuring) crime category for all crimes is reported and the first letter, in this case A for acquisitive, is used to identify that category. The horizontal line pointing outwards from the centre of this label represents variation across other crime categories for the set of crimes that are being summarised. If the horizontal line is long, there are many other crime categories represented in the collection and the modal crime category does not describe the crime types within the summarised set of crimes well. If it is short, there are few crimes occurring in other categories and the modal value successfully describes the underlying crime types. To the right, the same encoding is used to summarise location type, in this case S, for street, is the modal location type."
						)
					),
					"training" => array(
						array(
							"image" => 	array(
								"j" => "img/training/category_1_j.png",
								"s" => "img/training/category_1_s.png"
							),
							"question" => "Which is the modal (most frequently occuring) crime category?",
							"type" => "radio",
							"answers" => array("BUR", "CRI", "MDT", "ROB", "THE", "I don't know."),
							"answer" => "THE",
							"correct_image" => array(
								"j" => "img/training/category_1_j_result.png",
								"s" => "img/training/category_1_s_result.png"
							),
							"correct_text" => "The largest number of crimes in this case belong to the descriptor THE (theft)."
						),
						array(
							"image" => 	array(
								"j" => "img/training/category_2_j.png",
								"s" => "img/training/category_2_s.png"
							),
							"question" => "Which is the modal (most frequently occuring) location category?",
							"type" => "radio",
							"answers" => array("HOT","LEI","OTH","PAR","RES","STR","TRA", "VAC", "Don't know."),
							"answer" => "HOT",
							"correct_image" => array(
								"j" => "img/training/category_2_j_result.png",
								"s" => "img/training/category_2_s_result.png"
							),
							"correct_text" => "Most crimes in this case belong to the descriptor HOT (hotel)"
						),
						array(
							"image" => 	array(
								"j" => "img/training/category_3_j.png",
								"s" => "img/training/category_3_s.png"
							),
							"question" => "In this view, which modal category performs the least well at describing the underlying data -- location or crime type?",
							"type" => "radio",
							"answers" => array("H","B","Don't know."),
							"answer" => "B",
							"correct_image" => array(
								"j" => "img/training/category_3_j_result.png",
								"s" => "img/training/category_3_s_result.png"
							),
							"correct_text" => "It's pretty close, but the variance around the crime type descriptor is slightly higher than on the location descriptor."
						)
					)
				),
				array(
					"headline" => "Training completed",
					"copy" => "Well done for completing the training. We hope this gives you an idea of what each graphical element aims to communicate. When you progress to the test, you won't need to read the graphics in such a detailed way. In fact we would encourage you not to look at them at all intensely and instead  quickly scan 'at-a-glance'. However, you will need to check the space, time and description representations at the same time in order to complete the tests.",
				)
			)
		),
		"pretest" => array(
			"skyline" => "User Study on Multi-Perspective Overview",
			"headline" => "",
			"subline" => "Test",
			"copy" => "After this page the test will start. You will perform 13 tests in total, but the task will be the same for all 13 tests. In each test you will be shown three reference visualizations. Below the reference visualizations you will find 18 additional visualizations. Your task is to determine to which of the three references each additional visualization belongs. To assign a visualization to a group, hover over the graphic and click on the corresponding number. <!-- <br /><br /><strong>Advice:</strong> The small visualizations are equally distributed, you should assign six visualizations to each group.-->"
		),
		"test" => array(
			"skyline" => "User Study on Multi-Perspective Overview",
			"headline" => "",
			"subline" => "Test",
			"copy" => "Please assign the 18 small multiples to one of the three groups you see above.  Group the graphics on their similarity.",
			"image_path" => "testcases/",
			"count" => 12
		),
		"bonus" => array(
			"skyline" => "User Study on Multi-Perspective Overview",
			"headline" => "",
			"subline" => "Test",
			"copy" => "Please assign the 18 small multiples to one of the three groups you see above.  Group the graphics on their similarity.",
			"image_path" => "testcases/",
		),
		"posttest" => array(
			"skyline" => "User Study on Multi-Perspective Overview",
			"headline" => "",
			"subline" => "Post Experiment Survey",
			"copy" => "Before we come to an end, we have a few short questions.",
			"questions" => array(
				array(
					"question" => "How mentally demanding was the task?",
					"type" => "nasa",
					"answers" => array("Not at all demanding", "Extremely demanding")
				),
				array(
					"question" => "How hurried or rushed was the pace of the task?",
					"type" => "nasa",
					"answers" => array("Not at all hurried", "Extremely hurried")
				),
				array(
					"question" => "How successful do you think you were at accomplishing the grouping task?",
					"type" => "nasa",
					"answers" => array("Extremely successful", "Not at all succesful")
				),
				array(
					"question" => "How hard did you have to work to complete the tasks?",
					"type" => "nasa",
					"answers" => array("Not at all hard", "Extremely hard")
				),
				array(
					"question" => "How pressured did you feel when completing the test?",
					"type" => "nasa",
					"answers" => array("Not at all pressured ", "Extremely pressured")
				),
				array(
					"question" => "",
					"type" => "hr",
					"answers" => ""
				),
				array(
					"question" => "How old are you?",
					"type" => "text"
				),
				array(
					"question" => "Gender",
					"type" => "radio",
					"answers" => array("Female", "Male")
				),
				array(
					"question" => "Your current programme?",
					"type" => "radio",
					"answers" => array("Bachelors", "Masters", "Other")
				),
				array(
					"question" => "In which Bachelors / Masters programme are you currently enrolled?",
					"type" => "text"
				),
				array(
					"question" => "If you are already studying for your Masters, what was your Bachelors program?",
					"type" => "text"
				),
				array(
					"question" => "How familiar are you with (interactive) data visualization?",
					"type" => "radio",
					"answers" => array("No Knowledge", "Limited Knowledge (I have heard of the term)", "Working Knowledge (I have read articles on the subject)", "Expert Knowledge (I have read articles and submitted written work on the subject as part of a Higher Education module)")
				),
				array(
					"question" => "Have you ever used data visualization software or software that allows data visualization,<br />e.g. Tableau, R (ggplot) or online Tools like CartoDB?",
					"type" => "radio",
					"answers" => array("Never", "Occasionally used", "Regularly used")
				),
				array(
					"question" => "If you are or have used such software, please list the software:",
					"type" => "textarea"
				),
				array(
					"question" => "Have you been to Chicago in the USA?",
					"type" => "radio",
					"answers" => array("No", "Yes")
				),
				array(
					"question" => "How well do you know Chicago's physical layout/geography?",
					"type" => "radio",
					"answers" => array("Not well", "Reasonably well", "Very well")
				),
				array(
					"question" => "Have you worked with crime data before?",
					"type" => "radio",
					"answers" => array("No", "Yes")
				),
				array(
					"question" => "Do you have any comments on our study?",
					"type" => "textarea"
				)
			)
		),
		"end" => array(
			"skyline" => "User Study on Multi-Perspective Overview",
			"headline" => "",
			"subline" => "The end.",
			"copy" => "Thank you very much for taking part."
		)
	);

	$testcases = array(
		1 => array(
			1 => array("HHH","S"),
			2 => array("HHH","TD"),
			3 => array("HHH","STD"),
			4 => array("MMM","T"),
			5 => array("MMM","SD"),
			6 => array("MMM","STD"),
			7 => array("LMH","D"),
			8 => array("LMH","ST"),
			9 => array("LMH","STD"),
			10 => array("HLH","S"),
			11 => array("HLH","TD"),
			12 => array("HLH","STD")
		),
		2 => array(
			1 => array("HHH","STD"),
			2 => array("HHH","S"),
			3 => array("HHH","TD"),
			4 => array("MMM","STD"),
			5 => array("MMM","T"),
			6 => array("MMM","SD"),
			7 => array("LMH","STD"),
			8 => array("LMH","D"),
			9 => array("LMH","ST"),
			10 => array("HLH","STD"),
			11 => array("HLH","S"),
			12 => array("HLH","TD")
		),
		3 => array(
			1 => array("HHH","TD"),
			2 => array("HHH","STD"),
			3 => array("HHH","S"),
			4 => array("MMM","TD"),
			5 => array("MMM","STD"),
			6 => array("MMM","T"),
			7 => array("LMH","SD"),
			8 => array("LMH","STD"),
			9 => array("LMH","D"),
			10 => array("HLH","ST"),
			11 => array("HLH","STD"),
			12 => array("HLH","S")
		),
		4 => array(
			1 => array("MMM","S"),
			2 => array("MMM","TD"),
			3 => array("MMM","STD"),
			4 => array("LMH","S"),
			5 => array("LMH","TD"),
			6 => array("LMH","STD"),
			7 => array("HLH","T"),
			8 => array("HLH","SD"),
			9 => array("HLH","STD"),
			10 => array("HHH","D"),
			11 => array("HHH","ST"),
			12 => array("HHH","STD")
		),
		5 => array(
			1 => array("MMM","STD"),
			2 => array("MMM","S"),
			3 => array("MMM","TD"),
			4 => array("LMH","STD"),
			5 => array("LMH","S"),
			6 => array("LMH","TD"),
			7 => array("HLH","STD"),
			8 => array("HLH","T"),
			9 => array("HLH","SD"),
			10 => array("HHH","STD"),
			11 => array("HHH","D"),
			12 => array("HHH","ST")
		),
		6 => array(
			1 => array("MMM","ST"),
			2 => array("MMM","STD"),
			3 => array("MMM","S"),
			4 => array("LMH","TD"),
			5 => array("LMH","STD"),
			6 => array("LMH","S"),
			7 => array("HLH","TD"),
			8 => array("HLH","STD"),
			9 => array("HLH","T"),
			10 => array("HHH","SD"),
			11 => array("HHH","STD"),
			12 => array("HHH","D")
		),
		7 => array(
			1 => array("LMH","D"),
			2 => array("LMH","ST"),
			3 => array("LMH","STD"),
			4 => array("HLH","S"),
			5 => array("HLH","TD"),
			6 => array("HLH","STD"),
			7 => array("HHH","S"),
			8 => array("HHH","TD"),
			9 => array("HHH","STD"),
			10 => array("MMM","T"),
			11 => array("MMM","SD"),
			12 => array("MMM","STD")
		),
		8 => array(
			1 => array("LMH","STD"),
			2 => array("LMH","D"),
			3 => array("LMH","ST"),
			4 => array("HLH","STD"),
			5 => array("HLH","S"),
			6 => array("HLH","TD"),
			7 => array("HHH","STD"),
			8 => array("HHH","S"),
			9 => array("HHH","TD"),
			10 => array("MMM","STD"),
			11 => array("MMM","T"),
			12 => array("MMM","SD")
		),
		9 => array(
			1 => array("LMH","SD"),
			2 => array("LMH","STD"),
			3 => array("LMH","D"),
			4 => array("HLH","ST"),
			5 => array("HLH","STD"),
			6 => array("HLH","S"),
			7 => array("HHH","TD"),
			8 => array("HHH","STD"),
			9 => array("HHH","S"),
			10 => array("MMM","TD"),
			11 => array("MMM","STD"),
			12 => array("MMM","T")
		),
		10 => array(
			1 => array("HLH","T"),
			2 => array("HLH","SD"),
			3 => array("HLH","STD"),
			4 => array("HHH","D"),
			5 => array("HHH","ST"),
			6 => array("HHH","STD"),
			7 => array("MMM","S"),
			8 => array("MMM","TD"),
			9 => array("MMM","STD"),
			10 => array("LMH","S"),
			11 => array("LMH","TD"),
			12 => array("LMH","STD")
		),
		11 => array(
			1 => array("HLH","STD"),
			2 => array("HLH","T"),
			3 => array("HLH","SD"),
			4 => array("HHH","STD"),
			5 => array("HHH","D"),
			6 => array("HHH","ST"),
			7 => array("MMM","STD"),
			8 => array("MMM","S"),
			9 => array("MMM","TD"),
			10 => array("LMH","STD"),
			11 => array("LMH","S"),
			12 => array("LMH","TD")
		),
		12 => array(
			1 => array("HLH","TD"),
			2 => array("HLH","STD"),
			3 => array("HLH","T"),
			4 => array("HHH","SD"),
			5 => array("HHH","STD"),
			6 => array("HHH","D"),
			7 => array("MMM","ST"),
			8 => array("MMM","STD"),
			9 => array("MMM","S"),
			10 => array("LMH","TD"),
			11 => array("LMH","STD"),
			12 => array("LMH","S")
		)
	);

	$randomizer = array(array(5,1,15,7,16,12,9,4,3,14,2,11,6,17,0,8,13,10),array(11,6,0,8,2,5,12,1,15,7,9,17,14,16,3,10,13,4),array(7,4,9,6,5,16,11,13,1,0,3,15,8,14,10,2,17,12),array(5,4,0,14,9,3,8,1,11,12,15,13,6,2,16,17,10,7),array(15,5,2,14,13,12,8,4,17,9,16,1,3,11,6,10,7,0),array(4,12,6,0,15,14,11,10,2,7,1,8,17,16,3,9,5,13),array(6,15,11,1,10,12,3,0,13,16,17,9,4,8,2,7,14,5),array(14,13,1,10,2,12,17,9,4,6,8,0,15,16,3,5,11,7),array(11,3,5,16,6,2,15,4,1,10,17,0,9,13,12,7,14,8),array(11,12,4,3,13,8,7,17,16,14,5,15,10,6,2,0,1,9),array(10,16,14,8,1,0,12,4,5,9,7,11,17,13,15,3,6,2),array(3,15,2,9,11,6,8,13,4,10,7,14,16,5,17,1,12,0));

	$testcases_rand = array(array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2),array(7,9,8,5,4,3,1,2,6,0,11,10),array(11,0,8,7,4,1,2,6,10,3,5,9),array(5,4,3,9,7,1,6,8,11,2,10,0),array(11,1,7,8,3,9,2,4,10,5,0,6),array(4,9,10,8,3,7,2,0,1,6,5,11),array(6,1,5,3,9,10,7,8,0,4,11,2),array(11,8,5,6,0,2,3,1,9,4,7,10),array(1,4,6,10,3,11,2,0,7,9,8,5),array(9,7,8,1,0,3,10,5,6,4,11,2),array(10,2,4,9,1,11,8,6,3,0,5,7),array(11,7,8,1,10,4,6,0,3,5,9,2),array(9,8,4,5,6,3,7,11,0,2,1,10),array(8,6,1,9,11,0,4,3,5,7,2,10),array(10,1,0,7,2,6,9,5,8,11,3,4),array(10,11,1,8,7,0,9,2,4,3,6,5),array(5,3,11,7,0,9,10,8,6,1,4,2),array(8,9,7,0,11,1,5,4,3,6,2,10),array(11,3,5,0,7,2,4,10,8,1,6,9),array(1,4,0,5,11,8,2,6,9,10,7,3),array(9,6,5,3,4,10,1,0,11,2,7,8),array(11,10,7,9,2,4,1,6,8,3,5,0),array(9,2,7,8,5,6,4,10,3,1,11,0),array(0,6,4,5,10,3,1,7,2,11,8,9),array(1,7,3,4,6,9,10,5,8,11,2,0),array(2,8,5,3,10,4,0,7,1,9,11,6),array(5,11,0,3,1,8,7,2,10,4,9,6),array(2,5,7,3,8,6,10,4,1,0,11,9),array(2,1,0,9,8,6,11,7,5,3,4,10),array(9,3,6,0,7,2,11,4,10,5,8,1),array(3,9,4,10,1,5,7,11,0,6,2,8),array(9,7,6,0,10,2,8,11,5,1,3,4),array(3,4,2,7,6,1,11,0,5,8,10,9),array(2,6,10,1,3,11,0,4,7,9,8,5),array(4,10,3,1,0,7,11,5,6,8,2,9),array(9,7,4,3,6,2,0,11,8,10,1,5),array(3,5,11,6,7,9,10,8,1,4,0,2),array(9,2,11,0,8,5,7,1,4,6,3,10),array(11,2,1,7,10,0,3,5,6,4,9,8),array(6,2,1,9,3,11,10,5,0,8,4,7),array(7,0,3,11,2,10,4,8,5,9,6,1),array(3,11,1,0,10,9,4,8,5,7,2,6),array(8,4,9,1,6,11,10,3,0,5,2,7),array(4,11,5,10,2,8,3,1,0,9,6,7),array(2,3,10,4,8,11,7,0,1,5,9,6),array(0,3,9,4,1,5,6,11,7,10,8,2),array(11,7,1,10,2,8,6,9,5,0,4,3),array(11,0,9,3,6,5,4,10,8,7,1,2),array(2,3,4,0,9,6,7,11,8,5,10,1),array(11,8,0,1,10,7,4,5,3,2,6,9),array(7,6,5,0,9,4,10,2,11,8,1,3),array(0,10,1,9,7,3,11,5,2,8,4,6),array(11,3,1,4,9,8,6,0,7,5,2,10),array(1,7,0,8,10,3,2,9,6,4,5,11),array(2,7,5,4,10,9,1,8,3,6,11,0),array(6,7,8,9,2,4,10,11,0,3,5,1),array(7,8,5,1,10,4,11,0,3,2,9,6),array(9,11,8,3,10,2,1,5,6,4,0,7),array(7,4,5,0,6,8,3,1,2,10,11,9),array(11,10,5,3,8,2,4,1,6,0,7,9),array(5,1,10,8,11,6,4,2,3,9,0,7),array(6,8,1,2,3,7,0,11,5,9,10,4),array(3,2,6,1,5,8,0,7,4,9,10,11),array(6,2,5,7,10,4,0,3,1,9,11,8),array(1,0,11,5,6,3,7,9,4,10,8,2),array(8,10,6,0,9,2,1,4,5,7,11,3),array(8,0,9,4,2,11,1,7,3,6,5,10),array(9,4,6,3,11,7,5,1,2,10,8,0),array(11,1,7,6,4,9,3,8,5,0,10,2),array(5,8,0,1,11,7,9,4,3,2,6,10),array(0,9,2,8,7,1,4,6,10,3,5,11),array(10,7,0,3,1,6,8,5,4,11,9,2),array(8,1,10,5,3,4,2,7,6,0,11,9),array(8,1,10,2,4,9,7,11,5,6,0,3),array(3,9,5,4,8,6,2,11,0,1,7,10),array(3,4,11,5,10,1,7,6,2,9,0,8),array(4,6,5,8,0,1,3,10,2,11,9,7),array(1,7,8,2,10,0,9,6,3,4,11,5),array(7,0,11,5,2,9,10,3,1,6,4,8),array(10,11,1,5,8,9,2,7,3,4,0,6),array(7,11,9,4,2,6,5,8,10,1,3,0),array(11,6,2,0,7,5,3,1,10,8,9,4),array(3,8,9,10,1,2,7,11,5,0,6,4),array(2,9,7,5,11,3,8,6,0,1,10,4),array(10,11,7,9,2,3,4,8,1,0,5,6),array(4,2,9,5,0,10,1,6,7,11,3,8),array(5,11,2,9,3,1,6,0,8,4,10,7),array(8,1,10,0,6,9,4,11,2,5,7,3),array(4,8,0,1,10,7,2,5,11,6,3,9),array(8,4,5,6,7,1,9,0,11,3,2,10),array(11,2,0,3,7,9,5,1,8,6,4,10),array(8,4,9,3,6,0,1,10,11,2,5,7),array(10,6,9,3,8,0,7,5,2,4,11,1),array(4,8,0,5,6,1,2,9,7,10,11,3),array(10,3,8,0,2,11,1,7,5,6,4,9),array(8,11,10,7,0,2,9,4,1,3,5,6),array(5,7,9,6,11,3,4,10,0,8,1,2),array(3,2,9,8,11,1,4,7,6,0,5,10),array(6,5,4,8,7,0,3,2,9,11,1,10),array(3,11,4,6,10,9,7,0,5,8,2,1),array(1,11,7,8,3,10,5,4,0,9,6,2));

	$str = file_get_contents('testcases/data.json');
	$filenames = json_decode($str, true);

	/*------------------- MYSQL -------------------*/

	ini_set("precision", 20);

	$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_database);

	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	ini_set('default_socket_timeout', 900);
	$mysqli->query("SET NAMES 'utf8'");

	function query($query){
		global $mysqli;
		$result = $mysqli->query($query);
		if ($result){
			if(is_object($result)&&property_exists($result,'num_rows')&&($result->num_rows >= 1)) {
				return $result;
			}else{
				return true;
			}
		}else{
			return false;
		}
	}


	/*------------------- FORM BUILDING -------------------*/

	function formElement($data, $name){
		$form = "";
		switch($data["type"]){
			case "check":
				if(isset($data["question"])){
					$form .= '<label class="question-label">'.$data["question"].'</label><br />';
				}
				foreach ($data["answers"] as $answer) {
					$form .= '<input type="checkbox" name="'.$name.'" value="'.$answer.'" /><label>'.$answer.'</label><br />';
				}
			break;
			case "radio":
				if(isset($data["question"])){
					$form .= '<label class="question-label">'.$data["question"].'</label><br />';
				}
				foreach ($data["answers"] as $answer) {
					$form .= '<input type="radio" name="'.$name.'" value="'.$answer.'" /><label>'.$answer.'</label><br />';
				}
			break;
			case "text":
				if(!isset($data["answers"])){
					$data["answers"] = $data["question"];
				}
				$form .= '<label class="question-label">'.$data["answers"].'</label><input type="text" name="'.$name.'" /><br />';
			break;
			case "textarea":
			if(!isset($data["answers"])){
					$data["answers"] = $data["question"];
				}
				$form .= '<label class="question-label">'.$data["answers"].'</label><br /><textarea name="'.$name.'"></textarea><br />';
			break;
			case "nasa":
				$form .= '<label class="question-label">'.$data["question"].'</label><br />';
				$form .= '<div id="'.$name.'" class="nasa-container">';
				$form .= '<span class="nasa-left">'.$data["answers"][0].'</span>';
				$form .= '<span class="nasa-right">'.$data["answers"][1].'</span>';

				for($i = 1; $i<21; $i++){
					$form .= '<a class="btn btn-nasa btn-nasa-'.$i.'" data="'.$i.'"><span class="border"></span></a>';
				}

				$form .= "</div><hr class='nasa-closer' />";
				
			break;
		}
		return $form;
	}

?>
