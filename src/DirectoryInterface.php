<?php

declare(strict_types=1);

namespace FileSystem;

interface DirectoryInterface extends FileSystemItemInterface
{

    public function createEmptyFile(string $name): FileInterface;

    public function createWithContent(string $name, string $content): FileInterface;

    /**
     * @return FileSystemItemInterface[]
     */
    public function getContent(): array;
}