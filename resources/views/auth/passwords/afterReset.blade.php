<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="row px-16 py-8 bg-gray-200 rounded-2xl">
            <p class="capitalize mb-3">You have successfully reset your password, try login now</p>
            <p class="capitalize mb-3">Here is your password after reset <strong class="text-red-500">{{$password}}</strong></p>
            <a href="/login" class="text-blue-400 font-bold hover:underline">Click here to login</a>
        </div>
    </div>
</x-master>
