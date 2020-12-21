<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex" style="flex-flow: row-reverse; margin: 1em">
        <a href="/materials/create"><button class="btn btn-primary">ADD MATERIAL</button></a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Measurement</th>
                            <th scope="col">Unit price</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Quality::orderBy('created_at')->get() as $material)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$material->name}}</td>

                                <td>
                                    <form method="post" action="/materials/{{$material->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-default" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
