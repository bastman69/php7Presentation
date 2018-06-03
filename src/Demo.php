<?php

namespace Demo;

class Demo
{
    private $stringField;
    private $intField;
    private $boolField;
    private $arrayField;
    private $classField;
    private $nullableField;
    private $iterableField;

    public function getStringField(): string
    {
        return $this->stringField;
    }

    public function setStringField(string $stringField): void
    {
        $this->stringField = $stringField;
    }

    public function getIntField(): int
    {
        return $this->intField;
    }

    public function setIntField(int $intField): void
    {
        $this->intField = $intField;
    }

    public function getBoolField(): bool
    {
        return $this->boolField;
    }

    public function setBoolField(bool $boolField): void
    {
        $this->boolField = $boolField;
    }

    public function getArrayField(): array
    {
        return $this->arrayField;
    }

    public function setArrayField(array $arrayField): void
    {
        $this->arrayField = $arrayField;
    }


    public function getClassField(): Market
    {
        return $this->classField;
    }


    public function setClassField(\Demo\ExceptionDispatcher $classField): void
    {
        $this->classField = $classField;
    }

    public function getNullableField(): ?string
    {
        return $this->nullableField;
    }

    /**
     * Accepts null or string
     * not exactly $nullableField = null
     * $this->setNullableField('Anything') PASS
     * $this->setNullableField(null) PASS
     * $this->setNullableField() WILL FAIL
     */
    public function setNullableField(?string $nullableField): void
    {
        $this->nullableField = $nullableField;
    }

    public function getIterableField(): iterable
    {
        return $this->iterableField;
    }

    public function setIterableField(iterable $iterableField): void
    {
        $this->iterableField = $iterableField;
    }
}
