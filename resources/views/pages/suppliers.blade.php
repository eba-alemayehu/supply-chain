<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex" style="flex-flow: row-reverse; margin: 1em">
        <a href="/suppliers/create"><button class="btn btn-primary">ADD SUPPLIER</button></a>
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
                            <th scope="col">Location</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Supplier::orderBy('created_at')->get() as $supplier)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->location}}</td>
                                <td>
                                    <form method="post" action="/suppliers/{{$supplier->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-default" value="delete">
                                    </form>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$supplier->id}}">
                                        Add user
                                    </button>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="modal{{$supplier->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul>
                                                    @foreach($supplier->users()->get() as $user)
                                                        <li>{{$user->name}}</li>
                                                    @endforeach
                                                </ul>


                                                <form method="POST" action="/supplier users">
                                                    @csrf
                                                    <input hidden name="supplier_id" value="{{$supplier->id}}"/>
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Enter user email" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">ADD</button>
                                                    </fieldset>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
