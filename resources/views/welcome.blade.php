@extends('layouts.app')

@section('content')
<div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-10 text-center">
    <h1 class="text-4xl font-extrabold text-green-700 mb-4">
        Welcome to Foodpanda
    </h1>
    <p class="text-gray-700 text-lg mb-6">
        Your one-stop solution for delicious meals delivered right to your doorstep.
    </p>

    @auth
        <a href="{{ url('/dashboard') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
            Go to Dashboard
        </a>
    @else
        <div class="flex justify-center gap-4">
            <a href="http://localhost:8000/login" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                Login via Ecommerce
            </a>
        </div>
    @endauth
</div>
@endsection
