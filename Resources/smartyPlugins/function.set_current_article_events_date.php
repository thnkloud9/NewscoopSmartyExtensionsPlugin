<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Sets current_article_events_date after multisorting (kobinet)
 *
 * @param array $params
 * @param Smarty_Internal_Template $template
 * @return string
 */
function smarty_function_set_current_article_events_date(array $params, Smarty_Internal_Template $template)
{

    $current_article_events_sort = $template->getTemplateVars('current_article_events_sort');
    $current_article_events_date = $template->getTemplateVars('current_article_events_date');

    array_multisort($current_article_events_sort, $current_article_events_date);

    $template->assign('current_article_events_date',$current_article_events_date);

}
