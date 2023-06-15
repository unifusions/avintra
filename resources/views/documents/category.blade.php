<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Document Categories') }}
        </h2>
    </x-slot>



    @if (session('status') === 'profile-updated')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ __('Section has been created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-6">
            <x-card>
                <form method="POST" action="{{ route('documentsCategories.store') }}">
                    @csrf
                    @include('documents.partials.categoryfields')


                    <div class="form-group row  mb-3">
                        <div class="col-9">

                        </div>

                        <div class="col-3 ">
                            <x-primary-button class="ml-3">
                                {{ __('Create Category') }}
                            </x-primary-button>
                        </div>

                    </div>
                </form>

            </x-card>

        </div>

        <div class="col-6">

            @if (isset($documentsCategories))
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>

                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documentsCategories as $key => $category)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $category->category_title ?? '' }}</td>
                                <td>{{ $category->description ?? '' }}</td>

                                <td>
                                    <div class="action-button-container d-flex justify-content-evenly">
                                        <x-edit-button href=" {{ route('documentsCategories.edit', $category) }} " />
                                        <x-delete-button :model="$category" :modelId="$category->id" :modelName="$category->category_title"
                                            action="{{ route('documentsCategories.destroy', $category) }} "
                                            type="section" />

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @else
                <div>Create sections</div>
            @endif


        </div>


    </div>


</x-app-layout>
