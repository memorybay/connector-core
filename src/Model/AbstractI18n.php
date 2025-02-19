<?php
/**
 * @author    Patryk Gorol <patryk.gorol@jtl-software.com>
 * @copyright 2010-2019 JTL-Software GmbH
 */
namespace Jtl\Connector\Core\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AbstractI18n
 * @access public
 * @package Jtl\Connector\Core\Model\Common
 * @Serializer\AccessType("public_method")
 */
abstract class AbstractI18n extends AbstractModel implements I18nInterface
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("languageIso")
     * @Serializer\Accessor(getter="getLanguageIso",setter="setLanguageIso")
     */
    protected $languageIso = '';

    /**
     * @return string
     */
    public function getLanguageIso(): string
    {
        return $this->languageIso;
    }

    /**
     * @param string $languageIso
     * @return $this
     */
    public function setLanguageIso(string $languageIso): self
    {
        $this->languageIso = $languageIso;

        return $this;
    }
}
