<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('News Category') }}
        </h2>
       
    </x-slot>

    <livewire:news-category />
    
        {{-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Publish Date</th>


                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($news as $key => $n)
                    <tr>
                        <th scope="row">{{ $news->firstItem() + $key }}</th>
                        <td> {{ $n->news_title }} </td>
                        <td> {{ $n->news_category->category_title }} </td>
                        <td>{{ $n->created_at->format('d/m/y, h:m') }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="mt-3">
            {{ $news->links() }}
        </div> --}}
    


@livewireScripts()

</x-app-layout>
