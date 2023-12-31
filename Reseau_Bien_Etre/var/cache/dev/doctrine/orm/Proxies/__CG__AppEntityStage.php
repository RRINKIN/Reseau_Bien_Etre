<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stage extends \App\Entity\Stage implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'affichageDe' => [parent::class, 'affichageDe', null],
        "\0".parent::class."\0".'afficheJusque' => [parent::class, 'afficheJusque', null],
        "\0".parent::class."\0".'debut' => [parent::class, 'debut', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'fin' => [parent::class, 'fin', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'infoComplementaire' => [parent::class, 'infoComplementaire', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'prestataire' => [parent::class, 'prestataire', null],
        "\0".parent::class."\0".'tarif' => [parent::class, 'tarif', null],
        'affichageDe' => [parent::class, 'affichageDe', null],
        'afficheJusque' => [parent::class, 'afficheJusque', null],
        'debut' => [parent::class, 'debut', null],
        'description' => [parent::class, 'description', null],
        'fin' => [parent::class, 'fin', null],
        'id' => [parent::class, 'id', null],
        'infoComplementaire' => [parent::class, 'infoComplementaire', null],
        'nom' => [parent::class, 'nom', null],
        'prestataire' => [parent::class, 'prestataire', null],
        'tarif' => [parent::class, 'tarif', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
