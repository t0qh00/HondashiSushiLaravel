<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $messages =[
        'name.required' => 'Es necesario ingresar un nombre para el producto.',
        'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
        'description.max' => 'La descripción sobrepasa los 200 caracteres.'
    ];
    public static $rules =[
        'name' => 'required|min:3',
        'description' => 'required|max:200',
    ];

    protected $fillable = ['name','description'];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
        if($this->image)
        return '/images/categories/'.$this->image;
        //else
        $featuredProduct = $this->products()->first();
        if($featuredProduct)
        return $featuredProduct->featured_image_url;

        return '/images/default.jpg';
    }
}
