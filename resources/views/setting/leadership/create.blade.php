<x-settings-layout>

    <div class="row">
        <div class="col-7">

            <x-card>
                <h3>New Leader</h3>
                <hr>
                <form method="post" action="{{ route('leadership.store') }}" enctype="multipart/form-data">
                    @csrf

@include('setting.leadership.leadershipfields')
                
                    <div class="form-group row mb-3">
                        <div class="col-9">

                        </div>

                        <div class="col-3">
                            <x-primary-button class="ml-3">
                                {{ __('Create Leader') }}
                            </x-primary-button>
                        </div>

                    </div>




                </form>
            </x-card>
        </div>
    </div>


</x-settings-layout>
