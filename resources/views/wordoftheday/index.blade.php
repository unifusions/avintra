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
                @foreach ($words as $key => $wordoftheday)
                    <tr>
                        <th scope="row">{{ $words->firstItem() + $key }}</th>
                        <td>{{ $wordoftheday->word_date->format('d-m-y') }}</td>
                        <td>{{ $wordoftheday->word_english }}</td>
                        <td>{{ $wordoftheday->word_hindi }}</td>
                        <td>{{ $wordoftheday->word_tamil }}</td>
                        <td>{{ $wordoftheday->word_meaning }} </td>
                        <td>
                            <div>
                                <audio controls class="w-100">
                                    <source src="{{ asset('storage/' . $wordoftheday->word_audio_file) }}" type="audio/mp3">

                                    Your browser does not support the audio element.
                                </audio>

                            </div>
                        </td>

                        <td class="text-right">
                            <div class="d-flex justify-content-evenly">

                                @can('update', $wordoftheday)
                                    <x-edit-button href="{{ route('wordoftheday.edit', $wordoftheday) }}" class="" />
                                @endcan

                                @can('delete', $wordoftheday)
                               

                                    <x-delete-button :model="$wordoftheday" :modelId="$wordoftheday->id" :modelName="$wordoftheday->word_english"
                                        action=" {{ route('wordoftheday.destroy', $wordoftheday) }}" type="wordoftheday" />
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
