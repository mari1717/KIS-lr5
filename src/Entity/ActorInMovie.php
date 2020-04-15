<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActorInMovieRepository")
 */
class ActorInMovie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $movie_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $actor_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieId(): ?int
    {
        return $this->movie_id;
    }

    public function setMovieId(?int $movie_id): self
    {
        $this->movie_id = $movie_id;

        return $this;
    }

    public function getActorId(): ?int
    {
        return $this->actor_id;
    }

    public function setActorId(int $actor_id): self
    {
        $this->actor_id = $actor_id;

        return $this;
    }
}
