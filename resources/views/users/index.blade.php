<x-app-layout>
     <x-slot name="header">
          <h2 class="">
              {{ __('Users') }}
          </h2>
  
          <div class="ms-3">
              <x-hyperlinkbutton href="{{ route('user.create') }}">Add New User</x-hyperlinkbutton>
          </div>
      </x-slot>

      <x-card>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created on</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($users as $key => $user)
                
                @if(!$user->isAdmin) 
                    <tr>
                        <th scope="row">{{ $users->firstItem() + $key }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class=""> {{ $user->division->name }} </span>
                            
                        </td>
                       
                        
                        <td>{{ $user->created_at->format('d/m/y, h:m') }}</td>
                        <td>
                            <div class="d-flex justify-content-evenly">
                                
                                <x-edit-button href=" {{ route('user.edit', $user) }} " />
                                <x-delete-button href=" {{ route('user.destroy', $user) }} " />
                               
                           
                            </div>

                        </td>
                    </tr>
                    @endif
                @endforeach

            </tbody>

            <tfoot>

            </tfoot>
        </table>

        <div class="mt-3">
            {{ $users->links() }}
        </div>
    </x-card>
</x-app-layout>