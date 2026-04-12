<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Service\Translator;

use LunaPress\Wp\I18nContracts\Entity\INoopedPlural;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ITranslator
{
    public function run(ITranslatorFunction $function);

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

    public function loadTextDomain(string $moFile, ?string $locale = null): bool;

    public function unloadTextDomain(bool $reloadable = false): bool;

    public function loadPluginTextDomain(string|false $pluginRelPath = false): bool;

    public function loadMuPluginTextDomain(string $muPluginRelPath = ''): bool;

    public function loadThemeTextDomain(string|false $path = false): bool;

    public function loadChildThemeTextDomain(string|false $path = false): bool;

    public function loadScriptTextDomain(string $handle, string $path): bool;

    public function isTextDomainLoaded(): bool;

    public function getLocale(): string;

    public function determineLocale(): string;

    public function getUserLocale(int $userId = 0): string;

    public function getAvailableLanguages(?string $dir = null): array;

    public function isRtl(): bool;

    public function switchToLocale(string $locale): bool;

    public function restorePreviousLocale(): bool;

    public function formatNumber(float $number, int $decimals = 0): string;
}
