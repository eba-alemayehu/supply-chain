<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="shadow-box" style="padding: 2em 1.5em; width: 420px">
                        <h2 style="text-align: center; margin-bottom: 1.2em">Add material</h2>
                        <form method="POST" action="/materials">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" id="name" type="text" name="name" :value="old('name')" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Measurement unit" id="measurement_unit" type="text" name="measurement_unit" :value="old('measurement_unit')">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Unit price" id="unit_price" type="number" name="unit_price" :value="old('unit_price')">
                                </div>

                                <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD MATERIAL">
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
