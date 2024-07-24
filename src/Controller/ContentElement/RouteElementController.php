<?php

declare(strict_types=1);

/*
 * This file is part of Route.
 * 
 * (c) Bernhard Renner <info@berecont.at>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-route-bundle
 */

namespace Berecont\ContaoRouteBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RouteElementController
 */
class RouteElementController extends AbstractContentElementController
{
    /**
     * Generate the content element
     */
    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $template->text = $model->text;

        return $template->getResponse();
    }
}