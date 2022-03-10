<?php
/**
 * Framework instance
 * 
 * This file is used to create a new framework instance and adds specific features to the theme.
 * 
 * @package   Benjlu
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Create a new framework instance.
 */
$benlu = new Benlumia007\Alembic\Framework( dirname( __DIR__, 1 ) );

/**
 * Register default instances.
 */
$benlu->boot();

/**
 * Add default content types.
 */
Benlumia007\Alembic\ContentTypes::add( 'post', new Benlumia007\Alembic\Entry\Types\Post( $benlu->routes ) );
Benlumia007\Alembic\ContentTypes::add( 'page', new Benlumia007\Alembic\Entry\Types\Page( $benlu->routes ) );

/**
 * Register content types
 */
Benlumia007\Alembic\ContentTypes::registerRoutes();

$benlu->routes->get( '/', Benlumia007\Alembic\Entry\Controllers\Blog::class );

// Launch the current controller.
$current = $benlu->routes->current();