<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Complaints') }}
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
                            <th style="padding-right: 50px;">Comp Num.</th>
                            <th style="padding-right: 50px;">Title</th>
                            <th style="padding-right: 50px;">Department</th>
                            <th style="padding-right: 50px;">Employee Name</th>
                            <th style="padding-right: 50px;">Against Employee </th>
                            <th style="padding-right: 50px;">Text</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($complaints as $complaint)
                        <tr>
                            <td style="padding-right: 50px;">{{$complaint->id}}</td>
                            <td style="padding-right: 50px;">{{$complaint->title}}</td>
                            <td style="padding-right: 50px;">{{$complaint->department->name}}</td>
                            <td style="padding-right: 50px;">{{$complaint->empname}}</td>
                            <td style="padding-right: 50px;">{{$complaint->compname}}</td>
                            <td style="padding-right: 50px;">{{$complaint->comp_text}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
</x-app-layout>
