<?php

namespace Do6po\LaravelJodit\Dto;

use Illuminate\Contracts\Support\Arrayable;

final class FolderDto implements Arrayable
{
    private string $name;

    private string $baseUrl;

    private ?string $path;

    /**
     * @var FileDto[]
     */
    private array $files;

    /**
     * @var string[]
     */
    private array $subFolders;

    /**
     * @param string $name
     * @param string $baseUrl
     * @param string[] $subFolders
     * @param FileDto[] $files
     * @param string|null $path
     */
    private function __construct(
        string $name,
        string $baseUrl,
        array $subFolders,
        array $files,
        string $path = null
    ) {
        $this->name = $name;
        $this->baseUrl = $baseUrl;
        $this->subFolders = $subFolders;
        $this->files = $files;
        $this->path = $path;
    }

    public static function byParams(
        string $name,
        string $baseUrl,
        array $subFolders = [],
        array $files = [],
        string $path = ''
    ): self {
        return new self(
            $name,
            $baseUrl,
            $subFolders,
            $files,
            $path
        );
    }

    public function toArray(): array
    {

        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        $domain = $_SERVER['HTTP_HOST'];

        $url = $protocol . "://" . $domain;


        $baseUrl = $url  . $this->getBaseUrl();

        // throw new \Exception($baseUrl);

        return [
            'name' => 'default',
            'baseurl' => $baseUrl,
            'path' => $this->hasPath() ? $this->getPath() : '',
            'files' => collect($this->getFiles())->toArray(),
            'folders' => $this->getSubFolders()
        ];
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function hasPath(): bool
    {
        return (bool)$this->path;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return FileDto[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    public function getSubFolders(): array
    {
        return $this->subFolders;
    }

    public function getName(): string
    {
        return $this->name ?? '.';
    }
}
