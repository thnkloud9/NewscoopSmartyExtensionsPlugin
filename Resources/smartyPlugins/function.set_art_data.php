<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Sets art data array (used for kobinet)
 *
 * @param array $params
 * @param Smarty_Internal_Template $template
 * @return string
 */
function smarty_function_set_art_data(array $params, Smarty_Internal_Template $template)
{
        $art_data_array = $template->getTemplateVars('art_data_array');
        $art_sort_array = $template->getTemplateVars('art_sort_array');

        array_multisort($art_sort_array, $art_data_array);

        $template->assign('art_data_array',$art_data_array);
        $template->assign('art_sort_array',$art_sort_array);
}
