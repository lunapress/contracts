<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum WpAssetHandle: string
{
    case Blob                             = 'wp-blob';
    case BlockLibrary                     = 'wp-block-library';
    case Blocks                           = 'wp-blocks';
    case BlockSerializationDefaultParser  = 'wp-block-serialization-default-parser';
    case BlockSerializationSpecParser     = 'wp-block-serialization-spec-parser';
    case Components                       = 'wp-components';
    case Compose                          = 'wp-compose';
    case CoreData                         = 'wp-core-data';
    case Data                             = 'wp-data';
    case Date                             = 'wp-date';
    case Deprecated                       = 'wp-deprecated';
    case Dom                              = 'wp-dom';
    case DomReady                         = 'wp-dom-ready';
    case Editor                           = 'wp-editor';
    case EditPost                         = 'wp-edit-post';
    case Element                          = 'wp-element';
    case EscapeHtml                       = 'wp-escape-html';
    case Hooks                            = 'wp-hooks';
    case HtmlEntities                     = 'wp-html-entities';
    case I18n                             = 'wp-i18n';
    case IsShallowEqual                   = 'wp-is-shallow-equal';
    case Keycodes                         = 'wp-keycodes';
    case ListReusableBlocks               = 'wp-list-reusable-blocks';
    case Nux                              = 'wp-nux';
    case Plugins                          = 'wp-plugins';
    case ReduxRoutine                     = 'wp-redux-routine';
    case RichText                         = 'wp-rich-text';
    case Shortcode                        = 'wp-shortcode';
    case TokenList                        = 'wp-token-list';
    case Url                              = 'wp-url';
    case Viewport                         = 'wp-viewport';
    case Wordcount                        = 'wp-wordcount';

    case VendorReact                      = 'react';
    case VendorReactDom                   = 'react-dom';
    case VendorMoment                     = 'moment';
    case VendorLodash                     = 'lodash';
}
