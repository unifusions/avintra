<x-app-layout>
     <x-slot name="header">
          <h2 class="">
              {{ __('Employees') }}
          </h2>
  
          <div class="ms-3">
              {{-- <x-hyperlinkbutton href="{{ route('employee.create') }}">New Employee</x-hyperlinkbutton> --}}
          </div>
     </x-slot>

          <x-card>
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col" width="2%">#</th>
                           <th scope="col" width ="5%">Emp ID </th>
                           <th scope="col" width = "5%">Photo </th>
                           <th scope="col" width="10%">Employee Name</th>
                           <th scope="col" width="8%">Phone No</th>
                           <th scope="col" width="8%">Personal No</th>
                           <th scope="col" width="8%">Email</th>
                         <th scope="col" width="10%">Division & Section</th>
                           <th scope="col" width="8%">DOB</th>
                           <th scope="col" width="8%">DOJ</th>
                           <th scope="col" width="8%">DOR</th>
                     
                           <th scope="col" width="3%">Actions</th>
       
                       </tr>
                   </thead>
       
                   <tbody>
                    @include('employee.partials.datatable')

                   </tbody>
       
       
       
       
       
                   <tfoot>
       
                   </tfoot>
               </table>
       
               <div class="mt-3">
                   {{ $employees->links() }}
               </div>
           </x-card>
       
       
     
</x-app-layout>