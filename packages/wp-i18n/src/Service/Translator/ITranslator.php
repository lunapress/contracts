<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Service\Translator;

use LunaPress\Wp\I18nContracts\Entity\INoopedPlural;



interface ITranslator
{
    public function translate(string $text): string;

    public function render(string $text): void;

    public function context(string $text, string $context): string;

    public function renderContext(string $text, string $context): void;

    public function plural(string $single, string $plural, int $number): string;

    public function contextPlural(string $single, string $plural, int $number, string $context): string;

    public function translateEscHtml(string $text): string;

    public function renderEscHtml(string $text): void;

    public function translateEscHtmlContext(string $text, string $context): string;

    public function translateEscAttr(string $text): string;

    public function renderEscAttr(string $text): void;

    public function translateEscAttrContext(string $text, string $context): string;

    public function noopPlural(string $single, string $plural): INoopedPlural;

    public function contextNoopPlural(string $single, string $plural, string $context): INoopedPlural;

    public function translateNoopedPlural(INoopedPlural $noopedPlural, int $number): string;
}
