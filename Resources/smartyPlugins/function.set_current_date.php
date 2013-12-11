<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * set current month and year
 *
 * @param array $params
 * @param Smarty_Internal_Template $template
 * @return string
 */
function smarty_function_set_current_date(array $params, Smarty_Internal_Template $template)
{

    $cMonth =  date("n");
    $cYear  =  date("Y");
    $template->assign('cMonth',$cMonth);
    $template->assign('cYear',$cYear);
}
