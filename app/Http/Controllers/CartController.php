<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Computadora;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Obtener el usuario autenticado y su carrito
        $user = auth()->user();
        $cart = $user->cart;

        // Verificar si el carrito está vacío
        if (!$cart || $cart->products->isEmpty()) {
            return redirect()->route('cart.show')->with('error', 'Tu carrito está vacío.');
        }

        // Calcular el total de la compra
        $total = $cart->products()->sum('price');

        // Pasar los productos y el total a la vista de checkout
        return view('checkout.index', compact('cart', 'total'));
    }

    public function show()
    {
        $cart = Auth::user()->cart;
        $cartItems = $cart->products()->withPivot('type')->get();
        return view('cart.show', compact('cart', 'cartItems'));
    }

    public function addToCart(Request $request, Product $product)
    {
        // Obtener el tipo del producto
        $type = $request->input('type');

        // Obtener el usuario actual
        $user = auth()->user();

        // Obtener o crear el carrito del usuario
        $cart = $user->cart ?? new Cart(['user_id' => $user->id]);
        $cart->save();

        // Agregar el elemento al carrito con su tipo correspondiente
        $cart->products()->attach($product->id, ['quantity' => 1, 'type' => $type]);

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }

    public function remove(Product $product)
    {
        // Obtén el usuario autenticado
        $user = auth()->user();

        // Obtén el carrito del usuario
        $cart = $user->cart;

        // Verifica si el producto está en el carrito
        if ($cart->products->contains($product)) {
            // Elimina la asociación entre el producto y el carrito
            $cart->products()->detach($product);

            return redirect()->back()->with('success', 'Producto eliminado del carrito.');
        }

        return redirect()->back()->with('error', 'El producto no está en el carrito.');
    }
}
