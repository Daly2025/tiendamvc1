<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table="product";
    protected $primaryKey = 'product_id';
    //category_id
    public function category(){
        return $this->belongsTo('Formacom\Models\Category','category_id');
    }
    //provider_id   
    public function provider(){
        return $this->belongsTo('Formacom\Models\Provider','provider_id');
    }
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos</title>
</head>
<body>
    <h1>Formulario de Nuevo Producto</h1>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Campo Nombre del Producto -->
        <label for="name">Nombre del Producto:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <!-- Campo Descripción del Producto -->
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required></textarea>
        <br><br>

        <!-- Campo Imagen del Producto -->
        <label for="img">Imagen del Producto:</label>
        <input type="file" id="img" name="img" accept="image/*" required>
        <br><br>

        <!-- Campo Stock -->
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>
        <br><br>

        <!-- Campo Precio -->
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br><br>

        <!-- Campo Categoría -->
        <label for="category_id">Categoría:</label>
        <select id="category_id" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br><br>

        <!-- Campo Proveedor -->
        <label for="provider_id">Proveedor:</label>
        <select id="provider_id" name="provider_id" required>
            @foreach ($providers as $provider)
                <option value="{{ $provider->provider_id }}">{{ $provider->name }}</option>
            @endforeach
        </select>
        <br><br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Registrar Producto</button>
    </form>
</body>
</html>
