<x-guest-layout>

     <x-page-header>
          <x-slot:heading>  {{ __('Directory') }} </x-slot:heading>
          <div class="col-lg-12">
              <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                      <li><a href="{{ route('home') }}">Home</a> </li>
                      <li class="active">Directory</li>
                  </ul>
              </div>
          </div>
      </x-page-header>

      <div class="container my-5">
        <div class="row gx-xl-5">
            <div class="col-lg-4"> <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Directory"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width=20>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg></button>
                </div>
            </form></div>
            <div class="col-lg-6"></div>
            <div class="col-lg-12">


               

                <div class="">

                    <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Division</th>
                            <th scope="col">Section</th>
                            
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>IT</td>
                            <td>Accounting</td>

                            <td>+91 123456789</td>
                            <td>demo@email.com</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>IT</td>
                            <td>Accounting</td>

                            <td>+91 123456789</td>
                            <td>demo@email.com</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>IT</td>
                            <td>Accounting</td>

                            <td>+91 123456789</td>
                            <td>demo@email.com</td>
                          </tr>
                        </tbody>
                      </table>





                </div>

              
            </div>

            {{-- <div class="col-lg-4 col-md-8">
                <div class="">
                    <div class="">
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Directory"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width=20>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget border-bottom">
                        <h4 class="sidebar-title">Divisions</h4>
                        <ul class="list-style-none">
                            @foreach ($divisions as $division)
                                
                                    <li><a href="">{{ $division->name }}<span
                                                class="float-end">{{ count($division->documents) }}</span></a></li>
                                             
                                @endforeach


                        </ul>
                    </div>

                    <div class="sidebar-widget border-bottom">
                        <h4 class="sidebar-title">Sections</h4>
                        <ul class>
                            @foreach ($sections as $section)
                             
                                    <li><a href="">{{ $section->name }}<span
                                                class="float-end">{{ count($section->documents) }}</span></a></li>
                          
                            @endforeach


                        </ul>
                    </div>



                </div>
            </div> --}}


        </div>






    </div>


      
</x-guest-layout>