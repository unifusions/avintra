<x-app-layout>
     <x-slot name="header">
          <h2 class="">
              {{ __(' Word of the Day') }}
          </h2>
      </x-slot>

     
    
      <x-card>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Word of the day</th>
                    <th scope="col">Hindi</th>
                    <th scope="col">Tamil</th>
                    <th scope="col">Audio File</td>
                    <th scope="col">Word for the day</th>
                  

                    <th scope="col" class="text-right">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($words as $key => $word)
                    <tr>
                        <th scope="row">{{ $words->firstItem() + $key }}</th>
                        <td>{{ $word->word_english }}</td>
                        <td>{{ $word->word_hindi }}</td>
                        <td>{{ $word->word_tamil }}</td>
                        <td></td>
                        <td>{{ $word->created_at->format('d/M/y') }}</td>
                        <td  class="text-right">
                            <div class="d-flex justify-content-evenly">
                                
                                <x-view-button href="{{ route('wordoftheday.show', $word) }}" class=""/>

                                <x-edit-button href="{{ route('wordoftheday.edit', $word) }}" class=""/>
                                
                                <x-delete-button href="{{ route('wordoftheday.destroy', $word) }}" class=""/>
                                
                           
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>

            <tfoot>

            </tfoot>
        </table>

        <div class="mt-3">
            {{ $words->links() }}
        </div>
    </x-card>


</x-app-layout>