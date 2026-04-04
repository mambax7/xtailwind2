<?php
/**
 * xTailwind2 theme autorun
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 */

xoops_load('XoopsFormRendererTailwind');
XoopsFormRenderer::getInstance()->set(new XoopsFormRendererTailwind());

/** @var XoopsTpl $xoopsTpl */
global $xoopsTpl;
if (!empty($xoopsTpl)) {
    $xoopsTpl->addConfigDir(__DIR__);

    $themes = [
        ['name' => 'atelier',   'label' => 'Atelier',   'mode' => 'light'],
        ['name' => 'fjord',     'label' => 'Fjord',     'mode' => 'light'],
        ['name' => 'pulsefire', 'label' => 'Pulsefire', 'mode' => 'light'],
        ['name' => 'noctis',    'label' => 'Noctis',    'mode' => 'dark'],
        ['name' => 'velvet',    'label' => 'Velvet',    'mode' => 'dark'],
        ['name' => 'graphite',  'label' => 'Graphite',  'mode' => 'dark'],
    ];

    $xoopsTpl->assign('xtailwindThemes', $themes);
}
