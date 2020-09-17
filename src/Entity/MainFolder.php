<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MainFolder
 *
 * @ORM\Table(name="main_folder")
 * @ORM\Entity(repositoryClass="App\Repository\MainFolderRepository")
 */
class MainFolder
{
    /**
     * @var string
     *
     * @ORM\Column(name="folder_name", type="string", length=100, nullable=false)
     */
    private $folderName;

    /**
     * @var \Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    public function getFolderName(): ?string
    {
        return $this->folderName;
    }

    public function setFolderName(string $folderName): self
    {
        $this->folderName = $folderName;

        return $this;
    }

    public function getId(): ?Users
    {
        return $this->id;
    }

    public function setId(?Users $id): self
    {
        $this->id = $id;

        return $this;
    }


}
