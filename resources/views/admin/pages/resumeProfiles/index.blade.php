<x-admin-app-layout>
    <div class="p-10">
        <div class="flex justify-between">
            <div class="text-3xl font-semibold mb-4 text-gray-500">Resume Profiles</div>
            <div>
                <a class="bg-[#36568b] hover:bg-[#556e9c] text-white font-bold py-1 px-3 rounded-lg"
                    href="{{ route('admin.resume-profiles.create') }}">Create</a>
            </div>
        </div>
        <div class="overflow-y-auto max-w-full">
            <table id="resumeprofile-table" class="display">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#resumeprofile-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('admin.resume-profiles.index') }}',
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'photo',
                            name: 'photo',
                            render: function(data) {
                                var imagePath = data ? '{{ asset('storage/') }}/' + data :
                                    '{{ asset('admin/src/assets/images/pre.png') }}';
                                return '<img src="' + imagePath +
                                    '" alt="Profile Image" style="max-width: 50px; max-height: 50px; border-radius: 50%;">';
                            }
                        },
                        {
                            data: 'first_name',
                            name: 'first_name',
                        },
                        {
                            data: 'is_approved',
                            name: 'is_approved',
                            render: function(data, type, row) {
                                return `<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input id="resumeSwitch_${row.id}" type="checkbox" ${data == 1 ? 'checked' : ''} 
                                    onchange="toggleResumeProfileStatus(${row.id})" 
                                    class="h-3.5 w-8 appearance-none rounded-full bg-gray-400 transition-colors 
                                    before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 
                                    before:rounded-full before:bg-transparent before:content-[''] 
                                    after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 
                                    after:w-5 after:rounded-full after:bg-gray-300 after:shadow-md 
                                    after:transition-transform checked:bg-[#4361EE] 
                                    checked:after:translate-x-4 checked:after:bg-[#4361EE] 
                                    hover:cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4361EE]">
                                </div>`;
                            }
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                        }
                    ]
                });
            });

            function toggleResumeProfileStatus(id) {
                const route = '{{ route('admin.resume.profile.toggle.status', ':id') }}'.replace(':id', id);
                toggleStatus(route, id, 'resumeSwitch');
            }
        </script>
    @endpush
</x-admin-app-layout>
