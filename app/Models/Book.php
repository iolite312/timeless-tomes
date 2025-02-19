<?php

namespace App\Models;

class Book extends Model
{
    public int $id;
    public string $title;
    public string $description;
    public string $author;
    public array $genre;
    public int $isbn;
    public float $price;
    public int $stock;
    public int $seller_id;
    public ?string $seller_name;

    public array $hidden = ['seller_id'];

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->author = $data['author'];
        $this->genre = json_decode($data['genre'], true);
        $this->isbn = $data['isbn'];
        $this->price = $data['price'];
        $this->stock = $data['stock'];
        $this->seller_id = $data['seller_id'];
        $this->seller_name = $data['seller_name'] ?? null;
    }
}