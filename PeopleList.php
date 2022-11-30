<?php

class PeopleList implements Iterator
{
    private array $items;
    private int $pointer = 0;

    public function __construct($items)
    {
        $this->items = array_values($items);
    }

    public function current(): mixed
    {
        return $this->items[$this->pointer];
    }

    public function key(): int
    {
        return $this->pointer;
    }

    public function next(): void
    {
        $this->pointer++;
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }

    public function valid(): bool
    {
        return $this->pointer < count($this->items);
    }
}

