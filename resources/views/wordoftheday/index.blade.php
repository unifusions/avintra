<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __(' Word of the Day') }}
        </h2>

        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('wordoftheday.create') }}">New Word</x-hyperlinkbutton>
        </div>
    </x-slot>



    <x-card>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="2%">#</th>
                    <th scope="col" width="10%">Date</th>
                    <th scope="col" width="15%">Word of the day</th>
                    <th scope="col" width="15%">Hindi</th>
                    <th scope="col" width="15%">Tamil</th>
                    <th scope="col" width="15%">Meaning</th>
                    <th scope="col" width="12">Audio File</th>
                    <th scope="col" width="3%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($words as $key => $word)
                    <tr>
                        <th scope="row">{{ $words->firstItem() + $key }}</th>
                        <td>{{ $word->created_at->format('d-m-y') }}</td>
                        <td>{{ $word->word_english }}</td>
                        <td>{{ $word->word_hindi }}</td>
                        <td>{{ $word->word_tamil }}</td>
                        <td>{{ $word->word_meaning }} </td>
                        <td>
                            <div>
                                <audio controls class="w-100">
                                    <source src="{{ asset('storage/' . $word->word_audio_file) }}" type="audio/mp3">

                                    Your browser does not support the audio element.
                                </audio>

                            </div>
                        </td>

                        <td class="text-right">
                            <div class="d-flex justify-content-evenly">

                                @can('update', $word)
                                    <x-edit-button href="{{ route('wordoftheday.edit', $word) }}" class="" />
                                @endcan

                                @can('delete', $word)
                                    <x-delete-button :model="$word" :modelId="$word->id" :modelName="$word->word_english"
                                        href="{{ route('wordoftheday.destroy', $word) }}" type="word" />
                                @endcan
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
