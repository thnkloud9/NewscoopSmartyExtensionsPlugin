<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * display calendar from reqest month and year
 *
 * @param array $params
 * @param Smarty_Internal_Template $template
 * @return string
 */
function smarty_function_show_calendar(array $params, Smarty_Internal_Template $template)
{

    $lang=$template->get_template_vars('langu');
    if($lang=="French"){
   	    $monthNames=  Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin" ,"Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    }else{
        $monthNames =  Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	}
	
	if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
	if (!isset($_REQUEST["year"]))  $_REQUEST["year"]  = date("Y");
	
    $cMonth = $_REQUEST["month"];
    $cYear  = $_REQUEST["year"];
    $prev_year = $cYear;
    $next_year = $cYear;
 	$prev_month = $cMonth-1;
 	$next_month = $cMonth+1;

 	if ($prev_month == 0 ) {
        $prev_month = 12;
        $prev_year = $cYear - 1;
    }
 	if ($next_month == 13 ) {
        $next_month = 1;
        $next_year = $cYear + 1;
    }

    $template->assign('cMonth',$cMonth);
    $template->assign('cYear',$cYear);
  
    $template->assign('next_month',$next_month);
    $template->assign('next_year',$next_year);
    $template->assign('prev_month',$prev_month);
    $template->assign('prev_year',$prev_year);
    
    echo '<div class="column column_25 calendar">
	        <div class="container">
		      <div class="calendar_container">
			    <div class="calendar_header">
				  <a href="#" class="arrow arrow_left" id="calprev"></a>
				  <span class="calendar_month">';
    echo $monthNames[$cMonth-1].' '.$cYear; 
    echo '</span><a href="#" class="arrow arrow_right" id="calnext"></a></div><div class="calendar_days">';
				
    $timestamp = mktime(0,0,0,$cMonth,1,$cYear);
    $maxday    = date("t",$timestamp);
    $thismonth = getdate ($timestamp);
    $startday  = $thismonth['wday'];

    for ($i=0; $i<($maxday+$startday); $i++) {
        if(($i % 7) == 0 ) echo "<ul>\n";
        if($i < $startday) echo "<li></li>\n";
        else echo "<li> <span class=\"day". ($i - $startday + 1) . "\">". ($i - $startday + 1) . "</span> </li>\n";
        if(($i % 7) == 6 ) echo "</ul>\n";
    }  
				
	echo '</div></div></div></div>';

}
