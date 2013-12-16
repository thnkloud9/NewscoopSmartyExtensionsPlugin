<?php
/**
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Sets oldarticle template var (used for kobinet)
 *
 * @param array $params
 * @param Smarty_Internal_Template $template
 * @return string
 */
function smarty_function_set_old_article(array $params, Smarty_Internal_Template $template)
{

    $fulltext_import = $template->getTemplateVars('fulltext_import');

    preg_match('/<dim_it::insert_image><br>(.*)<br(.*)>/', $fulltext_import, $matches);
    $host = $matches[1];
    $oldarticle = false;
    if ($matches[0]) {
        $oldarticle = true;
    }

    $template->assign('oldarticle',$oldarticle);

}
