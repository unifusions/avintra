<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('News & Announcements') }}
        </h2>
        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('news.create') }}">Add News</x-hyperlinkbutton>
        </div>
    </x-slot>

    <x-card>
        <table class="table">
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
                        <td>
                            <div class="action-button-container d-flex justify-content-evenly">
                                <x-view-button href=" {{ route('singlenews', $n) }} " />
                                <x-edit-button href=" {{ route('news.edit', $n) }} " />
                                <x-delete-button :model="$n" :modelId="$n->id" :modelName="$n->title" action="{{ route('news.destroy', $n) }} " type="news" />
                                
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="mt-3">
            {{ $news->links() }}
        </div>
    </x-card>





</x-app-layout>
