<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} - Validacion de NIT
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg px-24">
                <h2 class="font-extrabold text-center">Valida tu NIT aqui</h2><br><hr>
                <form action="" method="GET">
                    @csrf

                    <label>
                        Ingresa tu NIT:
                        <input type="text" name="name" value="">
                    </label>
                    @error('')
                        <br/>
                        <small>*{{$message}}</small>
                        <br/>
                    @enderror
                    <br/>
                    <br>
                    <button type="submit" class="rounded-full text-center">Buscar NIT</button>
                </form>


                <br>
            </div>
            <div>
                <table class="table text-gray-700 border-separate space-y-8 space-x-4 text-sm">
                    <thead class="bg-blue-500 text-gray-700">
                        <tr>
                            <th class="p-5 text-left">Nombre</th>
                            <th class="p-5 text-left">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($usersArray as $user)
                        <tr class="bg-blue-200 lg:text-black">
                            <td class="p-5 font-medium capitalize">{{ $user['name']}}</td>
                            <td class="p-5">{{ $user['value']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
