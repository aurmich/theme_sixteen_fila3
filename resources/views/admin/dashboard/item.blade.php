<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<!-- dashboard item -->
=======
notify
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
<!-- dashboard item -->
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
{{--
<div class="col-4">
    <x-card>
        <x-slot name="title">chart blade</x-slot>
        <x-slot name="txt">
            <x-chart url=""></x-chart>
        </x-slot>
    </x-card>
</div>
--}}
{{-- <div class="col-4">
    <x-card>
        <x-slot name="title">Cms</x-slot>
        <x-slot name="txt">
            
            <livewire:graph url="/api/xxx/answers" id="graph1"></livewire:graph>

            <x-graph url="/api/xxx/answers" id="graph1"></x-graph>
           
        </x-slot>
    </x-card>
</div> --}}
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
<!-- dashboard item -->
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
<!-- dashboard item -->
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
<!-- dashboard item -->
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
=======
<!-- Example DataTable for Dashboard Demo-->
<div class="card mb-4">
    <div class="card-header">Personnel Management</div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID<br />Handle</th>
                    <th>First Name<br />LastName</th>
                    <th>last </th>
                    {{-- <th>Actions <div class="badge bg-primary text-white rounded-pill">Full-time</div></th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($_theme->lastLoggedUsers(10) as $user)
                    <tr>
                        <td>{{ $user->id }}<br />{{ $user->handle }}</td>
                        <td>{{ $user->first_name }}<br />{{ $user->last_name }}</td>
                        <td>{{ $user->last_login_at }}<br />
                            {{ $user->last_login_ip }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
>>>>>>> dbd8492a9c (Squashed 'laravel/Modules/AI/' content from commit e3f9fcc723)
