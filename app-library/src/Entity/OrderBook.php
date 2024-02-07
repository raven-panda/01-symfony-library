<?php

namespace App\Entity;

use App\Repository\OrderBookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderBookRepository::class)]
class OrderBook
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'orderBooks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $order = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'orderBooks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Book $book = null;

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?Order $order): static
    {
        $this->order = $order;

        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): static
    {
        $this->book = $book;

        return $this;
    }
}
