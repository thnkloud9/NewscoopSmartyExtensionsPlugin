<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Get weather
 *
 * @param array $params
 * @param Smarty_Internal_Template $smarty
 * @return string
 */
function smarty_function_array_multisort(array $params, Smarty_Internal_Template $template)
{

    if (!is_array($param['array1'])) {
        CampTemplate::singleton()->trigger_error('invalid parameter "' . $params['array1'] . '" specified in array_multisort');
        return false;
    }
    if (!is_array($param['array2'])) {
        CampTemplate::singleton()->trigger_error('invalid parameter "' . $params['array2'] . '" specified in array_multisort');
        return false;
    }
    array_multisort($params['array1', $params['array2']);

    $template->assign($params['assign'], $params['array2']);

}
