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
use Symfony\Component\HttpFoundation\RequestStack;
use Netzmacht\Contao\Toolkit\View\Template\BackendTemplate;

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
        // Check if the current scope is backend        
        if ($request->attributes->get('_scope') === 'backend') {
            // Use the backend template
            $backendTemplate = new BackendTemplate('be_route_element');
            $backendTemplate->wildcard = '<p>Route berechnen - Zielort: ' . $model->route_lat . ', ' . $model->route_long .  '</p>';
            return new Response($backendTemplate->parse());
        } else {
            // Set the frontend text from the model
            $template->text = $model->text;
        }

        return $template->getResponse();
    }
}