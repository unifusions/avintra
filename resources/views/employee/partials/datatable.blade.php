<tbody>
    @foreach ($employees as $key => $employee)
        <tr class="align-middle">
            <th scope="row">{{ $employees->firstItem() + $key }}</th>
            <td>{!! $employee->emp_id !!}</td>
            <td>
               {{-- <img src="{{ asset('images/1.jpg' ) }}" alt="" width="40px" class="rounded-circle" --}}
               <img src="{{ asset('storage/employees/' . $employee->emp_id .'.jpg') }}" alt="" width="40px"
               height="40px" aria-hidden="true" preserveAspectRatio="xMidYMid slice"  class="rounded-circle"
               focusable="false" style=" object-fit: cover;">
            </td>
            <td>{!!  $employee->name !!}</td>
            <td>{{ $employee->phone_no }}</td>
            <td>{{ $employee->mobile_no }}</td>
            <td>{{ $employee->email }}</td>

            <td>
                <span class=""> {{ $employee->division->name ?? ''  }} </span><br>
                <span class="badge bg-secondary text-light">{{ $employee->section->name ?? '' }}</span>
            </td>
          


              

            <td>{{ $employee->date_of_birth->format('d-m-Y') }}</td>
            <td>{{ $employee->date_of_joining->format('d-m-Y') }}</td>
            <td>{{ $employee->date_of_retirement ??  $employee->date_of_retirment->format('d-m-Y') }}</td>

            <td class="text-right ">
                <div class="action-button-container d-flex justify-content-evenly">
                   
                    @can('update', $employee)
                    <x-edit-button href=" {{ route('employee.edit', $employee) }} " />
                    @endcan
                    @can('delete', $employee)
                        <x-delete-button :model="$employee" :modelId="$employee->id" :modelName="$employee->emp_id"
                            action=" {{ route('employee.destroy', $employee) }} " type="employee" />
                    @endcan
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
