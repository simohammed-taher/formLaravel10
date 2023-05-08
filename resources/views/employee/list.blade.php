<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPLE LARAVEL 9 CRUD IN MOROCO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="bg-indigo-600 py-3">
        <div class="container mx-auto">
            <div class="text-white font-bold text-lg">SIMPLE LARAVEL 9 CRUD TAHER</div>
        </div>
    </div>

    <div class="container mx-auto my-5">
        <div class="flex justify-between items-center py-3">
            <div class="text-xl font-bold">Employees</div>
            <div>
                <a href="{{ route('employees.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
            </div>
        </div>

        @if (Session::has('success'))
            <div class="alert bg-green-500 text-white px-4 py-3 rounded">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="bg-white shadow-lg rounded-lg p-6">
            <table class="table-auto w-full">
                <tr class="border-b border-gray-200">
                    {{-- <th class="text-left px-4 py-2">ID</th> --}}
                    <th class="text-left px-4 py-2">Image</th>
                    <th class="text-left px-4 py-2">Name</th>
                    <th class="text-left px-4 py-2">Email</th>
                    <th class="text-left px-4 py-2">Address</th>
                    <th class="text-left px-4 py-2">Action</th>
                </tr>

                @if ($employees->isNotEmpty())
                    @foreach ($employees as $employee)
                        <tr valign="middle" class="border-b border-gray-200">
                            {{-- <td class="px-4 py-2">{{ $employee->id }}</td> --}}
                            <td class="px-4 py-2">
                                {{-- @if ($employee->image != '' && file_exists(public_path() . '/uploads/employees/' . $employee->image))
                                    <img src="{{ url('uploads/employees/' . $employee->image) }}" alt=""
                                        width="40" height="40" class="rounded-full">
                                @else
                                    <img src="{{ url('assets/images/no-image.png') }}" alt="" width="40"
                                        height="40" class="rounded-full">
                                @endif --}}
                                <img src="{{ $employee->image }}" alt="Employee Image" width="40" height="40"
                                    class="rounded-full" />
                            </td>
                            <td class="px-4 py-2">{{ $employee->name }}</td>
                            <td class="px-4 py-2">{{ $employee->email }}</td>
                            <td class="px-4 py-2">{{ $employee->address }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('employees.edit', $employee->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <a href="#" onclick="deleteEmployee({{ $employee->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</a>
                                <form id="employee-edit-action-{{ $employee->id }}"
                                    action="{{ route('employees.destroy', $employee->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="px-4 py-2 text-center">Record Not Found</td>
                    </tr>
                @endif

            </table>
        </div>

        <div class="mt-3">
            {{ $employees->links() }}
        </div>

    </div>
</body>

</html>
<script>
    function deleteEmployee(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('employee-edit-action-' + id).submit();
        }
    }
</script>
