<?php

declare(strict_types=1);

namespace FileSystem;

interface FileInterface extends FileSystemItemInterface
{

    public function getContents(): string;

    public function append(string $data): void;

    public function write(string $data): void;
}