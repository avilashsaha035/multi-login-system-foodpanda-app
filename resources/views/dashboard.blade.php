@extends('layouts.app')

@section('content')
<div class="w-full max-w-3xl bg-white rounded-xl shadow-lg p-8">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-extrabold text-green-700">Foodpanda Dashboard</h2>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                Logout
            </button>
        </form>
    </div>

    <div class="space-y-4 text-center">
        <p class="text-gray-700 text-lg">
            Welcome back, <span class="font-bold">{{ Auth::user()->name }}</span>!
        </p>
        <p class="text-gray-600">
            You are logged in with email: <span class="font-medium">{{ Auth::user()->email }}</span>
        </p>
    </div>
</div>
@endsection
