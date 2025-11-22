<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

defined('ABSPATH') || exit;

enum WpAssetHandle: string
{
    case BLOB                               = 'wp-blob';
    case BLOCK_LIBRARY                      = 'wp-block-library';
    case BLOCKS                             = 'wp-blocks';
    case BLOCK_SERIALIZATION_DEFAULT_PARSER = 'wp-block-serialization-default-parser';
    case BLOCK_SERIALIZATION_SPEC_PARSER    = 'wp-block-serialization-spec-parser';
    case COMPONENTS                         = 'wp-components';
    case COMPOSE                            = 'wp-compose';
    case CORE_DATA                          = 'wp-core-data';
    case DATA                               = 'wp-data';
    case DATE                               = 'wp-date';
    case DEPRECATED                         = 'wp-deprecated';
    case DOM                                = 'wp-dom';
    case DOM_READY                          = 'wp-dom-ready';
    case EDITOR                             = 'wp-editor';
    case EDIT_POST                          = 'wp-edit-post';
    case ELEMENT                            = 'wp-element';
    case ESCAPE_HTML                        = 'wp-escape-html';
    case HOOKS                              = 'wp-hooks';
    case HTML_ENTITIES                      = 'wp-html-entities';
    case I18N                               = 'wp-i18n';
    case IS_SHALLOW_EQUAL                   = 'wp-is-shallow-equal';
    case KEYCODES                           = 'wp-keycodes';
    case LIST_REUSABLE_BLOCKS               = 'wp-list-reusable-blocks';
    case NUX                                = 'wp-nux';
    case PLUGINS                            = 'wp-plugins';
    case REDUX_ROUTINE                      = 'wp-redux-routine';
    case RICH_TEXT                          = 'wp-rich-text';
    case SHORTCODE                          = 'wp-shortcode';
    case TOKEN_LIST                         = 'wp-token-list';
    case URL                                = 'wp-url';
    case VIEWPORT                           = 'wp-viewport';
    case WORDCOUNT                          = 'wp-wordcount';

    case VENDOR_REACT     = 'react';
    case VENDOR_REACT_DOM = 'react-dom';
    case VENDOR_MOMENT    = 'moment';
    case VENDOR_LODASH    = 'lodash';
}
