<div class="section-heading d-flex justify-content-between align-items-center mb-3">
    <div class="d-flex align-items-center">
        <div class="heading-icon me-2 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="#fff"  width=30>
               <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
            </svg>  
        </div>
        <h3 class="section-heading"> {{ __('Documents') }}</h3>       
    </div>

    <div>
        <x-hyperlinkbutton href="{{ route('publicdocuments') }}" class="" :outline="true" >
            All Documents  
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" width="20">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
              </svg>
        </x-hyperlinkbutton>
    </div>
</div>


<div class="news-container">
    <div class="news-container-smalllist">

        <div class="news-smalllist-wrapper">
            @if(count($documents)> 0)
            @foreach ($documents as $document)
                <div class="news-item">
                    <div class="news-itemin">
                        <div class="news-title d-flex gap-3 align-items-center">

                            <div>
                              

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#94701D" height="30">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                 </svg>

                           
                                 
                            </div>

                            <div class="flex-grow-1">
                              <div class="document-title">
                                   <a href="{{ route('documents.single',$document) }}" target="_blank">
                                        {{ $document->title }}
        
                                   </a>
        
                              </div>
                              <div class="small">
                                    {{ $document->division->name ?? "" }}  | {{  $document->section->name ?? "" }}
                              </div>

                            </div>
                            
                     

                         <div>
                              <span class="text-right">
                                   {{ $document->created_at->format('d/m') }}
                               </span>
                         </div>
                            

                        </div>


                    </div>
                </div>
            @endforeach
                @else
                Publish your first document to get preview
                @endif





        </div>
    </div>
</div>
