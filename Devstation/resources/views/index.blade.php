<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Company Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <br/><br/>
                    <table>
                    <thead>
                        <tr>
                            <th style="padding-right: 50px;">Name</th>
                            <th style="padding-right: 50px;">Department</th>
                            <th style="padding-right: 50px;">Is Department Manager</th>
                            <th style="padding-right: 50px;">Is User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td style="padding-right: 50px;">{{$user->name}}</td>
                            <td style="padding-right: 50px;">{{$user->department->name}}</td>
                            <td style="padding-right: 50px;">{{$user->is_manger}}</td>
                            <td style="padding-right: 50px;">{{$user->email}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
